<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "Atechnologies");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch blogs from the database
$sql = "SELECT * FROM blogs ORDER BY created_at DESC LIMIT 10";
$result = $conn->query($sql);

// Initialize a variable to track form visibility
$formVisible = false;

// Admin password
$admin_password = "123456789";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $password = $_POST['password'];
    $title = $_POST['title'] ?? '';
    $content = $_POST['content'] ?? '';
    $image_url = $_POST['image_url'] ?? '';

    if ($password === $admin_password) {
        $formVisible = true; // Set visibility to true for the form

        if (!empty($title) && !empty($content)) {
            $stmt = $conn->prepare("INSERT INTO blogs (title, content, image_url) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $title, $content, $image_url);

            if ($stmt->execute()) {
                echo "<script>alert('Blog added successfully!');</script>";
                echo '<meta http-equiv="refresh" content="2">';
                exit();
            } else {
                echo "<script>alert('Error: " . $stmt->error . "');</script>";
            }
        }
    } else {
        echo "<script>alert('Invalid password!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Blog Page</title>
    <link rel="shortcut icon" href="./image/logo.jpeg" type="image/x-icon">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
        }

        .navbar {
            background-color: #333;
            color: white;
            padding: 10px 20px;
            text-align: center;
        }

        .main {
            position: relative;
            top: 60px;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .image {
            width: 100%;
            height: 60vh;
        }

        .title {
            font-size: 24px;
            font-weight: bold;
            padding: 15px 20px 0;
            color: #333;
        }

        .content {
            font-size: 16px;
            line-height: 1.6;
            padding: 10px 20px;
            color: #555;
        }

        .password-form {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding-right: 50px;
        }

        .password-form input,
        .password-form button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .password-form button {
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }

        .password-form button:hover {
            background-color: #0056b3;
        }

        .add-blog-form {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding-right: 50px;
            opacity: 0;
            transform: translateY(20px);
            display: none; /* Hide the form initially */
            transition: opacity 1s ease, transform 1s ease;
        }

        .add-blog-form.visible {
            display: block; /* Show the form */
            opacity: 1;
            transform: translateY(0);
        }

        .add-blog-form input,
        .add-blog-form textarea,
        .add-blog-form button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .add-blog-form button {
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }

        .add-blog-form button:hover {
            background-color: #0056b3;
        }
    </style>
    <script>
        function showForm() {
            const form = document.querySelector('.add-blog-form');
            form.style.display = 'block'; // Ensure form takes up space
            setTimeout(() => {
                form.classList.add('visible'); // Trigger visibility with transition
            }, 50); // Slight delay to apply transition effect
        }
    </script>
</head>
<body>
    <?php include "nav.php"; ?>

    <div class="main">
        <?php if ($result->num_rows > 0): ?>
            <?php while ($row = $result->fetch_assoc()): ?>
                <div class="container">
                    <img src="<?php echo htmlspecialchars($row['image_url']); ?>" alt="Blog Image" class="image">
                    <h2 class="title"><?php echo htmlspecialchars($row['title']); ?></h2>
                    <p class="content"><?php echo nl2br(htmlspecialchars($row['content'])); ?></p>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p>No blogs available.</p>
        <?php endif; ?>
    </div>

    <div class="password-form">
        <h2>Admin - Password Required to Add a Blog:</h2>
        <form method="POST">
            <input type="password" name="password" placeholder="Enter Admin Password" required>
            <button type="button" onclick="showForm()">Validate</button>
        </form>
    </div>

    <div class="add-blog-form <?php echo $formVisible ? 'visible' : ''; ?>">
        <h2>Add a New Blog</h2>
        <form method="POST">
            <input type="hidden" name="password" value="<?php echo $admin_password; ?>">
            <input type="text" name="title" placeholder="Enter Blog Title" required>
            <textarea name="content" placeholder="Enter Blog Content" required></textarea>
            <input type="text" name="image_url" placeholder="Enter Image URL">
            <button type="submit">Add Blog</button>
        </form>
    </div>

    <?php include "footer.php"; ?>
</body>
</html>

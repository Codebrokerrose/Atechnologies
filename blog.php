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

        
    </style>
   
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
<br><br>
  
    <?php include "footer.php"; ?>
</body>
</html>

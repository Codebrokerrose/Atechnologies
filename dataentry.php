<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "Atechnologies");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Admin password
$admin_password = "123456789";

// Initialize a variable to track form visibility
$formVisible = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $password = $_POST['password'];
    $entry_type = $_POST['entry_type'] ?? '';
    $title = $_POST['title'] ?? '';
    $content = $_POST['content'] ?? '';
    $image_url = $_POST['image_url'] ?? '';
    $video_url = $_POST['video_url'] ?? '';

    if ($password === $admin_password) {
        $formVisible = true; // Set visibility to true for the form

        if (!empty($title) && !empty($content)) {
            if ($entry_type === 'blog') {
                $stmt = $conn->prepare("INSERT INTO blogs (title, content, image_url) VALUES (?, ?, ?)");
                $stmt->bind_param("sss", $title, $content, $image_url);
            } elseif ($entry_type === 'video') {
                $stmt = $conn->prepare("INSERT INTO work (title, content, video_url) VALUES (?, ?, ?)");
                $stmt->bind_param("sss", $title, $content, $video_url);
            }

            if ($stmt->execute()) {
                echo "<script>alert('Entry added successfully!');</script>";
                echo '<meta http-equiv="refresh" content="2">';
            } else {
                echo "<script>alert('Error: " . $stmt->error . "');</script>";
            }
        }
    } else {
        echo "<script>alert('Invalid password!');</script>";
    }
}
?>
<style>
    .password-form, .add-entry-form {
        max-width: 800px;
        margin: 50px auto;
        padding: 20px;
        background: white;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .password-form input, .add-entry-form input, .add-entry-form textarea, .password-form button, .add-entry-form button, .add-entry-form select {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .password-form button, .add-entry-form button {
        background-color: #007bff;
        color: white;
        border: none;
        cursor: pointer;
    }

    .password-form button:hover, .add-entry-form button:hover {
        background-color: #0056b3;
    }

    .add-entry-form {
        display: none; /* Hide the form initially */
    }

    .add-entry-form.visible {
        display: block; /* Show the form */
    }
</style>
<script>
    function showForm() {
        document.querySelector('.add-entry-form').classList.add('visible');
    }

    function toggleFields() {
        const entryType = document.querySelector('#entry_type').value;
        document.querySelector('#image_fields').style.display = entryType === 'blog' ? 'block' : 'none';
        document.querySelector('#video_fields').style.display = entryType === 'video' ? 'block' : 'none';
    }
</script>
<?php include "nav.php"; ?>
<br><br><br>
<div class="password-form">
    <h2>Admin - Password Required:</h2>
    <form method="POST">
        <input type="password" name="password" placeholder="Enter Admin Password" required>
        <button type="button" onclick="showForm()">Validate</button>
    </form>
</div>

<div class="add-entry-form <?php echo $formVisible ? 'visible' : ''; ?>">
    <h2>Add a New Entry</h2>
    <form method="POST">
        <input type="hidden" name="password" value="<?php echo $admin_password; ?>">
        <select name="entry_type" id="entry_type" onchange="toggleFields()" required>
            <option value="" disabled selected>Select Entry Type</option>
            <option value="blog">Blog</option>
            <option value="video">Video</option>
        </select>
        <input type="text" name="title" placeholder="Enter Title" required>
        <textarea name="content" placeholder="Enter Content" required></textarea>
        <div id="image_fields" style="display: none;">
            <input type="text" name="image_url" placeholder="Enter Image URL">
        </div>
        <div id="video_fields" style="display: none;">
            <input type="text" name="video_url" placeholder="Enter Video URL">
        </div>
        <button type="submit">Add Entry</button>
    </form>
</div>
<?php include "footer.php"; ?>

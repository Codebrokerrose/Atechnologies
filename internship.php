<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "Atechnologies");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch videos from the database
$sql = "SELECT id, title, content, video_url FROM work";
$result = $conn->query($sql);

// Initialize a variable to track form visibility
$formVisible = false;

// Admin password
$admin_password = "123456789";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $password = $_POST['password'];
    $title = $_POST['title'] ?? '';
    $content = $_POST['content'] ?? '';
    $video_url = $_POST['video_url'] ?? '';

    if ($password === $admin_password) {
        $formVisible = true; // Set visibility to true for the form

        if (!empty($title) && !empty($content)) {
            $stmt = $conn->prepare("INSERT INTO work (title, content, video_url) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $title, $content, $video_url);

            if ($stmt->execute()) {
                echo "<script>alert('Video added successfully!');</script>";
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internships</title>
    <link rel="shortcut icon" href="./image/logo.jpeg" type="image/x-icon">
    <style>
        /* General Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: rgb(240, 245, 250);
            line-height: 1.6;
        }
        .outer {
            position: relative;
            top: 80px;
        }
        .container {
            width: 90%;
            margin: 20px auto;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .small-img-row {
            display: flex;
            align-items: center;
            background-color: rgb(7, 109, 156);
            padding: 10px;
            border-radius: 6px;
            overflow: hidden;
            max-width: 100%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .small-img {
            position: relative;
            flex-basis: 30%;
        }

        .small-img img {
            width: 100%;
            height: auto;
            border-radius: 6px;
        }

        .play-btn {
            width: 60px; /* Reduce the width */
            height: 60px; /* Reduce the height */
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            cursor: pointer;
        }

        .small-img .play-btn {
            width: 100px; /* Adjust size for small images */
            height: 100px;
        }

        .play-btn:hover {
            transform: translate(-50%, -50%) scale(1.2);
        }

        .small-img-row p {
            margin-left: 20px;
            color: rgb(250, 255, 255);
            font-size: 14px;
            flex-basis: 70%;
        }

        /* Video Player */
        .video-player {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 90%;
            max-width: 800px;
            display: none;
            z-index: 1000;
            background: #000;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .video-player video {
            width: 100%;
            display: block;
        }

        .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            width: 30px;
            cursor: pointer;
            transition: transform 0.3s;
        }

        .close-btn:hover {
            transform: scale(1.2);
        }

        /* Form Styles */
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

        .add-video-form {
            max-width: 700px;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            opacity: 0;
            transform: translateY(20px);
            display: none; /* Hide the form initially */
            transition: opacity 1s ease, transform 1s ease;
        }

        .add-video-form.visible {
            display: block;
            opacity: 1;
            transform: translateY(0);
        }

        .add-video-form input,
        .add-video-form textarea,
        .add-video-form button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .add-video-form button {
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }

        .add-video-form button:hover {
            background-color: #0056b3;
        }
    </style>
    <script>
        function showForm() {
            const form = document.querySelector('.add-video-form');
            form.style.display = 'block';
            setTimeout(() => {
                form.classList.add('visible');
            }, 50); // Slight delay to apply transition effect
        }
    </script>
</head>
<body>

    <?php
    include "nav.php";
    ?>

    <div class="outer">
        <div class="container">
            <div class="row">
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '
                        <div class="small-img-row">
                            <div class="small-img">
                                <img src="https://myviewboard.com/blog/wp-content/uploads/2020/07/Self-Study-with-Video-Assisted-Learning-scaled.jpg" alt="' . htmlspecialchars($row["title"]) . '">
                                <img src="button.png" class="play-btn" onclick="playVideo(\'' . htmlspecialchars($row["video_url"]) . '\')">
                            </div>
                            <p>
                                <b>' . htmlspecialchars($row["title"]) . ':</b> ' . htmlspecialchars($row["content"]) . '
                            </p>
                        </div>';
                    }
                } else {
                    echo "No videos found.";
                }
                ?>
            </div>
        </div>

        <div class="video-player" id="videoPlayer">
            <video controls autoplay muted id="myVideo">
                <source id="videoSource" src="" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <img src="cross.png" class="close-btn" alt="Close" onclick="stopVideo()">
        </div>

         <script>
            const videoPlayer = document.getElementById('videoPlayer');
            const myVideo = document.getElementById('myVideo');
            const videoSource = document.getElementById('videoSource');

            function playVideo(file) {
                if (!file) {
                    alert("Video file not found!");
                    return;
                }

                // Set the video source and show the player
                videoSource.src = file;
                myVideo.load();
                videoPlayer.style.display = 'block';
            }

            function stopVideo() {
                videoPlayer.style.display = 'none';
                myVideo.pause();
                myVideo.currentTime = 0; // Reset video to start
            }
        </script>



        <div class="password-form">
            <h2>Admin - Password Required to Add a Video:</h2>
            <form method="POST">
                <input type="password" name="password" placeholder="Enter Admin Password" required>
                <button type="button" onclick="showForm()">Validate</button>
            </form>
        </div>

        <div class="add-video-form <?php echo $formVisible ? 'visible' : ''; ?>">
            <h2>Add a New Work Video</h2>
            <form method="POST">
                <input type="hidden" name="password" value="<?php echo $admin_password; ?>">
                <input type="text" name="title" placeholder="Enter Video Title" required>
                <textarea name="content" placeholder="Enter Video Description" required></textarea>
                <input type="text" name="video_url" placeholder="Enter video URL">
                <button type="submit">Add Video</button>
            </form>
        </div>
    </div>

    <?php
    $conn->close();
    ?>
</body>
</html>

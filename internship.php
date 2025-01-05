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

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            text-align: center;
        }
        .pdf-container {
            margin: 20px auto;
            width: 80%;
            height: 500px;
            border: 1px solid #ccc;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .download-btn {
            margin: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            display: inline-block;
        }
        .download-btn:hover {
            background-color: #0056b3;
        }

        
    </style>
    
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
                                <img src="./image/button.png" class="play-btn" onclick="playVideo(\'' . htmlspecialchars($row["video_url"]) . '\')">
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
            <img src="./image/cross.png" class="close-btn" alt="Close" onclick="stopVideo()">
        </div>

        <h1>View and Download Our Brochure</h1>
    
    

    <!-- Embed PDF Viewer -->
    <div class="pdf-container">
        <iframe 
            src="./image/Brochure.pdf" 
            width="100%" 
            height="100%" 
            style="border: none;"
        ></iframe>
    </div>

    <!-- Download PDF Button -->
    <a href="./image/Brochure.pdf" class="download-btn" download>Download Our Brochure</a>
       

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

        <?php
    include "galary.php";
    ?>

<?php
include "footer.php";
?>

    <?php
    $conn->close();
    ?>
</body>
</html>

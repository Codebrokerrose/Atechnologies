<?php
    include "database.php";
       
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <!-- <link rel="stylesheet" href="link4.css"> -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .navbar {
            background-color: #0875c7;
            padding: 10px;
            color: white;
            text-align: center;
        }

        .contact-form {
            max-width: 500px;
            margin: 30px auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .contact-form h2 {
            margin-bottom: 20px;
            text-align: center;
        }

        .contact-form input,
        .contact-form textarea {
            width: 95%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .contact-form textarea {
            height: 100px;
        }

        .contact-form button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .contact-form button:hover {
            background-color: #0056b3;
        }

        .message {
            text-align: center;
            margin-top: 20px;
        }

        .message.success {
            color: green;
        }

        .message.error {
            color: red;
        }

        .map-container {
            position: relative;
            width: 80%;
            padding-top: 33.25%; /* Aspect ratio 16:9 */
            margin: 20px auto;
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .responsive-iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0;
        }
    </style>
</head>
<body>
    <!-- <div class="navbar">
        <h1>Contact Us</h1>
    </div> -->

    <div style="display:flex; ">
    <div class="contact-form">
        <h2>College Contact Form</h2>
        <form method="POST" action="">
            <input type="text" name="name" placeholder="Enter your College name" required>
            <input type="email" name="email" placeholder="Enter your College email" required>
            <textarea name="message" placeholder="Enter your message" required></textarea>
            <button type="submit" name="submit">Send</button>
        </form>

        <div class="message">
            <?php
            if (isset($success)) {
                echo "<p class='success'>$success</p>";
            }
            if (isset($error)) {
                echo "<p class='error'>$error</p>";
            }
            ?>
        </div>
    </div>

    <div class="contact-form">
        <h2>Send a Message</h2>
        <form method="POST" action="">
            <input type="text" name="name" placeholder="Enter your name" required>
            <input type="email" name="email" placeholder="Enter your email" required>
            <textarea name="message" placeholder="Enter your message" required></textarea>
            <button type="submit" name="submit">Send</button>
        </form>

        <div class="message">
            <?php
            if (isset($success)) {
                echo "<p class='success'>$success</p>";
            }
            if (isset($error)) {
                echo "<p class='error'>$error</p>";
            }
            ?>
        </div>
    </div>
        </div>

    <div class="map-container">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3687.1891047680265!2d88.31944817434962!3d22.459526937106975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a027b13f86977c5%3A0x2d4697cb923316c6!2sA%20Technologies!5e0!3m2!1sen!2sin!4v1732813514879!5m2!1sen!2sin"
            class="responsive-iframe"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>

    <?php
    include "attachedpeople.php"; 
    ?>
</body>
</html>

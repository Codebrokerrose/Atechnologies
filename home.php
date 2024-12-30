<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="footer_link.css"> -->
    <style>
        html{
            width:100%;
        }
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .list-item {
            list-style: none;
        }

        .image {
            width: 60px;
            height: 60px;
        }

        .rounded-logo {
            border-radius: 40px;
        }

        .nav-button {
            border-radius: 20px;
            height: 30px;
            width: 80px;
            font-size: medium;
            background-color: wheat;
            color: #194186;
            font-weight: bold;
        }

        

        .icon {
            margin: 0 15px;
        }

       
        .background-section {
            position: relative;
            height: 600px;
        }

        .background-video-container {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            overflow: hidden;
            z-index: -1;
            /* opacity: 0.7; */
        }

        .background-video {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            min-width: 100%;
            min-height: 100%;
        }

        .background-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            /* text-align: center; */
            color: white;
        }

        .background-title {
            font-size: 50px;
            margin-bottom: 20px;
            font-weight: bolder;
        }

        .purpose-section {
            background-color: white;
            padding: 50px 20px;
        }

        .purpose-title {
            text-align: center;
            font-size: 50px;
            text-shadow: 0px 0px 6px rgb(38, 137, 194);
            color: rgba(14, 13, 13, 0.658);
            margin-bottom: 20px;
        }

       .image-container {
        display: flex;
        justify-content: center;
        gap: 30px;
        flex-wrap: wrap;
        margin-top: 30px;
        margin-bottom: 30px;
    }

    .purpose-item {
        text-align: center;
        flex: 1;
        max-width: 300px;
        margin: 10px;
        box-sizing: border-box;
        
    }

    .purpose-image {
        width: 100%;
        height: 75%;
        border-radius: 20px;
        margin-bottom: 20px;
    }

    .purpose-title-item {
        font-size: 20px;
        color: rgb(136, 127, 127);
        margin-top: 10px;
    }

    .description{
        margin-top: 10px;
        color: rgb(88, 84, 84);
        line-height: 1.8;
    }

        .purpose-description {
            text-align: center;
            font-size: 30px;
            color: rgb(136, 127, 127);
            margin: 30px auto;
        }

        .purpose-underline {
            width: 300px;
            margin: 0 auto;
            font-weight: bold;
        }

        .story-button {
            width: 175px;
            height: 60px;
            border-radius: 15px;
            /* color: #0a3075; */
            color: white;
            text-shadow: 0px 0px 5px black;
            font-size: 25px;
            box-shadow: 0px 0px 10px black;
            background-color: transparent;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            cursor: pointer;
        }

        .logo-large {
            border-radius: 70px;
            width: 120px;
            height: 120px;
            margin: 0 auto;
        }

        .sector-section {
            background-color: #F5F5F5;
            padding: 50px 20px;
            padding-bottom:0px;
        }

        .sector-title {
            text-align: center;
            font-size: 50px;
            text-shadow: 0px 0px 6px rgb(38, 137, 194);
            color: rgba(14, 13, 13, 0.658);
        }

        .sector-image {
            width: 150px;
            height: 150px;
            margin: 20px;
            border-radius: 500px;
            box-shadow: 0px 0px 30px rgb(166, 166, 248);
        }
        /* Responsive Styles */
    @media (max-width: 768px) {
        .image-container {
            flex-direction: column;
            align-items: center;
        }

        .purpose-item {
            max-width: 90%;
            margin: 20px auto;
        }
    }
    </style>
      <link rel="shortcut icon" href="./image/logo.jpeg" type="image/x-icon">
</head>
<body>
  <?php
    include 'nav.php';
  ?>

    <section class="background-section">
        <div class="background-video-container">
            <video autoplay loop muted class="background-video">
                <source src="./image/video1.mp4" type="video/mp4">
                 <!-- <source src="./image/video2.mp4" type="video/mp4" > -->
            </video>
        </div>
        <div class="background-content">
            <img src="./image/logo.jpeg" class="logo-large"><br><br>
            <h1 class="background-title">WELCOME TO <br> ATECHNOLOGIES</h1>
            <p>We are a leading technology company that provides high-quality solutions for businesses .</p> <br>
            <button class="story-button" onclick="window.location.href='about.php'">OUR STORY</button>
        </div>
    </section>
    <?php
    include "container.php";
    ?>
    <div class="purpose-section">
    <h1 class="purpose-title">OUR UNDERTAKINGS</h1>
    <hr class="purpose-underline">
    <div class="image-container">
        <div class="purpose-item">
            <img src="https://img.freepik.com/free-vector/website-development-banner_33099-1687.jpg" class="purpose-image">
            <h2 class="purpose-title-item">Web Development</h2>
            <h4 class="description">We create robust and performant web applications capable of anything</h4>
        </div>
        <div class="purpose-item">
            <img src="https://www.tripwire.com/sites/default/files/2022-10/mobile-app-development_0.jpg" class="purpose-image">
            <h2 class="purpose-title-item">Mobile App Design</h2>
            <h4 class="description">We develop quality apps for iOS and android with an iterative, agile process</h4>
        </div>
        <div class="purpose-item">
            <img src="https://cdn.prod.website-files.com/5f2b1efb0f881760ffdc5c96/63c12849a1c7e9df64c819fc_programming-languages-shutterstock-1680857539.webp" class="purpose-image">
            <h2 class="purpose-title-item">Learn Programming Languages</h2>
            <h4 class="description">We teach the basics of programming languages like Python, Java, and C++</h4>
        </div>
        
    </div>

    
    <!-- <h1 class="purpose-description">Web Development &nbsp;&nbsp; Mobile App Design &nbsp;&nbsp; Learn Programming Languages</h1> -->
</div>

    <div class="sector-section">
        <h1 class="sector-title">FEW OF OUR SECTORS</h1>
        <hr class="purpose-underline">
        <div class="image-container">
            <img src="./image/p2.jpeg" class="sector-image">
            <img src="./image/p3.jpeg" class="sector-image">
            <img src="./image/p4.jpeg" class="sector-image">
            <img src="./image/p5.jpeg" class="sector-image">
            <img src="./image/p6.jpeg" class="sector-image">
        </div>
    </div>

    <?php
        include "client.php";
    ?>

    <?php
    include "map.php";
    ?>

    <?php
    include 'footer.php';
  ?>
</body>
</html>

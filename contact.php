<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="footer_link.css"> -->
</head>
<style>
    body{
        margin:0;
        padding:0;
        box-sizing: border-box;
    }
    .contact-background{
        
        background-image: url("./image/contact.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        height:600px;
        width:100%;
        text-align: center;
    }
    .contact-icon{
        margin-top: 100px;
        opacity:0.6;
        color:white;
        font-size:70px;
    }
    .contact-button-style{
        padding-left: 26px;
        padding-right: 26px;
        padding-top:15px;
        padding-bottom: 15px;
        font-size:20px;
        border-radius: 25px;
    }
    .contact-heading, .contact-subheading{
        color:antiquewhite;
        opacity:0.8;
    }
    .contact-heading{
        font-size: 45px;
        font-family: Georgia, serif;
    }
    .contact-subheading{
        font-size:25px;
    }
    .contact-join-button{
        opacity:0.5;
        color:white;
        background-color: #10a1ef;
    }
    .contact-logo{
        height:100px;
        width:100px;
        border-radius: 100px;
        padding:20px;
        margin-top:30px;
        border: 2px solid #1f8dc8;
    }
    .contact-info-background{
        background-color: white;
        text-align: center;
    }
    .contact-info-heading{
        font-size:2.7rem;
        color:#1f8dc8;
        margin-bottom: 0;
    }
    .contact-info-subheading{
        font-size:1.5rem;
        color:#1f8dc8;
    }
    .contact-text, .contact-button-text{
        
        color:black;
    }
</style>
  <link rel="shortcut icon" href="./image/logo.jpeg" type="image/x-icon">
<body>

<?php
include "nav.php";
?>

    <div class="contact-background">
      <i class="fa-solid fa-envelope-circle-check contact-icon" ></i>
      <h1 class="contact-heading contact-button-text">Contact Us</h1>
      <h3 class="contact-text">Questions or concerns? Drop us a line or give us a call</h3>
      <button class="contact-button-style contact-join-button" onclick="location.href = './Atech/studentform.php';">JOIN NOW</button>
   </div>

   <div class="contact-info-background">
    <img class="contact-logo" src="./image/logo.jpeg" alt="not loaded">
    <h1 class="contact-info-heading">Our Office</h1>
    <h3 class="contact-info-subheading">A Technologies</h3>
    
    <h4>E-mail: Atechnologies@atechkol.in</h4>
    <h4>Ph no. +91 81000 59162 / 89103 50813</h4>

    <h4>Pragati Apartment, Mahatma Gandhi Rd, Greater Bakul Bithi,<br><br> Thakurpukur, Kolkata, West Bengal 700063</h4>
    <br>
   </div>

    <?php
    include "map.php";
    ?>

   <?php
   include "footer.php";
   ?>
</body>
</html>

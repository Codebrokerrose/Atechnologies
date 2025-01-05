<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Custom Navbar</title>
  
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
    }

    nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #174a8a;
      padding: 10px 20px;
      position: fixed;
      width: 100%;
      top: 0;
      z-index: 1000;
      box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    }

    .nav-logo {
      display: flex;
      align-items: center;
    }

    .logo {
      height: 60px;
      width: 60px;
      border-radius: 50%;
      border: 3px solid #ffffff;
      box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
      margin-right: 10px;
    }

    .logo-text {
      color: #ffffff;
      font-size: 1.3rem;
      font-weight: bold;
    }

    .nav-links {
      list-style: none;
      display: flex;
      gap: 70px;
      margin: 0;
    }

    .nav-links li {
      display: inline;
    }

    .nav-links a {
      color: #68bfef;
      text-decoration: none;
      font-size: 1.1rem;
      font-weight: 500;
      transition: color 0.3s;
    }

    .nav-links a:hover {
      color: #ffffff;
    }

    .nav-button {
      background-color: #6cbce8;
      color: #174a8a;
      height: 40px;
      padding: 10px 20px;
      margin-right: 40px;
      font-size: 1rem;
      font-weight: bold;
      border-radius: 25px;
      box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
      border: none;
      cursor: pointer;
      transition: all 0.3s;
    }

    .nav-button:hover {
      background-color: #1aa7ec;
      color: #ffffff;
      transform: scale(1.1);
    }

    .toggle-btn {
      display: none;
      font-size: 1.5rem;
      color: #ffffff;
      background: none;
      border: none;
      cursor: pointer;
    }

    @media (max-width: 995px) {
      .nav-links {
      
      gap: 20px;
     
    }
      .toggle-btn {
        display: block;
      }

      .nav-links {
        flex-direction: column;
        align-items: flex-start;
        position: absolute;
        top: 60px;
        right: 0;
        background-color: #174a8a;
        width: 100%;
        padding: 0 20px;
        transform: translateY(-100%);
        opacity: 0;
        visibility: hidden;
        transition: transform 0.3s ease, opacity 0.3s ease;
      }

      .nav-links.show {
        transform: translateY(0);
        opacity: 1;
        visibility: visible;
        margin-top:17px;
      }

      .nav-links li {
        width: 100%;
        padding: 10px 0;
        text-align:center;
        background-color:rgba(0, 0, 0, 0.3);
        padding-top:20px;
        padding-bottom:20px;
      }
    }

    @media (max-width: 480px) {
      .nav-links a {
        font-size: 0.9rem;
      }

      .nav-button {
        padding: 8px 20px;
        font-size: 0.9rem;
      }

      .logo {
        height: 50px;
        width: 50px;
      }

      .logo-text {
        font-size: 1.2rem;
      }
    }
  </style>
</head>
<body>
 
  <nav>
    <div class="nav-logo">
      <a href="https://www.linkedin.com/company/a-technologieskol/posts/?feedView=all" class="icon" target="_blank">
      <img class="logo" src="./image/logo.jpeg" alt="Logo"></a>
      <span class="logo-text">ATECHNOLOGIES</span>
    </div>
    <button class="toggle-btn" onclick="toggleMenu()">☰</button>
    <ul class="nav-links">
      <li><a href="index.php">Home</a></li>
      <li><a href="contact.php">Contact</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="blog.php">Blog</a></li>
      <li><a href="#">LMS</a></li>
    </ul>
    <button class="nav-button" onclick="location.href = './Atech/studentform.php';">Join</button>
  </nav>

  <script>
    function toggleMenu() {
      const navLinks = document.querySelector('.nav-links');
      navLinks.classList.toggle('show');
    }
  </script>

</body>
</html>

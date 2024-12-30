
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

    /* Responsive Design */
    @media (max-width: 768px) {
      nav {
        flex-wrap: wrap;
      }

      .nav-links {
        flex-direction: column;
        align-items: center;
        gap: 15px;
      }

      .nav-button {
        margin-top: 10px;
      }
    }

    @media (max-width: 480px) {
      .nav-links {
        gap: 10px;
      }

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
      <img class="logo" src="./image/logo.jpeg" alt="Logo">
      <span class="logo-text">ATECHNOLOGIES</span>
    </div>
    <ul class="nav-links">
      <li><a href="home.php">Home</a></li>
      <li><a href="contact.php">Contact</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="blog.php">Blog</a></li>
      <li><a href="#">LMS</a></li>
    </ul>
    <button class="nav-button" onclick="location.href = './Atech/studentform.php';">Join</button>
  </nav>
  
</body>
</html>

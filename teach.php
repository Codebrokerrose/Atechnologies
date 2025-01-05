<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Teacher Hiring Form</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="shortcut icon" href="./image/logo.jpeg" type="image/x-icon">
</head>
<body>
  <!-- <header>
    <img src="./image/logo.jpeg" alt="atech" class="logo-image">
    <h1 class="logo"> ATechnology</h1>

  </header> -->

  <?php
    include "nav.php";
  ?>

  <main style="position:relative; top:80px;">
    <section class="form-section" >
      <h2>Teacher Hiring</h2>
      <form method="POST" action="submit_teacher.php">


        <div class="form-group">
          <label for="first-name">Name *</label>
          <div class="name-fields">
          <input type="text" id="first-name" name="first-name" placeholder="First Name" required>
          <input type="text" id="last-name" name="last-name" placeholder="Last Name" required>
          </div>
        </div>

        <div class="form-group">
          <label for="email">Email *</label>
          <input type="email" id="email" name="email" placeholder="example@example.com" required>
        </div>

        <div class="form-group">
          <label for="phone-number">Phone Number *</label>
          <input type="tel" id="phone-number" name="phone-number" placeholder="(000) 000-0000" required>
        </div>
        <div class="form-group">
            <label for="qualification">Qualification *</label>
            <input type="text" id="qualification" name="qualification" placeholder="e.g., B.Sc, M.Sc, BCA, MCA" required>
          </div>
          <div class="form-group">
            <label for="experience">Experience *</label>
            <input type="text" id="experience" name="experience" placeholder="e.g., 2years, 3 years, 5 years" required>
          </div>
  
          <div class="form-group">
            <label for="subject">Subject *</label>
            <input type="text" id="subject" name="subject" placeholder="e.g., Mathematics, Physics, Chemistry" required>
          </div>

        <button type="submit" class="submit-button">Submit</button>
      </form>
    </section>
  </main> 
  
</body>
</html>

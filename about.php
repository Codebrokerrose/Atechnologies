<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banner with Content</title>
    <style>
        :root {
            --primary-color: #333;
            --secondary-color: #555;
            --accent-color: #ff9f00;
            --font-family: Arial, sans-serif;
        }

        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: var(--font-family);
            line-height: 1.6;
            color: var(--primary-color);
            background-color: #f4f4f4;
        }

        /* Banner Section */
        .banner {
            position: relative;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .banner img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .overlay-content {
            position: absolute;
            text-align: center;
            color: white;
            padding: 0 20px;
        }

        .overlay-content h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }

        .overlay-content p {
            font-size: 1.2rem;
        }

        /* Content Section */
        .content-section {
            padding: 50px;
            background-color: #f9f9f9;
            text-align: center;
            margin:50px;
        }

        .content-section h2 {
            font-size: 2rem;
            color: var(--primary-color);
            margin-bottom: 20px;
        }

        .content-section p {
            font-size: 1rem;
            color: var(--secondary-color);
            margin-bottom: 15px;
            line-height: 1.8;
        }

        /* Testimonial Section */
        .testimonial-section {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 50px;
            background-color: #fff;
            text-align: center;
        }

        .testimonial-image img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-right: 20px;
        }

        .testimonial-content {
            max-width: 600px;
        }

        .testimonial-content p {
            font-size: 1.1rem;
            margin-bottom: 10px;
            color: var(--secondary-color);
        }

        .testimonial-role {
            font-size: 0.9rem;
            color: var(--secondary-color);
        }

        /* Philosophy Section */
        .philosophy-section {
            text-align: center;
            padding: 50px;
            background-color: #fff;
        }

        .philosophy-section h2 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .philosophy-section p {
            margin-bottom: 15px;
            line-height: 1.8;
        }

        .philosophy-btn {
            background-color: var(--accent-color);
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .philosophy-btn:hover {
            background-color: #e68a00;
        }

        /* Team Section */
        .box-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            padding: 50px;
            background-color: #f9f9f9;
        }

        .box {
            width: 300px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            text-align: center;
            background-color: #fff;
        }

        .box img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .box h3 {
            font-size: 1.2rem;
            margin-bottom: 10px;
        }

        .linkedin-icon {
            color: #0077B5;
            text-decoration: none;
            font-weight: bold;
            margin-top: 10px;
            display: inline-block;
            position: relative;
            left: 100px;
            /* top:10px; */
        }
        .overlay-content>.overlay-icon {
            width: 150px; 
            margin-bottom: 20px;
           border-radius:50px;
        }
    </style>
    <link rel="shortcut icon" href="./image/logo.jpeg" type="image/x-icon">
</head>
<body>
    <?php include "nav.php"; ?>

    <!-- Banner Section -->
    <div class="banner">
        <img src="https://img.freepik.com/premium-photo/computer-monitor-is-lit-up-dark-room_1304175-144203.jpg?semt=ais_hybrid" alt="Banner Image">
        <div class="overlay-content">
            <img src="./image/logo.jpeg" alt="Overlay Icon" class="overlay-icon" >
            <h1>We build software, but our story is about building trust</h1>
            <p>That's why our clients have increased chances of success</p>
        </div>
    </div>

    <!-- Content Section -->
    <div class="content-section">
        <h2>What does it mean?</h2>
         <p>
            Software Development is a complex process that requires many moving parts working together in harmony 
            for a piece of “usable” software to be produced. The complexity of this process is usually the source 
            of surprises and inefficiencies in projects which result in delayed deliveries and cost overruns. These 
            inefficiencies and surprises can be reduced if decisions are made with a better understanding of the 
            software development process and their impact on the project.
        </p>
        <p>
            We help key decision-makers of a software project make better decisions by making the software 
            development uncomplicated. Understanding each moving part and how that impacts the overall project will 
            give them the insight to reduce the risks of the project.
        </p>
        <p>
            Using our unique approach to software development, which is a mixture of lean software development and 
            agile processes, we can deliver projects on time and on budget with the fewest surprises possible. This 
            enables us to increase the success rate of software projects.
        </p>
    </div>

    <!-- Testimonial Section -->
    <div class="testimonial-section">
        <div class="testimonial-image">
            <img src="https://media.licdn.com/dms/image/v2/C5103AQE4bILS5eFDjQ/profile-displayphoto-shrink_800_800/profile-displayphoto-shrink_800_800/0/1537284944590?e=1740614400&v=beta&t=1MREgJclE8jmz8YxOAqaMzWlUlZO08yQB-XfjMiOSXs" alt="Person's Image">
        </div>
        <div class="testimonial-content">
            <p>“Empowering businesses with cutting-edge IT solutions and shaping the future through impactful education services.”</p>
            <strong>- Amitava Biswas</strong>
            <div class="testimonial-role">Managing Director, ATechnologies</div>
        </div>
    </div>

    <!-- Philosophy Section -->
    <div class="philosophy-section">
        <h2>Our Philosophy</h2>
        <p>
            In today’s fast-paced environment, everyone is trying to get faster and faster. In software development, this approach is resulting in projects that start without a clear picture of the goals and the scope of the projects. <strong>This leads to failures</strong> for the project and the companies involved in it.
        </p>
        <p>
            We believe these types of failures are easily preventable if the projects are slowed down to start and planned accordingly. We believe there are other important aspects of software development that, if neglected, can make software that are “unusable.” They will be either too expensive to build or too expensive to run and maintain. <strong>Using the right approach, we can build efficient and maintainable software.</strong>
        </p>
        <button class="philosophy-btn">What's the process?</button>
    </div>

    <!-- Team Section -->
    <?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "atechnologies";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch team members from the database
$sql = "SELECT name, description, image_url, linkedin_url FROM team_members";
$result = $conn->query($sql);
?>
<h1 style="text-align:center; margin-top:20px; ">Meet the Team</h1>
<div class="box-container">
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="box">';
            echo '<img src="' . htmlspecialchars($row["image_url"]) . '" alt="Team Member">';
            echo '<h3>' . htmlspecialchars($row["name"]) . '</h3>';
            echo '<p>' . htmlspecialchars($row["description"]) . '</p>';
            echo '<a href="' . htmlspecialchars($row["linkedin_url"]) . '" class="linkedin-icon" target="_blank">LinkedIn</a>';
            echo '</div>';
        }
    } else {
        echo '<p>No team members found.</p>';
    }
    ?>
</div>

<?php
// Close connection
$conn->close();
?>


    <?php include "footer.php"; ?>
</body>
</html>

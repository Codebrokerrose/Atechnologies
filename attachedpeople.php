<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technology People Count</title>
    <style>
        /* Scoped styles for the entire page */
        #technology-page {
            font-family: 'Arial', sans-serif;
            background-color: #f4f6f9;
            padding: 20px;
            color: #333;
        }

        .header{
            text-shadow: 0px 0px 0px white;
        }

        /* Header styling */
        #technology-page .header {
            text-align: center;
            margin-bottom: 30px;
        }

        #technology-page .header h1 {
            font-size: 2rem;
            color: #4CAF50;
            margin-bottom: 10px;
        }

        #technology-page .header p {
            font-size: 1.2rem;
            color: #555;
        }

        /* Statistics section styling */
        #technology-page .statistics {
            display: flex;
            justify-content: center;
            gap: 40px;
            margin-top: 20px;
        }

        #technology-page .statistics .stat-item {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 150px;
        }

        #technology-page .statistics .stat-item h3 {
            font-size: 2.5rem;
            color: #4CAF50;
            margin-bottom: 10px;
        }

        #technology-page .statistics .stat-item p {
            font-size: 1rem;
            color: #777;
        }

        /* Footer styling */
        #technology-page footer {
            text-align: center;
            margin-top: 40px;
            color: #777;
        }

        /* Button styling */
        #technology-page .cta-button {
            display: block;
            margin: 30px auto;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
        }

        #technology-page .cta-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <!-- Page content wrapped in a unique ID -->
    <div id="technology-page">
        <!-- Header Section -->
        <div class="header">
            <h1>Our Technology Impact</h1>
            <p>See how our technology is transforming the world by connecting people.</p>
        </div>

        <!-- Statistics Section -->
        <div class="statistics">
            <div class="stat-item">
                <h3>10,234</h3>
                <p>People Connected</p>
            </div>
            <div class="stat-item">
                <h3>21</h3>
                <p>Technologies Involved</p>
            </div>
            <div class="stat-item">
                <h3>123</h3>
                <p>Projects Launched</p>
            </div>
        </div>

        <!-- Call-to-Action Button -->
        <button class="cta-button" onclick="location.href = './Atech/studentform.php';">Join Us Now</button>

        <!-- Footer Section -->
        <footer>
            <p>&copy; 2025 Our Technology. All rights reserved.</p>
        </footer>
    </div>

</body>
</html>

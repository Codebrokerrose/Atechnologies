<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "atechnologies"; // Replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password
    $phone = $_POST['phone'];
    $month = $_POST['month'];
    $course = $_POST['course'];
    $semester = $_POST['semester'];
    $center = $_POST['center'];

    // Check if email already exists
    $checkEmailQuery = "SELECT * FROM user1 WHERE email = ?";
    $stmt = $conn->prepare($checkEmailQuery);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<script>alert('This email is already registered. Please use a different email.');</script>";
        echo "<script>window.history.back();</script>";
        exit();
    }

    // Insert new record
    $insertQuery = "INSERT INTO user1 (name, email, password, phone, month, course, semester, center) 
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($insertQuery);
    $stmt->bind_param("ssssssss", $name, $email, $password, $phone, $month, $course, $semester, $center);

    if ($stmt->execute()) {
        echo "<script>alert('Form submitted successfully!');</script>";
        echo "<script>window.location.href = 'studentform.php';</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close connection
    $stmt->close();
    $conn->close();
}
?>

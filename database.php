<?php
// Database connection
$host = "localhost"; // Change if necessary
$user = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$dbname = "atechnologies";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Check if the same entry already exists
    $checkQuery = "SELECT * FROM messages WHERE name = '$name' AND email = '$email' AND message = '$message'";
    $result = $conn->query($checkQuery);

    if ($result->num_rows > 0) {
        $error = "The same message has already been submitted!";
    } else {
        // Insert data if not a duplicate
        $sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";
        
        if ($conn->query($sql) === TRUE) {
            $success = "Your message has been sent successfully!";
        } else {
            $error = "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
?>


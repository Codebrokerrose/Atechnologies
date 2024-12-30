<?php
$host = 'localhost'; // Your database host
$username = 'root';  // Your database username
$password = '';      // Your database password
$database = 'atechnologies'; // Your database name

// Create a connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<?php
include 'test_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve and sanitize input data
    $first_name = htmlspecialchars(trim($_POST['first-name']));
    $last_name = htmlspecialchars(trim($_POST['last-name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $phone_number = htmlspecialchars(trim($_POST['phone-number']));
    $qualification = htmlspecialchars(trim($_POST['qualification']));
    $subject = htmlspecialchars(trim($_POST['subject']));

    // Validate fields
    if (empty($first_name) || empty($last_name) || empty($email) || empty($phone_number) || empty($qualification) || empty($subject)) {
        echo "<script>alert('All fields are required!');</script>";
        echo "<script>window.location.href = 'home.php';</script>";
        exit();
    }

    // Check if email already exists
    $checkEmailQuery = "SELECT * FROM teachers WHERE email = ?";
    $stmt = $conn->prepare($checkEmailQuery);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<script>alert('This email is already registered. Please use a different email.');</script>";
        echo "<script>window.location.href = 'home.php';</script>";
        exit();
    }

    // Insert data into the database
    $stmt = $conn->prepare("INSERT INTO teachers (first_name, last_name, email, phone_number, qualification, subject) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $first_name, $last_name, $email, $phone_number, $qualification, $subject);

    if ($stmt->execute()) {
        // Redirect back to the form page with success message
        echo "<script>alert('Form submitted successfully!');</script>";
        echo "<script>window.location.href = 'home.php';</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>

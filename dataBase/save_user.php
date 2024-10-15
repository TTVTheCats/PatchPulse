<?php
// Connect to MySQL
$servername = "localhost";  // Change if your database is on another server
$username = "root";         // Your MySQL username
$password = "";             // Your MySQL password
$dbname = "user_registration";  // Your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input
    $name = htmlspecialchars($_POST['NameOfUser']);
    $email = htmlspecialchars($_POST['EmailOfUser']);
    $password = htmlspecialchars($_POST['PasswordOfUserUnCrypt']);
    $agree_terms = isset($_POST['AgreeTerms']) ? 1 : 0;

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare SQL statement
    $stmt = $conn->prepare("INSERT INTO users (name, email, password, agree_terms) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sssi", $name, $email, $hashed_password, $agree_terms);

    // Execute and check if successful
    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>

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
    $email = htmlspecialchars($_POST['EmailOfUser']);
    $password = htmlspecialchars($_POST['PasswordOfUserUnCrypt']);

    // Prepare SQL statement to select user based on email
    $stmt = $conn->prepare("SELECT password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);

    // Execute the query
    $stmt->execute();
    $stmt->store_result();

    // Check if the user exists
    if ($stmt->num_rows > 0) {
        // Bind result to a variable
        $stmt->bind_result($hashed_password_from_db);
        $stmt->fetch();

        // Verify the password
        if (password_verify($password, $hashed_password_from_db)) {
            echo "Login successful!";  // Redirect or set session, as needed
        } else {
            echo "Incorrect password.";
        }
    } else {
        echo "No user found with that email.";
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>

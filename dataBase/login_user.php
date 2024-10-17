<?php
session_start();  // Avvia la sessione

// Connect to MySQL
$servername = "localhost";  
$username = "root";         
$password = "";             
$dbname = "users";  

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

    // Prepare SQL statement to check if the user exists
    $stmt = $conn->prepare("SELECT id, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);

    // Execute the statement
    $stmt->execute();
    $stmt->store_result();

    // Check if email exists in the database
    if ($stmt->num_rows > 0) {
        // Email exists, now check password
        $stmt->bind_result($user_id, $hashed_password);
        $stmt->fetch();

        // Uncomment below if passwords are hashed
        // if (password_verify($password, $hashed_password)) {
        if ($password === $hashed_password) { // Remove this line if you are hashing passwords
            // Store user ID or email in session
            $_SESSION['user_id'] = $user_id;
            $_SESSION['email'] = $email;
            
            echo "Credenziali giuste. Benvenuto!";
            // Redirect to home or account page after login
            header("Location: ../html/homePage.php");
            exit();
        } else {
            echo "Credenziali errate. Password non corretta.";
        }
    } else {
        echo "Credenziali errate. Utente non trovato.";
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>

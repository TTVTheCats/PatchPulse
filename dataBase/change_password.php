<?php
session_start();  // Avvia la sessione

// Verifica se l'utente è loggato
if (!isset($_SESSION['user_id'])) {
    header("Location: loginPage.php");
    exit();
}

// Connetti al database
$servername = "localhost";  
$username = "root";         
$password = "";             
$dbname = "users";  

$conn = new mysqli($servername, $username, $password, $dbname);

// Controlla la connessione
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Gestisci la richiesta di cambio password
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['change_password'])) {
    // Sanitize input
    $current_password = htmlspecialchars($_POST['current_password']);
    $new_password = htmlspecialchars($_POST['new_password']);
    
    // Ottieni l'ID utente dalla sessione
    $user_id = $_SESSION['user_id'];

    // Prepara SQL per ottenere la password attuale
    $stmt = $conn->prepare("SELECT password FROM users WHERE id = ?");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $stmt->bind_result($hashed_password);
    $stmt->fetch();

    // Verifica la password attuale
    if (password_verify($current_password, $hashed_password)) {
        // Cripta la nuova password
        $new_hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

        // Chiudi la prima statement
        $stmt->close();

        // Aggiorna la password nel database
        $update_stmt = $conn->prepare("UPDATE users SET password = ? WHERE id = ?");
        $update_stmt->bind_param("si", $new_hashed_password, $user_id);
        
        if ($update_stmt->execute()) {
            $_SESSION['password_change_message'] = "Password cambiata con successo!";
        } else {
            $_SESSION['password_change_message'] = "Errore nel cambio della password: " . $update_stmt->error;
        }

        $update_stmt->close(); // Chiudi la statement di aggiornamento
    } else {
        $_SESSION['password_change_message'] = "La password attuale non è corretta.";
    }

    // Chiudi la connessione
    $conn->close();

    // Reindirizza all'account page
    header("Location: ../html/accountPage.php");
    exit();
}
?>

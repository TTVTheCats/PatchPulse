<?php
session_start();  // Avvia la sessione
// Verifica se l'utente è loggato
if (!isset($_SESSION['user_id'])) {
    // Reindirizza alla pagina di login se non loggato
    header("Location: loginPage.php");
    exit();
}

// Includi il messaggio di stato se disponibile
$message = isset($_SESSION['password_change_message']) ? $_SESSION['password_change_message'] : '';
unset($_SESSION['password_change_message']); // Rimuovi il messaggio dalla sessione

?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="homePage.css">
    <title>ACCOUNT</title>

    <nav>
        <div class="nav-container">
            <ul>
                <li class="nav-item"><a href="https://github.com/TTVTheCats/PatchPulse/tree/main">GITHUB</a></li>
                <li class="nav-item"><a href="#">SETTINGS</a></li>
                <li class="logo-container"><img class="mainIcon" src="../svgs/PatchPulseLogo.svg" alt="CentredLogo"></li>
                <li class="nav-item"><a href="homePage.php">HOME</a></li>

                <!-- Modifica dinamica della navbar in base allo stato di login -->
                <?php if (isset($_SESSION['user_id'])): ?>
                    <!-- Se l'utente è loggato, mostra "ACCOUNT" -->
                    <li class="nav-item"><a href="accountPage.php">ACCOUNT</a></li>
                <?php else: ?>
                    <!-- Se l'utente non è loggato, mostra "LOGIN" -->
                    <li class="nav-item"><a href="loginPage.php">LOGIN</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
</head>

<body>
    <div class="account"> 
        <p><b><i>Benvenuto nel tuo account</i></b>, <?php echo htmlspecialchars($_SESSION['name']); ?>!</p>
    </div>

    <hr>
    <div class="change-password">
        <h2>Cambia Password</h2>
        <form action="../dataBase/change_password.php" method="post">
            <label for="current_password">Password Attuale:</label> </br>
            <input type="password" name="current_password" required></br></br>
            <label for="new_password">Nuova Password:</label> </br>
            <input type="password" name="new_password" required></br></br>
            <input type="submit" name="change_password" value="Cambia Password">
        </form>
        <?php if ($message): ?>
            <p><?php echo htmlspecialchars($message); ?></p>
        <?php endif; ?>

        </br></br>
        <hr>
    </div>
    <div class="account"> 
    </br>
    </br>
    <a href="logout.php">Logout</a>
    </div>
</body>
</html>

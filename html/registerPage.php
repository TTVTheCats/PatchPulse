<?php
session_start();  // Avvia la sessione per verificare se l'utente è loggato
?>

<!DOCTYPE html>
<html>
    
    <link rel="stylesheet" type="text/css" href="homePage.css">
    <head>
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

    <br><br><br><br>

    <body>

        
        <div class="form-container">

            <h1>Register</h1>
            
            <form action="../dataBase/save_user.php" method="post">

                <input type="text" name="NameOfUser" id="" placeholder="name" required class="form1"><br />

                <input type="email" name="EmailOfUser" id="" placeholder="email" required class="form1"><br />

                <input type="password" name="PasswordOfUserUnCrypt" id="" placeholder="password" required class="form1"><br />

                <p2>I've read the and agree with the <a href="TermsAndConditions/GPLv3.html" class="hyperLinks">Terms & Conditions </a> </p2>

                <input type="checkbox" name="AgreeTerms" id="" required><br />

                <input type="submit" name="" id="" value="Register" class="form1">
                
            </form>
            <p class="p3"><a href="loginPage.php" class="signIn">Already have an account</a></p>
        </div>

    </body>

</html>

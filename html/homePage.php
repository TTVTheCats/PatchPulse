<?php
session_start();  // Avvia la sessione per verificare se l'utente è loggato
?>
<!-- Bootstrap loader --------------------------------->

<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T38787s12n6K637VBK1b0ChJ4//Q3ozm7560LPohrQAKxf8s7V+uioV7nqZzC10" crossorigin="anonymous">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C8fC4ZtX677x376yN1DKzuV6302/e4A/8f3s5X6/c6w7271w/7/vX/v9jX2c" crossorigin="anonymous"></script>

<!-- End Bootstrap loader ----------------------------->

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
        <!-- Aggiungi il contenitore per Flexbox -->
        <div class="container">
            <img class="WaveLeft" src="../svgs/Waves.svg" alt="LateralWaves"/>
            <table>
                <tr>
                    <td><h1>PATCHPULSE, YOU WILL <br>FEEL SAFE NOW</h1></td>
                </tr>
                <tr>
                    <td>
                        <div class="button-container">
                            <a href="fastScan.php" class="button">Fast Scan</a>
                            <a href="" class="button">Slow Scan</a>
                        </div>
                    </td>
                </tr>
            </table>
            <img class="WaveRight" src="../svgs/Waves.svg" alt="LateralWaves" />
        </div>
    </body>
</html>

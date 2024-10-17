<?php
session_start();  // Avvia la sessione
session_unset();  // Rimuovi tutte le variabili di sessione
session_destroy();  // Distruggi la sessione
header("Location: loginPage.php");  // Reindirizza al login
exit();
?>

<?php
session_start();
if (isset($_POST['password'], $_POST['username'])) {

    if ($_POST['password'] == '12345' && $_POST['username'] == 'admin') {
        $_SESSION['inLoggad'] = true;    // Användaren har anget rätt uppgifter.
        $_SESSION['user'] = $_POST['username'];
    }
}

// Om lyckad inloggning gå till index.php. Annars gå vidare och visa formuläret.
if (isset($_SESSION['inloggad'])) {
    header("Location: ../index.php");
} else {
    header("Location: ../index.php");
}

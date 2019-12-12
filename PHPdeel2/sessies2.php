<?php
    session_start();

    if($_SESSION['login'] == true) {
        echo "Welkom: " . $_SESSION['username'];
    } else {
        echo "Eerst inloggen!";
    }
?>
<title>Sessies</title>
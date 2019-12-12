<?php
    session_start();

    $_SESSION['login'] = true;
    $_SESSION['username'] = "Pim";

    echo "Sessie variabelen zijn aangemaakt.";
?>
<title>Sessies</title>


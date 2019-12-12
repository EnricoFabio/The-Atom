<?php
    echo "Vorige bezochte pagina van de bezoeker: " . $_SERVER['HTTP_REFERER'] . "<br>";
    echo "De internet browser en het besturingssysteem van de bezoeker: " . $_SERVER['HTTP_USER_AGENT'];
?>
<title>Superglobals</title>
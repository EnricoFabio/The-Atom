<?php
    echo "Naam en locatie van huidige pagina: " . $_SERVER['PHP_SELF'] . "<br>";
    echo "Gegevens uit de URL: " . $_SERVER['QUERY_STRING'] . "<br>";
    echo "Informatie over domein: " . $_SERVER['SERVER_NAME'] . "<br>";
    echo "Software op de server: " . $_SERVER['SERVER_SOFTWARE'];
?>
<title>Superglobals</title>

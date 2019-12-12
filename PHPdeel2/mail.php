<?php
    $ontvanger = "henk@devries.nl";
    $onderwerp = "Nieuwe iPhone";
    $bericht = "De nieuwste iPhone wordt vanaf 28 oktober verkocht in Nederland.";
    $header = "From: Steve Jobs<s.jobs@apple.com>";
    
    mail($ontvanger, $onderwerp, $bericht, $header);

?>

<title>De functie mail()</title>

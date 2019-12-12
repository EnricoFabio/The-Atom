<?php 
    $days = array();
    $days[0] = "Zondag";
    $days[1] = "Maandag";
    $days[2] = "Dinsdag";
    $days[3] = "Woensdag";
    $days[4] = "Donderdag";
    $days[5] = "Vrijdag";
    $days[6] = "Zaterdag";
	
    foreach($days as &$day) {
        echo "$day <br>";
    }
?>

<title>Foreach-loop</title>
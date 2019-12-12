<?php
    $shippingType = "verzenden";
    $totalPrice = 43.15;
	
    if(($shippingType == "verzenden") && ($totalPrice >= 50)) {
        echo "Verzendkosten zijn: € 3,-";
    } else if(($shippingType == "verzenden") && ($totalPrice < 50)) { 
        echo "Verzendkosten zijn: € 5,-";
    } else {
        echo "Bestelling wordt afgehaald; geen verzendkosten.";
    }
?>
<title>Verzendkosten</title>
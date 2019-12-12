<?php
    
    setcookie("shoppingcart",
              "10 x bezemsteel 1 meter",
              time() - 10);
    
    if(isset($_COOKIE['shoppingcart'])) {
        echo "Cookie bestaat!";
    } else {
        echo "Cookie bestaat niet!";
    }
?>
<title>Cookies</title>


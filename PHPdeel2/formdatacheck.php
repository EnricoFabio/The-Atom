<?php
    if(isset($_POST['verzenden'])) {
        $invoer = $_POST['tekstvak'];
        echo $invoer;
        echo "<br><br>";
    } else {
        $invoer = "";
    }
?> 

<form method="post" action="">
    <input type="text" name="tekstvak" value="<?php echo $invoer; ?>" />
    <input type="submit" name="verzenden" value="Verzenden"/>
</form>

<title>Formulier data controleren</title>
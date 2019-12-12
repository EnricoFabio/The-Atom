<?php
    if(isset($_POST['verzenden'])) {
        $check = filter_input(INPUT_POST, tekstvak, FILTER_VALIDATE_EMAIL);
        if(!$check) {
            echo "Fout! Invoer is geen e-mailadres!";
        }
    } else {
        $invoer = "";
    }
?> 

<form method="post" action="">
    <input type="text" name="tekstvak" value="<?php echo $invoer; ?>" />
    <input type="submit" name="verzenden" value="Verzenden"/>
</form>

<title>Formulier data controleren</title>
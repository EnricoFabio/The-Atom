<?php
    if(isset($_POST['verzenden'])) {
        //$invoer = filter_input(INPUT_POST, "tekstvak", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        $invoer = filter_input(INPUT_POST, "tekstvak", FILTER_SANITIZE_NUMBER_INT);
        echo $invoer . "<br><br>";
    } else {
        $invoer = "";
    }
?>

<form method="post" action="">
    <input type="text" name="tekstvak" value="<?php echo $invoer; ?>" />
    <input type="submit" name="verzenden" value="Verzenden"/>
</form>

<title>Formulier data controleren</title>

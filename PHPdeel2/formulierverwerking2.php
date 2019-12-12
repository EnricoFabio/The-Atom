<?php
    if(isset($_POST['verzenden'])) {
        $naam = $_POST['naam'];
        $bericht = $_POST['bericht'];

        echo "Het formulier is verzonden!<br>";
        echo "Naam: " . $naam . "<br>";
        echo "Bericht: " . $bericht . "<br><br><br>";
    } else {
        $naam = "";
        $bericht = "";
    }
?>


<style type="text/css">
    label {
        float: left;
        display: block;
        width: 150px;
    }
    input {
        display: block;
    }
    input[type="submit"] {
        margin-left: 150px;
    }
</style>

<form method="post" action="">

    <label>Naam</label>
    <input type="text" name="naam" value="<?php echo $naam; ?>" />

    <label>Bericht</label>
    <textarea name="bericht"><?php echo $bericht; ?></textarea>

    <br>

    <input type="submit" name="verzenden" value="Verzenden"/>
</form>

<title>Formulier verwerking</title>

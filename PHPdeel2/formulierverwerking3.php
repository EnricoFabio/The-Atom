<?php
    if(isset($_POST['verzenden'])) {
        $aanhef = $_POST['aanhef'];
        $naam = $_POST['naam'];
        $bericht = $_POST['bericht'];

        echo "Het formulier is verzonden!<br>";
        echo "Naam: " . $aanhef . " " . $naam . "<br>";
        echo "Bericht: " . $bericht . "<br><br><br>";
    } else {
        $aanhef = "";
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
    input[type="radio"], input[type="checkbox"] {
        display: inline;
    }
    input[type="submit"] {
        margin-left: 150px;
    }
</style>

<form method="post" action="">

    <label>Aanhef</label>
    <input type="radio" name="aanhef" value="dhr." <?php if($aanhef == "dhr.") { echo "checked='checked'"; } ?> />Dhr.
    <input type="radio" name="aanhef" value="mevr." <?php if($aanhef == "mevr.") { echo "checked='checked'"; } ?>  />Mevr.

    <br>

    <label>Naam</label>
    <input type="text" name="naam" value="<?php echo $naam; ?>" />

    <label>Bericht</label>
    <textarea name="bericht"><?php echo $bericht; ?></textarea>

    <br>

    <input type="submit" name="verzenden" value="Verzenden"/>
</form>

<title>Formulier verwerking</title>

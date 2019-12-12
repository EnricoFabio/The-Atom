<?php
    if(isset($_POST['verzenden'])) {
        echo "Het formulier is verzonden!<br>";
        echo "Naam: " . $_POST['naam'] . "<br>";
        echo "Bericht: " . $_POST['bericht'];
        echo "<br><br><br>";
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
    <input type="text" name="naam">

    <label>Bericht</label>
    <textarea name="bericht"></textarea>

    <br>

    <input type="submit" name="verzenden" value="Verzenden">
</form>

<title>Formulier verwerking</title>

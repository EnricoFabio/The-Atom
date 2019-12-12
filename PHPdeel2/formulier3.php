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
</style>

<form method="post" action="">
    <label>Aanhef</label>
    <input type="radio" name="aanhef" value="dhr">Dhr.
    <input type="radio" name="aanhef" value="mevr">Mevr.

    <br>

    <label>Naam</label>
    <input type="text" name="naam">

    <label>Onderwerp</label>
    <input type="checkbox" name="onderwerp" value="php">PHP
    <input type="checkbox" name="onderwerp" value="c#">C#

    <br>

    <label>Bericht</label>
    <textarea name="bericht"></textarea>

    <br>

    <input type="submit" name="verzenden" value="Verzenden">
</form>


<title>Uitgebreid formulier</title>

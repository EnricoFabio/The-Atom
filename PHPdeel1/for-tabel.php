<style type="text/css">
    table {
        border-collapse: collapse;
        border: 1px solid black;
    }
	    
    td {
        border: 1px solid black; 
        width: 25px;
        text-align: center;
    }
</style>

<?php
    $number = 9;
    echo "<table border='1'>";
        for($i = 1; $i <= 10; $i++) {
            echo "<tr>";
                echo "<td>$i</td>";
                echo "<td> x </td>";
                echo "<td>$number</td>";
                echo "<td> = </td>";
                echo "<td>" . ($i * $number) . "</td>";
            echo "</tr>";
        }
    echo "</table>";
?>
<title>For-loop met tabel</title>
<?php
    try {
        $db = new PDO("mysql:host=localhost;dbname=fietsenmaker", "root", "root");
	
	$query = $db->prepare("SELECT * FROM fietsen");
	$query->execute();
	$result = $query->fetchAll(PDO::FETCH_ASSOC);
	
        echo "<table>";
            foreach($result as &$data) {
                echo "<tr>";
                    echo "<td>" . $data["merk"] . "</td>";
                    echo "<td>" . $data["type"] . "</td>";
                    echo "<td style='text-align: right;'>&euro; " . number_format($data["prijs"],2,",",".") . "</td>";
                echo "</tr>";
            }
        echo "</table>";
    } catch (PDOException $e) {
        die("Error!: " . $e->getMessage());
	}	
?>

<title>SELECT</title>
<style type="text/css">
    table {
        border-collapse: collapse;
        border: 1px solid black;
    }

    td {
        border: 1px solid black;
        width: 100px;
    }
</style>


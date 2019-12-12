<?php
    try {
        $db = new PDO("mysql:host=localhost;dbname=fietsmaker", "root", "root");
    } catch (PDOException $e) {
        die("Error!: " . $e->getMessage());
    }
?>

<title>Databaseverbinding</title>

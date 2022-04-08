<?php

ob_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pdo_toets_herkansing";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "DELETE FROM burrito WHERE id=:id";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id);

    if(!isset($_GET['id'])){
        header("Location: ./read.php");
        exit();
    }

    $id = $_GET['id'];

    echo "Uw bestelling met nummer: {$id} is verwijderd";
    header("Refresh:3; ./read.php");
} catch (PDOException $e) {
    echo $e->getMessage();exit();
}
$conn = null;
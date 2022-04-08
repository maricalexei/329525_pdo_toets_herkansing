<?php
//var_dump($_POST);exit();
ob_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pdo_toets_herkansing";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("INSERT INTO `burrito`(id, formaat, saus, bonen, rijst)
                                    VALUES (:id, :Formaat, :Saus, :Bonen, :Rijst)");
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':Formaat', $formaat);
    $stmt->bindParam(':Saus', $saus);
    $stmt->bindParam(':Bonen', $bonen);
    $stmt->bindParam(':Rijst', $rijst);
//    insert
    $id = null;
    $formaat = $_POST['formaat'];
    $saus = $_POST['saus'];
    $bonen = $_POST['bonen'];
    $rijst = $_POST['rijst'];
    //var_dump($stmt);exit();
    $stmt->execute();

    echo "Uw bestelling is ontvangen";
    header("Refresh:3; ./read.php");
} catch (PDOException $e) {
    echo $e->getMessage();exit();
    header("Location: ./index.php");
}
$conn = null;
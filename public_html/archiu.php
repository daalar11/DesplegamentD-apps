<?php
session_start();
include('./utilitats/config-db.php');
$conn =new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}
include('./utilitats/header.php');
$sql ="Select codi,nom,descripcio, preu FROM productes";
$result = $conn-> query($sql);
include("./vistas/llistavista.php");
?>


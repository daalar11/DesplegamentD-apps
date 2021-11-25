

<?php include('./utilitats/header.php'); ?>

<?php
session_start();
$codi=$_GET['codi'];
include('./utilitats/config-db.php');
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if(isset($_SESSION['carreto'])){
	$carretoCodi=$_GET['codi'];
	$carretoPreu=$_GET['preu'];
array_push($_SESSION['carreto'],$carretoCodi);
}else{
	$_SESSION['carreto']=array();
	$carretoCodi=$_GET['codi'];
	$carretoPreu=$_GET['preu'];
	array_push($_SESSION['carreto'],$carretoCodi);
}
var_dump($_SESSION['carreto']);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql ="Select codi,nom,descripcio, preu FROM productes";
$result = $conn-> query($sql);
$preutotal=0;

	
include('./vistas/carretovista.php');
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

<?php include('header.php'); ?>

<?php
session_start();
$codi=$_GET['codi'];
include('config-db.php');
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
if ($result ->num_rows >0){
	while($row = $result->fetch_assoc()){
      
		foreach($_SESSION['carreto'] as $pip=>$value){
			if($row["codi"]==$value){
			echo "<div><img width='300px'height='300px' src='../.imatges/".$value.".jpg'>". $row['nom']." </div><hr>";
			$preutotal+=$row["preu"];
			}
		}
	}
	echo "Preu total:".$preutotal."euros";
}else{
echo "0 results";
}
	

$conn->close();
?>
	<form action="destroy.php" method="post">  
        <input type="submit" value="comprar"/>
    </form>
	</body>
</html>
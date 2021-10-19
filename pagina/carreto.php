<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

<a href="archiu.php">Torna a inici </a>>>>

<?php
$codi=1;
include('config-db.php');
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
$quantitat=10;
$preutotal=0;
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
	$sql ="Select codi,nom,descripcio, preu FROM productes";
$result = $conn-> query($sql);

if ($result ->num_rows >0){
	while($row = $result->fetch_assoc()){
        if($row["codi"]==$codi){
	$products = array(
		array($row["nom"],$row["preu"],$quantitat)
	);
        }
	}
	$preutotal=$products[0][1]*$products[0][2];
}else{
echo "0 results";
}
	echo "<img width='300px'height='300px' src='../.imatges/".$codi.".jpg'>".$products[0][0]. $preutotal;

$conn->close();
?>
	
	</body>
</html>

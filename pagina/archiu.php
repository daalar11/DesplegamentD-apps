<?php
include('config-db.php');
$conn =new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}
include('header.php');
echo "<a href='carreto.php'>Torna a inici </a>";
$sql ="Select codi,nom,descripcio, preu FROM productes";
$result = $conn-> query($sql);


if ($result ->num_rows >0){
	while($row = $result->fetch_assoc()){
	echo "codi: ". $row["codi"]. " ".$row["nom"]." ".$row["descripcio"]." " .$row["preu"]."<a href='fitxa.php?codi=".$row["codi"]."'><img width='300px' height'300px' src='../.imatges/" .$row["codi"]. ".jpg'></a> <br>";
	}
}else{
echo "0 results";
}
$conn->close();
?>
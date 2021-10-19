<?php
include('config-db.php');
$conn =new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sql ="Select codi,nom,descripcio, preu FROM productes";
$result = $conn-> query($sql);


if ($result ->num_rows >0){
	while($row = $result->fetch_assoc()){
	echo "codi: ". $row["codi"]. " ".$row["nom"]." ".$row["descripcio"]." " .$row["preu"]."<img src='../.imatges/" .$row["codi"]. ".jpg'> <br>";
	}
}else{
echo "0 results";
}
$conn->close();
?>

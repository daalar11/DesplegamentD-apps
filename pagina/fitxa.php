<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<?php
	include('header.php');
	$codi=$_GET['codi'];
	include('config-db.php');
	$conn =new mysqli($servername, $username, $password, $dbname);

	if($conn->connect_error){
		die("Connection failed: ". $conn->connect_error);
	}
		
	$sql ="Select codi,nom,descripcio, preu FROM productes where codi=$codi";
	$result = $conn-> query($sql);

	if ($result ->num_rows >0){
	$row = $result->fetch_assoc();
		
		echo "<h1>codi:</h1> ". $row["codi"]. " <h1>Nom: </h1> ".$row["nom"]." <h4>Descrpicio:</h4>".$row["descripcio"]." <h4>preu</h4>" .$row["preu"]."<br> <img width='300px'height='300px' src='../.imatges/" .$row["codi"]. ".jpg'><br>";	
	}else{
		echo "0 results";
	}
	$conn->close();
?>

</body>
</html>
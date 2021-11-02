<!DOCTYPE html>
<html lang="cat">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

</head>
<body>

<?php
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
		
		echo "<p>
				<span lang=\"ca\">codi:</span>
				</p>  ". $row["codi"]. " 
				<p><span lang='ca'>Nom: </span> ".$row["nom"]." 
				<span lang='ca'>Descrpicio:</span>
				".$row["descripcio"]." 
				<span lang='ca'>preu </span>
				" .$row["preu"]."<br> 
				<a href='carreto.php?preu=".$row["preu"]."&codi=".$row["codi"]."'><img width='300px'height='300px' src='../.imatges/" .$row["codi"]. ".jpg'></a>
			</p>";	
	}else{
		echo "0 results";
	}
	$conn->close();
?>

</body>
</html>
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
	include("detectarIdioma.php");

	
	$codi=$_GET['codi'];
	include('config-db.php');
	include('detectarIdioma.php');
	$conn =new mysqli($servername, $username, $password, $dbname);

	if($conn->connect_error){
		die("Connection failed: ". $conn->connect_error);
	}
	?>


	<?php
	$sql ="Select codi,nom,descripcio, preu FROM productes where codi=$codi";
	$result = $conn-> query($sql);
	?>
	<?php
	if ($result ->num_rows >0){
	$row = $result->fetch_assoc();
		if($_COOKIE['idioma']=="ca"){
		echo "<p>
				<span>codi:</span>
				</p>  ". $row["codi"]. " 
				<p><span >Nom: </span> ".$row["nom"]." 
				<span >Descrpicio:</span>
				".$row["descripcio"]." 
				<span >preu </span>
				" .$row["preu"]."<br> 
				<a href='carreto.php?preu=".$row["preu"]."&codi=".$row["codi"]."'><img width='300px'height='300px' src='../.imatges/" .$row["codi"]. ".jpg'></a>
			</p>";
		}elseif($_COOKIE['idioma']=="es"){
			"<p>
				<span>codigo:</span>
				</p>  ". $row["codi"]. " 
				<p><span>Nombre: </span> ".$row["nom"]." 
				<span>Descrpicion:</span>
				".$row["descripcio"]." 
				<span>precio </span>
				" .$row["preu"]."<br> 
				<a href='carreto.php?preu=".$row["preu"]."&codi=".$row["codi"]."'><img width='300px'height='300px' src='../.imatges/" .$row["codi"]. ".jpg'></a>
			</p>";
		}
	}else{
		echo "0 results";
	}
	?>

	<?php
	$conn->close();
?>


</body>
</html>
<!DOCTYPE html>
<html lang="ca">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

</head>
<body>

	<?php
	$sql ="Select codi,nom,descripcio,preu,nom_es,descripcio_es FROM productes where codi=$codi";
	$result = $conn-> query($sql);
	?>
	<?php
	if ($result ->num_rows >0){
	$row = $result->fetch_assoc();
		if($_COOKIE['idioma']=="ca"){
		echo "<a href='canviaridioma2.php?codi=$codi'>Cambiar a castellano</a>
		<p>
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
			echo
			"<a href='canviaridioma.php?codi=$codi'>Canviar a catala </a>
			<p>
				<span>codigo:</span>
				</p>  ". $row["codi"]. " 
				<p><span>Nombre: </span> ".$row["nom_es"]." 
				<span>Descrpicion:</span>
				".$row["descripcio_es"]." 
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
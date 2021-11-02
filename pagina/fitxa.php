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
	$idiomaActual = 'es'; 
	// Si se ha seleccionado un idioma se guarda 
	// una cookie con el idioma 
	if(isset($_GET['idioma'])){ 
	  setcookie ("idioma", $_GET['idioma'], time () + 7*24*60*60); 
	  $idiomaActual = $_GET['idioma']; 
	} 
	elseif(isset($_COOKIE['idioma'])){ 
	// Miri que exista el archivo del idioma 
	  if(file_exists("lang/".$_COOKIE['idioma'].".php")){ 
		$idiomaActual = $_COOKIE['idioma']; 
	  } 
	} //incluye la carpeta (lang) donde estan los file php en y es etc.
	include($_SERVER['DOCUMENT_ROOT']."/lang/".$idiomaActual.".php"); 

	
	$codi=$_GET['codi'];
	include('config-db.php');
	$conn =new mysqli($servername, $username, $password, $dbname);

	if($conn->connect_error){
		die("Connection failed: ". $conn->connect_error);
	}
	?>
	<?php
echo $selcion_idioma['selecciona'];?>  
<select onChange="document.location = '<?php echo $_SERVER['PHP_SELF'];?>?idioma=' + this.value" > 
<option><?php echo $selcion_idioma['idiomas'];?>  
<option value="es" > <?php echo $selcion_idioma['cast'];?></option>  
<option value="cat" > <?php echo $selcion_idioma['cat'];?> </option>
</select><?php echo actual;?> 
	<?php
	$sql ="Select codi,nom,descripcio, preu FROM productes where codi=$codi";
	$result = $conn-> query($sql);
	?>
		<select onChange="document.location = '<?php echo $_SERVER['PHP_SELF'];?>?idioma=' + this.value"></select>
	<?php
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
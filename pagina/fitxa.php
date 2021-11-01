<!DOCTYPE html>
<html lang="cat">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<body>
<script>
	$('[lang]').hide();
	$('[lang="cat"]').show();
	$('#lang-switch').change(function () {
    var lang = $(this).val();
    switch (lang) {
        case 'cat':
            $('[lang]').hide();
            $('[lang="cat"]').show();
        break;
        case 'es':
            $('[lang]').hide();
            $('[lang="es"]').show();
        break;
        default:
            $('[lang]').hide();
            $('[lang="es"]').show();
        }
	});
	</script>
<form>
    <label for="lang-switch">
        <span lang="cat">Iidioma:</span>
        <span lang="es">Idioma</span>
    </label>
    <select id="lang-switch">
        <option value="es">Castellano</option>
        <option value="cat" selected>Catalan</option>
    </select>
</form>
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
				<span lang='es'>codigo:</span>
				<span lang='cat'>codi:</span>  ". $row["codi"]. " 
				<span lang='cat'>Nom: </span> 
				<span lang='es'>Nombre: </span>".$row["nom"]." 
				<span lang='cat'>Descrpicio:</span>
				<span lang='es'>Descrpicion:</span>".$row["descripcio"]." 
				<span lang='cat'>preu </span>
				<span lang='es'>precio </span>" .$row["preu"]."<br> 
				<img width='300px'height='300px' src='../.imatges/" .$row["codi"]. ".jpg'>
			</p>";	
	}else{
		echo "0 results";
	}
	$conn->close();
?>

</body>
</html>
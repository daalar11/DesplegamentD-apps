<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
		
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
	
<form>
    <label for="lang-switch">
        <span lang="cat">Iidioma</span>
        <span lang="es">Idioma</span>
    </label>
    <select id="lang-switch">
        <option value="es">Castellano</option>
        <option value="cat" selected>Catalan</option>
    </select>
</form>
<?php
$language ="";
setcookie("lang", $language);
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
		
		echo "<h1 lang='es'>codi:</h1>  <h1 lang='cat'>codi:</h1>". $row["codi"]. " <h1>Nom: </h1> ".$row["nom"]." <h4>Descrpicio:</h4>".$row["descripcio"]." <h4>preu</h4>" .$row["preu"]."<br> <img width='300px'height='300px' src='../.imatges/" .$row["codi"]. ".jpg'><br>";	
	}else{
		echo "0 results";
	}
	$conn->close();
?>
<script>
var langStr;

$('span[lang]').hide();
if (document.cookie.indexOf("lang=") >= 0) {
	langStr = document.cookie.indexOf("lang=");
	langStr = document.cookie.substring(langStr + 5, langStr + 7);
	$('#lang-switch option')
		.removeAttr('selected')
		.filter('[value=' + langStr + ']')
		.attr('selected', true);
	langStr = '[lang="' + langStr + '"]';
	console.log(langStr);
	$(langStr).show();
} else {
	// No cookie - show default language
	$("[lang='de']").show();
}

$('#lang-switch').change(function () {
	var CookieDate = new Date, tmp;
	CookieDate.setFullYear(CookieDate.getFullYear() +10);
	var lang = $(this).val();
	switch (lang) {
		case 'en':
			$('span[lang]').hide();
			$('span[lang="es"]').show();
			document.cookie = "lang=es; expires=" + CookieDate.toUTCString() + "; path=/";
			break;
		default:
			$('span[lang]').hide();
			$('span[lang="cat"]').show();
			document.cookie = "lang=cat; expires=" + CookieDate.toUTCString() + ";path=/";
	}
});
</script>
</body>
</html>
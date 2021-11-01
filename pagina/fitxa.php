<!DOCTYPE html>
<html lang="cat">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body>
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
	$("[lang='cat']").show();
}

$('#lang-switch').change(function () {
	var CookieDate = new Date, tmp;
	CookieDate.setFullYear(CookieDate.getFullYear() +10);
	var lang = $(this).val();
	switch (lang) {
		case 'es':
			$('span[lang]').hide();
			$('span[lang="es"]').show();
			document.cookie = "lang=es; expires=" + CookieDate.toUTCString() + "; path=/";
			break;
		default:
			$('span[lang]').hide();
			$('span[lang="ca"]').show();
			document.cookie = "lang=ca; expires=" + CookieDate.toUTCString() + ";path=/";
	}
	});
	</script>
<form>
    <label for="lang-switch">
        <span lang="ca">Iidioma:</span>
        <span lang="es">Idioma</span>
    </label>
    <select id="lang-switch">
        <option value="es">Castellano</option>
        <option value="ca" selected>Catalan</option>
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
				<span lang=\"es\">codigo:</span>
				<span lang=\"ca\">codi:</span>
				</p>  ". $row["codi"]. " 
				<p><span lang='ca'>Nom: </span> 
				<span lang='es'>Nombre: </span>".$row["nom"]." 
				<span lang='ca'>Descrpicio:</span>
				<span lang='es'>Descrpicion:</span>".$row["descripcio"]." 
				<span lang='ca'>preu </span>
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
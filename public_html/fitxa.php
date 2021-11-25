

<?php
	session_start();
 	$codi=$_GET['codi'];
	include('./utilitats/config-db.php');
	if(!isset($_COOKIE['idioma'])){
		function obtenerIidoma(){
			$idioma= substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2);
			return $idioma;
		}
		$idioma_usuario=obtenerIidoma();
		if($idioma_usuario !="es" and $lang !="ca"){
			$idioma_usuario="ca";
		}
		setcookie("idioma",$idioma_usuario);
	
		$_COOKIE['idioma']=$idioma_usuario;
	}


	$conn =new mysqli($servername, $username, $password, $dbname);

	if($conn->connect_error){
		die("Connection failed: ". $conn->connect_error);
	}
	include('./utilitats/header.php');
	include('./vistas/fitxavista.php');
	?>

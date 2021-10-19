<?php
// define variables and set to empty values
$codi=$_POST['codi'];
$nom=$_POST['nom'];
$descripcio=$_POST['desc'];
$preu=$_POST['preu'];

include('config-db.php');
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql ="INSERT INTO productes(codi,nom,descripcio,preu) values($codi,'$nom','$descripcio',$preu);";
  header ("refresh:2;url=form.html");
$conn->close();
?>

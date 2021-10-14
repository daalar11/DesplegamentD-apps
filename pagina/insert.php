<?php
// define variables and set to empty values
$codi="";
$nom="";
$descripcio="";
$preu="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codi = $_POST["codi"];
    $nom = $_POST["nom"];
    $descripcio= $_POST["desc"];
    $preu = $_POST["preu"];
  }
$servername ="localhost";
$username ="admin";
$password="admin";
$dbname="myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql ="insert into productes(codi,nom,desc,preu) values ('$codi','$nom','$descripcio',$preu);";
$result = $conn-> query($sql);

?>

<!DOCTYPE html>
<html lang="cat">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<link rel="stylesheet" href="/css/main.css">

</head>
<body>

<!-- <?php
include('config-db.php');
$conn =new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}
include('header.php');
$sql ="Select codi,nom,descripcio, preu FROM productes";
$result = $conn-> query($sql);

?>
<table>

</table>
<?php
if ($result ->num_rows >0){
	while($row = $result->fetch_assoc()){
	echo "<tr> <td>codi: ". $row["codi"]. "</td><td> ".$row["nom"]."</td><td> ".$row["descripcio"]." </td><td>" .$row["preu"]." </td><td><a href='fitxa.php?codi=".$row["codi"]."'><img width='300px' height'300px' src='../.imatges/" .$row["codi"]. ".jpg'></a></td> <tr>";
	}
}else{
echo "0 results";
}
$conn->close();
?>
-->
</body>
</html>
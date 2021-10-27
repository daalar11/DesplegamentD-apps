<?php
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
	echo "<tr> <td>codi: ". $row["codi"]. "</td><td> ".$row["nom"]."</td><td> ".$row["descripcio"]." </td><td>" .$row["preu"]."<a href='fitxa.php?codi=".$row["codi"]."'><img width='300px' height'300px' src='../.imatges/" .$row["codi"]. ".jpg'></a> <tr>";
	}
}else{
echo "0 results";
}
$conn->close();
?>
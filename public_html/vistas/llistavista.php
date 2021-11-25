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
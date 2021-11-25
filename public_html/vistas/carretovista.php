<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<?php
if ($result ->num_rows >0){
	while($row = $result->fetch_assoc()){
      
		foreach($_SESSION['carreto'] as $pip=>$value){
			if($row["codi"]==$value){
			echo "<div><img width='300px'height='300px' src='../.imatges/".$value.".jpg'>". $row['nom']." </div><hr>";
			$preutotal+=$row["preu"];
			}
		}
	}
	echo "Preu total:".$preutotal."euros";
}else{
echo "0 results";
}
?>
	<form action="destroy.php" method="post">  
        <input type="submit" value="comprar"/>
    </form>
	</body>
</html>
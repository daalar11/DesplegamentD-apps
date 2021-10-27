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
include('header.php');
?>
    <form action="insert.php" method="post">  
        Usuari:       <input type="text" name="usuari">
        Contraseña:   <input type="text" name="contraseña">
        <input type="submit" value="Insert"/>
    </form>

</body>
</html>
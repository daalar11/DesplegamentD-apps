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

    if (!isset($_COOKIE['count']))
    {
        ?> 
        <h1>Hola aixo ha estat la primera vegada que has vist la pagina </h1>
<?php 
        $cookie = 1;
        setcookie("count", $cookie);
    }
    else
    {
        $cookie = ++$_COOKIE['count'];
        setcookie("count", $cookie);
        ?> 
    <p>Has visitat la pagina</p> <?= $_COOKIE['count'] ?> <p>vegades. </p>

</body>
</html>
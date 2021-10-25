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
Welcome! This is the first time you have viewed this page. 
<?php 
        $cookie = 1;
        setcookie("count", $cookie);
    }
    else
    {
        $cookie = ++$_COOKIE['count'];
        setcookie("count", $cookie);
        ?> 
You have viewed this page <?= $_COOKIE['count'] ?> times. 
<?php  }// end else  ?>

</body>
</html>
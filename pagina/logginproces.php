<?php
$usuari='adminsitrador';
$contraseña='1234';
$usuariUs=$_POST['usuari'];
$contraseñaUs=$_POST['contraseña'];


if(strcmp($usuari==$usuariUs)===0&&strcmp($contraseñaUs==$contraseña)===0){
    header ("refresh:2;url=form.html");
}else{
    header ("refresh:2;url=loggin.php");
}
?>
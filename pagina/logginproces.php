<?php
$usuari='adminsitrador';
$contrasena='1234';
$usuariUs=$_POST['usuari'];
$contrasenaUs=$_POST['contrasena'];
echo "$usuariUs . $contrasenaUs";

if(strcmp($usuari,$usuariUs)===0&&strcmp($contrasenaUs,$contrasena)===0){
    //header ("refresh:2;url=form.html");
}else{
    //header ("refresh:2;url=loggin.php");
}
?>
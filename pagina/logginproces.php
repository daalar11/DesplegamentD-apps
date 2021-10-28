<?php
$usuari='adminsitrador';
$contrasena='1234';
$usuariUs=$_POST['usuari'];
$contrasenaUs=$_POST['contrasena'];
echo "$usuariUs . $contrasenaUs";

if(isset($usuariUs)&&isset($contrasenaUs)){
    if($usuariUs==$usuari&&$contrasena==$contrasenaUs){
         header ("refresh:2;url=form.html");
    }else{
         header ("refresh:2;url=form.html");
    }
    //header ("refresh:2;url=form.html");
}else{
    //header ("refresh:2;url=loggin.php");
}
?>
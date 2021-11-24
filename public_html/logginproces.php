<?php
$usuariUs=$_POST['usuari'];
$contrasenaUs=$_POST['contrasena'];



    if($usuariUs=="administrador"&&'1234'==$contrasenaUs){
         header ("refresh:2;url=form.html");
    }else{
         header ("refresh:2;url=loggin.php");
    }
    //header ("refresh:2;url=form.html");

?>
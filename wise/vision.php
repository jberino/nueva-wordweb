<?php
 $destino= " hugoadrian0276@gmail.com"
$nombre=$_POST["nombre"]
$correo=$_POST["correo"]
$telefono=$_POST["telefono"]
$mensaje=$_POST["mensaje"]
$contenido=$_POST["contenido"]
mail($destino,"Contacto",$contenido );
?>
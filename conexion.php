<?php

$servidor="localhost";
$usuario="root";
$password="";
$basededatos="pruebaragnaro";
//conectamos

$conexion = mysqli_connect($servidor, $usuario)or die("error con el servidor de la base de datos");
$bd = mysqli_select_db($conexion, $basededatos)or die("error al conectarse ala base de datos");

$nombre= $_POST['nombre'];
$apellido=$_POST['apellido'];
$Correo=$_POST['correo'];
$Contraseña=$_POST['contraseña'];
$NumTarjeta=$_POST['numTarjeta'];
$Edad=$_POST['edad'];
$Ciudad=$_POST['ciudad'];
$CodigoPostal=$_POST['codigoPostal'];
//sentencia sql

$sql="INSERT INTO datos  values ('$nombre', '$apellido', '$Correo', '$Contraseña', '$NumTarjeta', '$Edad', '$Ciudad', '$CodigoPostal')";
 $ejecutar = mysqli_query($conexion,$sql);
//verificamos
 if(!$ejecutar){
     echo "hubo error";

 }else{
     echo "datos guardados";
     
 }
   

?>
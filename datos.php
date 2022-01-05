<?php

// host: '127.0.0.1',localhost:3307
//port:'3306',
//user:'root',
//password:'root',
//database:'database_links'

//conectamos Con el servidor
$host ="127.0.0.1";
$user ="root";
$pass ="root";
$db="formulario";

//funcion llamada conexion con (dominio,usuarios,contraseña,base_de_datos)
$con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");

//recuperar las variables
$id_me = $_POST['id_me'];
$name_user = $_POST['name_user'];
$correo = $_POST['correo'];
$contraseña =$_POST['contraseña'];
$fechaNacimiento = $_POST['fechaInicial'];
$fechaIngreso = $_POST['fechafinal'];


//hacemos la sentencia de sql
$sql="INSERT INTO usuario VALUES('$id_me',
          NULL,
          '$name_user',
          '$correo',
          '$contraseña',
          '$fechaNacimiento',
          '$fechaIngreso')";
//ejecutamos la sentencia de sql
$ejecutar=mysqli_query($con,$sql);


//echo "$name_user, 'AGREGADO'";

?>
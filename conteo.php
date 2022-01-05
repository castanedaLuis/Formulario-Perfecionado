<?php
//conectamos Con el servidor
$host ="127.0.0.1";
$user ="root";
$pass ="root";
$db="formulario";

$con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");

//hacemos la sentencia de sql
$sql="SELECT COUNT(name_user) FROM `usuario` WHERE id_me = '10'";
//ejecutamos la sentencia de sql
$ejecutar=mysqli_query($con,$sql);

// 4) Ir Imprimiendo las filas resultantes
while ($fila = mysqli_fetch_array($ejecutar)){
   // echo "<p>";
   // echo $fila ["id_user"];
   // echo "-"; // un separador
   // echo $fila["name_user"];
   // echo "</p>";

   $arr[] = $fila;
}
echo json_encode($arr);
//echo "listo";

?>
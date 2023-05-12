<?php
$db_host="localhost";
$db_nombre="telovendo";
$db_usuario="root";
$db_password="";

$connection = mysqli_connect($db_host,$db_usuario,$db_password,$db_nombre);

//Se ejecuta siempre y cuando no haya exito al conectar a la base de datos
if(mysqli_connect_errno()){
    echo "Fallo al conectar con la BBDD";
    exit();
}

mysqli_select_db($connection, $db_nombre) or die("No se encuentra la BD");
mysqli_set_charset($connection, "utf8");

?>

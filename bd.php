<?php
$server="localhost";
$usuario="root";
$contraseña="";
$Bd="Proyecto";
$conexion=mysqli_connect($server,$usuario,$contraseña,$Bd);
if(!$conexion){
    die("Error, la bd no existe". mysqlie_connect_error());

}else {
    echo"CONEXION CON EXITO, Bienvenido";
}
?> 
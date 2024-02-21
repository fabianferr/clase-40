<?php
//# Conectamos con MySQL
require_once('../../../../php/conexion.php');
$nombre_usuario = $_REQUEST['nombre_usuario'];
$login_usuario = $_REQUEST['login_usuario'];
$pass_usuario = $_REQUEST['pass_usuario'];
$sql="insert into usuarios(nombre_usuario,login_usuario,
pass_usuario) VALUES ('".$nombre_usuario."','".$login_usuario."',
'".$pass_usuario."')";
$ret=$mysqli->query($sql);
$res="Mensaje No enviado";
if($ret==1){
$res="Usuario agregado satisfactoriamente";
}
$mysqli->close();
echo($res);
?>
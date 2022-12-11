<?php
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$cedula = $_POST['cedula'];
$telefono = $_POST['telefono'];
$ingreso = $_POST['ingreso'];

$user = "root";
$pass = '';
$host = "localhost";
$db = "registro1";

$connection = mysqli_connect($host, $user, $pass, $db);
$sql = "UPDATE datos set nombre = '$nombre', apellido = '$apellido', cedula = '$cedula', telefono = '$telefono', ingreso = '$ingreso' where id= $id";
$rta = mysqli_query($connection, $sql);
if (!$rta){
    echo "No se actualizó";
}else{
    header("location: info.php");
}
?>
<?php
$id = $_GET['id'];

$user = "root";
$pass = '';
$host = "localhost";
$db = "registro1";

$connection = mysqli_connect($host, $user, $pass, $db);
$sql = "DELETE FROM datos where id LIKE $id";
$rta = mysqli_query($connection, $sql);
if (!$rta){
    echo "No se eliminĂ³";
}else{
    header("location: info.php");
}
?>
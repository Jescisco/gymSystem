<?php
$user = "root";
$pass = '';
$host = "localhost";
$db = "registro1";

$connection = mysqli_connect($host, $user, $pass, $db);

$nombre=$_POST["nombre"];
$cedula=$_POST["cedula"];
$fechapago=$_POST["fecha"];

//Verificamos la conexion a la base de datos
if (!$connection){
    echo "No se ha podido conectar al servidor" . mysql_error();
}else{
    echo "<br><h3>Hemos conectado al servidor</h3></br>" ;
}

$db = mysqli_select_db($connection, $db);

if (!$db){
    echo "No se ha podido encontrar la tabla";
}else{
    echo "<h3>Tabla Seleccionada:</h3>";
}

$instruccion_SQL = "INSERT INTO asistencias(nombre, cedula, fechadeasistencia)
                    Values ('$nombre','$cedula','$fechapago')";

$resultado = mysqli_query($connection,$instruccion_SQL);
if(!$resultado){
    echo "No se insertó";
}else{
    header("location: opciones.php");
}

mysqli_close($connection);

//echo: Fuera
echo '<a href="Registro Usuarios.html">Volver al registro</a>';

?>
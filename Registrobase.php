<?php
$user = "root";
$pass = '';
$host = "localhost";

$connection = mysqli_connect($host, $user, $pass);

$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$cedula=$_POST["cedula"];
$telefono=$_POST["telf"];
$ingreso=$_POST["fecha"];

//Verificamos la conexion a la base de datos
if (!$connection){
    echo "No se ha podido conectar al servidor" . mysql_error();
}else{
    echo "<br><h3>Hemos conectado al servidor</h3></br>" ;
}

$datab = "registro1";
$db = mysqli_select_db($connection, $datab);

if (!$db){
    echo "No se ha podido encontrar la tabla";
}else{
    echo "<h3>Tabla Seleccionada:</h3>";
}

$instruccion_SQL = "INSERT INTO datos(nombre,apellido,cedula,telefono,ingreso)
                    Values ('$nombre','$apellido','$cedula','$telefono','$ingreso')";

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
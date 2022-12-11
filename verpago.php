<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/css/bootstrap.min.css' integrity='sha512-CpIKUSyh9QX2+zSdfGP+eWLx23C8Dj9/XmHjZY2uDtfkdLGo0uY12jgcnkX9vXOgYajEKb/jiw67EYm+kBf+6g==' crossorigin='anonymous'>
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Pagos</title>
</head>
<body class="bg-dark d-flex justify-content-center align-items-center ">

<div >
    <table border="1" class="tabla">
        <thead>
        <tr>
            <td>Id</td>
            <td>Nombre</td>
            <td>Cedula</td>
            <td>Feche de Pago</td>
            <td>Cantidad Cancelada</td>
        </tr>
        </thead>
        <?php
            $user = "root";
            $pass = '';
            $host = "localhost";
            $db = "registro1";

            $connection = mysqli_connect($host, $user, $pass, $db);
            $sql = "SELECT id, nombre, cedula, FechaPago, Cobro FROM cobranza order by id";
            $rta = mysqli_query($connection, $sql);
            while ($mostrar = mysqli_fetch_row($rta)){
            ?>
            <tr>
            <td><?php echo $mostrar['0']?></td>
            <td><?php echo $mostrar['1']?></td>
            <td><?php echo $mostrar['2']?></td>
            <td><?php echo $mostrar['3']?></td>
            <td><?php echo $mostrar['4']?></td>
            </tr>
            <?php
            }
            ?>
</table>
        <div class="mb-3">
        <button class="btn btn-primary w-100 text-uppercase fw-bold" onclick="location.href='Opciones.php'">Opciones</button>
        </div>
</div>
</body>
</html>
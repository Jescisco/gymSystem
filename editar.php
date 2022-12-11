<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/css/bootstrap.min.css' integrity='sha512-CpIKUSyh9QX2+zSdfGP+eWLx23C8Dj9/XmHjZY2uDtfkdLGo0uY12jgcnkX9vXOgYajEKb/jiw67EYm+kBf+6g==' crossorigin='anonymous'>
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <script src="js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body class="bg-dark d-flex justify-content-center align-items-center " style="height: 100vh">
<div class="containe bg-white rounded shadow p-4 col-xl-4 col-lg-6">
<?php
$id = $_GET['id'];
$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$cedula = $_GET['cedula'];
$telefono = $_GET['telefono'];
$ingreso = $_GET['ingreso'];

?>
        <h2 class="w-100 text-center mb-4">Modificar Datos</h2>
        <hr style="color: #9999" />

        <form action="peditar.php" id="registro" method="POST">
        <div class="mb-3">
                <label for="id" class="form-label">Id</label>
                <input type="text" class="form-control" name="id"  value="<?=$id?>" >
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre"  value="<?=$nombre?>" >
            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" name="apellido" value="<?=$apellido?>" >
            </div>
            <div class="mb-3">
                <label for="cedula" class="form-label">Cedula</label>
                <input type="text" name="cedula" value="<?php echo $cedula; ?>">
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Telefono</label>
                <input type="text" name="telefono" value="<?php echo $telefono; ?>">
            </div>
            <div class="mb-3">
                <label for="ingreso" class="form-label">Fecha de Ingreso</label>
                <input type="date" class="form-control" name="ingreso" value="<?=$ingreso?>">
            </div>
            <div class="mb-3 d-flex">
            <button type="submit" class="btn btn-dark w-100 text-uppercase fw-bold" name="envio">Actualizar</button>
            </div> 
            <hr style="color: #9999" />
            <aside class="btn btn-primary w-100 text-uppercase fw-bolder" onclick="location.href='opciones.php'" role="button" >Volver a Opciones</aside>
        </form> 
</div>
  
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/css/bootstrap.min.css' integrity='sha512-CpIKUSyh9QX2+zSdfGP+eWLx23C8Dj9/XmHjZY2uDtfkdLGo0uY12jgcnkX9vXOgYajEKb/jiw67EYm+kBf+6g==' crossorigin='anonymous'>
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <script src="js/bootstrap.min.js"></script>
    <title>Asistencias</title>
</head>
<body class="bg-dark d-flex justify-content-center align-items-center " style="height: 100vh">
    <div class="containe bg-white rounded shadow p-4 col-xl-4 col-lg-6">
        <h2 class="w-100 text-center mb-4"> Registro de Asistencias</h2>
        <hr style="color: #9999" />

        <form action="apuntarasistencia.php" id="registro" method="POST">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" placeholder="Ingrese el Nombre" required>
            </div>
            <div class="mb-3">
                <label for="cedula" class="form-label">Cedula</label>
                <input type="number" class="form-control" name="cedula" placeholder="Ingrese la Cedula" required>
            </div>
            <div class="mb-3">
                <label for="fecha" class="form-label">Fecha Asistencia</label>
                <input type="date" class="form-control" name="fecha" placeholder="Ingrese la Fecha" required>
            </div>
            <div class="mb-3 d-flex">
            <button type="submit" class="btn btn-secondary w-50 text-uppercase fw-bold">Enviar</button>
            <button type="reset" class="btn btn-dark w-50 text-uppercase fw-bold">Limpiar</button>
            </div> 
            <hr style="color: #9999" />
            <aside class="btn btn-primary w-100 text-uppercase fw-bolder" onclick="location.href='opciones.php'" role="button" >Volver a Opciones</aside>
        </form>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/css/bootstrap.min.css' integrity='sha512-CpIKUSyh9QX2+zSdfGP+eWLx23C8Dj9/XmHjZY2uDtfkdLGo0uY12jgcnkX9vXOgYajEKb/jiw67EYm+kBf+6g==' crossorigin='anonymous'>
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <script src="js/bootstrap.min.js"></script>
    <title>Busqueda</title>
</head>
<body class="bg-dark d-flex justify-content-center align-items-center " style="height: 100vh">
    <div class="containe bg-white rounded shadow p-4 col-xl-4 col-lg-6">
        <h2 class="w-100 text-center mb-4">Buscar Usuario</h2>
        <hr style="color: #9999" />
        <form action="buscar.php" method="GET">
        <div class="mb-3">
                <label for="cedu" class="form-label">Ingrese la Cedula</label>
                <input type="number" class="form-control" name="cedula" value="cedula" required>
        </div>
        <input type="submit" class="btn btn-dark w-100 text-uppercase fw-bold">
        </form>
        <br>
        <aside class="btn btn-secondary w-100 text-uppercase fw-bolder" onclick="location.href='opciones.php'" role="button" >Volver a Opciones</aside>
    </div>
</body>
</html>


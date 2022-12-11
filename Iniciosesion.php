<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/css/bootstrap.min.css' integrity='sha512-CpIKUSyh9QX2+zSdfGP+eWLx23C8Dj9/XmHjZY2uDtfkdLGo0uY12jgcnkX9vXOgYajEKb/jiw67EYm+kBf+6g==' crossorigin='anonymous'>
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <script src="js/bootstrap.min.js"></script>
    <title>Gym</title>
</head>

<body class="bg-dark d-flex justify-content-center align-items-center " style="height: 100vh" id="img">

    <div class="containe bg-white rounded shadow p-4 col-xl-4 col-lg-6">

        <h2 class="w-100 text-center mb-4">Iniciar Sesión</h2>
        <hr style="color: #9999" >

        <form action="valida.php" id="formulario" method="post">

            <div class="mb-3">
                <label for="txt_usuario" class="form-label">Usuario</label>
                <input type="text" class="form-control" id="usu" name="usuario" placeholder="Usuario" required>
            </div>
            <div class="mb-3">
                <label for="txt_contra" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="contra" name="pass" placeholder="Contraseña" required>
            </div>

            <input type="submit" class="btn btn-primary w-100 text-uppercase fw-bold" name="enviar" value="Iniciar">

        </form>

    </div>

</body>
</html>
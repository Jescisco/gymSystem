<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

try{

    $base=new PDO("mysql:host=localhost; dbname=registro1" , "root", "");
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql="SELECT * FROM usuarios_pass WHERE USUARIOS= :usuario AND PASSWORD= :pass";
    $resultado=$base->prepare($sql);
    $login=htmlentities(addslashes($_POST["usuario"]));
    $pass=htmlentities(addslashes($_POST["pass"]));
    $resultado->bindValue(":usuario", $login);
    $resultado->bindValue(":pass", $pass);
    $resultado->execute();
    $numero_registro=$resultado->rowCount();

    if($numero_registro!=0){
        
        session_start();

        $_SESSION["login"]=$_POST["usuario"];

        header("location:Opciones.php");

    }else{
        
        header("location:iniciosesion.php");

    }

}catch(Exception $e){
    die("Error: " . $e->getMessage());
}

?>
    
</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: Lalo
 * Date: 4/11/15
 * Time: 11:51 AM
 */

include("profile_controller.php");

$correo = $_GET['correo'];
$usuario = retrieveUserData("prueba@prueba.com");

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="../osham/css/bootstrap.min.css" rel="stylesheet">

    <title>Perfil</title>

</head>
<body>
<div class="container">
    <div class="col-md-8">
        <h1><?php echo $usuario["nombre"]?></h1>
        <h4><?php echo $usuario["edad"]?></h4>
        <h4><?php echo $usuario["genero"]?></h4>
        <p><?php echo $usuario["bio"]?></p>
    </div>
    <div class="col-md-4">
        <div class="col-md-12">
            <img style="max-height: 250px" src="../osham/images/placeholder.jpeg" class="img-responsive img-circle center-block">
        </div>
        <br>
        <div class="col-md-12">
            <button class="btn btn-lg btn-primary center-block">Editar</button>
        </div>
    </div>
</div>
</body>
</html>

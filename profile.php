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
    <link href="../osham/css/profile.css" rel="stylesheet">

    <title>Perfil</title>

</head>
<body>

<!--<div class="container">
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
</div>-->

<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="card hovercard">
                <div class="cardheader" style="background-image: url("data:image/jpeg;base64,<?php echo base64_encode($usuario["imagenPortada"]); ?>");">

                </div>
                <div class="avatar">
                    <img src="data:image/jpeg;base64,<?php echo base64_encode($usuario["imagenPerfil"]); ?>" />
                </div>
                <div class="info">
                    <div class="title">
                        <?php echo $usuario["nombre"]?>
                    </div>
                    <div class="desc"><?php echo $usuario["edad"]?> <?php echo $usuario["genero"]?></div>
                    <div class="desc"><?php echo $usuario["bio"]?></div>
                </div>
                <div class="bottom">
                    <a class="btn btn-primary btn-twitter btn-sm" href="editar_perfil.php?correo=<?php $usuario["correo"]?>">
                        Editar
                    </a>
                </div>
            </div>

        </div>

    </div>
</div>
</body>
</html>

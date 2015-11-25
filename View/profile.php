<?php
/**
 * Created by PhpStorm.
 * User: Lalo
 * Date: 4/11/15
 * Time: 11:51 AM
 */

include("../Controller/ControladorProfile.php");

$correo = $_GET['correo'];
$usuario = retrieveUserData($correo);

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/profile.css" rel="stylesheet">

    <title>Perfil</title>

</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="card hovercard">
                <div class="cardheader" style="background-image: url(<?php echo '../images/' . $usuario['imagenPortada']?>);">
                </div>
                <div class="avatar">
                   <img src="<?php echo "../images/" . $usuario["imagenPerfil"]?>" />
                </div>
                <div class="info">
                    <div class="title">
                        <?php echo $usuario["nombre"]?>
                    </div>
                    <div class="desc"><?php echo $usuario["edad"]?> <?php echo $usuario["genero"]?></div>
                    <div class="desc"><?php echo $usuario["bio"]?></div>
                </div>
                <div class="bottom">
                    <a class="btn btn-primary btn-twitter btn-sm" href="editarPerfil.php?correo=<?php echo $correo?>">
                        Editar
                    </a>
                    <a class="btn btn-primary btn-twitter btn-sm" href="login.php">
                        Cerrar sesion
                    </a>
                    <?php
                    if ($usuario["confirmado"] == '0'){
                        echo "<br> <br>";
                        echo "<form action='../Controller/ControladorConfirmaCorreo.php'>";
                        echo "Codigo de confirmacion de correo <input type='text' name='codigoConfirma'> ";
                        echo "<input type='hidden' name='correo' value='$correo'>";
                        echo "<input type='submit' value='confirmar'>";
                        echo "</form>";
                    }
                    ?>
                </div>
            </div>

        </div>

    </div>
</div>
</body>
</html>

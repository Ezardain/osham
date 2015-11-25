<?php
/**
 * Created by PhpStorm.
 * User: Ricky
 * Date: 24/11/2015
 * Time: 04:38 PM
 */

include("../Controller/ControladorProfile.php");

$correo = $_GET['correo'];
$usuario = retrieveUserData($correo);

?>
<html>
<head>
    <meta charset="UTF-8">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <title>Editar Perfil</title>
</head>
<body>
<div class="container">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <form method="post" class="form-signin" action="../Controller/ControladorEditarPerfil.php" enctype="multipart/form-data">
            <label for="nombre">Nombre: </label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $usuario["nombre"]?>"/>
            <label for="correo">Correo Electronico: </label>
            <input type="text" id="correo" name="correo" class="form-control" value="<?php echo $correo?>" readonly/>
            <label for="edad">Edad: </label>
            <input type="number" name="edad" id="edad" min="0" class="form-control" value="<?php echo $usuario["edad"]?>">

            <label for="biografia">Biografia: </label>
            <textarea name="biografia" id="biografia" class="form-control"><?php echo $usuario["bio"]?></textarea>

            <label for="imagenPerfil">Imagen Perfil</label>
            <img src="<?php echo "images/" . $usuario["imagenPerfil"] ?>" class="img-responsive">
            <input type="file" name="imagenPerfil" accept="image/*"/>

            <label for="imagenPortada">Imagen Portada</label>
            <img src="<?php echo "images/" . $usuario["imagenPortada"]?>" class="img-responsive">
            <input type="file" name="imagenPortada" accept="image/*"/>

            <button class="btn btn-lg btn-primary" type="submit">Editar</button>
        </form>
    </div>
</div>
</body>
</html>

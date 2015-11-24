<?php
/**
 * Created by PhpStorm.
 * User: Ricky
 * Date: 24/11/2015
 * Time: 04:38 PM
 */

include("profile_controller.php");

$correo = $_GET['correo'];
$usuario = retrieveUserData("prueba@prueba.com");

?>
<html>
<head>
    <meta charset="UTF-8">
    <link href="../osham/css/bootstrap.min.css" rel="stylesheet">
    <title>Editar Perfil</title>
</head>
<body>
<div class="container">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <form class="form-signin">
            <label for="nombre">Nombre: </label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $usuario["nombre"]?>"/>
            <label for="correo">Correo Electronico: </label>
            <input type="email" id="correo" name="correo" class="form-control" value="<?php echo $usuario["correo"]?>" disabled />
            <label for="edad">Edad: </label>
            <input type="number" name="edad" id="edad" min="0" class="form-control" value="<?php echo $usuario["edad"]?>">

            <label for="biografia">Biografia: </label>
            <textarea name="biografia" id="biografia" class="form-control"><?php echo $usuario["bio"]?></textarea>

            <label for="imagenPerfil">Imagen Perfil</label>
            <img src="data:image/jpeg;base64,<?php echo base64_encode($usuario["imagenPerfil"]); ?>" class="img-responsive">
            <input type="file" name="imagenPerfil" accept="image/*"/>

            <label for="imagenPortada">Imagen Perfil</label>
            <img src="data:image/jpeg;base64,<?php echo base64_encode($usuario["imagenPortada"]); ?>" class="img-responsive">
            <input type="file" name="imagenPortada" accept="image/*"/>
        </form>
    </div>
</div>
</body>
</html>

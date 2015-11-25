<?php
/**
 * Created by PhpStorm.
 * User: Lalo
 * Date: 4/11/15
 * Time: 11:24 AM
 */

?>

<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <link href="../osham/css/bootstrap.min.css" rel="stylesheet">

    <title>Registro</title>

</head>
<body>
<div class="container">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <form method="post" class="form-signin" action="controlador_signup.php" enctype="multipart/form-data">
            <h3>Registrate</h3>
            <label for="name">Nombre</label>
            <input name="name" id="inputName" class="form-control" required>

            <label for="email">Correo Electronico Gmail</label>
            <input name="email" type="email" id="inputEmail" class="form-control" required>

            <label for="password">Password</label>
            <input name="password" type="password" id="inputPassword" class="form-control" required>

            <label for="age">Edad</label>
            <input type="number" name="age" id="inputAge" class="form-control" required>

            <label for="gender">Genero</label>
            <input type="radio" name="gender"  value="F" checked>Femenino
            <input type="radio" name="gender"  value="M">Masculino

            <br/>
            <label for="imagenPerfil">Imagen de Perfil</label>
            <input type="file" name="imagenPerfil">

            <label for="imagenPortada">Imagen de Portada</label>
            <input type="file" name="imagenPortada">

            <label for="bio">Bio</label>
            <textarea name="bio" id="inputBio" class="form-control" required></textarea>
            <br>
            <button class="btn btn-lg">Cancelar</button>
            <button class="btn btn-lg btn-primary pull-right" type="submit">Registrar</button>
        </form>
    </div>
</div>
</body>
</html>

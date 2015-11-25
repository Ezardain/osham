<?php
/**
 * Created by PhpStorm.
 * User: Lalo
 * Date: 4/11/15
 * Time: 11:07 AM
 */

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <title>Login</title>

</head>
<body>
    <div class="container">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form class="form-signin" action="../Controller/ControladorLogin.php" method="post">
                <h3>Iniciar Sesion</h3>
                <label for="email">Correo Electronico Gmail</label>
                <input type="email" name="inputEmail" id="inputEmail" class="form-control">
                <label for="password">Password</label>
                <input type="password" name="inputPassword" id="inputPassword" class="form-control">
                <a href="recuperaPsw.php">¿Olvidaste tu contraseña?</a>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
            </form>

            <a href="register.php">¿No tienes cuenta? Regístrate hoy.</a>

        </div>
    </div>
</body>
</html>

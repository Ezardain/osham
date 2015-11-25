<?php
/**
 * Created by PhpStorm.
 * User: Angela Romo
 * Date: 24/11/2015
 * Time: 07:28 PM
 */

?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link href="../osham/css/bootstrap.min.css" rel="stylesheet">

        <title>Login</title>
    </head>
    <body>
        <div class="container">
            <div class="col-md-4"></div>
                <div class="col-md-4">
                    <form class="recuperaPsw" action="ControladorRecuperaPsw.php" method="post">
                        <h3>Recupera tu contraseña.</h3>
                        <label for="email">Correo Electronico Gmail</label>
                        <input type="email" name="email" id="inputEmail">

                        <button class="btn btn-lg btn-primary btn-block" type="submit">Enviar nueva contraseña</button>

                    </form>
                </div>
            </div>
        </div>
    </body>
</html>

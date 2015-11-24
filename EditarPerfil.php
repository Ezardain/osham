<?php
/**
 * Created by PhpStorm.
 * User: Ricky
 * Date: 24/11/2015
 * Time: 04:38 PM
 */
?>
<html>
<head>
    <title>Editar Perfil</title>
</head>
<body>
    <form>
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" id="nombre" class="form-control" />
        <br />
        <label for="correo">Correo Electronico: </label>
        <input type="email" id="correo" name="correo" class="form-control" disabled />
        <br />
        <label for="edad">Edad: </label>
        <input type="number" name="edad" id="edad" min="0" class="form-control">
        <br />
        <label for="genero">Genero: </label>
        <select name="genero" id="genero">
            <option>Masculino</option>
            <option>Femenino</option>
        </select>
        <br />
        <label for="biografia">Biografia: </label>
        <textarea name="biografia" id="biografia" class="form-control"></textarea>
        <br />
    </form>
</body>
</html>

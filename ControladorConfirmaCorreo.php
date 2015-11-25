<?php
/**
 * Created by PhpStorm.
 * User: Angela Romo
 * Date: 24/11/2015
 * Time: 08:57 PM
 */

$codigo = $_GET['codigoConfirma'];
$correo = $_GET['correo'];
$mysqli = new mysqli("localhost", "root", "", "osham");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL:(" . $mysqli->connect_errno . ") " .
        $mysqli->connect_error;
}
$query = "Update usuario set confirmado = '1' where codigoConfirmacion = '$codigo'";
$resultDatos = $mysqli->query($query);
header("Location: profile.php?correo=$correo");
die();
?>
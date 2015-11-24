<?php
/**
 * Created by PhpStorm.
 * User: Angela Romo
 * Date: 24/11/2015
 * Time: 01:01 PM
 */
$name=$_POST["name"];
$email=$_POST["email"];
$password=md5($_POST["password"]);
$age=$_POST["age"];
$gender=$_POST["gender"];
$imagenPerfil = addslashes(file_get_contents($_FILES['imagenPerfil']['tmp_name']));
$imagenPortada = addslashes(file_get_contents($_FILES['imagenPortada']['tmp_name']));
$bio=$_POST["bio"];

if(trim($name) != "" && trim($email) != "" &&
    trim($password) != "" && trim($age) != "" &&
    trim($gender) != ""  &&trim($bio) != ""){


    $mysqli = new mysqli("localhost", "root", "", "osham");
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL:(" . $mysqli->connect_errno . ") " .
            $mysqli->connect_error;
    }

    $query = "INSERT INTO usuario (nombre,correo,edad,genero,hashPassword,imagenPerfil,imagenPortada,bio, confirmado, codigoConfirmacion) VALUES ('"
        . $name . "', '" .$email ."', '" .$age . "', '" .$gender . "', '" .$password . "', '{$imagenPerfil}', '{$imagenPortada}', '" . $bio . "', '0'
        , '" . $email . rand(). "')";

    $resultDatos = $mysqli->query($query);
    echo "<h1> Datos Registrados</h1>";

}


?>


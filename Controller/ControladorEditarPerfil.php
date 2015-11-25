<?php
/**
 * Created by PhpStorm.
 * User: Lalo
 * Date: 24/11/15
 * Time: 5:50 PM
 */
$nombreDirectorio = "../images/";

$name=$_POST["nombre"];
$email=$_POST["correo"];
$age=$_POST["edad"];

$bio=$_POST["biografia"];

try {
    $DBH = new PDO("mysql:host=localhost;dbname=osham", "root", "");
    $DBH->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = "UPDATE usuario SET nombre='$name', edad=$age, bio='$bio' WHERE correo='$email'";
    $DBH->exec($query);

    if (file_exists($_FILES['imagenPerfil']['tmp_name'])) {
        $nombreArchivoPerfil = $_FILES['imagenPerfil']['name'];
        $nombreArchivoPerfil = preg_replace("/[\s_]/", "-", $nombreArchivoPerfil);
        $nombreArchivoPerfil = time() . "-" . $nombreArchivoPerfil;
        move_uploaded_file ($_FILES['imagenPerfil']['tmp_name'], $nombreDirectorio . $nombreArchivoPerfil);
        $queryProfilePic = "UPDATE usuario SET imagenPerfil='{$nombreArchivoPerfil}' WHERE correo='$email'";
        echo $queryProfilePic;
        $DBH->exec($queryProfilePic);
    }

    if (file_exists($_FILES['imagenPortada']['tmp_name'])) {
        $nombreArchivoPortada = $_FILES['imagenPortada']['name'];
        $nombreArchivoPortada = preg_replace("/[\s_]/", "-", $nombreArchivoPortada);
        $nombreArchivoPortada = time() . "-" . $nombreArchivoPortada;
        move_uploaded_file ($_FILES['imagenPortada']['tmp_name'], $nombreDirectorio . $nombreArchivoPortada);
        $queryPortada = "UPDATE usuario SET imagenPortada='{$nombreArchivoPortada}' WHERE correo='$email'";
        $DBH->exec($queryPortada);
    }

} catch (PDOException $e) {
    echo $e->getMessage();
}
$DBH = null;



header("Location: ../View/profile.php?correo=" . $email);
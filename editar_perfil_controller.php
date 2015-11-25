<?php
/**
 * Created by PhpStorm.
 * User: Lalo
 * Date: 24/11/15
 * Time: 5:50 PM
 */


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
        $imagenPerfil = addslashes(file_get_contents($_FILES['imagenPerfil']['tmp_name']));
        $queryProfilePic = "UPDATE usuario SET imagenPerfil='{$imagenPerfil}' WHERE correo='$correo'";
        echo $queryProfilePic;
        $DBH->exec($queryProfilePic);
    }

    if (file_exists($_FILES['imagenPortada']['tmp_name'])) {
        $imagenPortada = addslashes(file_get_contents($_FILES['imagenPortada']['tmp_name']));
        $queryPortada = "UPDATE usuario SET imagenPortada='{$imagenPortada}' WHERE correo='$correo'";
        echo $queryPortada;
        $DBH->exec($queryPortada);
    }

} catch (PDOException $e) {
    echo $e->getMessage();
}
$DBH = null;



//header("Location: profile.php?correo=" . $email);
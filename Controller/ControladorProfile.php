<?php
/**
 * Created by PhpStorm.
 * User: Lalo
 * Date: 24/11/15
 * Time: 12:51 PM
 */

//Profile Controller

function retrieveUserData($correo) {
    try {
        $DBH = new PDO("mysql:host=localhost;dbname=osham", "root", "");

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $query = "SELECT * FROM usuario WHERE correo='$correo'";
    $result = $DBH->query($query);
    $row = $result->fetch(PDO::FETCH_ASSOC);
    $DBH = null;
    return $row;
}


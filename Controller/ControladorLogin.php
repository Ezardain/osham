<?php
/**
 * Created by PhpStorm.
 * User: Ricky
 * Date: 24/11/2015
 * Time: 12:33 PM
 */

$email = $_POST['inputEmail'];
$hashPassword = md5($_POST['inputPassword']);

function login($email, $hashPassword)
{
    try {
        $DBH = new PDO("mysql:host=localhost;dbname=osham", "root", "");
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $query = "SELECT * FROM usuario WHERE correo='$email' AND hashPassword='$hashPassword'";
    $result = $DBH->query($query);
    $success = false;
    if ($result->fetch(PDO::FETCH_ASSOC)) {
        $success = true;
    }
    $DBH = null;
    return $success;
}

if (login($email, $hashPassword)) {
    header("Location: ../View/profile.php?correo=".$email);
    die();
} else {
    ?>
    <html>
    <head>
        <title>
            Login incorrecto
        </title>
    </head>
    <body>
    <p>Login incorrecto.</p>
    <p><a href="../View/login.php">Regresar</a></p>
    </body>
    </html>
    <?php
}
?>
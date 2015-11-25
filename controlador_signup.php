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
$imagenPerfil = addslashes(@file_get_contents($_FILES['imagenPerfil']['tmp_name']));
$imagenPortada = addslashes(@file_get_contents($_FILES['imagenPortada']['tmp_name']));
$bio=$_POST["bio"];

if($imagenPerfil === FALSE) {
    $imagenPerfil = null;
}

if($imagenPortada === FALSE) {
    $imagenPortada = null;
}

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
    echo "<h1> Tus datos han sido registrados. Bienvenido a Osham.</h1>";

    require("PHPMailer-master/PHPMailerAutoload.php");
    $mail = new PHPMailer();
    //$mail -> SMTPDebug=1;
    $mail->IsSMTP(); //send via SMTP
    $mail->SMTPSecure = 'tls';
    $mail->Host = "tls://smtp.gmail.com:587"; //SMTP servers
    $mail->Port= 587;
    $mail->SMTPAuth= true; //turn on SMTP authentication
    $mail->Username="proyecto.dawad2015@gmail.com"; //SMTP username
    $mail->Password="dawad2015php"; //SMTP password
    $mail->From = "proyecto.dawad2015@gmail.com";
    $mail->FromName = "Equipo Osham";
    $mail->AddAddress($email,$name); //Recipients name
    $mail->AddReplyTo("proyecto.dawad2015@gmail.com","Equipo Osham"); //Senders name
    $mail->WordWrap = 50; //set word wrap
    $mail->IsHTML(true); //send asHTML
    $mail->Subject = "Bienvenido a Osham";
    $mail->Body = "<p> Este es tu codigo de confirmacion de correo electrónico:" . $email . rand() . "</p>
        <p> Por favor, ingresa este código en tu perfil para completar tu registro.  </p>
        <p> Atentamente,</p> <p> Equipo Osham</p> ";
    if(!$mail->Send()){
        echo "Message was not sent";
        echo "Mailer Error:".$mail->ErrorInfo;
        exit;
    }
    echo "Se ha enviado un mensaje de confirmacion de correo electronico a tu cuenta. <br>";
    echo "<a href='login.php'> Ir a Login</a>";
}


?>


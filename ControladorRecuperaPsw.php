<?php
/**
 * Created by PhpStorm.
 * User: Angela Romo
 * Date: 24/11/2015
 * Time: 07:33 PM
 */
$email = $_POST["email"];


$mysqli = new mysqli("localhost", "root", "", "osham");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL:(" . $mysqli->connect_errno . ") " .
        $mysqli->connect_error;
}
//comprobar que mail exista
$query = "select * from usuario where correo = '" . $email . "'";
$existe = false;
$resultDatos = $mysqli->query($query);
$existe = $resultDatos->fetch_assoc();
if ($existe) {
    // generar nueva contraseña, actualizar bd y mandar correo
    $nuevapsw = rand() . "" . rand();
    $query = "update usuario set hashPassword = '" . md5($nuevapsw). "' where correo = '" . $email ."'";
    $result = $mysqli->query($query);

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
    $mail->AddAddress($email,"Usuario Osham"); //Recipients name
    $mail->AddReplyTo("proyecto.dawad2015@gmail.com","Equipo Osham"); //Senders name
    $mail->WordWrap = 50; //set word wrap
    $mail->IsHTML(true); //send asHTML
    $mail->Subject = "Nueva contraseña en Osham";
    $mail->Body = "<p> Este es tu nueva contraseña:" . $nuevapsw . "</p>";
    if(!$mail->Send()){
        echo "Message was not sent";
        echo "Mailer Error:".$mail->ErrorInfo;
        exit;
    }
    echo "Se ha enviado una nueva contraseña a tu correo. Intenta ingresar nuevamente. <br>";
    echo "<a href='login.php'> Ir a Login</a>";

}

?>
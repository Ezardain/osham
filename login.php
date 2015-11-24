<?php
/**
 * Created by PhpStorm.
 * User: Lalo
 * Date: 4/11/15
 * Time: 11:07 AM
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
            <form class="form-signin">
                <h3>Iniciar Sesion</h3>
                <label for="email">Correo Electronico</label>
                <input type="email" id="inputEmail" class="form-control">
                <label for="password">Password</label>
                <input type="password" id="inputPassword" class="form-control">
                <button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>

            </form>
        </div>
    </div>
    <?php
    require("/PHPMailer-master/PHPMailerAutoload.php");
    $mail = new PHPMailer();
    //$mail -> SMTPDebug=1;
    $mail->IsSMTP(); //send via SMTP
    $mail->SMTPSecure = 'tls';
    $mail->Host = "tls://smtp.gmail.com:587"; //SMTP servers
    $mail->Port= 587;
    $mail->SMTPAuth= true; //turn on SMTP authentication
    $mail->Username="user@gmail.com"; //SMTP username
    $mail->Password=""; //SMTP password
    $mail->From = "cesar.ruben.alex@gmail.com";
    $mail->FromName = "Usuario";
    $mail->AddAddress("angela.9412@gmail.com","destinatario"); //Recipients name
    $mail->AddReplyTo("cesar.ruben.alex@gmail.com","usuario"); //Senders name
    $mail->WordWrap = 50; //set word wrap
    $mail->IsHTML(true); //send asHTML
    $mail->Subject = "Probando mail";
    $mail->Body = "<h1> This is the HTML body from XAMPP </h1>";
    if(!$mail->Send()){
        echo "Message was not sent";
        echo "Mailer Error:".$mail->ErrorInfo;
        exit;
    }
    echo "Message has been sent";
    ?>
</body>
</html>

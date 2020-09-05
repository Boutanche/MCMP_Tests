<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './vendor/PHPMailer-master/src/Exception.php';
require './vendor/PHPMailer-master/src/PHPMailer.php';
require './vendor/PHPMailer-master/src/SMTP.php';

//
//Vieille Fonction qui sert surtout à voir ce qui se passe avec une fonction hash.
// Elle reste ici pour complexifier les password.
function My_Crypt($password){
    //on peut utiliser une boucle pour de 64 et remelanger les lettres ?
    //on peut ajouter un Salt (un mot secret) a concatener avec pass word ?
    //puis peut etre creer une fonction decript du salt ?
    return hash ('sha256', $password);
}

//
function Mi_Mail($Omail,$name,$objet,$message){
    $mail = new PHPMailer(true);                                      // Passing `true` enables exceptions
    try {
        //Server settings
        $mail->SMTPDebug = 2;                                                  // Enable verbose debug output
        $mail->isSMTP();                                                       // Set mailer to use SMTP
        $mail->Host = 'smtp-relay.sendinblue.com';                                     // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                                                // Enable SMTP authentication
        $mail->Username = 'davy.blavette@2isa.com';                  // SMTP username
        $mail->Password = ' xsmtpsib-a8e31f4c3e068fc3ba10895b12fb9d5f2637da16cccc8d08b854895e6ae207f1-da2qWKSHcm7IxzCg';                  // SMTP password
        $mail->SMTPSecure = 'tls';                                             // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                                     // TCP port to connect to

        //Recipients
        $mail->setFrom($Omail, $name);
        $mail->addAddress('davy.blavette@2isa.com', 'Davy Blavette');     // Add a recipient
        $mail->addAddress('benoit.bertrand@2isa.org');                                 // Name is optional
        $mail->addReplyTo('no_reply@gmail.com', 'pas de reponse');
//    $mail->addCC('jean-yves.fontenil@2isa.org');
//    $mail->addBCC('pauline.ivaldi-rancurel@2isa.org');

        //Attachments
//    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $objet;
        $mail->Body = $message;
//    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
}

<?php

require("vendor/autoload.php");

use PHPMailer\PHPMailer\PHPMailer;


function sendEmail($subject, $body, $email, $name, $html = false){

    // Initial configuration of the mail server
    $phpmailer = new PHPMailer();
    $phpmailer->isSMTP();
    $phpmailer->Host = 'smtp.gmail.com';
    $phpmailer->SMTPAuth = true;
    $phpmailer->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $phpmailer->Port = 465;             // Setting a secure port
    $phpmailer->Username = 'danielsaytcode@gmail.com';
    $phpmailer->Password = 'contraxd';

    // Recipients
    $phpmailer->setFrom('contact@miempresa.com', 'Mi empresa');         // The one who sends the mail
    $phpmailer->addAddress($email, $name);     //Add a recipient

    // Defining the content of the email
    $phpmailer->isHTML($html);                                  //Set email format to HTML
    $phpmailer->Subject = $subject;
    $phpmailer->Body    = $body;
    # $phpmailer->AltBody = 'This is the body in plain text for non-HTML mail clients';

    // Sending the email 📧
    $phpmailer->send();
}

?>
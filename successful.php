<?php

require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$stripe = \Stripe\Stripe::setApiKey('');

$session_id = $_GET['session_id'];

$session = \Stripe\Checkout\Session::retrieve($session_id);
$email = $session->customer_details->email;
$name = $session->customer_details->name;

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = '';
    $mail->SMTPAuth   = true;
    $mail->Username   = '';  
    $mail->Password   = '';
    $mail->Port       = 2525;

    $mail->setFrom('noreply@madameirma.com', 'Madame Irma 🔮');
    $mail->addAddress($email , $name);

    $mail->Subject = 'Votre avenir est revele !';
    $mail->Body    = "Merci pour votre paiement.";

    $mail->send();
    echo 'Email envoyé.';
} catch (Exception $e) {
    echo "Le mail n'as ete envoye. Mailer Error: {$mail->ErrorInfo}";
}

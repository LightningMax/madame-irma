<?php
require_once __DIR__ . '/bootstrap.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$stripe = \Stripe\Stripe::setApiKey($_ENV['STRIPE_KEY']);

$session_id = $_GET['session_id'];

$session = \Stripe\Checkout\Session::retrieve($session_id);
$email = $session->customer_details->email;
$name = $session->customer_details->name;

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = $_ENV['SMTP_HOST'];
    $mail->SMTPAuth   = true;
    $mail->Username   = $_ENV['SMTP_USERNAME'];  
    $mail->Password   = $_ENV['SMTP_PASSWORD'];
    $mail->Port       = $_ENV['SMTP_PORT'];

    $mail->setFrom('noreply@madameirma.com', 'Madame Irma 🔮');
    $mail->addAddress($email , $name);

    $mail->Subject = 'Votre avenir est revele !';
    $mail->Body    = "Merci pour votre paiement.";

    $mail->send();
    echo 'Email envoyé.';
} catch (Exception $e) {
    echo "Le mail n'as ete envoye. Mailer Error: {$mail->ErrorInfo}";
}

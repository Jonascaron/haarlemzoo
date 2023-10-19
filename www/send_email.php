<?php
// Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php'; // Include PHPMailer library

$subject = 'verificatie email';
$message = 'verificatie email';

if($_SERVER['REQUEST_METHOD'] === "POST") {
  try {
    $mail = new PHPMailer(true);
    //Server settings
    $mail->isSMTP();
    $mail->Host = 'mailhog'; // Your SMTP server hostname
    $mail->SMTPAuth = true;
    $mail->Username = 'your_username';
    $mail->Password = 'your_password';
    $mail->Port = 1025;

    //Recipients
    $mail->setFrom('respons@haarlemzoo.com');
    $mail->addAddress($_POST['email']);

    //Content
    $mail->isHTML(false);
    $mail->Subject = $subject;
    $mail->Body = $message;

    $mail->send();
    echo "Email sent successfully!";
  } catch (Exception $e) {
    echo "Email sending failed. Error: {$mail->ErrorInfo}";
  }
}

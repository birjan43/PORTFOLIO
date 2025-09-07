<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $message = $_POST['message'];

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'techexplorer43@gmail.com';   // <-- Your Gmail
        $mail->Password   = 'vprz bgoa bnpc yhif';     // <-- Google App Password
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Recipients
        $mail->setFrom($email, $name);
        $mail->addAddress('techexplorer43@gmail.com');    // <-- Your email to receive

        // Content
        $mail->isHTML(true);
        $mail->Subject = "New Contact Form Message";
        $mail->Body    = "
            <strong>Name:</strong> $name <br>
            <strong>Email:</strong> $email <br>
            <strong>Message:</strong><br> $message
        ";

        $mail->send();
        header("Location: contact.php?success=1");
        exit();
    } catch (Exception $e) {
        header("Location: contact.php?error=1");
        exit();
    }
} else {
    header("Location: contact.php");
    exit();
}

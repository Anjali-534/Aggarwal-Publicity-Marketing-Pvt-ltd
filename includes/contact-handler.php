<?php
require APM_ROOT . '/includes/PHPMailer/src/Exception.php';
require APM_ROOT . '/includes/PHPMailer/src/PHPMailer.php';
require APM_ROOT . '/includes/PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

header('Content-Type: application/json');

$name    = trim(strip_tags($_POST['name']    ?? ''));
$email   = trim(strip_tags($_POST['email']   ?? ''));
$phone   = trim(strip_tags($_POST['phone']   ?? ''));
$product = trim(strip_tags($_POST['product'] ?? ''));
$message = trim(strip_tags($_POST['message'] ?? ''));

// Validate
$errors = [];
if (strlen($name) < 2)                          $errors[] = 'Please enter your name.';
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Please enter a valid email address.';
if (strlen($message) < 10)                      $errors[] = 'Please enter a message (min 10 characters).';

if ($errors) {
    echo json_encode(['success' => false, 'message' => implode(' ', $errors)]);
    exit;
}

$mail_config = require APM_ROOT . '/includes/mail-config.php';

$mail = new PHPMailer(true);
try {
    $mail->isSMTP();
    $mail->Host       = $mail_config['host'];
    $mail->SMTPAuth   = true;
    $mail->Username   = $mail_config['username'];
    $mail->Password   = $mail_config['password'];
   $mail->SMTPSecure = 'ssl';
    $mail->Port       = $mail_config['port'];

    $mail->setFrom('inquiry@aggarwalpublicity.com', 'APM Chemical Website');
    $mail->addAddress('aggarwalpublicity@gmail.com');
    $mail->addReplyTo($email, $name);
    $mail->Subject = "New Inquiry from APM Website – $name";
    $mail->Body    =
        "Name: $name\n" .
        "Email: $email\n" .
        "Phone: $phone\n" .
        "Product Interest: $product\n\n" .
        "Message:\n$message";

    $mail->send();
    echo json_encode([
        'success' => true,
        'message' => 'Thank you! Your inquiry has been received. We will contact you within 24 hours.'
    ]);

} catch (Exception $e) {
    echo json_encode([
        'success' => false,
        'message' => 'SMTP Error: ' . $mail->ErrorInfo
    ]);
}
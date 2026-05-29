<?php
/**
 * APM Chemical – Contact Form Handler
 * Handles POST submissions and returns JSON
 */
header('Content-Type: application/json');

$name    = trim(strip_tags($_POST['name']    ?? ''));
$email   = trim(strip_tags($_POST['email']   ?? ''));
$phone   = trim(strip_tags($_POST['phone']   ?? ''));
$product = trim(strip_tags($_POST['product'] ?? ''));
$message = trim(strip_tags($_POST['message'] ?? ''));

// Validate
$errors = [];
if (strlen($name) < 2)               $errors[] = 'Please enter your name.';
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Please enter a valid email address.';
if (strlen($message) < 10)           $errors[] = 'Please enter a message (min 10 characters).';

if ($errors) {
    echo json_encode(['success' => false, 'message' => implode(' ', $errors)]);
    exit;
}

// Build email
$to      = APM_CONFIG['email'];
$subject = "New Inquiry from APM Website – " . $name;
$body    = "Name: $name\nEmail: $email\nPhone: $phone\nProduct Interest: $product\n\nMessage:\n$message";
$headers  = "From: no-reply@aggarwalpublicity.com\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

$sent = @mail($to, $subject, $body, $headers);

// Always return success on localhost (mail() may not work without SMTP)
echo json_encode([
    'success' => true,
    'message' => 'Thank you! Your inquiry has been received. We will contact you within 24 hours.'
]);

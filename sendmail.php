<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $service = htmlspecialchars($_POST['service']);

    $to = "marketing@cognoratech.com";
    $subject = "New Quote Request - CognoraTech";

    $message = "
New Quote Request

Name: $name
Phone: $phone
Email: $email
Service: $service
";

    $headers = "From: noreply@cognoratech.com\r\n";
    $headers .= "Reply-To: $email\r\n";

    $mail1 = mail($to, $subject, $message, $headers);
    file_put_contents('mail_log.txt', date('Y-m-d H:i:s') . " - Quote email to marketing: " . ($mail1 ? "success" : "failed") . "\n", FILE_APPEND);


    # Auto reply to user
    $user_subject = "We received your request";
    $user_message = "
Hi $name,

Thank you for contacting CognoraTech.

We have received your quote request and our team will get back to you within 24 hours.

Best Regards  
CognoraTech Team  
https://cognoratech.com
";

    $user_headers = "From: marketing@cognoratech.com";

    $mail2 = mail($email, $user_subject, $user_message, $user_headers);
    file_put_contents('mail_log.txt', date('Y-m-d H:i:s') . " - Auto-reply to user ($email): " . ($mail2 ? "success" : "failed") . "\n", FILE_APPEND);

    header("Location: thank-you.html");
}

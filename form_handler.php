<?php
$name = &_POST['name'];
$visitor_email = &_POST['email'];
$subject = &_POST['subject'];
$message = &_POST['message'];
$email_form = 'info@yourwebsite.com';
$email_subject = 'New form of Submission';
$email_body = "User name: $name.\n".
              "User Email: $visitor_email.\n".
              "Subject: $subject.\n".
              "User message: $message.\n";
$to = 'sonarlalit8006@gmail.com';
$headers = "From: $email_form \r\n"
$headers = "Reply=To: $visitor_email";
mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html")
?>
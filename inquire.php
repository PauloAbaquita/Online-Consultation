<?php
$fullname = $_POST['fullname'];
$visitor_email = $_POST['email']; 
$age = $_POST['age'];
$contact_number = $_POST['contact_number'];
$message = $_POST['message'];

$email_from = 'CONSULTAnaga@gmail.com';
$email_body = "User Name: $fullname.\n". 
               "User Name: $visitor_email.\n".
               "User Name: $age.\n".
               "User Name: $contact_number.\n". 
               "User Name: $message.\n"; 
$to = 'pauloabaquita21@gmail.com';
$headers = "From; $email_form \r\n";
$headers .=  "Reply-To $visitor_email\r\n";

mail($to,$email_body,$headers);

?>
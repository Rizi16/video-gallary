<?php


$name = $_POST['name'];
$visitor_email= $_POST['email'];
$message = $_POST['message'];


$email-form = 'imaliofficial147@gmail.com';

$email_subject = "New form Submmistioin";
$email_body = "User Name: $name.\n".
              "User Email:$visitor_email.\n".
              "User Message:$message.\n";


$to = " imaliofficial147@gmail.com";

$headers = "From: $email_from \r\n";

$headers .="Reply-To: $visitor_email\r\n"

mail($to,$email_subject,$email_body,$headers);

headers("Location: index.html");

?>

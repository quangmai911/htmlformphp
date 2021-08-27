<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'offer@ginseng.nz';

$email_subject = "Domain Name Offer";

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "User Message: $message.\n";

$to = "info@mais.nz";

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("location: index.html");

?>
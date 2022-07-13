<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'akshay1012k@gmail.com';

$email_body = "User Name: $name.\n",
              "User email: $visitor_email.\n",
              "User Message: $message.\n";

$to = 'akshayrox4567@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-to: $visitor_email \r\n";

mail($to,$email_body,$headers);

$header("Location: contact.html");

?>

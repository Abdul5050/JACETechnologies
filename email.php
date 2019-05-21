<?php
$subject =  ' New Contact Message'; // Subject of your email
$to = "hr@jacetechnologies.com.ng";  //Recipient's E-mail

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= "From: " . $_REQUEST['email'] . "\r\n"; // Sender's E-mail
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$message .= 'Name: ' . $_REQUEST['name'] . "<br>";
$message.='Email Address: ' . $_REQUEST['email'] . "<br>";
$message .= 'Message: ' . $_REQUEST['message'];

if (@mail($to, $subject, $message, $headers))
{
	// Transfer the value 'sent' to ajax function for showing success message.
	echo 'sent';
}
else
{
	// Transfer the value 'failed' to ajax function for showing error message.
	echo 'failed';
}
?>
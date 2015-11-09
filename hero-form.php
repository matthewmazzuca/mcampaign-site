<?php
$subject = 'Register New Account on Toronto Home Renovations'; // Subject of your email
$to = "matt@protractr.com";  //Recipient's or Your E-mail

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= "From: " . $_REQUEST['heroEmail'] . "\r\n"; // Sender's E-mail
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$message .= 'ACCOUNT DETAILS: ' . "<br>";
$message .= 'Job Type: ' . $_REQUEST['heroUsername'] . "<br>";
$message .= 'First Name: ' . $_REQUEST['heroFname'] . "<br>";
$message .= 'Last Name: ' . $_REQUEST['heroLname'] . "<br>";
$message .= 'Email Address: ' . $_REQUEST['heroEmail'] . "<br>";
$message .= 'Details: ' . $_REQUEST['heroMessage'];

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
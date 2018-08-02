<?php 
require 'smtp_config.php';
'Send Email via SMTP using PHPMailer
$email = "";
$subject = "Send Email via SMTP using PHPMailer";
$content = "<h1>Send HTML Email using SMTP in PHP</h1>
		      <p>This is a test email sending using SMTP mail server with PHPMailer.</p>";

$mail->sendMail($email,$subject,$content);

?> 
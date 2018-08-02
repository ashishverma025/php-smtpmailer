<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



require_once("PHPMailer/PHPMailerAutoload.php");
		// echo "smtp_config.php page";die;

class smtpMailer 
{
	function __construct()
	{
		$this->mail = new PHPMailer;
		$this->mail->isSMTP();
		$this->mail->Host = 'smtp.zoho.com';//smtp Outgoing host
		$this->mail->SMTPAuth = true;
		$this->mail->Username = 'username';//smtp username
		$this->mail->Password = 'password';//smtp password
		$this->mail->SMTPSecure = 'TLS';
		$this->mail->Port = 587;//smtp port
		$this->mail->setFrom('info@abc.com', 'SMTP MAIL');
	}

	public function sendMail($email,$subject,$content)
	{
		$this->mail->addAddress("$email");
		$this->mail->Subject = "$subject";
		$this->mail->isHTML(true);
		// Email body content
		$mailContent = "$content";
		$this->mail->Body = $mailContent;
		// Send email
		if (!$this->mail->send()) {
		    echo 'Message could not be sent.';
		    echo 'Mailer Error: ' . $this->mail->ErrorInfo;
		} else {
		    echo 'Message has been sent';
		}
	}

}

$mail = new smtpMailer;
//$mail->sendMail();

?>
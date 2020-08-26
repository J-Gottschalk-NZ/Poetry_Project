<?php
function smtpmailer($to, $from, $from_name, $subject, $body) { 
	require_once('/var/www/PHPMailer/PHPMailerAutoload.php');
	define('GUSER', 'nzdzeni@gmail.com'); // GMail username
	define('GPWD', 'pqzmdthhizqcsopg'); //Gmail password. it would be a good idea to use an app specicfic password here

	$mail = new PHPMailer();  // create a new object
	$mail->IsSMTP(); // enable SMTP
	$mail->SMTPDebug = 0;  // debugging: 1 = errors and messages, 2 = messages only
	$mail->SMTPAuth = true;  // authentication enabled
	$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 465; 
	$mail->Username = GUSER;  
	$mail->Password = GPWD;  
	$mail->AddReplyTo($from, $from_name);
	$mail->SetFrom($from, $from_name);
	$mail->Subject = $subject;
	//$mail->isHTML(true);
	$mail->Body = $body;
	$mail->AddAddress($to);
	if(!$mail->Send()) {
		//$error = 'Mail error: '.$mail->ErrorInfo; 
		return false;
	} else {
		return true;
	}
}
?>
<?php
	require 'phpMail/PHPMailerAutoload.php';
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];
	$mail = new PHPMailer;
    //$mail = isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Username = 'SENDING EMAIL';
    $mail->Password = 'SENDING EMAIL PASSWORD';
    $mail->setFrom('$email');
    $mail->addAddress('RECIEVED MAIL');
    $mail->addReplyTo('REPLY MAIL');
    $mail->isHTML(true);
    $mail->Subject = 'One new enquiry about'.$subject;
    $mail->Body = '<h2 align=center>Client Name :'.$name.'</h2><br><h2 align=center>Email Id:'.$email.'</h2><br><h2 align=center>Mobile:'.$mobile.'</h2><br><h2 align=center>message :'.$message.'</h2>';
    $mail->send();
	if($mail->send()){
		echo "1";
	}
	else{
		echo "2";
	}	
?>
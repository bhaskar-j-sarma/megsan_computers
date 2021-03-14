<?php
	require 'phpMail/PHPMailerAutoload.php';
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$subject=$_POST['subject'];
    $message=$_POST['message'];

    $to = "propertyatease2020@gmail.com";
    

    $message1 = "
    <html>
    <head>
    <title>Visitor email</title>
    </head>
    <body>
    <p>'.$message.'</p>
    <table>
    <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    </tr>
    <tr>
    <td>John</td>
    <td>Doe</td>
    </tr>
    </table>
    </body>
    </html>
    ";

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: <webmaster@example.com>' . "\r\n";
    $headers .= 'Cc: myboss@example.com' . "\r\n";

    mail($to,$subject,$message1,$headers);
    ?>
     
        if($mail->send()){
            echo "1";
        }
        else{
            echo "2";
        }	
?>
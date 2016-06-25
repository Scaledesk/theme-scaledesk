<?php
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

$NUMBER=$_POST['NUMBER'];
$emailadmin="sanchit2411@gmail.com";
$subject = "GET IN TOUCH.";
$message ='<html>
<body>
<div id="abcd" style="text-align:justify;font-size:18px;"> Number:-'.$NUMBER.'</div>
</body>
</html>';

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'mail.scaledesk.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'contact@scaledesk.com';                 // SMTP username
$mail->Password = 'qazplmq1w2e3r4';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;  
$mail->IsHTML(true);  
                                  // TCP port to connect to



$mail->setFrom('contact@scaledesk.com', 'Scaledesk');
$mail->addAddress($emailadmin);     // Add a recipient


$mail->Subject = $subject;
$mail->Body    = $message;

if(!$mail->send()) {
    echo "not ok";
} else {
      echo "ok";
}

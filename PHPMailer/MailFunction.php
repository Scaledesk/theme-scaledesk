<?php
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail1 = new PHPMailer;

$email=$_POST['email'];
$phone=$_POST['phone'];
$name=$_POST['first_name'];
$emailadmin="sanchit2411@gmail.com";
$subject = "GET IN TOUCH.";
$messageUsers=file_get_contents('template.html');
$message ='<html>
<body>
<div id="abcd" style="text-align:justify;font-size:18px;"> Name:-'.$name.'<br> Email:-'.$email.'<br>Phone:-'.$phone.'</div>
</body>
</html>';

/*$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'mail.scaledesk.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'contact@scaledesk.com';                 // SMTP username
$mail->Password = 'qazplmq1w2e3r4';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;  
$mail->IsHTML(true);  */
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'email-smtp.us-west-2.amazonaws.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'AKIAJHQ3XNEXXHP27ZSA';                 // SMTP username
$mail->Password = 'AoeE41tcpicmrBVhhdVtiA9pUIvKCD7rndYhnsUalQCj';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;// TCP port to connect to
$mail->IsHTML(true);

$mail->setFrom('hi@imzolo.com', 'Scaledesk');
//$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo('hi@imzolo.com', 'noreply');
// TCP port to connect to
/*$mail1->isSMTP();                                      // Set mailer to use SMTP
$mail1->Host = 'mail.scaledesk.com';  // Specify main and backup SMTP servers
$mail1->SMTPAuth = true;                               // Enable SMTP authentication
$mail1->Username = 'contact@scaledesk.com';                 // SMTP username
$mail1->Password = 'qazplmq1w2e3r4';                           // SMTP password
$mail1->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail1->Port = 587;
$mail1->IsHTML(true);
*/

$mail1->isSMTP();                                      // Set mailer to use SMTP
$mail1->Host = 'email-smtp.us-west-2.amazonaws.com';  // Specify main and backup SMTP servers
$mail1->SMTPAuth = true;                               // Enable SMTP authentication
$mail1->Username = 'AKIAJHQ3XNEXXHP27ZSA';                 // SMTP username
$mail1->Password = 'AoeE41tcpicmrBVhhdVtiA9pUIvKCD7rndYhnsUalQCj';                           // SMTP password
$mail1->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail1->Port = 465;// TCP port to connect to
$mail1->IsHTML(true);

$mail1->setFrom('hi@imzolo.com', 'Scaledesk');


//$mail->setFrom('contact@scaledesk.com', 'Scaledesk');
$mail->addAddress($email, $name);     // Add a recipient

//$mail1->setFrom('contact@scaledesk.com', 'Scaledesk');
$mail1->addAddress($emailadmin);     // Add a recipient


$mail->Subject = $subject;
$mail->Body    = $messageUsers;

$mail1->Subject = $subject;
$mail1->Body    = $message;

if(!$mail1->send()) {
    echo "not ok";
} else {
    // return "ok";
    if($mail->send()){
    	echo "ok";
    }
}



/* echo json_encode("no");*/
/*if(isset($_POST['email'])) 
{
      
$email=$_POST['email'];
$phone=$_POST['phone'];
$name=$_POST['first_name'];
$emailadmin="sanchit2411@gmail.com";
$subject = "GET IN TOUCH.";
$message ='<html>
<body>
<div id="abcd" style="text-align:justify;font-size:18px;"> Name:-'.$name.'<br> Email:-'.$email.'<br>Phone:-'.$phone.'</div>
</body>
</html>';
   
           
            
 $messageUsers=file_get_contents('template.html');
$headers = "MIME-Version: 1.0" . "\r\n";
$headers = "From:sudo@scaledesk.com\r\n"
;
$headers = "Content-type: text/html;charset=iso-8859-1" . "\r\n";
      if(mail($emailadmin,$subject,$message,$headers))
 {
         
           if(mail($email,$subject,$messageUsers,$headers)){
      	unset($headers,$message,$email,$name,$phone,$emailadmin,$subject);
      
       		return json_encode("ok");
             } 
          else{
      			 unset($headers,$message,$email,$name,$phone,$emailadmin,$subject);
	    
           	return json_encode("ok");
                 }
       
       
  }
       else{
      			 unset($headers,$message,$email,$name,$phone,$emailadmin,$subject);
	     /* header("location: index.php?msg=Some  error Occurred");*/
  /*      	return echo json_encode("no");
         }
      
}
else{
     /* echo json_encode("singh");*/
     // echo json_encode("no");
	/*header("location: index.php");
}*/

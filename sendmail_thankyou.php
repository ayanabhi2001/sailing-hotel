<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "vendor/autoload.php";

$mail = new PHPMailer(true);

//Enable SMTP debugging.
$mail->SMTPDebug = 0;                               
//Set PHPMailer to use SMTP.
$mail->isSMTP();            
//Set SMTP host name                          
$mail->Host = "smtp.gmail.com";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;                          
//Provide username and password     
$mail->Username = "sailinghotel0@gmail.com";                 
$mail->Password = "rwhlrvnurrzyffbz";                           
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";                           
//Set TCP port to connect to
$mail->Port = 587;                                   

$mail->From = "sailinghotel0@gmail.com";
$mail->FromName = "Sailing Hotel";

//$email = $_SESSION['email'];
//$name = $_SESSION['name'];

$mail->addAddress($uemail, $name);

$mail->isHTML(true);

$mail->Subject = "Thank You!!";
$mail->Body = "<h1>Dear, $fname</h1>";
$mail->Body .= "<h2>Your Registration is successfull!</h2>";
$mail->Body .= "<h3>Please Login to book</h3>";
// $mail->Body .= "<p>Depurture Time : $depurture_time</p>";

$mail->AltBody = "This is the plain text version of the email content";

try {
    $mail->send();
    echo "Message has been sent successfully";
    //header("location:payment.php"); 
} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}
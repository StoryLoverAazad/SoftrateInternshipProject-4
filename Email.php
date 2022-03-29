<?php
use PHPMailer\PHPMailer\PHPMailer;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$mail = new PHPMailer;
$mail->isSMTP();
////$mail->SMTPAuth = false;
////$mail->SMTPDebug = 0; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
//$mail->Host = "localhost"; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
//$mail->Port = 587;
//$mail->SMTPSecure = 'none'; // ssl is depracated
$mail->Host = 'localhost';
$mail->SMTPAuth = false;
$mail->SMTPAutoTLS = false;
$mail->Port = 25;
//$mail->SMTPAuth = true;
//$mail->Username = 'contact@simpletrust.org';
//$mail->Password = '18062019tn';
$mail->AddReplyTo($_POST["email"], $_POST["name"]);
$mail->From = "contact@simpletrust.org";
$mail->FromName = 'Webiste Contact US';
$mail->addAddress('info@simpletrust.org', 'SimpleTrust');
$mail->Subject = 'Website Contact US - '. $_POST["name"];
$mail->msgHTML("</br>Name:" . $_POST["name"] ."; </br>EMail:" . $_POST["email"] . "; </br>Message:" . $_POST["msg"]);
$mail->AltBody = "Name:" . $_POST["name"] ."; EMail:" . $_POST["email"] ."; Message:" . $_POST["msg"];
if(!$mail->send()){
    echo "Mailer Error: " . $mail->ErrorInfo;
}else{
    echo "Message sent!";
}
?>

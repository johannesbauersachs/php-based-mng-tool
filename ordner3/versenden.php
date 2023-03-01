<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once __DIR__ . "/vendor/autoload.php";
require('vendor\phpmailer\phpmailer\src\Exception.php');
require('vendor\phpmailer\phpmailer\src\PHPMailer.php');
require('vendor\phpmailer\phpmailer\src\SMTP.php');

$mail = new PHPMailer(true);
try {
    $mail->SMTPDebug = false;                     
    $mail->isSMTP();                                            
    $mail->Host       = 'mx2f2c.netcup.net';                    
    $mail->SMTPAuth   = true;                                 
    $mail->Username   = 'joba@newwebtec.de';                     //SMTP username
    $mail->Password   = '4Uqse84!';                               //SMTP password
    $mail->SMTPSecure = "tls";            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    $mail->setFrom('joba@newwebtec.de', 'Johannes');
    $mail->addAddress("Johannes.bauersachs@icloud.com","test mail neues Design");            
    //$mail->addAttachment('C:\Users\Windows\Downloads\Rechnung.pdf',"test");         
    $text = $_POST["bemerkung"];
    $mail->isHTML(true);                           
    $mail->Subject = 'funktioniert';
    $mail->Body    = $text;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Email wurde versendet.';
} catch (Exception $e) {
    echo "Fehler ist aufgetreten: {$mail->ErrorInfo}";
}

?>
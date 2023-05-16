<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use Response;

class EmailController extends Controller
{
   public function email(Request $request){


    try {      
$email = $request["email"];   
$name = $request["name"];   
$phone = $request["phone"];   
$service = $request["service"];   
$message = $request["message"];
$new_email = strip_tags(htmlspecialchars($email));
$new_name = strip_tags(htmlspecialchars($name));
$new_phone = strip_tags(htmlspecialchars($phone));
$new_service = strip_tags(htmlspecialchars($service));
$new_message = strip_tags(htmlspecialchars($message));        
$mail = new PHPMailer(true);
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = "mail.nyagaka.com";                    //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'contact@nyagaka.com';                     //SMTP username
        $mail->Password   = 'omundi2030';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption ENCRYPTION_SMTPS 465
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('contact@nyagaka.com', 'Contact Nyagaka');
        $mail->addAddress('omundifelix30@gmail.com', 'Felix Nyagaka');     //Add a recipient
        $mail->addAddress('fomundi34@gmail.com', 'Felix'); 
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $new_service;
        $mail->Body    = $new_message;

      $success =  $mail->send();
      // if($success){
       
      //   return Response::json(http_response_code(200));
      // }
       
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
   }
}

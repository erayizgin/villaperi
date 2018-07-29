<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


class EmailController extends Controller
{   
    public function index(Request $request)
    {
        $mail = new PHPMailer(true);
        
        try {
            //Server settings
            $mail->SMTPDebug = 2;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'mail.villaperi.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'info@villaperi.com';                 // SMTP username
            $mail->Password = 'KorayK1008';                           // SMTP password
            //$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );
            
            $mail->CharSet = 'UTF-8';
            //Recipients
            $mail->setFrom('info@villaperi.com', 'Web Form - Villaperi');
            $mail->addAddress('info@villaperi.com', 'Web Form - Villaperi');     // Add a recipient
            //$mail->addAddress('ellen@example.com');               // Name is optional
            $mail->addReplyTo($request->email, 'Web Form - Villaperi');
            //$mail->addCC('cc@example.com');
            //$mail->addBCC('erayizgin@gmail.com');
            
            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $request->text;;
            
            $mail->Body    = '<b> Kisi:</b> '.$request->name.' <br><b>Email: </b>'.$request->email.' <br><b>Mesaj: </b>'.$request->text;
            //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            
            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }
        
        return response()->json(['success'=>'Data is successfully added']);
    }
}
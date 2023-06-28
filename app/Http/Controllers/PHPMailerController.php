<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class PHPMailerController extends Controller {

    // =============== [ Email ] ===================
    public function afiliacion() {
        return view("afiliacion");
    }


    // ========== [ Compose Email ] ================
    public function composeEmail(Request $request) {
        require base_path("vendor/autoload.php");
        $mail = new PHPMailer(true);     // Passing `true` enables exceptions

        try {

            // Email server settings
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = "vmasonline.com";             //  smtp host
            $mail->SMTPAuth = true;
            $mail->Username = "capac@vmasideas.online";   //  sender username
            $mail->Password = "19qQQ6ysV+0s";       // sender password
            $mail->SMTPSecure = 'ssl';                  // encryption - ssl/tls
            $mail->Port = 465;                          // port - 587/465

            $mail->setFrom("noreply@capac.org.mx", "Colegio de Arquitectos de Puebla");
            $mail->addAddress('salvador.sanchez@vmasideas.com', 'Chava test');
            //$mail->addCC($request->emailCc);
            //$mail->addBCC($request->emailBcc);

            //$mail->addReplyTo("noreply@capac.org.mx", "Colegio de Arquitectos de Puebla");

            if(isset($_FILES['emailAttachments'])) {
                for ($i=0; $i < count($_FILES['emailAttachments']['tmp_name']); $i++) {
                    $mail->addAttachment($_FILES['emailAttachments']['tmp_name'][$i], $_FILES['emailAttachments']['name'][$i]);
                }
            }


            $mail->isHTML(true);                // Set email content format to HTML

            $mail->Subject = "Solicitud de Afilicación al Colegio de Arquitectos de Puebla";
            $mail->Body = "Nueva Solicitud de afiliación al Colegio de Arquitectos de Puebla: <br>
            Nombre: ".$request->fname." ".$request->lname."<br>
           Email: ".$request->email."<br>
           Teléfono: ".$request->phone."<br>
           Message:".$request->message."<br><br>";

            // $mail->AltBody = plain text version of email body;

            if( !$mail->send() ) {
                return back()->with("failed", "Email not sent.")->withErrors($mail->ErrorInfo);
            }
            
            else {
                return back()->with("success", "Email has been sent.");
            }

        } catch (Exception $e) {
             return back()->with('error','Message could not be sent.');
        }
    }
}
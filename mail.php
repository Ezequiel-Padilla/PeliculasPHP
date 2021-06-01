<?php

//Importacion de variables Globales
require_once 'config.inc.php';
require_once 'MailClass/vendor/autoload.php';

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Mailer {   
    private $asunto;
    private $texto;
    private $to;

    public function __construct($asunto, $texto, $to) {
        $this->asunto = $asunto;
        $this->texto = $texto;
        $this->to = $to;
    }

    public function sendMail($mail) {
        try {
            $mail = new PHPMailer(true);
            $mail->isSMTP();                                     
            
            $mail->Host = "smtp.gmail.com";
            $mail->Port = 587;
            $mail->SMTPAuth = true;
            
            $mail->Username = REMITENTE;
            $mail->Password = CLAVE;
            $mail->SMTPSecure = 'tls';                           
            
            //Recipients
            $mail->setFrom(REMITENTE, REMITENTE_NAME);
            
            $para = explode(";", $this->to);
            for($i=0;$i<count($para);$i++){
                $mail->addAddress($para[$i]);				
            }
            
            //Content                                  
            $mail->Subject = $this->asunto;
            $mail->Body    = $this->texto;
            
            
            $mail->send();
            echo 'Envio OK';
        } catch (Exception $e) {
            echo 'No se pudo realizar el envio. Mensaje del Error: '. $mail->ErrorInfo;
        }
    }
}
    
?>
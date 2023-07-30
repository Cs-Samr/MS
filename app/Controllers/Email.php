<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

// require '..\vendor\phpmailer\src\Exception.php';
// require '..\vendor\phpmailer\src\PHPMailer.php';
// require '..\vendor\phpmailer\src\SMTP.php';


class Email extends BaseController {
    
    public function __construct() {
		
    }
    
    public function compose() {
    
        echo view('compose');
    
    }
    
    public function send_email() {
    
		//print_r("test");
        $email          = $this->request->getPost('email');
        $subject        = $this->request->getPost('subject');
        $message        = $this->request->getPost('message');
        
        $mail = new PHPMailer(true);  
		try {
		    
		    $mail->isSMTP();  
		    $mail->Host         = 'smtp.google.com'; //smtp.google.com
		    $mail->SMTPAuth     = true;     
		    $mail->Username     = 'Sama2r22@gmail.com';  
		    $mail->Password     = 'Ss0505541908';
			$mail->SMTPSecure   = 'tls';  
			$mail->Port         = 587;  
			$mail->Subject      = $subject;
			$mail->Body         = $message;
			$mail->setFrom('username', 'display_name');
			
			$mail->addAddress($email);  
			$mail->isHTML(true);      
			
			if(!$mail->send()) {
			    echo "Something went wrong. Please try again.";
			}
		    else {
			    echo "Email sent successfully.";
		    }
		    
		} catch (Exception $e) {
		    echo "Something went wrong. Please try again.";
		}
        
    }
    
}
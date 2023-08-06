<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


// require '..\vendor\phpmailer\src\Exception.php';
// require '..\vendor\phpmailer\src\PHPMailer.php';
// require '..\vendor\phpmailer\src\SMTP.php';


class Email extends BaseController
{
    public function compose()
    {
        return view('compose');
    }

    public function send_email()
    {
        $email = $this->request->getPost('email');
        $subject = $this->request->getPost('subject');
        $message = $this->request->getPost('message');

        $mail = new PHPMailer(true);

        try {
            // Enable SMTP debugging if needed
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;

            $mail->isSMTP();
            $mail->Host = 'smtp.google.com'; // Replace with your SMTP server address
            $mail->SMTPAuth = true;
            $mail->Username = 'sama2r22@gmail.com'; // Replace with your Gmail address
            $mail->Password = 'Ss0505541908'; // Replace with your Gmail password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            $mail->setFrom('sama2r22@gmail.com', 'J3S'); // Replace with your Gmail address and your name
            $mail->addAddress($email);

            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = $message;

            $mail->send();
            echo "Email sent successfully.";
        } catch (Exception $e) {
            echo "Something went wrong. Please try again. Error: {$mail->ErrorInfo}";
        }
    }
}

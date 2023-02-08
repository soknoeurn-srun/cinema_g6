<?php
use PHPMailer\PHPMailer\PHPMailer;
require "PHPMailer/Exception.php";
require "PHPMailer/PHPMailer.php";
require "PHPMailer/SMTP.php";

$mail = new PHPMailer(true);
$alert = '';
function sendEmail()
{
  if(isset($_POST["send"]))
  {
    $firstName = $_POST["first_name"];
    $lastName = $_POST["last_name"];
    $email = $_POST["email"];
    $userMessage = $_POST["message"];
    
    try
    {
      $mail->isSMPT();
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      $mail->Username = 'soknoeurn.srun168@gmail.com';
      $mail->Password = 'fleexibechyxasqm';
      $mail->SMTPSecure = 'tls';
      $mail->Port = '587';
      
      $mail->setFrom('soknoeurn.srun168@gmail.com');
      $mail->addAddress('soknoeurn.srun@student.passerellesnumeriques.org');
      
      $mail->isHTML(true);
      $mail->Subject = 'Message Received From Contact: ' . $firstName . ' ' . $lastName;
      $mail->Body = "Name: $firstName . ' ' . $lastName<br>Email: $email <br>Message: $userMessage";

      $mail->send();
      $alert = "<div class='alert-success'><span>Message Sent Thanks For Contacting Us<span></span></div>";
    } catch (Exception $e)
    {
      $alert = "<div class='alert-error'><span>$e->getMessage()</span></div>";
    }

    // if (mail($toEmail,$firstName, $lastName, $mailHeaders))
    // {
    //   $message = "Your Information is Received Successfully!";
    // }
  }
}
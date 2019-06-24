<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require("./PHPMailer-6.0.7/src/Exception.php");
require 'PHPMailer-6.0.7/src/PHPMailer.php';
require 'PHPMailer-6.0.7/src/SMTP.php';

$message_from = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

if(!isset($message_from) || trim($message_from) == '') {
  echo json_encode(array('emailMessage' => true));
  die();
}
if(!isset($subject) || trim($subject) == '') {
  echo json_encode(array('subjectMessage' => true));
  die();
}
if(!isset($message) || trim($message) == '') {
  echo json_encode(array('messageMessage' => true));
  die();
}

try {
  $mail = new PHPMailer();
  $mail->IsSMTP();
  $mail->SMTPAuth    = true;
  $mail->Host        = "smtp.gmail.com";
  $mail->Port        = 587;
  $mail->SMTPOptions = array(
      'ssl' => array(
          'verify_peer' => false,
          'verify_peer_name' => false,
          'allow_self_signed' => true
      )
  );
  $mail->IsHTML(true);
  $mail->Username = "nuesgames@gmail.com"; // your gmail address
  $mail->Password = "pacmannarural"; // password
  $mail->SetFrom("nuesgames@gmail.com");
  $mail->Subject = $subject; // Mail subject
  $mail->Body    = ''.$message.' - Mensagem enviada de: '.$message_from;

  $mail->AddAddress('dev.israelnascimento@gmail.com');
  $mail->AddAddress('andrecastr@gmail.com');
  $mail->AddAddress('droderuan@gmail.com');
  $mail->AddAddress('ihangra@gmail.com');
  $mail->AddAddress('sandersonbarbosa36@gmail.com');
  $mail->AddAddress('santimunis18@gmail.com');
  $mail->AddAddress('ltomio@gmail.com');
  $mail->AddAddress('tsn_tiago@hotmail.com');
  $mail->Send();
  echo json_encode(array('sucess' => true));
} catch(phpmailerException $e) {
  echo $e->errorMessage();
} catch (Exception $e) {
  echo $e->getMessage();
}
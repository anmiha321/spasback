<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

function formatting($text) {
    $text = stripslashes($text); $text = trim($text); $text = htmlspecialchars($text, ENT_QUOTES); return $text;
}

$faq_msg = formatting($_POST['faq_msg']);
$faq_email = formatting($_POST['faq_email']);

// Настройки
$mail = new PHPMailer;

// $mail-> SMTPDebug = 1; // Включить подробный вывод отладки

$mail->isSMTP(); 
$mail->Host = 'smtp.beget.ru';
$mail->SMTPAuth = true;                      
$mail->Username = 'mail@ww.net.ru'; 
$mail->Password = '&iU&L1cR'; 
$mail->SMTPSecure = 'ssl';                            
$mail->Port = 465;
$mail->CharSet = "utf-8";
$mail->setFrom ('mail@ww.net.ru', 'Сообщение с сайта РегионСпас'); 
$mail->addReplyTo($email, 'Контрагент');

$mail->addAddress('wwnet72@mail.ru'); // Email получателя
// $mail->addAddress('адрес e-mail'); // Филиал
// $mail->AddCC('web@ww.net.ru');
// $mail->AddCC('адрес e-mail'); //Копия

if($faq_msg AND $faq_email) {
    if(!filter_var($faq_email, FILTER_VALIDATE_EMAIL)) {
        echo '3'; die();
    }
    // Письмо
    $mail->isHTML(true); 
    $mail->Subject = 'Вопрос с сайта РегионСпас со страницы FAQ';
    $mail->Body    = "Электронная почта: $faq_email <br> 
                      Сообщение: $faq_msg <br>";

    // Результат
    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo '1';
    }
}
else {
    echo '1111';
}
?>
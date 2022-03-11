<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

function formatting($text) {
    $text = stripslashes($text); $text = trim($text); $text = htmlspecialchars($text, ENT_QUOTES); return $text;
}

function validateDate($date, $format = 'Y-m-d'){
    if(strlen($date) !== 10) {
        return false;
    }
    $d = DateTime::createFromFormat($format, $date);
    if($d->format('Y') > 2022 || $d->format('Y') < 1900) {
        return false;
    }
    return $d && $d->format($format) === $date;
};

$surname_volunteer = formatting($_POST['surname_volunteer']);
$name_volunteer = formatting($_POST['name_volunteer']);
$phone_volunteer = formatting($_POST['phone_volunteer']);
$email_volunteer = formatting($_POST['email_volunteer']);
$vk_volunteer = formatting($_POST['vk_volunteer']);
$city_volunteer = formatting($_POST['city_volunteer']);
$is_auto_volunteer = formatting($_POST['is_auto_volunteer']);
$birthday_volunteer = formatting($_POST['birthday_volunteer']);

if($birthday_volunteer && validateDate($birthday_volunteer)) {
    if(strtotime($birthday_volunteer) > strtotime(date('Y-m-d'))) {
        echo '4'; die();
    }
    else if (strtotime($birthday_volunteer) === strtotime(date('Y-m-d'))) {
        echo '6'; die();
    }
}
else {
    echo '5'; die();
};


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


if($name_volunteer && $phone_volunteer && 
        $city_volunteer && $is_auto_volunteer && $birthday_volunteer) {

    if($email_volunteer) {
        if(!filter_var($email_volunteer, FILTER_VALIDATE_EMAIL)) {
            echo '3'; die();
        };
    };
    $body_msg = null;
    ($surname_volunteer) ? $body_msg .= "Фамилия: $surname_volunteer <br>" : '';
    ($name_volunteer) ? $body_msg .= "Имя: $name_volunteer <br>" : '';
    ($phone_volunteer) ? $body_msg .= "Номер телефона: $phone_volunteer <br>" : '';
    ($email_volunteer) ? $body_msg .= "Электронная почта: $email_volunteer <br>" : '';
    ($vk_volunteer) ? $body_msg .= "Ссылка на страницу ВК: $vk_volunteer <br>" : '';
    ($city_volunteer) ? $body_msg .= "Населенный пункт: $city_volunteer <br>" : '';
    ($is_auto_volunteer) ? $body_msg .= "Наличие автомобиля: $is_auto_volunteer <br>" : '';
    ($birthday_volunteer) ? $body_msg .= "Дата рождения: $birthday_volunteer <br>" : '';

    // Письмо
    $mail->isHTML(true); 
    $mail->Subject = 'Заявка от потенциального добровольца';
    $mail->Body    = "$body_msg";

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
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

$fio_applicant = formatting($_POST['fio_applicant']);
$phone_applicant = formatting($_POST['phone_applicant']);
$fio_missed = formatting($_POST['fio_missed']);
$place_missed = formatting($_POST['place_missed']);
$type_missed = formatting($_POST['type_missed']);
$cond_missed = formatting($_POST['cond_missed']);
$police_missed = formatting($_POST['police_missed']);
$info_missed = formatting($_POST['info_missed']);
$time_missed = formatting($_POST['time_missed']);
$date_missed = formatting($_POST['date_missed']);
$birthday_missed = formatting($_POST['birthday_missed']);

$photo_file = $_POST['photo_name'];


if($birthday_missed && validateDate($birthday_missed)) {
    if (strtotime($birthday_missed) === strtotime(date('Y-m-d'))) {
        echo '7'; die();
    }else if(strtotime($birthday_missed) > strtotime($date_missed)) {
        echo '9'; die();
    }
}
else {
    echo '5'; die();
};

if($date_missed && !validateDate($date_missed)) {
    echo '6'; die();
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
// $mail->addReplyTo($email, 'Контрагент');

$mail->addAddress('wwnet72@mail.ru'); // Email получателя


if($photo_file === '') {
    echo '8'; die();
}
else {
    $mail->addAttachment("{$_SERVER['DOCUMENT_ROOT']}/uploads/tmp/$photo_file");
}
// $mail->addAttachment($_SERVER['DOCUMENT_ROOT'].'/uploads/tmp/'.$photo_file.'');


if($fio_applicant && $phone_applicant && $fio_missed && 
    $place_missed && $type_missed && $cond_missed && 
    $police_missed && $time_missed && $date_missed && $birthday_missed
        ) {

    $body_msg = null;
    ($fio_applicant) ? $body_msg = "ФИО заявителя: $fio_applicant <br>" : '';
    ($phone_applicant) ? $body_msg .= "Номер телефона заявителя: $phone_applicant <br>" : '';
    ($fio_missed) ? $body_msg .= "ФИО пропавшего: $fio_missed <br>" : '';
    ($birthday_missed) ? $body_msg .= "Дата рождения: $birthday_missed <br>" : '';
    ($date_missed) ? $body_msg .= "Дата пропажи: $date_missed <br>" : '';
    ($time_missed) ? $body_msg .= "Время пропажи: $time_missed <br>" : '';
    ($place_missed) ? $body_msg .= "Область пропажи: $place_missed <br>" : '';
    ($type_missed) ? $body_msg .= "Тип местности: $type_missed <br>" : '';
    ($cond_missed) ? $body_msg .= "Обстоятельства пропажи: $cond_missed <br>" : '';
    ($police_missed) ? $body_msg .= "Заявление в полицию: $police_missed <br>" : '';
    ($info_missed) ? $body_msg .= "Дополнительная информация: $info_missed <br>" : '';

    // Письмо
    $mail->isHTML(true); 
    $mail->Subject = 'Заявка на поиск!';
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
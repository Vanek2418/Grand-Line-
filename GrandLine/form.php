<?php

require_once('PHPMailer/PHPMailerAutoload.php');

$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['name'];
$phone = $_POST['phone'];

$mail->IsSMTP();
$mail->Host = 'ssl://smtp.yandex.ru';
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->Username = 'iwan.mahno2015@yandex.ru';
$mail->Password = 'vanek_136632418';
// $mail->SMTPSecure = 'ssl';
// $mail->Port = 465;

$mail->setFrom('iwan.mahno2015@yandex.ru');
$mail->addAddress('Actum.inside@gmail.com');  //Actum.inside@gmail.com

$mail->isHTML(true);

$mail->Subject = 'Обратный звонок GrandLine!';
$mail->Body    = '' .$name . ' оставил заявку, его телефон: ' .$phone . '';
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Сообщение не могло быть отправлено.';
    echo 'Ошибки: ' . $mail->ErrorInfo;
} else {
    header('location: /success.php');
}
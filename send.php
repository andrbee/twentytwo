<?php
// Файлы phpmailer
require 'class.phpmailer.php';
require 'class.smtp.php';

$name = $_POST['name'];
$number = $_POST['number'];
$email = $_POST['email'];
// Настройки
$mail = new MyPHPMailer\PHPMailer;

$mail->isSMTP(); 
$mail->Host = 'smtp.yandex.ru';  
$mail->SMTPAuth = true;                      
$mail->Username = 'twentwo'; // Ваш логин в Яндексе. Именно логин, без @yandex.ru
$mail->Password = 'asdf23Tr'; // Ваш пароль
$mail->SMTPSecure = 'ssl';                            
$mail->Port = 465;
$mail->setFrom('twentwo@yandex.ru'); // Ваш Email
$mail->addAddress('andrbee@yandex.by'); // Email получателя
$mail->addAddress('andrbee@gmail.com'); // Еще один email, если нужно.

$message = '';
foreach ($_POST as $key => $item){
	$message .= $key . '	' . $item . '\r\n';
}
// Письмо
$mail->isHTML(true); 
$mail->Subject = "Заявка с сайта"; // Заголовок письма
$mail->Body    = $message; // Текст письма

// Результат
if(!$mail->send()) {
    echo json_encode(array(
    	'status' => 'ER',
		'message' => $mail->ErrorInfo
	));
} else {
	echo json_encode(array(
		'status' => 'OK',
		'message' => 'Заявка отправлена !'
	));
}
?>
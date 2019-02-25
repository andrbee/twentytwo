<?php
// Кому отправляем
$to = 'adrnbee@gmail.com';

// Тема письма
$subject = 'Проверка wp_mail';

// Само сообщение
$message = 'Это тестовое сообщение';

// Загружаем только ядро WordPress
define( 'WP_USE_THEMES', false );
require_once( $_SERVER['DOCUMENT_ROOT'] . '/wp-load.php' );

// Отправляем письмо
$sent_message = wp_mail( $to, $subject, $message );

if ( $sent_message ) {
	// Если сообщение успешно отправилось
	echo 'Всё чётко настроил, бро!';
} else {
	echo '<pre/>';
	print_r($phpmailer->ErrorInfo);
	exit;
	// Ошибки при отправке
	echo 'Где-то ты лоханулся знатно!';
}
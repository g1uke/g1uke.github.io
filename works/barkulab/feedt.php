<?php

/* Задаем переменные */
$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$message = htmlspecialchars($_POST["message"]);
$bezspama = htmlspecialchars($_POST["bezspama"]);

/* Ваш адрес и тема сообщения */
$address = "barkulab.by@yandex.by";
$sub = "Электронное обращение с сайта barkulab.by";

/* Формат письма */
$mes = "Электронное обращение с сайта barkulab.by\n
Имя отправителя: $name 
Электронный адрес отправителя: $email
Текст сообщения:
$message";


if (empty($bezspama)) /* Оценка поля bezspama - должно быть пустым*/
{
/* Отправляем сообщение, используя mail() функцию */
$from = "Reply-To: $email \r\n";
if (mail($address, $sub, $mes, $from)) {
	header('Refresh: 5; URL=http://barkulab.by');
	echo '<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
    <body>Письмо отправлено, через 5 секунд вы вернетесь на страницу barkulab.by</body>';}
else {
	header('Refresh: 5; URL=http://barkulab.by');
	echo '<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
    <body>Письмо не отправлено, через 5 секунд вы вернетесь на страницу barkulab.by</body>';}
}
exit; /* Выход без сообщения, если поле bezspama чем-то заполнено */
?>
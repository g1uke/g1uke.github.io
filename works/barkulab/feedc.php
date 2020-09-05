<?php

/* Задаем переменные */
$curs = htmlspecialchars($_POST["curs"]);
$name = htmlspecialchars($_POST["name"]);
$tel = htmlspecialchars($_POST["tel"]);
$email = htmlspecialchars($_POST["email"]);
$bezspama = htmlspecialchars($_POST["bezspama"]);

/* Ваш адрес и тема сообщения */
$address = "777@vmv.su";
$sub = "Запись на курс - barkulab.by";

/* Формат письма */
$mes = "Запись на курс - $curs \n

Имя отправителя: $name 
Телефон отправителя: $tel
Электронный адрес отправителя: $email
";


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
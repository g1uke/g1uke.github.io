<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
	<title>Страница</title>
	<link rel="stylesheet" href="../css/template.css" type="text/css" />
	<SCRIPT type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></SCRIPT>
	<script type="text/javascript" src="js/ajax.js"></script>
</head>
<body>
	<form action="send.php" method="GET" id="form">
		<input type="text" placeholder="Введите сюда e-mail" name="e-mail"><br>
		<input type="text" placeholder="Введите сюда ваше имя" name="name"><br>
		<input type="button" value="Нажмите, чтобы отправить письмо" onClick="SendPost();">
	</form>
</body>
</html>
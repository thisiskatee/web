<?php
$sendto = "katya230501@yandex.ru";
$usermail = $_POST['email'];
$username = $_POST['name'];
$userphone = $_POST['surname'];
$content = nl2br($_POST['msg']);
$subject = "Новое сообщение";
$headers = "From: " . strip_tags($usermail) . "\r\n";
$headers .= "Reply-To: ". strip_tags($usermail) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";
$msg = "<html-->";
$msg .= "<h2 style="font-weight:bold">Новое сообщение</h2>\r\n";
$msg .= "<p><strong>Имя:</strong> ".$username."</p>\r\n";
$msg .= "<p><strong>Номер телефона:</strong> ".$userphone."</p>\r\n";
$msg .= "<p><strong>Почта:</strong> ".$usermail."</p>\r\n";
$msg .= "<p><strong>Сообщение:</strong> ".$content."</p>\r\n";
$msg .= "";

if(@mail($sendto, $subject, $msg, $headers)) {
	echo "true";
} else {
	echo "false";
}
?>
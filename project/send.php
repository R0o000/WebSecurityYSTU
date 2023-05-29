

<?php
$name = $_POST['name'];
$subject = $_POST['subject'];
$email = $_POST['email'];
$message = $_POST['message']
//echo $fio;
//echo "<br>";
//echo $email;
if (mail("ilya022003@yandex.ru", "Заявка с сайта", "Имя:".$name.". E-mail: ".$email ,"From: example2@mail.ru \r\n"))
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>
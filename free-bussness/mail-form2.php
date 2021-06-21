<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['name'];
$email = $_POST['email'];

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // определяем какой пс наш почтный ящик
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'interestclubchannel@gmail.com';                 // Наш логин почты с которой типа будут отправляться сообщения
$mail->Password = '0804914277anton';                           // Наш пароль от ящика с которого типа будут отправляться сообщения
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // проверить кодировку smtp
 
$mail->setFrom('interestclubchannel@gmail.com', 'test');   // От кого письмо 
$mail->addAddress('nastya-holo@mail.ru');     // куда будут приходить письма!
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Заявка с free-bisness';
$mail->Body    = '' .$name . ' оставил заявку.<br>Почта этого пользователя: ' .$email;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: http://free-bussness');
}
?>
<?php
require 'vendor/autoload.php';

// require '/PHPMailer/src/PHPMailer.php';
// require '/PHPMailer/src/SMTP.php';


if (isset($_POST['send'])) {
    $email = $_POST['email'];
    $sender_name = $_POST['sender_name'];
    $reply_to = $_POST['reply_to'];
    $message_type = $_POST['message_type'];
    $message = $message_type == 'HTML' ? $_POST['message'] : nl2br($_POST['message']);
    $attachments = $_POST['attachments'];
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'smtp.mailtrap.io';
    $mail->SMTPAuth = true;
    $mail->Username = '93b6437aedf533';
    $mail->Password = '5a5a291810115a';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 2525;
    $mail->setFrom('test@test.com', $sender_name);
    $mail->addAddress($email);
    $mail->addReplyTo($reply_to);
    $mail->SMTPDebug = 2;
    foreach ($attachments as $attachment) {
        $mail->addAttachment($attachment);
    }
    $mail->isHTML($message_type == 'HTML' ? true : false);
    $mail->Subject = 'Test Mail';
    $mail->Body = $message;
    if ($mail->send()) {
        echo 'Message has been sent';
    } else {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
}

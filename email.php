<?php
$to = "shahalam834054@gmail.com";
$subject = "Testing Email";
$message = 'Hey there;
$headers = 'From: Shahalam' . "\r\n" .
$mail_sent = mail($to, $subject, $message, $headers);
if($mail_sent){
    echo "sent!";
}else{
    echo "failed!";
}
?>
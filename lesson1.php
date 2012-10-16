<?php

$to = 'visualbbasic@gmail.com';
$subject = 'This is an email';
$body = 'This is a test email\n\nHope you got it!';
$header = 'From: someone@haha.com';

if (main($to, $subject, $body, $header)) {
    echo 'Successfully sent an email!';
} else {
    echo 'There was an error while sending an email!';
}
?>
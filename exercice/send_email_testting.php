<?php
/**
 * Sending an email test
 */
$to      = 'nobody@example.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$result = mail($to, $subject, $message, $headers);
if( $result ) {
   echo 'Success';
}else{
   echo 'Fail';
}
?>
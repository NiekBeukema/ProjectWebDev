<?php
$field_name = $_POST['cf_name'];
$field_email = $_POST['cf_email'];
$field_message = $_POST['cf_message'];
$field_submit = $_POST['submit'];

$mail_to = 'thomkroezen@live.nl';
$subject = 'Message from a site visitor '.$field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if (isset($_POST['submit'])){
    if (isset)
}


else {
    echo "error you haven`t filled in all the fields correctly.";
    //header ('location: contact_form.php');

}


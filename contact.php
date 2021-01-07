<?php
$field_name = $_POST['FirstName'];
$field_lastname = $_POST['LastName'];
$field_email = $_POST['E-Mail'];
$field_message = $_POST['Message'];


$mail_to = 'kristen.sew@gmail.com';
$subject = '#Message# '.$field_name;

$body_message = 'From: '.$field_name."\r\n";
$body_message = 'From: '.$field_lastname."\r\n";
$body_message .= 'E-mail: '.$field_email."\r\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$E-Mail."rn";
$headers .= 'Reply-To: '.$E-Mail."rn";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
 <script language="javascript" type="text/javascript">
  alert('Thank you for the message. We will contact you shortly.');
  window.location = 'contact.html';
 </script>
<?php
}
else { ?>
 <script language="javascript" type="text/javascript">
  alert('Message sending failed. Please, send an email to kristen.sew@gmail.com');
  window.location = 'contact.html';
 </script>
<?php
}
?>

<?php
$field_name = $_POST['cf_name'];
$field_email = $_POST['cf_email'];
$field_message = $_POST['cf_message'];

$mail_to = 'ccoc.craiova@gmail.com';
$subject = 'Mesaj de la un vizitator al site-ului!'.$field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mailto, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Va multumim pentru mesaj. Va vom contacta in cel mai scurt timp.');
		window.location = 'contact.php';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('A aparut o eroare la transmiterea mesajului. Va rugam sa reveniti!');
		window.location = 'contact.php';
	</script>
<?php
}
?>
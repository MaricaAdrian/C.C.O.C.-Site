<?php
$field_name = $_POST['cf_name'];
$field_email = $_POST['cf_email'];
$field_message = $_POST['cf_message'];

$mail_to = 'ccoc.dts@gmail.com';
$subject = 'Mesaj de la un vizitator al site-ului!'.$field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Vă mulţumim pentru mesaj. Vă vom contacta în cel mai scurt timp.');
		window.location = 'contact.php';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('A apărut o eroare la transmiterea mesajului. Vă rugăm să reveniţi!');
		window.location = 'contact.php';
	</script>
<?php
}
?>
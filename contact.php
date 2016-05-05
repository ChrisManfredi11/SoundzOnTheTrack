<?php
$field_name = $_POST['name'];
$field_email = $_POST['email'];
$field_title = $_POST['subject'];
$field_message = $_POST['message'];

// Replace with your email adress here
$mail_to = 'youremail@domain.com';

$subject = 'Message from a site visitor '.$field_email;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Subject: '.$field_title."\n\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Your message has been sent');
		window.location = 'index.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Message failed!');
		window.location = 'index.html';
	</script>
<?php
}
?>
$fname = $_POST['full_name'];
$e-mail = $_POST['email'];
$tel = $_POST['phone'];
$offers = $_POST['offer'];
$mess = $_POST['message'];

$mail_to = 'nadygeorgieva10@abv.bg';

$subject = 'Съобщение от ' . $fname;

$body_message = 'От: '.$fname."\n";
$body_message .= 'E-mail: '.$e-mail."\n";
$body_message .= 'Съобщение: '.$message;

$headers = "От: $email\r\n";
$headers .= "Отговор до: $email\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);


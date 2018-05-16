<?php
$mail_subject=$_POST['mail_subject'];
$email_list=$_POST['email_list'];
$mail_body=$_POST['mail_body'];
$process=explode(",",$email_list);
reset($process);
foreach ($process as $to) {
$sent=mail($to,$mail_subject,$mail_body, "From: projects@intelipos.com");
}
if ($sent) {
echo "<b> Email has been successfully sent </b><br><br>";
echo "<b> Message : </b><br>$mail_body";
} else {
echo "Email could not be sent, there may be errors in the e-mail address";
}
?>
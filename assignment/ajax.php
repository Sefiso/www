<?php
$name2 = $_POST['name1'];
$email2 = $_POST['email1'];
//echo $name2;
//echo $email2;
$con = mysqli_connect("localhost","root","","bulkmail")or die(mysqli_connect_error()); // Establishing Connection with Server..
if (isset($_POST['name1'])) {
$res = "insert into bulkmail.mail_recipients(name, email) values ('$name2', '$email2')";
$query = mysqli_query($con,$res); //Insert Query
echo "Recipient added successfuly";
}
mysqli_close($con); // Connection Closed
?>
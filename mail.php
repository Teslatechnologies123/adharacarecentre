<?php
session_start();
session_unset($_SESSION['success']);
session_unset($_SESSION['failure']);

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$mobile = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = "sharathindia47@gmail.com";
$subject = "Enquire";
$txt = "Name : ".$fname." ".$lname."\n Mobile No : ".$mobile."\n Mail Id : ".$email."\n Message : ".$message;

$headers = "MIME-Version: 1.0"."\r\n";
$headers .= "Content-type:text/html;charset=UTF-8"."\r\n";
$headers = "From:sharath.sr1994@gmail.com"."\r\n"."CC:sharath.mitrasoftwares@gmail.com";

if(mail($to,$subject,$txt,$headers))
{
	$_SESSION['success'] = "Thank you ".$fname." ".$lname.", your message has been submitted. We will contact you shortly.";
	header("location:contacts.html");
}
else
{
	$_SESSION['failure'] = "ERROR!";
	header("location:contacts.html");
} 
?>
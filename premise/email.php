<?php

if(isset($_POST['email'])){
$email = $_POST['email'];

$form = "PremiseHQ";

$to = "mo7rul@gmail.com";

$subject = "Demo Request";
$message = "There is a new demo request in http://premisesaas.com from email: ".$email;
$headers = "From: $form";
//send email

mail($to, $subject, $message, $headers);
}



?>

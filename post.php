<?php
include "SendMail.php";

//Obligation, I launch the Php Class here!!
$email = new SendingMail();

//I set all of the parameters
$email->from = "dylan.leporcq7@gmail.com";
$email->sendTo = $_POST['mail'];
$email->subject = $_POST['subject'];
$email->message = "
    From: ".$_POST['mail']."
    Subject: ".$_POST['subject']."
    Message: " . $_POST['message']. "<p>".$_POST['message']."</p>";

//The function from the Class Php
$email->sendMail();

//Redirection to the main page
$email->redirectTo("index.php");
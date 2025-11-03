<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$subject= $_POST['subject'];
$message= $_POST['message'];
$to = "info@aniruddhakadia.com";
$subject = "Contact Us mail from aniruddhakadia";
$txt ="Name: ". $name . "\r\n Email: ". $email . "\r\n Phone: " . $phone . "\r\n Subject: " . $subject . "\r\n Message: " . $message;
$headers = "From: noreply@aniruddhakadia.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
    echo 'success';
} else {
    echo 'fail';
}
?>

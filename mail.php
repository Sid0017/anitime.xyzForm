<?php
//get data from form  
$fname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$issue = $_POST['select issues'];
$comment= $_POST['subject'];
$to = "sidk12467@gmail.com";
$subject = "Mail From Ani/Time";
$txt ="Name = ". $fname . "\r\n  lastname = " . $lastname . "\r\n select issue =" . $issue ."\r\n subject=". $comment;
$headers = "From: noreply@anitime.com" . "\r\n" .
"CC: Siddhantk512@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $to = 'dilawaiz879@gmail.com';
  $subject = 'dilawaiz mehak';
  $txt = "Name: $name\nEmail: $email\nMessage: $message";
  $headers = "From: dilawaiz879@gmail.com" . :/r/n".
  "CC: somebodyelse@example.com";
    
  if (@email!=NULL) {
  mail($to,$subject,$txt,$headers);
  } 
  else {
    echo 'There was an error sending your message. Please try again later.';
  }
}

header("location:thankyou.html");
?>
 
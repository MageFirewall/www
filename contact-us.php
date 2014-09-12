<?php


$to = "kumar.devilers@gmail.com";
$subject = "Feedback";
$msg = $_GET['contact-us-message'];
$header = "From:".$_GET['contact-us-email']." \r\n";

$send = mail($to,$subject,$msg,$header);

   if( $send == true )  
   {
      echo "Message sent successfully";
   }
   else
   {
      echo "Message could not be sent";
   }
?>

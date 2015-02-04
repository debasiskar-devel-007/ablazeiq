<?php
//$to = "support@ablazeiq.com";
$to = "contact@ablazeiq.com,support@ablazeiq.com,ablazeiq@gmail.com";
//$to = "bhaskar.involutiontech@gmail.com";
$subject = "Lead Information";
$txt = $_POST['fname']." ".$_POST['lname']." has contacted you with this message ".$_POST['msg']." and his mail and phone no is following  ".$_POST['phone']." and ".$_POST['mail'];
$headers = "From: support@ablazeiq.com" . "\r\n" .
    "CC: toonage.media@gmail.com";

 mail($to,$subject,$txt,$headers);




$to=$_POST['mail'];
$subject = "Greetings From Ablazers";
$txt ="Dear ". $_POST['fname']." ".$_POST['lname']." Thank you for contacting ablazeiq. Your message has been received and you will be contacted shortly by one of our experts.
Regards,

The Ablazers
www.ablazeiq.com
+918902466110
skype id: dr020412";
$headers = "From: support@ablazeiq.com " . "\r\n" .
    "CC:toonage.media@gmail.com";

mail($to,$subject,$txt,$headers);

header('Location:http://ablazeiq.com/takeablaze.html?q=1');

?>



   

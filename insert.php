<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name=$_POST['name'];
$email=$_POST['email'];
$inquiry=$_POST['inquiry'];

$to = "conniextu@gmail.com";
$subject = "inquiry about keebies";
$message = " name: " . $name . "\r\n email: " . $email . "\r\n inquiry: " . $inquiry;


$from = "keebie website";
$headers = "from:" . $from . "\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 

if(@mail($to,$subject,$message,$headers))
{$from="from: $name<$email>\r\nReturn-path: $email"; 
        $subject="inquiry about keebies"; 
        mail("conniextu@gmail.com", $subject, $message, $from); 
        echo "thanks for sending in your inquiry!"; 
 }else{
  echo "error! please try again.";
}
?>

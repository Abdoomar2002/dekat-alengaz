<?php


  $email   = $_POST['email'];
  $phone   = $_POST['phone'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  $address = "admin@dekat-alengaz.com/";

$to = $address;
$subject = "=?UTF-8?B?".base64_encode($subject)."?=";

    $message   = '<html> <meta charset="utf-8">'. $email ."<br>". $phone ."<br>". $message .'</html>';
  
  
$headers = "From: $email <$email>\r\n".
               "MIME-Version: 1.0" . "\r\n" .
               "Content-type: text/html; charset=UTF-8" . "\r\n";

  /*
$headers = array(
    'From' => $email,
    'Reply-To' => $email,
    'X-Mailer' => 'PHP/' . phpversion()
);
*/

$mail = mail($to,$subject,$message,$headers);

  if($mail){
    echo json_encode(array("statusCode"=>200));
    // $_SESSION['result'] = "تم إرسال الايميل بنجاح";
    // header("location:http://www.dekat-alengaz.com");

  }else{
 echo json_encode(array("statusCode"=>201));
   // $_SESSION['result'] = "خطأ فى ارسال الايميل";
//	header("location: http://www.dekat-alengaz.com");
  }







?>
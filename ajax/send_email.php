<?php
if (isset($_REQUEST['email']))
//if "email" is filled out, send email
{
  //send email
  $to = "jeffsallans@gmail.com";
  $email = $_REQUEST['email'];
  $subject = "FEEDBACK from therickellawfirm.com";
  $message = $_REQUEST['message'];
  mail($to, $subject, $message, "From:" . $email);
  echo "Thank you for contacting us.";
}
else
//if "email" is not filled out, display the form
{
  echo "Please provide your email address.";
}
?>
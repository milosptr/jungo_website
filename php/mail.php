<?php
  $to      = 'info@jungodigital.com';
  $subject = 'Jungo_ Contact Form';

  $user_email = $_GET['email'];
  $user_name = $_GET['full-name'];
  $user_company = $_GET['company'];
  $user_message = $_GET['message'];

  $message = 'Sender name: '.$user_name."\r\n".'Sender email: '.$user_email."\r\n".'Sender company: '.$user_company."\r\n".'Sender message: '.$user_message."\r\n";

  echo $message;

  $headers = 'From: '.$user_email ."\r\n" .
      'Reply-To: '.$user_email."\r\n" .
      'X-Mailer: PHP/' . phpversion();

  mail($to, $subject, $message, $headers);

  echo '<script>window.location.href = "http://beta.jungodigital.com/about-us.php";</script>'
?>
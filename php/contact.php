<?php
  $email = $_POST['email'];
  $from = 'From: PHP Contact Demo';
  $human = $_POST['human'];
  $message = $_POST['message'];
  $name = $_POST['name'];
  $subject = 'Test!';
  $to = 'gohmifune@gmail.com';
  
  $body = "From: $name\n E-Mail: $email\n Message:\n $message";
  
  if ($_POST['submit'] && $human == '4') {
    if (mail($to, $subject, $body, $from)) {
      echo '<p>Your message has been sent.</p>';
    } else {
      echo '<p>There has been an error. Please try again</p>';
    }
  } else if ($_POST['submit'] && $_POST['human'] != '4')  {
    echo '<p>You answered the anti-spam question incorrectly!</p>'
  }
?>
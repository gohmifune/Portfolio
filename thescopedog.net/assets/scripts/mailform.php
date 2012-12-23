<?php

// 'Script for E-mail form

$to = "webmaster@thescopedog.net";
$subject = 'The Scopedog.net";

if (isset($_POST['submit']))
{
  //get data from form
  $name = $_POST['name'];
  $message = $_POST['message'];
  
  echo $name.' '. $message;
}



?>


<html>
  <form action='mailform.php' method='post'>
    <label>Name</label>
    <input type='text' name='name' maxlength='30' />
    <br />
    
    <label>Message</label>
    <textarea name='message'></textarea>
    <p>
      <input type='submit' name='submit' value='Send Mail'>
  </form>
<html>
<?php
  
  if ((trim($_POST['object']) != "")) { $to = "      \n michaelpintore00@icloud.com ";
   
  $headers = "From: " . $_POST['name'] . "\n";
  $headers = "From: " . $_POST['surname'] . "\n";
  $headers = "From: " . $_POST['email'] . "\n";
  $headers = "From: " . $_POST['city'] . "\n";
  $headers = "From: " . $_POST['budget'] . "\n";
  $headers = "From: " . $_POST['body'] . "\n";
   
     
  $subject = "MESSAGGIO";
   
  $body = "Modulo Contatti Invio E-Mail:\n\n";
   
  $body .= "Cognome:   " . trim(stripslashes($_POST["cognome"])) .  "\n"; 
  $body .= "E-Mail:    " . trim(stripslashes($_POST["email"])) .    "\n"; 
  $body .= "Oggetto:   " . trim(stripslashes($_POST["city"])) .   "\n"; 
  $body .= "Messaggio  " . trim(stripslashes($_POST["msg"])) ."\n"; 
   
  mail($to, $subject, $body, $headers);
   
  header("location:submit.html");
   
    } else {
   
  header("location:nosubmit.html");
   
    }
   
    ?>
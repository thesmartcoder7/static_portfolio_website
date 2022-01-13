<?php
  
  $v = $_POST['name'];
   $fc = $_POST['email'];
    $f = 'Demo Request';
     $fk = $_POST['message'];
$h = date('r');

$EmailFrom=$fc;		
$EmailTo = "hastingsmumo@gmail.com";
$Subject = $f; /// Add a subject

$Body = $fk;
$Body .= ":\n\n";
	
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");
    
  echo "Your message has been sent. Thank you!" ;
?>

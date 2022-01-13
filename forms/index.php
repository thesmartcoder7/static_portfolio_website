<?php
  
  $v = $_POST['name'];
   $fc = $_POST['email'];
    $f = $_POST['subject'];
     $fk = $_POST['message'];
$h = date('r');
if  ($fc!=""){
$EmailFrom=$fc;		
$EmailTo = "hastingsmumo@gmail.com";
$Subject = $f; /// Add a subject

$Body = $fk;
$Body .= ":\n\n";
	
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");
    
  echo "Your message has been sent. Thank you!" ;
}
else{
echo "Please provide a valid email address";}
?>

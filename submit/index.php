


<?php


   $f = $_POST['semail'];
    $g = "Subscription";
     $k="User Subscription";
$h = date('r');
if($f!==""){
   
$EmailFrom="no-reply@hastingsmumo.co.ke";		
$EmailTo = $f;
$Subject = $g; /// Add a subject
$Body = "Hi,
I would like to confirm your subscription to hastingsmumo.co.ke newsletter. 
You will occasionally receive updates and pertinent information relating to this website (hastingsmumo.co.ke).  
If you did not make this request, please ignore this message. If you received this in error, please disregard.  Do not reply directly to this email.

From Hastings Electronics Team.
Chao,
Mumo
";
$Body .= ":\n\n\n";
	
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");
    
    $EmailFrom="no-reply@hastingsmumo.co.ke";		
$EmailTo = "hastingsmumo@gmail.com";
$Subject = $k. $h; /// Add a subject
$Body = $f;
   $Body .= ":\n\n\n";
	
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>"); 
  echo "Thank you! I will get in touch.";
}else{
 echo "Please enter a valid email ";
     header('location:../index.html');
}


?>
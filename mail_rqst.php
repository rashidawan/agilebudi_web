<?php

if(isset($_POST['name'])&&isset($_POST['email'])&&$_POST['name']!=""&&$_POST['email']!="")
{
	$name= $_POST['name']; 
    $email= $_POST['email']; 
	$phone= $_POST['phone']; 
    $message= $_POST['message']; 
    $to = "info@agilebudi.co.uk";
	
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	
	// More headers
	$headers .= 'From: <'.$email.'>' . "\r\n";
	//$headers .= 'Cc: myboss@example.com' . "\r\n";
	 $subject="Message sent using your request call form"; 

	   $body = "Name: ".$name.'<br/>';
	   $body .= "Email: ".$email.'<br/>';
	   $body .= "Phone: ".$phone.'<br/>';
	   $body .= "Message: <br/>".nl2br($message).'<br/>';
	      
       
       
        if(@mail($to,$subject,$body,$headers))
		{
			echo "Email Sent";	
		}
		else{
			echo "Error";
		}
        
}
	
		
		 
     

?>
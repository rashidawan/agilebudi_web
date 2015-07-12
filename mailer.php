<?php
	$name= $_POST['name']; 
    $email= $_POST['email']; 
    $message= $_POST['message']; 
          
        $from="From: $name<$email>\r\nReturn-path: $email"; 
        $subject="Message sent using your contact form"; 
        if(@mail("info@agilebudi.co.uk", $subject, $message, $from))
		{
			echo "Email Sent";	
		}
		else{
			echo "Error";
		}
        
		
		 
     

?>
<?php
	
	//include("database.php"); 
	//require_once("php_files/database.php");
	//require "php_files/functions.php";
	
	if(isset($_POST['submitContact']))
	{	
		$name = $_POST['name'];
		$email = $_POST['email'];
		$companyName = $_POST['company_name'];
		$contactNum = $_POST['contact_num'];
                $productName = $_POST['product_name'];
		$msg = $_POST['comment'];
		
		//process data
		//send a confirmation mail with the selected details
		$mailto = 'quiksimediasy@gmail.com';
		
     	$subject = "Mail from Enquiry Form: ".$name;
		// To send the HTML mail we need to set the Content-type header.		
		$headers = "From: website_visitor@CompanyName.com\r\n";
		$headers .= "Reply-To: enquiry@CompanyName.com\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    	//options to send to cc+bcc
    	//$headers .= "Cc: [email]maa@p-i-s.cXom[/email]";
    	//$headers .= "Bcc: [email]email@maaking.cXom[/email]";
		
    	$message = "Name:\t".$name."<br>";
		$message .= "Email:\t".$email."<br>";
		$message .= "Company Name:\t".$companyName."<br>";
    	$message .= "Contact No.:\t".$contactNum."<br>";
        $message .= "Product Name.:\t".$productName."<br>";
    	$message .= "message:\t".$msg."<br>";		        	   
    	
		$isSent = mail($mailto, $subject, $message, $headers);
    
    	if(!$isSent)
    	{
        	echo("<p>message delivery failed...</p>");
    	}
    	else header("submit.html");

	}
?>
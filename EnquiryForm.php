<?php 
$errors = '';
$myemail = 'huzaifabukenya227@gmail.com';//<-----Put Your email address here.
if(empty($_POST['place'])  || 
   empty($_POST['email']) || 
   empty($_POST['NumberOfPeople']))
{
    $errors .= "\n Error: all fields are required";
}

$place = $_POST['place']; 
$email_address = $_POST['email']; 
$NumberOfPeople = $_POST['NumberOfPeople']; 

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}

if( empty($errors))
{
	$to = $myemail; 
	$email_subject = "Inquiry for Visiting Destination site of : $place";
	$email_body = "You have received a new message. ".
	" Here are the details:\n Place of Visit: $place
						   \n Email: $email_address
						   \n Number of People : $NumberOfPeople"; 
	
	$headers = "From: $myemail\n"; 
	$headers .= "Reply-To: $email_address";
	
	mail($to,$email_subject,$email_body,$headers);
	//redirect to the 'thank you' page
;
;
	header('Location: ThankYouEnquiry.php');
} 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
	<title>Contact form handler</title>
</head>

<body>
<!-- This page is displayed only if there is some error -->
<?php
echo nl2br($errors);
?>


</body>
</html>
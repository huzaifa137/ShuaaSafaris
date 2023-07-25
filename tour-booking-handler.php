<?php 
$errors = '';
$myemail = 'huzaifabukenya227@gmail.com';//<-----Put Your email address here.
if(empty($_POST['fullname'])  || 
   empty($_POST['email']) || 
   empty($_POST['phone']) || 
   empty($_POST['NumberOfAdults']) || 
   empty($_POST['NumberOfChildren']) || 
   empty($_POST['Destination']) || 
   empty($_POST['ArrivalDate']) || 
   empty($_POST['DepartureDate']) || 
   empty($_POST['Requirements']))
{
    $errors .= "\n Error: all fields are required";
}

$fullname = $_POST['fullname']; 
$email_address = $_POST['email']; 
$phone = $_POST['phone']; 
$NumberOfAdults = $_POST['NumberOfAdults']; 
$NumberOfChildren = $_POST['NumberOfChildren']; 
$Destination = $_POST['Destination']; 
$ArrivalDate = $_POST['ArrivalDate']; 
$DepartureDate = $_POST['DepartureDate'];
$Requirements = $_POST['Requirements'];

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}

if( empty($errors))
{
	$to = $myemail; 
	$email_subject = "Tour Booking Form submission From : $fullname";
	$email_body = "You have received a new message. ".
	" Here are the details:\n Full Name: $fullname
                           \n Email: $email_address
                           \n Phone: $phone
                           \n NumberOfAdults: $NumberOfAdults
                           \n NumberOfChildren: $NumberOfChildren
                           \n Destination: $Destination
                           \n ArrivalDate: $ArrivalDate
                           \n DepartureDate: $DepartureDate
                           \n Message : $Requirements"; 
	
	$headers = "From: $myemail\n"; 
	$headers .= "Reply-To: $email_address";
	
	mail($to,$email_subject,$email_body,$headers);
	//redirect to the 'thank you' page
;
;
	header('Location: BookingThankyou.php');
} 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
	<title>Tour Booking Form handler</title>
</head>

<body>
<!-- This page is displayed only if there is some error -->
<?php
echo nl2br($errors);
?>


</body>
</html>
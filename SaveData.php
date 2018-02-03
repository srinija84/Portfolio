<?php

include 'databaseconnector.php';

$fname = $_POST['frstName'];
$lname = $_POST['lstName'];
$email = $_POST['email'];
$zipcode = $_POST['zipcode'];
$state = $_POST['state'];
$errors = array();

if (empty($fname)) 
{
	# code...
	array_push($errors, "First name is Required.");
}
if (empty($lname)) 
{
	# code...
	array_push($errors, "Last name is Required.");
}
if (empty($email)) 
{
	# code...
	array_push($errors, "Email Id is Required.");
}
if (empty($zipcode)) 
{
	# code...
	array_push($errors, "Zipcode is Required.");
}
if (count($errors) == 0) 
{
	# code...
	$sql = "INSERT INTO contactform (firstname, lastname, email, zipcode, state) 
	VALUES ('$fname', '$lname', '$email', '$zipcode', '$state')";
	$result = $conn->query($sql);

	header("Location: ContactForm.php");	
}



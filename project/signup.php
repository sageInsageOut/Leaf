<?php
     session_start();
     include("connection.php");
     include("function.php");

     if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		if(!empty($fname) && !empty($password) && !is_numeric($fname))
		{

			//save to database
			
			$query = "insert into projectdb(fname,lname,email,password) values('$fname','$lname','$email','$password')";

			mysqli_query($conn, $query);
			header("Location: logg.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}

  ?>	

	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Sign up</title>
		<link rel="stylesheet" type="text/css" href="login.css">
	</head>
	<body>
	<section>
<div class="imgbox">
<img src ="img/sign.jpg">
</div>
<div class="containbox">
	<div class="formbx">
	<h2>Sign Up</h2>
	<form method="post" autocomplete="off">
		<div class="inputbx">
	<span>First name</span>
	<input type="text" name="fname" placeholder="First name">
</div>
<div class="inputbx">
	<span>Last name</span>
	<input type="text" name="lname" placeholder="Last name">
</div>
<div class="inputbx">
	<span>Email</span>
	<input type="text" name="email" placeholder="Email">
</div>
<div class="inputbx">
	<span>Password</span>
	<input type="Password" name="password" placeholder="Password">
</div>
<div class="inputbx">
	<input type="submit" value="Login" name="submit">
</div>
<div class="inputbx">
	<p>Have an account Log in?<a href="logg.php">Log In</a></p>
</div>
</form>
</div>
</div>
</section>
	
	</body>
	</html>
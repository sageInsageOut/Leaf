<?php
     session_start();
      include("tower/service.php");

     $id = $_GET['updateid'];
     $query = "select * from profiles where id=$id";
     $result = mysqli_query($conn,$query);
     $row = mysqli_fetch_assoc($result);
     $id = $row['id'];
	$username = $row['username'];
 	$firstname = $row['firstname'];
	$lastname = $row['lastname'];
	$email = $row['email'];
	$password = $row['password'];




     if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$username = $row['username'];
 	     $firstname = $row['firstname'];
	     $lastname = $row['lastname'];
	     $email = $row['email'];
	     $password = $row['password'];

		if(!empty($username) && !empty($password) && !is_numeric($username))
		{

			//save to database
			
			$query = "update profiles set id='$id',username='$username',firstname='$firstname',lastname='$lastname',email='$email',password='$password' where id='$id'";

			$result = mysqli_query($conn, $query);
			if($result){
			 echo "update successfully";
			 header("Location: admin.php");
			}else{
				die(mysql_error($conn));
			}

			//header("Location: logg.php");
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
		<title>Update</title>
		<link rel="stylesheet" type="text/css" href="login.css">
	</head>
	<body>
	<section>
<div class="imgbox">
<img src ="img/sign.jpg">
</div>
<div class="containbox">
	<div class="formbx">
	<h2>Update</h2>
	<form method="post" autocomplete="off">
		<div class="inputbx">
	<span>Username</span>
	<input type="text" name="username" value=<?php echo $username;?>>
</div>
<div class="inputbx">
	<span>First name</span>
	<input type="text" name="firstname" value=<?php echo $firstname;?>>
</div>
<div class="inputbx">
	<span>Last name</span>
	<input type="text" name="firstname" value=<?php echo $lastname;?>>
</div>
<div class="inputbx">
	<span>Email</span>
	<input type="text" name="email" value=<?php echo $email;?>>
</div>
<div class="inputbx">
	<span>Password</span>
	<input type="text" name="password" value=<?php echo $password;?>>
</div>
<div class="inputbx">
	<input type="submit" value="Update">
</div>
</form>
</div>
</div>
</section>
	
	</body>
	</html>
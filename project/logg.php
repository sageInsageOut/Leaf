<?php
    session_start();
    include("function.php");
    include("connection.php");

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
           $email = $_POST['email'];
           $password = $_POST["password"];

           if(!empty($email) && !empty($password) && !is_numeric($email))
           {
               $query = "select * from projectdb where email = '$email' limit 1";
               $result = mysqli_query($conn,$query);

               if($result)
               {
                    if($result && mysqli_num_rows($result) > 0)
                    {
                    	$user_data = mysqli_fetch_assoc($result);
                    	if($user_data['password'] === $password)
                    	{
                    		$_SESSION['email'] = $user_data['email'];
						header("Location: display.php");
                    		die;

                    	}
                    }
               }
                    echo "please enter some valid information";
                }
               else{
               	    echo "please enter some valid information";
               }
           }
?>
<!DOCTYPE html>
<html>
<head><title>Login</title>
<link rel="stylesheet" href="login.css">
</head>
<body>
<section>
<div class="imgbox">
<img src ="img/login.png">
</div>
<div class="containbox">
	<div class="formbx">
	<h2>Login</h2>
	<form method="post">
		<div class="inputbx">
	<span>Email</span>
	<input type="text" name="email" placeholder="Email" autocomplete="off">
</div>
<div class="inputbx">
	<span>Password</span>
	<input type="Password" name="password" placeholder="Password">
</div>
<div class="inputbx">
	<input type="submit" value="Sign In" name="submit">
</div>
<div class="inputbx">
	<p>Don't have an account?<a href="signup.php">Sign Up</a></p>
</div>
</form>
</div>
</div>
</section>
</body>
</html>
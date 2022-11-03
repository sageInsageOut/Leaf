<?php
     session_start();
     include("connection.php");
     include("function.php");

     $user_data = check_login($conn);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Digital Company</title>
	<link rel="stylesheet" type="text/css" href="style.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		
</head>
<body>
<div class="main">
	<div class="header">
		<div class="col-1">
		<div class="title">
			<a href="#">LEAF.</a>
		</div>
		<div class="menu-bar">
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Protfolio</a></li>
				<li><a href="#">Blog</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
			<button class="btnlogin"><a class="loginl" href="logg.php">Login</a></button>
		</div>
	</div>
		<div class="slogan">
			<h1>Creativity Is A Wild Mind &<br> A Disciplined Eye</h1>
			<h5>Digital Company</h5>
		<div class="btn">
		<button class="btn1">Protfolio Demo</button>
		<button class="btn2">Learn More</button>
	</div>
</div>
</div>
<section>
	<div class="contain">
        <i class="material-icons">&#xe85c;</i>
		<h3>Marketing</h3>
		<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
		<a href="#">Learn More<i class="material-icons">&#xe315;</i></a>
	</div>
	<div class="contain">
        <i class="material-icons">&#xe880;</i>
		<h3>Search Engine</h3>
		<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
		<a href="#">Learn More<i class="material-icons">&#xe315;</i></a>
	</div>
	<div class="contain">
		<i class="material-icons">&#xe227;</i>
		<h3>Earn Money</h3>
		<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
		<a href="#">Learn More<i class="material-icons">&#xe315;</i></a>
	</div>
	<div class="contain">
		<i class="material-icons">&#xe0af;</i>
		<h3>Entrepreneur</h3>
		<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
		<a href="#">Learn More<i class="material-icons">&#xe315;</i></a>
	</div>
	<div class="contain">
		<i class="material-icons">&#xe90b;</i>
		<h3>Stragic Plan</h3>
		<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
		<a href="#">Learn More<i class="material-icons">&#xe315;</i></a>
	</div>
	<div class="contain">
		<i class="material-icons">&#xe7ef;</i>
		<h3>Support</h3>
		<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
		<a href="#">Learn More<i class="material-icons">&#xe315;</i></a>
	</div>
</section>
<div class="blog">
	<div class="post">
		<h2>Recent Post</h2>
		<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
	</div>
	<div class="views">
	<div class="card">
<div class="card-image-1">
</div>
<div class="card-text">
<span class="date">feb 15th 2045</span>
<h2>Photoshoot Of The Street</h2>
<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
</div>
<hr>
<div class="card-state">
<ul>
<li><i class="material-icons">&#xe87e;</i>540</li>
<li><i class="material-icons">&#xe8f4;</i>2,240</li>
<li><a href="#">Read more</a><i class="material-icons">&#xe315;</i></li>
</ul>

</div>
</div>

<div class="card">
<div class="card-image-2">
</div>
<div class="card-text">
<span class="date">feb 15th 2045</span>
<h2>Photoshoot Of The Street</h2>
<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
</div>
<hr>
<div class="card-state">
<ul>
<li><i class="material-icons">&#xe87e;</i>2,240</li>
<li><i class="material-icons">&#xe8f4;</i>8,240</li>
<li><a href="#">Read more</a><i class="material-icons">&#xe315;</i></li>
</ul>

</div>
</div>

<div class="card">
<div class="card-image-3">
</div>
<div class="card-text">
<span class="date">feb 15th 2045</span>
<h2>Photoshoot Of The Street</h2>
<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
</div>
<hr>
<div class="card-state">
<ul>
<li><i class="material-icons">&#xe87e;</i>240</li>
<li><i class="material-icons">&#xe8f4;</i>1,240</li>
<li><a href="#">Read more</a><i class="material-icons">&#xe315;</i></li>
</ul>

</div>
</div>


	</div>

	</div>

	<div class="hire">
		<div class="middle">
		<h2>Hire Us!</h2>
		<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.<br>Eos cumque dicta adipisci architecto culpa amet.</p>
		<button>Contact Us</button>
	</div>
	</div>

	<footer>
		<div class="link">
			<div class="column-1">
				<h4>Leaf</h4>
				<p>Facilis ipsum reprehenderit nemo molestias.<br> Aut cum mollitia reprehenderit.<br> Eos cumque dicta adipisci architecto culpa amet.</p>
			</div>

			<div class="column-2">
				<h4>Links</h4>
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Portfolio</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">About</a></li>
				</ul>
			</div>

			<div class="column-3">
				<h4>Categories</h4>
				<ul>
					<li><a href="#">Landing Page</a></li>
					<li><a href="#">Real Estate</a></li>
					<li><a href="#">Personal</a></li>
					<li><a href="#">Business</a></li>
					<li><a href="#">E-Commerce</a></li>
				</ul>
			</div>

			<div class="column-4">
				<h4>Contact Information</h4>
				<p>Dang,ghorahi</p>
				<p>082-562098</p>
				<p>intro@gmail.com</p>
			</div>
		</div>
		<div class="copyright">
			<p><small>&copy; 2045 Site Name. All Rights Reserved.</small><br>
			<small>Design by <span class="name">Lab Rat</span>. project work</small></p>
		</div>
	</footer>
</div>
</body>
</html>
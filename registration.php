<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Registration Portal </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="login.css">
	<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="fog.css">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300">
</head>	
<body>
<section class="fog">
	<figure class="absolute-bg" style="background-image: url('fog.jpeg');"></figure>
	<div class="fog__container">
	<div class="fog__img fog__img--first"></div>
	<div class="fog__img fog__img--second"></div>

	<h1> Registration Page </h1>
	<div class="indicator fa fa-down-arrow"></div>
	<div id="block-container" >
		<div id="form-container" class="main">
			<form action="back_info.php" method="POST" name="registration" enctype="multipart/form-data">
				<input id="fname" type="text" name="fname" placeholder="First Name" pattern="[A-Za-z0-9 ]+" required/>
				<input id="lname" type="text" name="lname" placeholder="Last Name" pattern="[A-Za-z.' ]+" required/>
				<input id="reg" type="text" name="reg" placeholder="Registration Number" pattern="[0-9]{9}" required/>
				<input id="phone" type="text" name="phone" placeholder="Phone Number" pattern="[0-9]{10}" required/>
				<select id="card_type" name="card_type" placeholder="Card Type" required/>
					<option value="" hidden>Card Type</option>
					<option value="1">One</option>
					<option value="2">Two</option>
				</select>
				<input id="clg" type="text" name="clg" placeholder="Institution" pattern="[A-Za-z\x26. ]+" required/>
				<input id="email" type="email" name="email" placeholder="Email Id" required/>
				<input id="register" type="submit" name="submit" value="Register"/>
				<input id="search" type="button" onclick="location.href='search.php';" name="search" value="search" />
			</form>

			<form action="back_info.php" method="POST" id="logout_form">
				<input id="logout" type="submit" name="logout" value="logout" />
			</form>
		</div>
	</div>
	<div>
		<h2 id="designedby"> Designed by System Admin in MIT, Manipal</h2> 
	</div>
</section>
</body>
</html>
<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="UTF-8">
	<title>Infodesk Portal</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel="stylesheet" href="fog.css">
	<link rel="stylesheet" type="text/css" href="login.css">
	<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300">
</head>
<body>
<section class="fog">
	<figure class="absolute-bg" style="background-image: url('fog.jpeg');"></figure>
	<div class="fog__container">
	<div class="fog__img fog__img--first"></div>
	<div class="fog__img fog__img--second"></div>

	<h1> Infodesk Portal </h1>

	<div id="form-container" class="main">
		<form action="back_info.php" method="POST" name="registration" enctype="multipart/form-data">
			<input id="fname" type="text" name="fname" placeholder="First Name" pattern="[A-Za-z0-9 ]+"/>
			<input id="lname" type="text" name="lname" placeholder="Last Name" pattern="[A-Za-z.' ]+" />
			<input id="phone" type="text" name="phone" placeholder="Phone Number" pattern="[0-9]{10}"/>
			<input id="del_id" type="text" name="del_id" placeholder="Delegate ID" pattern="[0-9]" />
			<input id="logout" type="button" onclick="location.href='back_info.php';" name="logout" value="logout" />
			<input id="register" type="submit" onclick="location.href='registration.php';" name="register" value="register" />
			<input id="search" type="submit" name="submit" value="Search"/>
		</form>
	</div>
	<div>
		<h2 id="designedby"> Designed by System Admin in MIT, Manipal</h2>
	</div>
</section>
</body>
</html>

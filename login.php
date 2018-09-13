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

	<div class="main">
		<form method="post">
			<div>
				<h2>System Admin</h2>
				<input type="text" placeholder="Username" name="sausername" id="sys_usr">
				<input type="password" placeholder="Password" name="sapassword" id="sys_pass" >
			</div>
			<div>
				<h2>Info-Desk Organizer</h2>
				<input type="text" placeholder="Username" name="infousername" id="info_usr" >
				<input type="password" placeholder="Password" name="infopassword" id="info_pass" >
			</div>
			<input id="logout" type="button" onclick="location.href='registration.php';" name="logout" value="login" />
		</form>
	</div>
	<div>
		<h2 id="designedby"> Designed by System Admin in MIT, Manipal</h2>
	</div>
</section>
</body>
</html>

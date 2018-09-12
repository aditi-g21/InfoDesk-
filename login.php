<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="UTF-8">
	<title>Infodesk Portal</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel="stylesheet" href="fog.css">
	<link rel="stylesheet" type="text/css" href="login.css">
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
				<input type="text" placeholder="Username" name="sausername" >
				<input type="password" placeholder="Password" name="sapassword" id="sapassword" >
			</div>
			<div>
				<h2>Info-Desk Organizer</h2>
				<input type="text" placeholder="Username" name="infousername" id="infousername" >
				<input type="password" placeholder="Password" name="infopassword" id="infopassword" >
			</div>
			<a href="login.php">
				<button>log in</button>
			</a>
		</form>
	</div>
	<div>
		<h2 id="designedby"> Designed by System Admin in MIT, Manipal</h2>
	</div>
</section>
</body>
</html>

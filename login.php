<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="UTF-8">
	<title>Login</title>
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
		<form method="POST" action="login_backend.php">
			<div>
				<h2>System Admin</h2>
				<input type="text" placeholder="Username" name="sys_usr" id="sys_usr" required>
				<div class="error">
					
				</div>
				<input type="password" placeholder="Password" name="sys_pass" id="sys_pass" required>
				<div class="error">
					
				</div>
			</div>
			<div>
				<h2>Info-Desk Organizer</h2>
				<input type="text" placeholder="Username" name="info_usr" id="info_usr" required >
				<div class="error">
					
				</div>
				<input type="password" placeholder="Password" name="info_pass" id="info_pass" required>
				<div class="error">
					
				</div>
			</div>
			<input id="login" type="submit" name="login" value="login" />
		</form>
	</div>
	<div>
		<h2 id="designedby"> Designed by System Admin in MIT, Manipal</h2>
	</div>
</section>
</body>
</html>

<?php session_start(); ?>
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

	<h1> Confirm </h1>

	<div id="block-container" >
		<div id="form-container" class="main">
			<form action="back_info.php" method="POST" name="registration" enctype="multipart/form-data">

				<div class="error">
					<?php 
						echo $_SESSION['fname']."<br/>";
						echo $_SESSION['lname']."<br/>";
						echo $_SESSION['reg']."<br/>";
						echo $_SESSION['clg']."<br/>";
						echo $_SESSION['card_type']."<br/>";
						echo $_SESSION['phone']."<br/>";
						echo $_SESSION['email']."<br/>";
					?>
				</div>
				
				<input id="register" type="submit" onclick="location.href='registration.php';" name="register" value="Back" />
				<input id="confirm" type="submit" name="confirm" value="Confirm"/>
			</form>

		</div>
	</div>

	<div>
		<h2 id="designedby"> Designed by System Admin in MIT, Manipal</h2>
	</div>
</section>
</body>
</html>

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
	<div id="form-container" class="main">
		<form action="back_info.php" method="POST" name="registration" enctype="multipart/form-data">
			<input id="input-f_name" type="text" name="t_name" placeholder="First Name" pattern="[A-Za-z0-9 ]+" required/>
			<input id="input-l_name" type="text" name="input-l_name" placeholder="Last Name" pattern="[A-Za-z.' ]+" required/>
			<input id="input-reg_no" type="text" name="reg_no" placeholder="Registration Number" pattern="[0-9]{9}" required/>
			<input id="input-ph_no" type="text" name="ph_no" placeholder="Phone Number" pattern="[0-9]{10}" required/>
			<input id="input-card" type="text" name="card" placeholder="Card Type" pattern="[1-3]" required/>
			<input id="input-insti" type="text" name="insti" placeholder="Institution" pattern="[A-Za-z\x26. ]+" required/>
			<input id="input-del_id" type="text" name="delegate_id" placeholder="Delegate ID" pattern="[0-9]" required/>
			<input id="input-em_id" type="email" name="em_id" placeholder="Email Id" required/>
			<input type="submit" name="submit" value="Register" id="button"/>
		</form>
	</div>
	<div>
		<h2 id="designedby"> Designed by System Admin in MIT, Manipal</h2> 
	</div>
</section>
</body>
</html>
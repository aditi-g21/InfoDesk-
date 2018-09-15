<?php
	session_start();
	//connecting to database
	$dbhost='localhost';
	$dbuser='root';
	$dbpass='';
	$dbname='details';
	$connect=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	if(mysqli_connect_errno())
	{
		die('database connection failed');
	}

	if(isset($_POST['confirm']))
	{
		//inserting values
		$fname=$_SESSION['fname'];
		$lname=$_SESSION['lname'];
		$email=$_SESSION['email'];
		$phone_no=$_SESSION['phone'];
		$reg_no=$_SESSION['reg'];
		$clg_name=$_SESSION['clg'];
		$card_type=$_SESSION['card_type'];

		$sql = "INSERT INTO information (first_name, last_name, email,reg_no,phone_no,clg_name,card_type)
				VALUES ('$fname','$lname','$email','$reg_no','$phone_no','$clg_name','$card_type' )";
				//checking if its done or not
		if ($connect->query($sql) === true) 
    		$message = "New record created successfully";
		else 
    		$message = "Error: " . $sql . "<br>" . $connect->error;

    	$_SESSION['confirm_message']=$message;
    	header("Location: registration.php");


	}
	if(isset($_POST['logout']))
	{
		$insert='UPDATE data SET status=0 WHERE sys_username= "'.$_SESSION['sys_usr'].'"';
		if($connect->query($insert))
			header("Location: login.php");
	}
	// search for the value
	/*if(isset($_POST['search']) && $_POST['search'])
	{
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$phone_no=$_POST['phone'];
		$delegate=$_POST['del_id'];

		// $sql="SELECT * FROM information WHERE 'first_name' = $fname OR 'last_name' = $lname OR 'phone_no' = $phone_no OR 'id' = $delegate";
		$sql='SELECT * FROM information WHERE first_name ="'.$fname.'" OR last_name = "'.$lname.'" OR phone_no = "'.$phone_no.'" AND id = "'.$delegate.'"';
		$result = mysqli_query($connect,$sql);//need to add delegate number
		$_SESSION['users'] = array();
		while ($row = mysqli_fetch_array($result))
		{
			$details_search = "First Name :- "$row['first_name']."<br\> Last Name :-".$row['last_name']."<br/>Registration Number :-".$row['reg_no']."<br/>Phone Number :-".$row['phone_no']."<br/>Email ID :-".$row['email']."<br/>College Name:-".$row['clg_name']."<br/>Card Type=".$row['card_type'];
			$_SESSION['users'].push($details_search);
			echo $_SESSION['users'];
			//back to main page with output message as details
			//header("Location: registration.php");
		}
	}*/

	unset($fname,$lname,$email,$phone_no,$reg_no,$clg_name,$card_type);
	
	if(isset($_POST['register']))
	{
		$form=false;

		unset($error_message,$message);
		
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$email=$_POST['email'];
		$phone_no=$_POST['phone'];
		$reg_no=$_POST['reg'];
		$clg_name=$_POST['clg'];
		$card_type=$_POST['card_type'];

		//checking whats empty and creating popout message
		if(empty($fname))
			$error_message .="First Name, ";
		if(empty($lname))
			$error_message .="Last Name, ";
		if(empty($email))
			$error_message .="Email ID, ";
		if(empty($phone_no))
			$error_message .="Phone Number, ";
		if(empty($reg_no))
			$error_message .="Registeration Number, ";
		if(empty($clg_name))
			$error_message .="College Name, ";
		if(empty($card_type))
			$error_message .="Card Type, ";
		
		if(!empty($error_message))
		{
			//need to remove a space and ,

			$error_message = substr($message, 0, strlen($message)-2);
			$error_message .= " REQUIRED";
		}

		//if everything is there
		if(!isset($fname,$lname,$reg_no,$phone_no,$email,$clg_name,$card_type))
			$form = false;
		else
		{
			//keep whatever the user has already inputed
			//if something is null it will remain null
			$form = true;
			$_SESSION['fname'] = $fname;
			$_SESSION['lname'] = $lname;
			$_SESSION['reg'] = $reg_no;
			$_SESSION['clg'] = $clg_name;
			$_SESSION['card_type'] = $card_type;
			$_SESSION['phone'] = $phone_no;
			$_SESSION['email'] = $email;
			
			header("Location: confirm.php");
			
		}

		else
		{
			//no matter the messages should be shown
			if(!empty($error_message))
				$_SESSION['message'] = $error_message;	
			else
				$_SESSION['message'] = $message;
			header("Location: registration.php");
		}
		
	}
	
?>
<?php

	session_start();

	//connecting to database
	$dbhost='localhost';
	$dbuser='root';
	$dbpass='';
	$dbname='arsh';
	$connect=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	if(mysqli_connect_errno())
	{
		die('database connection failed');
	}
	echo "hello";
	unset($login,$message);
	
	if($_POST['login'])
	{
		echo "hello";
		unset($sys_usr,$sys_pass,$info_usr,$info_pass,$error_message);
		
		$sys_usr=$_POST['sys_pass'];
		$sys_pass=$_POST['sys_pass'];
		$info_pass=$_POST['info_pass'];
		$info_usr=$_POST['info_usr'];

		if(isset($sys_pass,$sys_usr,$info_usr,$info_pass))
		{
			//checking the login data from the database
			$sql="SELECT * FROM data WHERE sys_username= '".$sys_usr."' AND sys_password='".$sys_password."' AND info_usr='".$info_usr."' AND info_pass='".$info_pass."'";
			$row=mysqli_query($connect,$sql);
			$numrows=mysqli_num_rows($res);

			if($numrows==1)
			{
				//loging status
				$login=mysqli_query($connect, "SELECT status FROM data WHERE sys_pass='".$sys_usr."'");//all will point to same thing
				if($login==1)
				{
					$message="Already logged in from another device
							\nCant login from more than 1 device";
					$_SESSION['message'] = $message;
					header("Location: login.php");
				}
				else
				{
					//login status = 1 in database
					$insert="INSERT INTO data (status)
							VALUES ('1')";
					if($connect->query($insert))
						header("Location: registration.php");
					
				}	
			}
			else
			{
				$error_message = "Wrong";
				$user="SELECT * FROM data WHERE sys_username ='".$sys_usr."'";
				$check=mysqli_query($link,$user);
				$row_count=mysqli_num_rows($check);
				
				if($row_count==1)
					$_SESSION['system_username'] = $sys_usr;
				else
					$error_message1 .=" System Admin username";
				
				$user="SELECT * FROM data WHERE info_username ='".$info_usr."'";
				$check=mysqli_query($link,$user);
				$row_count=mysqli_num_rows($check);
				
				if($row_count==1)
					$_SESSION['infodesk_username'] = $info_usr;
				else
					$error_message .=" Infodesk username";

				//no matter the messages should be shown
				$_SESSION['error_message'] = $error_message;
				header("Location: login.php");
				//back to login page with error message
			}
		}

		//either no input or username or password
		else
		{
			if(empty($sys_usr))
				$error_message .= "System Admin username ";
			if(empty($sys_pass))
				$error_message .= "System admin password ";
			if(empty($info_usr))
				$error_message .= " Infodesk username ";
			if(empty($indo_pass))
				$error_message .= "Infodesk password ";
			$error_message .=" Required!";

			//back to login page with showing the error message
			$_SESSION['error_message'] = $error_message;
			header("Location: login.php");
		}
	}
	//header("Location: login.php");
?>
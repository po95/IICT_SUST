<?php 

	session_start();
	
	$f_name = "";
	$username = "";
	$number = "";
	$mail = "";
	$password_1 = "";
	$password_2 = "";
	$b_date = "";
	$designation= "";
	$errors = array();

	//connect to the database

	$db = mysqli_connect("localhost","root","","cse");

	if(isset($_POST['register'])){
		$f_name = mysql_real_escape_string($_POST['f_name']);
		$username = mysql_real_escape_string($_POST['username']);
		$number = mysql_real_escape_string($_POST['number']);
		$mail = mysql_real_escape_string($_POST['mail']);
		$password_1 = mysql_real_escape_string($_POST['password1']);
		$password_2 = mysql_real_escape_string($_POST['password2']);
		$b_date = mysql_real_escape_string($_POST['bdate']);
		$designation = mysql_real_escape_string($_POST['designation']);
		
	}

	// ensure that form fields are filled properly

	if(empty($f_name)){
		array_push($errors, "Full name is required");
	}
	if(empty($username)){
		array_push($errors, "Username is required");
	}
	if(empty($number)){
		array_push($errors, "Phone Number is required");
	}
	if(empty($password_1)){
		array_push($errors, "Password is required");
	}
	if(empty($b_date)){
		array_push($errors, "Birthdate is required");
	}
	if(empty($mail)){
		array_push($errors, "Email is required");
	}
	if(empty($designation)){
		array_push($errors, "Designation is required");
	}
	if($password_1 != $password_2){
		array_push($errors, "Password doesn't match");
	}

	// if there are no errors, save user to database 

	if(count($errors)==0){
		$password = md5($password_1);

		$sql = "INSERT INTO user (full_name,username,phone,email,password,b_date,designation) 
						VALUES('$f_name','$username','$number','$mail','$password','$b_date','$designation')";
		mysqli_query($db, $sql);

		$_SESSION['username'] = $username;
		$_SESSION['success'] = "You are logged in";
		header('location: home.php');

	}
	//log user in from login page


	if(isset($_POST['login'])){
		$username = mysql_real_escape_string($_POST['username']);
		$password = mysql_real_escape_string($_POST['password']);

		//ensure that form fields are filled properly

		if(empty($username)){
			array_push($errors, "Username is required");
		}
		if(empty($password)){
			array_push($errors, "Password is required");
		}

		if(count($errors)==0){
			$password = md5($password);
			$query ="SELECT * FROM user WHERE username='$username' AND password = '$password'";
			$result = mysqli_query($db, $query);
			if(mysqli_num_rows($result) == 1){
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				echo "OKay dear";
				header('location: home.php');
			}
			else{
				echo "Hello";
				array_push($errors, "wrong username and password combination");
				header('location: index.php');
			}
		}

	}

	//logout
	if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION['username']);
		header('location: index.php');
	}

 ?>
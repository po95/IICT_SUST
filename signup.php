<!--
Author: sourav sarker.
CSE SUST
REG NO: 2014331039 
-->
<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
<title>IICT management</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Flat Sign Up Form Responsive Widget Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link href="css/style1.css" rel="stylesheet" type="text/css" media="all">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<!-- //css files -->
<!-- online-fonts -->
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'><link href='//fonts.googleapis.com/css?family=Raleway+Dots' rel='stylesheet' type='text/css'>
<style type="text/css">body {
    background:url('iict23.jpg') no-repeat 0% 87% fixed;
    background: linear-gradient(
                     rgba(20,20,20, .5), 
                     rgba(20,20,20, .5)),
                     url(iict23.jpg);
    background-size: cover;
	font-family: 'Lato', sans-serif;
	text-align:center;
}</style>
</head>
<body>
<!--header-->
	<div class="header-w3l">
		<h1>Create Your Account Here</h1>
	</div>
<!--//header-->
<!--main-->
<div class="main-agileits">
	<h2 class="sub-head">Sign Up</h2>
		<div class="sub-main">	
			<form action="signup.php" method="post">
			
				<input placeholder="Full Name" name="f_name" class="name" type="text" required="">
					<span class="icon1"><i class="fa fa-user" aria-hidden="true"></i></span><br>
				<input placeholder="User Name" name="username" class="name2" type="text" required="">
					<span class="icon2"><i class="fa fa-user" aria-hidden="true"></i></span><br>
				<input placeholder="Phone Number" name="number" class="number" type="text" required="">
					<span class="icon3"><i class="fa fa-phone" aria-hidden="true"></i></span><br>
				<input placeholder="Email" name="mail" class="mail" type="text" required="">
					<span class="icon4"><i class="fa fa-envelope" aria-hidden="true"></i></span><br>
				<input  placeholder="Password" name="password1" class="pass" type="password" required="">
					<span class="icon5"><i class="fa fa-unlock" aria-hidden="true"></i></span><br>
				<input  placeholder="Confirm Password" name="password2" class="pass" type="password" required="">
					<span class="icon6"><i class="fa fa-unlock" aria-hidden="true"></i></span><br>
				<input placeholder="Birthdate" name="bdate" class="name" type="text" required="">
					<span class="icon7"><i class="fa fa-user" aria-hidden="true"></i></span><br>
				<input placeholder="Designation" name="designation" class="name" type="text" required="">
					<span class="icon8"><i class="fa fa-user" aria-hidden="true"></i></span><br>

				
				<input type="submit" value="sign up" name="register">
			</form>
		</div>
		<div class="clear"></div>
</div>
<!--//main-->

<!--footer-->
<div class="footer-w3">
	<p>&copy; 2017</p>
</div>
<!--//footer-->

</body>
</html>
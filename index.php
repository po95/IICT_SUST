<!-- 
Author: sourav sarker.
CSE SUST
REG NO: 2014331039 
-->

<?php include('server.php'); ?>
<?php
if(isset($_POST['login'])){
header("Location: main.php");
exit;
}?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>IICT MS</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glassy Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<!-- //css files -->
<!-- web-fonts -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700" rel="stylesheet">
<style type="text/css">
body {
    font-family: 'Open Sans', sans-serif;
	background:url(bann.jpg) no-repeat 0px 0px;
	background: linear-gradient(
                     rgba(20,20,20, .5), 
                     rgba(20,20,20, .5)),
                     url(bann.jpg);

	background-size:cover;
	-webkit-background-size:cover;
	-ms-background-size:cover;
	-o-background-size:cover;
	-moz-background-size:cover;
	background-position:center;
	background-attachment:fixed;
}

</style>

<!-- //web-fonts -->
</head>
<body>


		<!--header-->
		<div class="header-w3l">
			<h1>Have a Nice Day!!!</h1>
		</div>
		<!--//header-->
		<!--main-->
		<div class="main-w3layouts-agileinfo">
	           <!--form-stars-here-->
				<div class="wthree-form">
							<h2>Fill out the form below to login</h2>
							<form action="index.php" method="post">
								<div class="form-sub-w3">
									<input type="text" name="username" placeholder="Username " required="" />
								<div class="icon-w3">
									<i class="fa fa-user" aria-hidden="true"></i>
								</div>
								</div>
								<div class="form-sub-w3">
									<input type="password" name="password" placeholder="Password" required="" />
								<div class="icon-w3">
									<i class="fa fa-unlock-alt" aria-hidden="true"></i>
								</div>
								</div>

								<label class="anim">
								<input type="checkbox" class="checkbox">
									<span>Remember Me</span> 
									<a href="#">Forgot Password</a>
								</label> 
								<div class="clear"></div>
								<div class="submit-agileits">
									<input type="submit" name="login" value="Login">
								</div>
								<div style="padding: 20px; color: #F2F3F4;">
									<p><h2><a href="signup.php" style="color: #F2F3F4;">Don't have an account?</a></h2></p>
								</div>
							</form>

						</div>
				<!--//form-ends-here-->

		</div>
		<!--//main-->
		<!--footer-->
		<div class="footer">
			<p>&copy; 2017 about </a></p>
		</div>
		<!--//footer-->
			


		 


</body>
</html>


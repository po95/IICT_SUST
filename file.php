<!-- 
Author: sourav sarker.
CSE SUST
REG NO: 2014331039 
-->

<html>
<head>
	<title>IICT Management System</title>
	<link rel="stylesheet" type="text/css" href="css/wow.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  <meta name="viewport" content="width=device-width, initial-scale=1"/>
	 <link rel="stylesheet" href="css/bootstrap.min.css"> 
	 <link rel="stylesheet" type="text/css" href="css/Interface_CSE.css">
	 <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	 <link href="fonts/glyphicons-halflings-regular.ttf" rel="stylesheet">
     <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="js/jquery-ui-datepicker.min.js"></script>
<script>
    $('#calendar').datepicker({
        inline: true,
        firstDay: 1,
        showOtherMonths: true,
        dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat']
    });
</script>
</head>
<body>

	<!-- <div id="header">
		<div class="logo">
			<a href="#"><strong>IICT</strong> <span>management</span><br>
				<span style="letter-spacing: 31px;">SYSTEM</span>	
			</a>


		</div>
	</div> -->
	<nav class="navbar navbar-inverse">
  <div class="container-fluid" >
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" style="height:70px;" href="main.php"><span style="font-size: 1.8em;font-weight: 300;letter-spacing: 3px;"><strong>IICT</strong></span> <span style="font-size: 1.4em;letter-spacing: 3px;"> management</span> <br> <span style="letter-spacing:35px;padding-top:3px;">SYSTEM</span> </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar"style="padding-left:30px; padding-top:10px;" >
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Files</a></li>
            <li><a href="#">Complain Box</a></li>
            <li><a href="#">Listing</a></li>
          </ul>
        </li>
        <li><a href="#">Last works</a></li>
        <li><a href="#">Worklist</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Notifications</a></li>
        <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid" style="margin-left:0px; margin-right: 0px; padding-left: 0px; padding-right: 0px;">

	<div class="row">
		<div class="col-lg-3">
			<div class="sidebar" >
				<ul id="nava">
					<li><a href="main.php">Home</a></li>
					<li><a href="ginfomain.php">General Information</a></li>
					<li><a href="filefirst.php">Files</a></li>
					<li><a href="complain.php">Complain Box</a></li>
					<li><a href="#">Listing</a></li>
					<li><a href="#">Notice Box</a></li>
					<li><a href="#">Shared Document</a></li>
					<li><a href="#">About CSE Department</a></li>
					<li><a href="updateinfo.php">Update Your Info</a></li>
				</ul>
			</div>
		</div>
		<div class="col-lg-9">

			<div class="row">
				<div class="col-lg-12 col-lg-offset-10" >
					<div style="text-decoration: none; padding-bottom: 20px; padding-right: 30px;">
						<a href="#" class="button" >Update</a>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
					<div class="col-md-4" style="padding:10px; padding-top:15px;">
		      <div class="thumbnail" style="width: 200px; height: 220px; border:none;">
		        <a href="#" data-target="#GOmodal" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#GOmodal">
		          <img src="form.png" alt="GO FORM" style="width:100%">
		          <div  class="caption" style="text-align: center;">
		            <p>GO Application</p>
		          </div>
		        </a>
		      </div>
    		</div>

    		<div class="col-md-4" style="padding:10px; padding-top:15px;">
		      <div class="thumbnail" style="width: 200px; height: 220px; border:none;">
		        <a  data-target="#Accntmodal" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#Accntmodal">
		          <img src="form.png" alt="GO FORM" style="width:100%">
		          <div  class="caption" style="text-align: center;">
		            <p>Accounts</p>
		          </div>
		        </a>
		      </div>
    		</div>

    		<div class="col-md-4" style="padding:10px; padding-top:15px;">
		      <div class="thumbnail" style="width: 200px; height: 220px; border:none;">
		        <a  data-target="#jobcertificate" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#jobcertificate">
		          <img src="form.png" alt="GO FORM" style="width:100%">
		          <div  class="caption" style="text-align: center;">
		            <p>Job Certificate</p>
		          </div>
		        </a>
		      </div>
    		</div>
				</div>
			</div>

    		<div class="row">
    			<div class="col-lg-12">
    				<div class="col-md-4" style="padding:10px; padding-top:15px;">
		      <div class="thumbnail" style="width: 200px; height: 220px; border:none;">
		        <a  data-target="#nocmod" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#nocmod">
		          <img src="form.png" alt="GO FORM" style="width:100%">
		          <div  class="caption" style="text-align: center;">
		            <p>NOC</p>
		          </div>
		        </a>
		      </div>
    		</div>

    		<div class="col-md-4" style="padding:10px; padding-top:15px;">
		      <div class="thumbnail" style="width: 200px; height: 220px; border:none;">
		        <a  data-target="#resignmod" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#resignmod">
		          <img src="form.png" alt="GO FORM" style="width:100%">
		          <div  class="caption" style="text-align: center;">
		            <p>Resign Letter</p>
		          </div>
		        </a>
		      </div>
    		</div>

    		<div class="col-md-4" style="padding:10px; padding-top:15px;">
		      <div class="thumbnail" style="width: 200px; height: 220px; border:none;">
		        <a href="#" data-target="#Accntmodal" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#Accntmodal">
		          <img src="form.png" alt="GO FORM" style="width:100%">
		          <div  class="caption" style="text-align: center;">
		            <p>Travel Vouture</p>
		          </div>
		        </a>
		      </div>
    		</div>
    			</div>			

    		</div>
   			
   			<div class="row">
   				<div class="col-lg-12">
   					<div class="col-md-4" style="padding:10px; padding-top:15px;">
		      <div class="thumbnail" style="width: 200px; height: 220px; border:none;">
		        <a href="#" data-target="#Accntmodal" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#Accntmodal">
		          <img src="form.png" alt="GO FORM" style="width:100%">
		          <div  class="caption" style="text-align: center;" >
		            <p>Exam Notice</p>
		          </div>
		        </a>
		      </div>
    		</div>
   			<div class="col-md-4" style="padding:10px; padding-top:15px;">
		      <div class="thumbnail" style="width: 200px; height: 220px; border:none;">
		        <a href="#" data-target="#Accntmodal" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#Accntmodal">
		          <img src="form.png" alt="GO FORM" style="width:100%">
		          <div  class="caption" style="text-align: center;">
		            <p>External Invitation</p>
		          </div>
		        </a>
		      </div>
    		</div>
    		<div class="col-md-4" style="padding:10px; padding-top:15px;">
		      <div class="thumbnail" style="width: 200px; height: 220px; border:none;">
		        <a href="#" data-target="#Accntmodal" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#Accntmodal">
		          <img src="form.png" alt="GO FORM" style="width:100%">
		          <div  class="caption" style="text-align: center;">
		            <p>Study Tour</p>
		          </div>
		        </a>
		      </div>
    		</div>

   				</div>

   			</div>

    		<div class="row">
    			<div class="col-lg-12">
    				<div class="col-md-4" style="padding:10px; padding-top:15px;">
		      <div class="thumbnail" style="width: 200px; height: 220px; border:none;">
		        <a href="#" data-target="#Accntmodal" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#Accntmodal">
		          <img src="form.png" alt="GO FORM" style="width:100%">
		          <div  class="caption" style="text-align: center;">
		            <p>Permission Application</p>
		          </div>
		        </a>
		      </div>
    		</div>

    		<div class="col-md-4" style="padding:10px; padding-top:15px;">
		      <div class="thumbnail" style="width: 200px; height: 220px; border:none;">
		        <a href="#" data-target="#Accntmodal" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#Accntmodal">
		          <img src="form.png" alt="GO FORM" style="width:100%">
		          <div  class="caption" style="text-align: center;">
		            <p>Scholarship Application</p>
		          </div>
		        </a>
		      </div>
    		</div>

    		<div class="col-md-4" style="padding:10px; padding-top:15px;">
		      <div class="thumbnail" style="width: 200px; height: 220px; border:none;">
		        <a href="#" data-target="#Accntmodal" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#Accntmodal">
		          <img src="form.png" alt="GO FORM" style="width:100%">
		          <div  class="caption" style="text-align: center;">
		            <p>Study Leave Application</p>
		          </div>
		        </a>
		      </div>
    		</div>

    			</div>

    		</div>


		</div>
	</div>
</div>

<!-- GO Modal start-->

  <!-- Modal -->
  <div class="modal fade" id="GOmodal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background: #D2E9FF;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 align="center" class="modal-title">Letter For GO</h4>
        </div>
        <div class="modal-body" style="background: #C0E1FF;">
          <h3 align="center">Please fill out the form</h3>

  <form method="POST" action="letterForGO.php">
 
      <p align="center"><input type="text" name="date"  id="calendar" placeholder="তারিখ" style="color: #888;width: 70%;padding: 0px 0px 0px 5px;
    border: 1px solid #C5E2FF;background: #FBFBFB;outline: 0;-webkit-box-shadow:inset 0px 1px 6px #ECF3F5;box-shadow: inset 0px 1px 6px #ECF3F5;
    font: 200 20px/25px Arial, Helvetica, sans-serif; height: 40px;line-height:20px;margin: 2px 6px 16px 0px;"></p>
      <p align="center"><input type="text" name="noticeby" placeholder="আবেদনকারী" style="color: #888;width: 70%;padding: 0px 0px 0px 5px;
    border: 1px solid #C5E2FF;background: #FBFBFB;outline: 0;-webkit-box-shadow:inset 0px 1px 6px #ECF3F5;box-shadow: inset 0px 1px 6px #ECF3F5;
    font: 200 20px/25px Arial, Helvetica, sans-serif; height: 40px;line-height:20px;margin: 2px 6px 16px 0px;"></p>
      <p align="center"><input type="text" name="mypost" placeholder="পদবী" style="color: #888;width: 70%;padding: 0px 0px 0px 5px;
    border: 1px solid #C5E2FF;background: #FBFBFB;outline: 0;-webkit-box-shadow:inset 0px 1px 6px #ECF3F5;box-shadow: inset 0px 1px 6px #ECF3F5;
    font: 200 20px/25px Arial, Helvetica, sans-serif; height: 40px;line-height:20px;margin: 2px 6px 16px 0px;"></p>
      <p align="center"><input type="text" name="country" placeholder="দেশ" style="color: #888;width: 70%;padding: 0px 0px 0px 5px;
    border: 1px solid #C5E2FF;background: #FBFBFB;outline: 0;-webkit-box-shadow:inset 0px 1px 6px #ECF3F5;box-shadow: inset 0px 1px 6px #ECF3F5;
    font: 200 20px/25px Arial, Helvetica, sans-serif; height: 40px;line-height:20px;margin: 2px 6px 16px 0px;"></p>
 <p align="center"><input type="text" name="datefr" id="datepicker" placeholder="ছুটি শুরুর তারিখ" style="color: #888;width: 70%;padding: 0px 0px 0px 5px;
    border: 1px solid #C5E2FF;background: #FBFBFB;outline: 0;-webkit-box-shadow:inset 0px 1px 6px #ECF3F5;box-shadow: inset 0px 1px 6px #ECF3F5;
    font: 200 20px/25px Arial, Helvetica, sans-serif; height: 40px;line-height:20px;margin: 2px 6px 16px 0px;"></p>
     <p align="center"><input type="text" name="dateto" id="datepicker" placeholder="ছুটি শেষের তারিখ" style="color: #888;width: 70%;padding: 0px 0px 0px 5px;
    border: 1px solid #C5E2FF;background: #FBFBFB;outline: 0;-webkit-box-shadow:inset 0px 1px 6px #ECF3F5;box-shadow: inset 0px 1px 6px #ECF3F5;
    font: 200 20px/25px Arial, Helvetica, sans-serif; height: 40px;line-height:20px;margin: 2px 6px 16px 0px;"></p>
    <p align="center"><input type="text" name="days" placeholder="মোট ছুটি(দিন)" style="color: #888;width: 70%;padding: 0px 0px 0px 5px;
    border: 1px solid #C5E2FF;background: #FBFBFB;outline: 0;-webkit-box-shadow:inset 0px 1px 6px #ECF3F5;box-shadow: inset 0px 1px 6px #ECF3F5;
    font: 200 20px/25px Arial, Helvetica, sans-serif; height: 40px;line-height:20px;margin: 2px 6px 16px 0px;"></p>

     <p align="center"><input type="submit" name="submit" value="Submit" style=" padding: 10px 30px 10px 30px;background: #66C1E4;
    border: none;color: #FFF;box-shadow: 1px 1px 1px #4C6E91;-webkit-box-shadow: 1px 1px 1px #4C6E91;-moz-box-shadow: 1px 1px 1px #4C6E91;
    text-shadow: 1px 1px 1px #5079A3; line-height: 1"></p>
     </form>

        </div>
        <div class="modal-footer">
          <p align="center"><button  type="button" class="btn btn-default" data-dismiss="modal" style=" padding: 10px 30px 10px 30px;background: #D2E9FF;
    border: none;color: #000;box-shadow: 1px 1px 1px #4C6E91;-webkit-box-shadow: 1px 1px 1px #4C6E91;-moz-box-shadow: 1px 1px 1px #4C6E91;
    text-shadow: 1px 1px 1px #5079A3;">Close</button></p>
        </div>
      </div>
      
    </div>
  </div>

  <!-- GO Modal end-->

  <!-- accounts modal -->
   <div class="modal fade" id="Accntmodal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background: #D2E9FF;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 align="center" class="modal-title">Letter For Accounts</h4>
        </div>
        <div class="modal-body" style="background: #C0E1FF;">
          <h3 align="center">Please fill out the form</h3>

  <form method="POST" action="letterForAccounts.php">
 
      <p align="center"><input class="hello" type="text" name="date" placeholder="তারিখ" style="color: #888;width: 70%;padding: 0px 0px 0px 5px;
    border: 1px solid #C5E2FF;background: #FBFBFB;outline: 0;-webkit-box-shadow:inset 0px 1px 6px #ECF3F5;box-shadow: inset 0px 1px 6px #ECF3F5;
    font: 200 20px/25px Arial, Helvetica, sans-serif; height: 40px;line-height:20px;margin: 2px 6px 16px 0px;"></p>
      <p align="center"><input class="hello" type="text" name="noticeby" placeholder="আবেদনকারী" style="color: #888;width: 70%;padding: 0px 0px 0px 5px;
    border: 1px solid #C5E2FF;background: #FBFBFB;outline: 0;-webkit-box-shadow:inset 0px 1px 6px #ECF3F5;box-shadow: inset 0px 1px 6px #ECF3F5;
    font: 200 20px/25px Arial, Helvetica, sans-serif; height: 40px;line-height:20px;margin: 2px 6px 16px 0px;"></p>
      <p align="center"><input class="hello" type="text" name="mypost" placeholder="পদবী" style="color: #888;width: 70%;padding: 0px 0px 0px 5px;
    border: 1px solid #C5E2FF;background: #FBFBFB;outline: 0;-webkit-box-shadow:inset 0px 1px 6px #ECF3F5;box-shadow: inset 0px 1px 6px #ECF3F5;
    font: 200 20px/25px Arial, Helvetica, sans-serif; height: 40px;line-height:20px;margin: 2px 6px 16px 0px;"></p>
      <p align="center"><input class="hello" type="text" name="month" placeholder="মাস" style="color: #888;width: 70%;padding: 0px 0px 0px 5px;
    border: 1px solid #C5E2FF;background: #FBFBFB;outline: 0;-webkit-box-shadow:inset 0px 1px 6px #ECF3F5;box-shadow: inset 0px 1px 6px #ECF3F5;
    font: 200 20px/25px Arial, Helvetica, sans-serif; height: 40px;line-height:20px;margin: 2px 6px 16px 0px;"></p>
      <p align="center"><input class="hello" type="text" name="year" placeholder="বছর" style="color: #888;width: 70%;padding: 0px 0px 0px 5px;
    border: 1px solid #C5E2FF;background: #FBFBFB;outline: 0;-webkit-box-shadow:inset 0px 1px 6px #ECF3F5;box-shadow: inset 0px 1px 6px #ECF3F5;
    font: 200 20px/25px Arial, Helvetica, sans-serif; height: 40px;line-height:20px;margin: 2px 6px 16px 0px;"></p>
      <p align="center"><input type="submit" name="submit" value="Submit" style=" padding: 10px 30px 10px 30px;background: #66C1E4;
    border: none;color: #FFF;box-shadow: 1px 1px 1px #4C6E91;-webkit-box-shadow: 1px 1px 1px #4C6E91;-moz-box-shadow: 1px 1px 1px #4C6E91;
    text-shadow: 1px 1px 1px #5079A3; line-height: 1"></p>
     </form>

        </div>
        <div class="modal-footer">
          <p align="center"><button  type="button" class="btn btn-default" data-dismiss="modal" style=" padding: 10px 30px 10px 30px;background: #D2E9FF;
    border: none;color: #000;box-shadow: 1px 1px 1px #4C6E91;-webkit-box-shadow: 1px 1px 1px #4C6E91;-moz-box-shadow: 1px 1px 1px #4C6E91;
    text-shadow: 1px 1px 1px #5079A3;">Close</button></p>
        </div>
      </div>
      
    </div>
  </div>

  <!-- accounts modal end-->

  <!-- jobcertificate modal start -->
   <!-- Modal -->
  <div class="modal fade" id="jobcertificate" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background: #D2E9FF;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 align="center" class="modal-title">Letter For Job Certificate</h4>
        </div>
        <div class="modal-body" style="background: #C0E1FF;">
          <h3 align="center">Please fill out the form</h3>

	<form method="POST" action="LetterForJobCerti.php">
 
			<p align="center"><input type="text" name="date" placeholder="তারিখ" style="color: #888;width: 70%;padding: 0px 0px 0px 5px;
    border: 1px solid #C5E2FF;background: #FBFBFB;outline: 0;-webkit-box-shadow:inset 0px 1px 6px #ECF3F5;box-shadow: inset 0px 1px 6px #ECF3F5;
    font: 200 20px/25px Arial, Helvetica, sans-serif; height: 40px;line-height:20px;margin: 2px 6px 16px 0px;"></p>
			<p align="center"><input type="text" name="noticeby" placeholder="আবেদনকারী" style="color: #888;width: 70%;padding: 0px 0px 0px 5px;
    border: 1px solid #C5E2FF;background: #FBFBFB;outline: 0;-webkit-box-shadow:inset 0px 1px 6px #ECF3F5;box-shadow: inset 0px 1px 6px #ECF3F5;
    font: 200 20px/25px Arial, Helvetica, sans-serif; height: 40px;line-height:20px;margin: 2px 6px 16px 0px;"></p>
			<p align="center"><input type="text" name="mypost" placeholder="পদবী" style="color: #888;width: 70%;padding: 0px 0px 0px 5px;
    border: 1px solid #C5E2FF;background: #FBFBFB;outline: 0;-webkit-box-shadow:inset 0px 1px 6px #ECF3F5;box-shadow: inset 0px 1px 6px #ECF3F5;
    font: 200 20px/25px Arial, Helvetica, sans-serif; height: 40px;line-height:20px;margin: 2px 6px 16px 0px;"></p>
			
			<p align="center"><input type="submit" name="submit" value="Submit" style=" padding: 10px 30px 10px 30px;background: #66C1E4;
    border: none;color: #FFF;box-shadow: 1px 1px 1px #4C6E91;-webkit-box-shadow: 1px 1px 1px #4C6E91;-moz-box-shadow: 1px 1px 1px #4C6E91;
    text-shadow: 1px 1px 1px #5079A3; line-height: 1"></p>
     </form>

        </div>
        <div class="modal-footer">
          <p align="center"><button  type="button" class="btn btn-default" data-dismiss="modal" style=" padding: 10px 30px 10px 30px;background: #D2E9FF;
    border: none;color: #000;box-shadow: 1px 1px 1px #4C6E91;-webkit-box-shadow: 1px 1px 1px #4C6E91;-moz-box-shadow: 1px 1px 1px #4C6E91;
    text-shadow: 1px 1px 1px #5079A3;">Close</button></p>
        </div>
      </div>
      
    </div>
  </div>

  <!-- jobcertificate modal end -->


  <!-- noc modal start -->
  	<!-- Modal -->
  <div class="modal fade" id="nocmod" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background: #D2E9FF;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 align="center" class="modal-title">Letter For NOC</h4>
        </div>
        <div class="modal-body" style="background: #C0E1FF;">
          <h3 align="center">Please fill out the form</h3>

  <form method="POST" action="LetterForNoC.php">
 
      <p align="center"><input type="text" name="date" placeholder="তারিখ" style="color: #888;width: 70%;padding: 0px 0px 0px 5px;
    border: 1px solid #C5E2FF;background: #FBFBFB;outline: 0;-webkit-box-shadow:inset 0px 1px 6px #ECF3F5;box-shadow: inset 0px 1px 6px #ECF3F5;
    font: 200 20px/25px Arial, Helvetica, sans-serif; height: 40px;line-height:20px;margin: 2px 6px 16px 0px;"></p>
      <p align="center"><input type="text" name="noticeby" placeholder="আবেদনকারী" style="color: #888;width: 70%;padding: 0px 0px 0px 5px;
    border: 1px solid #C5E2FF;background: #FBFBFB;outline: 0;-webkit-box-shadow:inset 0px 1px 6px #ECF3F5;box-shadow: inset 0px 1px 6px #ECF3F5;
    font: 200 20px/25px Arial, Helvetica, sans-serif; height: 40px;line-height:20px;margin: 2px 6px 16px 0px;"></p>
      <p align="center"><input type="text" name="mypost" placeholder="পদবী" style="color: #888;width: 70%;padding: 0px 0px 0px 5px;
    border: 1px solid #C5E2FF;background: #FBFBFB;outline: 0;-webkit-box-shadow:inset 0px 1px 6px #ECF3F5;box-shadow: inset 0px 1px 6px #ECF3F5;
    font: 200 20px/25px Arial, Helvetica, sans-serif; height: 40px;line-height:20px;margin: 2px 6px 16px 0px;"></p>
      <p align="center"><input type="text" name="visdate" placeholder="ভ্রমণের তারিখ" style="color: #888;width: 70%;padding: 0px 0px 0px 5px;
    border: 1px solid #C5E2FF;background: #FBFBFB;outline: 0;-webkit-box-shadow:inset 0px 1px 6px #ECF3F5;box-shadow: inset 0px 1px 6px #ECF3F5;
    font: 200 20px/25px Arial, Helvetica, sans-serif; height: 40px;line-height:20px;margin: 2px 6px 16px 0px;"></p>
      <p align="center"><input type="text" name="country" placeholder="দেশ" style="color: #888;width: 70%;padding: 0px 0px 0px 5px;
    border: 1px solid #C5E2FF;background: #FBFBFB;outline: 0;-webkit-box-shadow:inset 0px 1px 6px #ECF3F5;box-shadow: inset 0px 1px 6px #ECF3F5;
    font: 200 20px/25px Arial, Helvetica, sans-serif; height: 40px;line-height:20px;margin: 2px 6px 16px 0px;"></p>
      <p align="center"><input type="submit" name="submit" value="Submit" style=" padding: 10px 30px 10px 30px;background: #66C1E4;
    border: none;color: #FFF;box-shadow: 1px 1px 1px #4C6E91;-webkit-box-shadow: 1px 1px 1px #4C6E91;-moz-box-shadow: 1px 1px 1px #4C6E91;
    text-shadow: 1px 1px 1px #5079A3; line-height: 1"></p>
     </form>

        </div>
        <div class="modal-footer">
          <p align="center"><button  type="button" class="btn btn-default" data-dismiss="modal" style=" padding: 10px 30px 10px 30px;background: #D2E9FF;
    border: none;color: #000;box-shadow: 1px 1px 1px #4C6E91;-webkit-box-shadow: 1px 1px 1px #4C6E91;-moz-box-shadow: 1px 1px 1px #4C6E91;
    text-shadow: 1px 1px 1px #5079A3;">Close</button></p>
        </div>
      </div>
      
    </div>
  </div>

  <!-- noc modal end -->

  <!-- resign modal start -->
  		<!-- Modal -->
  <div class="modal fade" id="resignmod" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background: #D2E9FF;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 align="center" class="modal-title">Letter For Resign</h4>
        </div>
        <div class="modal-body" style="background: #C0E1FF;">
          <h3 align="center">Please fill out the form</h3>

  <form method="POST" action="LetterForResign.php">
 
      <p align="center"><input type="text" name="date" placeholder="তারিখ" style="color: #888;width: 70%;padding: 0px 0px 0px 5px;
    border: 1px solid #C5E2FF;background: #FBFBFB;outline: 0;-webkit-box-shadow:inset 0px 1px 6px #ECF3F5;box-shadow: inset 0px 1px 6px #ECF3F5;
    font: 200 20px/25px Arial, Helvetica, sans-serif; height: 40px;line-height:20px;margin: 2px 6px 16px 0px;"></p>
      <p align="center"><input type="text" name="noticeby" placeholder="আবেদনকারী" style="color: #888;width: 70%;padding: 0px 0px 0px 5px;
    border: 1px solid #C5E2FF;background: #FBFBFB;outline: 0;-webkit-box-shadow:inset 0px 1px 6px #ECF3F5;box-shadow: inset 0px 1px 6px #ECF3F5;
    font: 200 20px/25px Arial, Helvetica, sans-serif; height: 40px;line-height:20px;margin: 2px 6px 16px 0px;"></p>
      <p align="center"><input type="text" name="mypost" placeholder="পদবী" style="color: #888;width: 70%;padding: 0px 0px 0px 5px;
    border: 1px solid #C5E2FF;background: #FBFBFB;outline: 0;-webkit-box-shadow:inset 0px 1px 6px #ECF3F5;box-shadow: inset 0px 1px 6px #ECF3F5;
    font: 200 20px/25px Arial, Helvetica, sans-serif; height: 40px;line-height:20px;margin: 2px 6px 16px 0px;"></p>
      <p align="center"><input type="text" name="sharok" placeholder="স্মারক নং" style="color: #888;width: 70%;padding: 0px 0px 0px 5px;
    border: 1px solid #C5E2FF;background: #FBFBFB;outline: 0;-webkit-box-shadow:inset 0px 1px 6px #ECF3F5;box-shadow: inset 0px 1px 6px #ECF3F5;
    font: 200 20px/25px Arial, Helvetica, sans-serif; height: 40px;line-height:20px;margin: 2px 6px 16px 0px;"></p>
      <p align="center"><input type="text" name="basisd" placeholder="প্রেরিত পত্রের তারিখ" style="color: #888;width: 70%;padding: 0px 0px 0px 5px;
    border: 1px solid #C5E2FF;background: #FBFBFB;outline: 0;-webkit-box-shadow:inset 0px 1px 6px #ECF3F5;box-shadow: inset 0px 1px 6px #ECF3F5;
    font: 200 20px/25px Arial, Helvetica, sans-serif; height: 40px;line-height:20px;margin: 2px 6px 16px 0px;"></p>
      <p align="center"><input type="submit" name="submit" value="Submit" style=" padding: 10px 30px 10px 30px;background: #66C1E4;
    border: none;color: #FFF;box-shadow: 1px 1px 1px #4C6E91;-webkit-box-shadow: 1px 1px 1px #4C6E91;-moz-box-shadow: 1px 1px 1px #4C6E91;
    text-shadow: 1px 1px 1px #5079A3; line-height: 1"></p>
     </form>

        </div>
        <div class="modal-footer">
          <p align="center"><button  type="button" class="btn btn-default" data-dismiss="modal" style=" padding: 10px 30px 10px 30px;background: #D2E9FF;
    border: none;color: #000;box-shadow: 1px 1px 1px #4C6E91;-webkit-box-shadow: 1px 1px 1px #4C6E91;-moz-box-shadow: 1px 1px 1px #4C6E91;
    text-shadow: 1px 1px 1px #5079A3;">Close</button></p>
        </div>
      </div>
      
    </div>
  </div>
  <!-- resign modal end -->


	
		
</body>
</html>
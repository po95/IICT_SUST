<!-- 
Author: sourav sarker.
CSE SUST
REG NO: 2014331039 
-->


<!-- / making a connection

mysql_connect('localhost','root','');

//select db
mysql_select_db('iict_sust');

$sql = "SELECT * FROM student WHERE registration_no>=2012331000 AND registration_no <=2012331100";
$sql1 = "SELECT * FROM student WHERE registration_no>=2013331000 AND registration_no <=2013331100";
$sql2 = "SELECT * FROM student WHERE registration_no>=2014331000 AND registration_no <=2014331100";
$sql3 = "SELECT * FROM student WHERE registration_no>=2015331000 AND registration_no <=2015331100"; -->


<?php  
 $connect = mysqli_connect("localhost", "root", "", "iict_sust");  
 $query ="SELECT * FROM student WHERE registration_no>=2012331000 AND registration_no <=2012331100";  
 $result = mysqli_query($connect, $query);  

 ?> 



 	


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
	 <!-- <link rel="stylesheet" type="text/css" href="css/Interface_CSE.css"> -->
	 <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	 <link href="fonts/glyphicons-halflings-regular.ttf" rel="stylesheet">
     <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
   <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
   <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />

</head>
<body>

	<!-- <div id="header">
		<div class="logo">
			<a href="#"><strong>IICT</strong> <span>management</span><br>
				<span style="letter-spacing: 31px;">SYSTEM</span>	
			</a>


		</div>
	</div> -->
	<nav class="navbar navbar-inverse" style="width:100%">
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

<div class="container-fluid" style=" padding-left: 0px; padding-right: 0px;">

	<div class="row">
		<div class="col-md-3">
			<div class="sidebar" >
				<ul id="nava">
					<li><a href="main.php">Home</a></li>
					<li><a href="ginfo.php">General Information</a></li>
					<li><a href="file.php">Files</a></li>
					<li><a href="complain.php">Complain Box</a></li>
					<li><a href="#">Listing</a></li>
					<li><a href="#">Notice Box</a></li>
					<li><a href="#">Shared Document</a></li>
					<li><a href="#">About CSE Department</a></li>
					<li><a href="updateinfo.php">Update Your Info</a></li>
				</ul>
			</div>
		</div>
		<div class="col-md-8">

			<div class="row">
				<h2 style="padding-left:40%;">Batch 2012-13</h2>
										 <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                                    <td>Registration Number</td>  
                                    <td>Name</td>  
                                    <td>Contact</td>  
                                    <td>Email</td>  
                                    
                               </tr>  
                          </thead>  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo '  
                               <tr>  
                                    <td>'.$row["registration_no"].'</td>  
                                    <td>'.$row["first_name"].$row["last_name"].'</td>  
                                    <td>'.$row["contact_no"].'</td>  
                                    <td>'.$row["email_no"].'</td>  
                                    
                               </tr>  
                               ';  
                          }  
                          ?>  
                     </table>  
                </div>  


				
			</div>

		
			

			
			


		</div>
	</div>
</div>
<script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script>  
		
</body>
</html>
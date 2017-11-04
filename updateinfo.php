<html>
   <head>
      <title>IICT Management System</title>
      <link rel="stylesheet" type="text/css" href="css/wow.css">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   </head>
   <body>
      <!-- <div id="header">
         <div class="logo">
           <a href="#"><strong>IICT</strong> <span>management</span><br>
             <span style="letter-spacing: 31px;">SYSTEM</span> 
           </a>
         
         
         </div>
         </div> -->
      <div class="container-fluid" style="margin-right: 0px; margin-right: 0px; padding-left: 0px; padding-right: 0px;">
         <nav class="navbar navbar-inverse">
            <div class="container-fluid">
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
                  <div class="sidebar" style="margin-bottom: -200px; padding-bottom: 500px;">
                     <ul id="nava">
                        <li><a href="main.php">Home</a></li>
                        <li><a href="ginfomain.php">General Information</a></li>
                        <li><a href="filefirst.php">Files</a></li>
                        <li><a href="#">Complain Box</a></li>
                        <li><a href="#">Listing</a></li>
                        <li><a href="#">Notice Box</a></li>
                        <li><a href="#">Shared Document</a></li>
                        <li><a href="#">About CSE Department</a></li>
                        <li><a href="updateinfo.php">Update Your Info</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-9" style="padding-bottom: 20px; padding-right:30px;">
                  <div style="padding-top:40px;">
                     <div style="padding-top:10px;">
                        <div class="col-lg-3">
                           <div class="text-center">
                              <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
                              <h6>Upload a different photo...</h6>
                              <input type="file" class="form-control">
                           </div>
                        </div>
                     </div>
                     <!-- edit form column -->
                     <div class="col-md-9 personal-info">
                       
                        <h3>Personal info</h3>
                        <form class="form-horizontal" role="form">
                           <div class="form-group">
                              <label class="col-lg-3 control-label">First name:</label>
                              <div class="col-lg-8">
                                 <input class="form-control" type="text" value="First Name">
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="col-lg-3 control-label">Last name:</label>
                              <div class="col-lg-8">
                                 <input class="form-control" type="text" value="Last Name">
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="col-lg-3 control-label">Email:</label>
                              <div class="col-lg-8">
                                 <input class="form-control" type="text" value="someone@email.com">
                              </div>
                           </div>
                           
                           <div class="form-group">
                              <label class="col-md-3 control-label">Username:</label>
                              <div class="col-md-8">
                                 <input class="form-control" type="text" value="Username">
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="col-md-3 control-label">Password:</label>
                              <div class="col-md-8">
                                 <input class="form-control" type="password" value="Password">
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="col-md-3 control-label">Confirm password:</label>
                              <div class="col-md-8">
                                 <input class="form-control" type="password" value="Password">
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="col-md-3 control-label"></label>
                              <div class="col-md-8">
                                 <input type="button" class="btn btn-primary" value="Save Changes">
                                 <span></span>
                                 <input type="reset" class="btn btn-default" value="Cancel">
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
               <hr>
            </div>
         </div>
      </div>
      </div>
      </div>
   </body>
</html>
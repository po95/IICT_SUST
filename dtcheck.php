<?php 
  $con = mysql_connect("localhost","root","");

  if(!$con){
      die("Error: ".mysql_error());
  }
  mysql_select_db("iict_sust",$con);

  $result = mysql_query("SELECT * FROM student WHERE registration_no>=2012331000 AND registration_no <=2012331100");
 ?>
<html>
<head>
  <title> Hello Hello</title>
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
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <style type="text/css">
    @import "";
  </style>

  <script type="text/javascript" charset="utf-8">
    $(document).ready(function(){
      $('#datatables').dataTable();
    })

  </script>

</head>
<body>
  <div>
    <table id="datatables" class="display">
     <thead>
        <tr>
          <th>Reg No.</th>
          <th>Name</th>
          <th>Email</th>
              
        </tr>
       </thead>
       <tbody>
        <?php 
          while($row = mysql_fetch_array($result)){
            ?>
            <tr>
              <td><?=$row['registration_no']?></td>
              <td><?=$row['first_name']?></td>
              <td><?=$row['email_no']?></td>

            </tr>
            <?php 
          }
         ?>
       </tbody>
    </table>

  </div>
</body>
</html>
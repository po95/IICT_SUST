<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">input,
input::-webkit-input-placeholder{
    font-size: 20px;
    line-height: 2;
}</style>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
  
  <script>
  $(document).ready(function() {
    $("#datepicker").datepicker();
  });
  </script>
</head>
<body>

<div class="container">
  <h2>Modal Example</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
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
      <p align="center"><input type="text" name="visdate" id="datepicker" placeholder="ভ্রমণের তারিখ" style="color: #888;width: 70%;padding: 0px 0px 0px 5px;
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
  
</div>

</body>
</html>

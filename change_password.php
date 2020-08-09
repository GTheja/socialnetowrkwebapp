<!DOCTYPE html>
<?php
session_start();
include("includes/connection.php");

if(!isset($_SESSION['user_email'])){
	header("location: index.php");
}
?>
<html>
<head>
	<title>change password</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="style/home_style2.css">
    <style>
    body{
        overflow-x: hidden;
        background-image: url("69.jpg");
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-position: center;
    }
     @media only screen and (min-width: 300px) {
	  .main-content{
        width: 40%;
        height: 40%;
        margin: 150px auto;
        background-color: #fff;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        padding: 40px 50px;
         opacity: 0.85;
		border-radius: 10px;
    }
}
@media only screen and (max-width: 600px) {
  .main-content{
        width: 80%;
        height: 40%;
        margin: 150px auto;
        background-color: #fff;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        padding: 40px 50px;
         opacity: 0.85;
		border-radius: 10px;
    }
}
  
    .header{
        border: 0px solid #000;
        margin-bottom: 5px;
    }
    .well{
        background-color: #187FA8l;
    }
    #signup{
        width: 60%;
        border-radius: 30px;
    }
    </style>
</head>
<body>
<div class="main-panel">
<div class="content">
<div class="container-fluid">
<div class="row">
    <div class="col-sm-12">
          <div class="main-content">
              <div class="header">
                 <h3 style = "text-align: center;"><strong>change password</strong></h3><br>
              </div>
              <div class="l_pass">
                  <form action="" method="post">
                     <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="password" type="password" name="pass" class="form-control" placeholder="new password" required>
                     </div><br>
                     <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                          <input id="password" type="password" class="form-control" placeholder="Re-enter" name="pass1" required>
                     </div><br>
                     <center><button id="signup" class="btn btn-info btn-lg" name="change">Change Password</button></center>
                  </form>
              </div>
          </div>
    </div>
	
</div>
</div>
</div>
</div>
</body>
</html>
<?php 
global $con;

 if (isset($_POST['change'])) {
     

    $user = $_SESSION['user_email'];
    $get_user = "select * from users where user_email='$user'";
    $run_user = mysqli_query($con, $get_user);
    $row = mysqli_fetch_array($run_user);

    $user_id = $row['user_id'];

        $pass = htmlentities(mysqli_real_escape_string($con, $_POST['pass']));
        $pass1 = htmlentities(mysqli_real_escape_string($con, $_POST['pass1']));

        if($pass == $pass1){
            if(strlen($pass) >= 6 && strlen($pass) <= 60){
                $update = "update users set user_pass = '$pass' where user_id='$user_id'";

                $run = mysqli_query($con, $update);
                echo "<script>alert('your password is changed a moment ago')</script>";
                echo "<script>window.open('home.php','_self')</script>";
            }
            else{
                echo "<script>alert('your password should be greater than 9 words')</script>";
            }
        }
            else{
                echo "<script>alert('your password didn't match')</script>";
                echo "<script>window.open('change_password.php','_self')</script>";
                
            }
    }


?>

<!DOCTYPE html>
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
        margin: 100px auto;
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
        margin: 100px auto;
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
                 <h3 style = "text-align: center;"><strong>Forgot password</strong></h3><br>
              </div>
              <div class="l_pass">
                  <form action="" method="post">
                     <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="email" type="email" name="email" class="form-control" placeholder="enter your email" required>
                     </div><br>
                     <hr>
                     <pre class="text">Enter your bestfirend name down below?</pre>
                     <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                          <input id="msg" type="text" class="form-control" placeholder="someone" name="recovery_account" required>
                     </div><br>
                     <a style="text-decoration: none; float: right; color: #187FA0;" date-toggle="tooltip" tittle="Signin" href="signin.php">Back to signin</a><br><br>
                     <center><button id="signup" class="btn btn-info btn-lg" name="submit">Submit</button></center>
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
session_start();

include("includes/connection.php");

	if (isset($_POST['submit'])) {

		$email = htmlentities(mysqli_real_escape_string($con, $_POST['email']));
		$recovery_account = htmlentities(mysqli_real_escape_string($con, $_POST['recovery_account']));

		$select_user = "select * from users where user_email='$email' AND recovery_account='$recovery_account'";
		$query= mysqli_query($con, $select_user);
		$check_user = mysqli_num_rows($query);

		if($check_user == 1){
			$_SESSION['user_email'] = $email;

			echo "<script>window.open('change_password.php', '_self')</script>";
		}else{
			echo"<script>alert('Your Email or bestfriend is incorrect')</script>";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>ToMe login and signup</title>
	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
            name='viewport' />
       <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	   <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <!-- Material Design icon font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
</head>
<style>
	body{
		overflow-x: hidden;
		overflow-y: hidden;
		background-image: url("69.jpg");
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-position: center;
		
		
	}
	#signup, #login{
		width: 50%;
		background-color: #88AFF2;
		border-radius: 50px;
	}
	.row{
		margin-top: 50px;
	}
	
@media only screen and (min-width: 500px) {
	#mo{
		left: 24%;
	}
}
@media only screen and (max-width: 600px) {
	#mo{
		left: 0%;
	}
}
	

</style>
<body>
<center>
<div class="total">
	<div class="row">
		<div class="col-sm-12">
			<div class="well">
				<center><h3 style="color: black; margin-top: 150px;">ToMe</h3></center>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6" id="mo">
			<form method="post" action="">
				<button id="signup" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" name="signup">Sign up</button><br><br>
				<?php
					if(isset($_POST['signup'])){
						echo "<script>window.open('signup.php','_self')</script>";
					}
				?>
				<button id="login" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" name="login">Login</button><br><br>
				<?php
					if(isset($_POST['login'])){
						echo "<script>window.open('signin.php','_self')</script>";
					}
				?>
			</form>
		</div>
	</div>
</div>
</center>
</body>
</html>

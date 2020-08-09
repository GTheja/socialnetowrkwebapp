<!DOCTYPE html>
<?php
session_start();
include("includes/header.php");

if(!isset($_SESSION['user_email'])){
  header("location: index.php");
}
?>
<html>
<head>

  <title>Settings</title>
       <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
       <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
           name='viewport' />
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
       <link rel="stylesheet"
           href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
       <link rel="stylesheet" href="assets/css/ready.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link rel="stylesheet" type="text/css" href="style/home_style2.css">
   

</head>
<body>
<div class="main-panel">
  <div class="content">
    <div class="container-fluid">
      


        <div class="row">
           <div class="col-sm-12">
              <center><h4><strong>Settings</strong></h4><br></center>
           </div>
        </div>
    </div>

  </div>
</div>
</body>
</html>

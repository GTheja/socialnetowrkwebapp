<!DOCTYPE html>
<?php
session_start();
include("includes/header.php");
include("includes/connection.php");

if(!isset($_SESSION['user_email'])){
	header("location: index.php");
}
?>
<html>
<head>
	
	<title>Message</title>
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
<style >
  #scroll_messages{
    max-height: 500px;
    overflow: scroll;
  }
    #btn-msg{
      width: 20px;
      height: 28px;
      border-radius: 5px;
      margin: 5px;
      border: none;
      color: #fff;
      float: right;
      background-color: #2ecc71; 
    }
    #select_user{
      max-height: 500px;
      overflow: scroll;
    }
    #green{
      background-color: #2ecc71;
      border-color: #27ae60;
      width: 45%;
      padding: 2.5px;
      font-size: 16px;
      border-radius: 3px;
      float: left;
      margin-bottom: 5px; 
    }
    #blue{
      background-color: #3498db;
      border-color: #2980b9;
      width: 45%;
      padding: 2.5px;
      font-size: 16px;
      border-radius: 3px;
      float: right;
      margin-bottom: 5px;

    }

</style>
<body>
<div class="main-panel">
<div class="content">
<div class="container-fluid">
<div class="row">
<?php
     if(isset($_GET['u_id'])){
      global $con;

       $get_id = $_GET['u_id'];

       $get_user = "select * from users where user_id='$get_id'";

        $run_user = mysqli_query($con, $get_user);
        $row_user = mysqli_fetch_array($run_user);

        $user_to_msg = $row_user['user_id'];
        $user_to_name = $row_user['user_name'];

     }
      $user = $_SESSION['user_email'];
      $get_user = "select * from users where user_email='$user' ";
      $run_user = mysqli_query($con, $get_user);
      $row = mysqli_fetch_array($run_user);

      $user_from_msg = $row['user_id'];
      $user_from_name = $row['user_name'];
        
?>
     <div class ="col-sm-3" id="select_user">
          <?php
              $user = "select * from users";

               $run_user = mysqli_query($con, $user);
               while($row_user = mysqli_fetch_array($run_user)){

                $user_id = $row_user['user_id'];
               $user_name = $row_user['user_name'];
               $first_name = $row_user['f_name'];
               $last_name = $row_user['l_name'];
               $user_image = $row_user['user_image'];

               echo"
                    <div class='container-fluid'>
                          <a style='text-decoration:none;cursor: pointer; color: #3897F0;'href='messages.php?u_id=$user_id'>
                            <img class='img-circle' src='users/$user_image' width='90px' height='80px' tittle='$user_name'><strong>&nbsp $first_name $last_name</strong><br><br>
                          </a>
                    </div>

               ";

             }
          ?>
      </div>
      <div class="col-sm-6">
            <div class="load_msg" id = "scroll_messages">
              <?php
                  $sel_msg = "select * from user_messages where (user_to = '$user_to_msg' AND user_from = '$user_from_msg') OR (user_from = '$user_to_msg' AND user_to='$user_from_msg') ORDER by 1 ASC";

                  $run_msg = mysqli_query($con, $sel_msg);

                  while($row_msg = mysqli_fetch_array($run_msg)){

                  $user_to = $row_msg['user_to'];
                  $user_from = $row_msg['user_from'];
                  $msg_body = $row_msg['msg_body'];
                  $msg_date = $row_msg['date'];

                  ?>

                  <div id="loaded_msg">
                        <p><?php if($user_to == $user_to_msg AND $user_from == $user_from_msg){echo "<div class='message' id='blue' data-toggle='tooltip' tittle='$msg_date'>$msg_body</div><br><br><br>";}
                         else if($user_from == $user_to_msg AND $user_to == $user_from_msg){echo"<div class='message' id='green' data-toggle='tooltip' tittle='$msg_date'>$msg_body</div><br><br><br>";}?></p>

                    </div>

                  <?php

                }

              ?>
        
      </div>
      <?php
      if(isset($_GET['u_id'])){
            $u_id = $_GET['u_id'];
             if($u_id == "new"){
                echo'
                      <form>
                         <center><h3>Select someone to start conversation</h3></center>
                         <textarea disabled class="form-control" placeholder="Enter your message"></textarea>
                          <input type="submit" class="btn btn-default" disabled value="send">
                       </form><br><br> 

                ';

           }
           else{
           echo'
           <form action="" method="POST">
                         <textarea  class="form-control" placeholder="Enter your message" name="msg_box" id="message_textarea"></textarea>
                          <input type="submit" name="send_msg" id="btn btn-msg" value="send">
                       </form><br><br>
            ';           



         }

    }
 ?>

  <?php
        if(isset($_POST['send_msg'])){

        $msg = htmlentities($_POST['msg_box']);

       if($msg == ""){

        echo "<h4 style='color:red; text-align: center;'>message was unable to send!</h4>";

     }else if(strlen($msg) > 37){

         echo "<h4 style='color:red; text-align: center;'>messageis too long! use only 37 characters</h4>";

      }else{
       $insert = "insert into user_messages (user_to, user_from, msg_body, date, msg_seen) values('$user_to_msg','$user_from_msg','$msg',NOW(), 'no')";

         $run_insert = mysqli_query($con, $insert);
    }
      }

  ?>
</div>
 
    
  </div>
</div>
<script >
      var div = document.getElementById("scroll_messages");
      div.scrollTop = div.scrollHeight;
</script>
</div>
</div>
</div>
</body>
</html>

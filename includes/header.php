<?php
include("includes/connection.php");
include("functions/functions.php");
?>
 	<?php 
			$user = $_SESSION['user_email'];
			$get_user = "select * from users where user_email='$user'"; 
			$run_user = mysqli_query($con,$get_user);
			$row=mysqli_fetch_array($run_user);
					
			$user_id = $row['user_id']; 
			$user_name = $row['user_name'];
			$first_name = $row['f_name'];
			$last_name = $row['l_name'];
			$describe_user = $row['describe_user'];
			$Relationship_status = $row['Relationship'];
			$user_pass = $row['user_pass'];
			$user_email = $row['user_email'];
			$user_country = $row['user_country'];
			$user_gender = $row['user_gender'];
			$user_birthday = $row['user_birthday'];
			$user_image = $row['user_image'];
			$user_cover = $row['user_cover'];
			$recovery_account = $row['recovery_account'];
			$register_date = $row['user_reg_date'];
					
					
			$user_posts = "select * from posts where user_id='$user_id'"; 
			$run_posts = mysqli_query($con,$user_posts); 
			$posts = mysqli_num_rows($run_posts);
			?>
			<style>
			#se{
				position: relative;
				left: 200px;
				top: -32.7px;
			}
			#sea{
				position: relative;
				top: 20px;
			}
			

			
			</style>
<div class="wrapper" style="min-height: 0; height: 0;">
	<div class="main-header">
		<div class="logo-header">
			<a href="home.php" class="logo">
					ToMe
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<button class="topbar-toggler more"><i class="la la-ellipsis-v"></i></button>
			</div>


			  <nav class="navbar navbar-header navbar-expand-lg">
				   <div class="container-fluid" style= 'height:55px;'>
					
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <form class="navbar-form navbar-left" method="get" action="results.php">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="sea" name="user_query" placeholder="Search">
                                    </div>
									<button type="submit" class="btn btn-info" id ="se" name="search">Search</button>
                                </form>
                            </li>
                        </ul>
					   <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
			
						<li class="nav-item dropdown">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href='profile.php?<?php echo "u_id=$user_id" ?>' aria-expanded="false"> <img src=<?php echo"users/$user_image"?> alt="user-img" width="36" class="img-circle"><span><?php echo "$first_name"; ?></span></span> </a>
							<ul class="dropdown-menu dropdown-user">
								<li>
									<div class="user-box">
										<div class="u-img"><img src=<?php echo"users/$user_image"?> alt="user"></div>
										<div class="u-text">
											 <a href='profile.php?<?php echo "u_id=$user_id" ?>'><?php echo "$first_name"; ?></a>
											
											<p class="text-muted"><?php echo "$user_email"; ?></p><a href='profile.php?<?php echo "u_id=$user_id" ?>' class="btn btn-rounded btn-danger btn-sm">View Profile</a></div>
										</div>
									  </li>
<?php
    echo"
									<div class='dropdown-divider'></div>
									<a class='dropdown-item' href='profile.php?u_id=$user_id'><i class='ti-user'></i> My Profile</a>
									<div class='dropdown-divider'></div>
									<a class='dropdown-item' href='edit_profile.php?u_id=$user_id'><i class='ti-settings'></i> Account Setting</a>
									<div class='dropdown-divider'></div>
									<a class='dropdown-item' href='logout.php'><i class='fa fa-power-off'></i> Logout</a>
    ";?>
							</ul>
								<!-- /.dropdown-user -->
							    </li>
					        </ul>
				    </div>
				
			    </nav>


	          </div>
			<div class='sidebar'>
				<div class='scrollbar-inner sidebar-wrapper'>
					<div class='user'>
						<div class='photo'>
							<img src=<?php echo"users/$user_image"?>alt="user">
						</div>
						<div class='info'>
							<a class=' ' data-toggle='collapse' href='#collapseExample' aria-expanded='true'>
								<span>
									 <a style ='text-decoration:none; color:black; font-size: 25px;' href='profile.php?<?php echo 'u_id=$user_id' ?>'><?php echo "$first_name"; ?></a>
								</span>
							</a>
							<div class='clearfix'></div>
						</div>
					</div>
<?php
    echo"
					<ul class='nav'>
						<li class='nav-item active'>
							<a href='home.php'>
								<i class='la la-home'></i>
								<p>Home</p>
							</a>
						</li>
					</ul>
    ";?>
<?php
    echo"
					<ul class='nav'>
						<li class='nav-item active'>
							<a href='members.php'>
								<i class='la la-search'></i>
								<p>Find People</p>
							</a>
						</li>
					</ul>
    ";?>
<?php
    echo"
					<ul class='nav'>
						<li class='nav-item active'>
							<a href='messages.php?u_id=new'>
								<i class='la la-envelope'></i>
								<p>Messages</p>
							</a>
						</li>
					</ul>
";?>
   
<?php
    echo"
<ul class='nav'>
    <li class='nav-item active'>
        <a href='my_post.php?u_id=$user_id'>
            <i class='la la-dashboard'></i>

            <p>My Posts</p><span class='badge badge-secondary'><?php echo'$posts'; ?></span>
        </a>
    </li>
</ul>
";?>
<?php
    echo"
<ul class='nav'>
    <li class='nav-item active'>
        <a href='Help.php?u_id=new'>
            <i class='la la-question'></i>
            <p>Help</p>
        </a>
    </li>
</ul>
    ";?>
<?php
    echo"
<ul class='nav'>
    <li class='nav-item active'>
        <a href='settings.php?u_id=new'>
            <i class='la la-wrench'></i>
            <p>settings</p>
        </a>
    </li>
</ul>
";?>

				</div>
	
</div>



	</div>

	<!-- Modal -->
</body>
<!-- for dropdown of logout  -->
<script src="assets/js/core/jquery.3.2.1.min.js"></script> 
<script src="assets/js/core/bootstrap.min.js"></script>

<!-- toggle in mobile version -->
<script src="assets/js/ready.min.js"></script> 
</html>

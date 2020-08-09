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
	<title>Edit Account Settings</title>
	<meta charset="utf-8">
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
		<div class="col-sm-2">
		</div>
		<div class="col-sm-8">
			<form action="" method="post" enctype="multipart">
					<table class="table table-bordered table-hover">
						<tr align="center">
							<td colspan="6" class="active"><h2>Edit Your Profile</h2></td>
						</tr>
						<tr>
							<td style="font-weight: bold;">Change Your Firstname</td> 
							<td>
								<input class="form-control" type="text" name="f_name" required value="<?php echo $first_name;?>">
							</td>
						</tr>
						<tr>
							<td style="font-weight: bold;">Change Your Lastname</td> 
							<td>
								<input class="form-control" type="text" name="l_name" required value="<?php echo $last_name;?>">
							</td>
						</tr>
						<tr>
							<td style="font-weight: bold;">Change Your Username</td> 
							<td>
								<input class="form-control" type="text" name="u_name" required value="<?php echo $user_name;?>">
							</td>
						</tr>
						<tr>
							<td style="font-weight: bold;">Description</td> 
							<td>
								<input class="form-control" type="text" name="describe_name" required value="<?php echo $describe_user;?>">
							</td>
						</tr>
						<tr>
							<td style="font-weight: bold;">Relationship Status</td> 
							<td>
								<select class="form-control" name="Relationship">
									<option><?php echo $Relationship_status ;?></option>
									<option>Engaged</option>
									<option>Married</option>
									<option>Single</option>
									<option>In and Relationship</option>
									<option>It's complicated</option>
									<option>separated</option>
									<option>Divorced</option>
									<option>Widowed</option>
								</select>
							</td>
						</tr>
						<tr>
							<td style="font-weight: bold;">Password</td> 
							<td>
								<input class="form-control" type="password" name="u_pass" id="mypass" required value="<?php echo $user_pass; ?>">
								<input type="checkbox" onclick="show_password()" ><strong>Show Password</strong>
							</td>
						</tr>
						<tr>
							<td style="font-weight: bold;">Email</td> 
							<td>
								<input class="form-control" type="email" name="u_email"  required value="<?php echo $user_email;?>">
							</td>
						</tr>
						<tr>
							<td style="font-weight: bold;">Country</td> 
							<td>
								<select class="form-control" name="u_country">
									<option><?php echo $user_country; ?></option>
									<option value="DZ">Algeria</option>
	
									<option value="AS">American Samoa</option>
	<option value="AD">Andorra</option>
	<option value="AO">Angola</option>
	<option value="AI">Anguilla</option>
	<option value="AQ">Antarctica</option>
	<option value="AG">Antigua and Barbuda</option>
	<option value="AR">Argentina</option>
	<option value="AM">Armenia</option>
	<option value="AW">Aruba</option>
	<option value="AU">Australia</option>
	<option value="AT">Austria</option>
	<option value="AZ">Azerbaijan</option>
	<option value="BS">Bahamas</option>
	<option value="BH">Bahrain</option>
	<option value="BD">Bangladesh</option>
	<option value="BB">Barbados</option>
	<option value="BY">Belarus</option>
	<option value="BE">Belgium</option>
	<option value="BZ">Belize</option>
	<option value="BJ">Benin</option>
	<option value="BM">Bermuda</option>
	<option value="BT">Bhutan</option>
	<option value="BO">Bolivia, Plurinational State of</option>
	<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
	<option value="BA">Bosnia and Herzegovina</option>
	<option value="BW">Botswana</option>
	<option value="BV">Bouvet Island</option>
	<option value="BR">Brazil</option>
	<option value="IO">British Indian Ocean Territory</option>
	<option value="BN">Brunei Darussalam</option>
	<option value="BG">Bulgaria</option>
	<option value="BF">Burkina Faso</option>
	<option value="BI">Burundi</option>
	<option value="KH">Cambodia</option>
	<option value="CM">Cameroon</option>
	<option value="CA">Canada</option>
	<option value="CV">Cape Verde</option>
	<option value="KY">Cayman Islands</option>
	<option value="CF">Central African Republic</option>
	<option value="TD">Chad</option>
	<option value="CL">Chile</option>
	<option value="CN">China</option>
	<option value="CX">Christmas Island</option>
	<option value="CC">Cocos (Keeling) Islands</option>
	<option value="CO">Colombia</option>
	<option value="KM">Comoros</option>
	<option value="CG">Congo</option>
	<option value="CD">Congo, the Democratic Republic of the</option>
	<option value="CK">Cook Islands</option>
	<option value="CR">Costa Rica</option>
	<option value="CI">Côte d'Ivoire</option>
	<option value="HR">Croatia</option>
	<option value="CU">Cuba</option>
	<option value="CW">Curaçao</option>
	<option value="CY">Cyprus</option>
	<option value="CZ">Czech Republic</option>
	<option value="DK">Denmark</option>
	<option value="DJ">Djibouti</option>
	<option value="DM">Dominica</option>
	<option value="DO">Dominican Republic</option>
	<option value="EC">Ecuador</option>
	<option value="EG">Egypt</option>
	<option value="SV">El Salvador</option>
	<option value="GQ">Equatorial Guinea</option>
	<option value="ER">Eritrea</option>
	<option value="EE">Estonia</option>
	<option value="ET">Ethiopia</option>
	<option value="FK">Falkland Islands (Malvinas)</option>
	<option value="FO">Faroe Islands</option>
	<option value="FJ">Fiji</option>
	<option value="FI">Finland</option>
	<option value="FR">France</option>
	<option value="GF">French Guiana</option>
	<option value="PF">French Polynesia</option>
	<option value="TF">French Southern Territories</option>
	<option value="GA">Gabon</option>
	<option value="GM">Gambia</option>
	<option value="GE">Georgia</option>
	<option value="DE">Germany</option>
	<option value="GH">Ghana</option>
	<option value="GI">Gibraltar</option>
	<option value="GR">Greece</option>
	<option value="GL">Greenland</option>
	<option value="GD">Grenada</option>
	<option value="GP">Guadeloupe</option>
	<option value="GU">Guam</option>
	<option value="GT">Guatemala</option>
	<option value="GG">Guernsey</option>
	<option value="GN">Guinea</option>
	<option value="GW">Guinea-Bissau</option>
	<option value="GY">Guyana</option>
	<option value="HT">Haiti</option>
	<option value="HM">Heard Island and McDonald Islands</option>
	<option value="VA">Holy See (Vatican City State)</option>
	<option value="HN">Honduras</option>
	<option value="HK">Hong Kong</option>
	<option value="HU">Hungary</option>
	<option value="IS">Iceland</option>
	<option value="IN">India</option>
	<option value="ID">Indonesia</option>
	<option value="IR">Iran, Islamic Republic of</option>
	<option value="IQ">Iraq</option>
	<option value="IE">Ireland</option>
	<option value="IM">Isle of Man</option>
	<option value="IL">Israel</option>
	<option value="IT">Italy</option>
	<option value="JM">Jamaica</option>
	<option value="JP">Japan</option>
	<option value="JE">Jersey</option>
	<option value="JO">Jordan</option>
	<option value="KZ">Kazakhstan</option>
	<option value="KE">Kenya</option>
	<option value="KI">Kiribati</option>
	<option value="KP">Korea, Democratic People's Republic of</option>
	<option value="KR">Korea, Republic of</option>
	<option value="KW">Kuwait</option>
	<option value="KG">Kyrgyzstan</option>
	<option value="LA">Lao People's Democratic Republic</option>
	<option value="LV">Latvia</option>
	<option value="LB">Lebanon</option>
	<option value="LS">Lesotho</option>
	<option value="LR">Liberia</option>
	<option value="LY">Libya</option>
	<option value="LI">Liechtenstein</option>
	<option value="LT">Lithuania</option>
	<option value="LU">Luxembourg</option>
	<option value="MO">Macao</option>
	<option value="MK">Macedonia, the former Yugoslav Republic of</option>
	<option value="MG">Madagascar</option>
	<option value="MW">Malawi</option>
	<option value="MY">Malaysia</option>
	<option value="MV">Maldives</option>
	<option value="ML">Mali</option>
	<option value="MT">Malta</option>
	<option value="MH">Marshall Islands</option>
	<option value="MQ">Martinique</option>
	<option value="MR">Mauritania</option>
	<option value="MU">Mauritius</option>
	<option value="YT">Mayotte</option>
	<option value="MX">Mexico</option>
	<option value="FM">Micronesia, Federated States of</option>
	<option value="MD">Moldova, Republic of</option>
	<option value="MC">Monaco</option>
	<option value="MN">Mongolia</option>
	<option value="ME">Montenegro</option>
	<option value="MS">Montserrat</option>
	<option value="MA">Morocco</option>
	<option value="MZ">Mozambique</option>
	<option value="MM">Myanmar</option>
	<option value="NA">Namibia</option>
	<option value="NR">Nauru</option>
	<option value="NP">Nepal</option>
	<option value="NL">Netherlands</option>
	<option value="NC">New Caledonia</option>
	<option value="NZ">New Zealand</option>
	<option value="NI">Nicaragua</option>
	<option value="NE">Niger</option>
	<option value="NG">Nigeria</option>
	<option value="NU">Niue</option>
	<option value="NF">Norfolk Island</option>
	<option value="MP">Northern Mariana Islands</option>
	<option value="NO">Norway</option>
	<option value="OM">Oman</option>
	<option value="PK">Pakistan</option>
	<option value="PW">Palau</option>
	<option value="PS">Palestinian Territory, Occupied</option>
	<option value="PA">Panama</option>
	<option value="PG">Papua New Guinea</option>
	<option value="PY">Paraguay</option>
	<option value="PE">Peru</option>
	<option value="PH">Philippines</option>
	<option value="PN">Pitcairn</option>
	<option value="PL">Poland</option>
	<option value="PT">Portugal</option>
	<option value="PR">Puerto Rico</option>
	<option value="QA">Qatar</option>
	<option value="RE">Réunion</option>
	<option value="RO">Romania</option>
	<option value="RU">Russian Federation</option>
	<option value="RW">Rwanda</option>
	<option value="BL">Saint Barthélemy</option>
	<option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
	<option value="KN">Saint Kitts and Nevis</option>
	<option value="LC">Saint Lucia</option>
	<option value="MF">Saint Martin (French part)</option>
	<option value="PM">Saint Pierre and Miquelon</option>
	<option value="VC">Saint Vincent and the Grenadines</option>
	<option value="WS">Samoa</option>
	<option value="SM">San Marino</option>
	<option value="ST">Sao Tome and Principe</option>
	<option value="SA">Saudi Arabia</option>
	<option value="SN">Senegal</option>
	<option value="RS">Serbia</option>
	<option value="SC">Seychelles</option>
	<option value="SL">Sierra Leone</option>
	<option value="SG">Singapore</option>
	<option value="SX">Sint Maarten (Dutch part)</option>
	<option value="SK">Slovakia</option>
	<option value="SI">Slovenia</option>
	<option value="SB">Solomon Islands</option>
	<option value="SO">Somalia</option>
	<option value="ZA">South Africa</option>
	<option value="GS">South Georgia and the South Sandwich Islands</option>
	<option value="SS">South Sudan</option>
	<option value="ES">Spain</option>
	<option value="LK">Sri Lanka</option>
	<option value="SD">Sudan</option>
	<option value="SR">Suriname</option>
	<option value="SJ">Svalbard and Jan Mayen</option>
	<option value="SZ">Swaziland</option>
	<option value="SE">Sweden</option>
	<option value="CH">Switzerland</option>
	<option value="SY">Syrian Arab Republic</option>
	<option value="TW">Taiwan, Province of China</option>
	<option value="TJ">Tajikistan</option>
	<option value="TZ">Tanzania, United Republic of</option>
	<option value="TH">Thailand</option>
	<option value="TL">Timor-Leste</option>
	<option value="TG">Togo</option>
	<option value="TK">Tokelau</option>
	<option value="TO">Tonga</option>
	<option value="TT">Trinidad and Tobago</option>
	<option value="TN">Tunisia</option>
	<option value="TR">Turkey</option>
	<option value="TM">Turkmenistan</option>
	<option value="TC">Turks and Caicos Islands</option>
	<option value="TV">Tuvalu</option>
	<option value="UG">Uganda</option>
	<option value="UA">Ukraine</option>
	<option value="AE">United Arab Emirates</option>
	<option value="GB">United Kingdom</option>
	<option value="US">United States</option>
	<option value="UM">United States Minor Outlying Islands</option>
	<option value="UY">Uruguay</option>
	<option value="UZ">Uzbekistan</option>
	<option value="VU">Vanuatu</option>
	<option value="VE">Venezuela, Bolivarian Republic of</option>
	<option value="VN">Viet Nam</option>
	<option value="VG">Virgin Islands, British</option>
	<option value="VI">Virgin Islands, U.S.</option>
	<option value="WF">Wallis and Futuna</option>
	<option value="EH">Western Sahara</option>
	<option value="YE">Yemen</option>
	<option value="ZM">Zambia</option>
	<option value="ZW">Zimbabwe</option>
								</select>
							</td>
						</tr>
						<tr>
							<td style="font-weight: bold;">Country</td> 
							<td>
								<select class="form-control" name="user_gender">
									<option><?php echo $user_gender; ?></option>
									<option>Male</option>
									<option>Female</option>
									<option>Others</option>
								</select>
							</td>
						</tr>
						<tr>
							<td style="font-weight: bold;">Birthdate</td> 
							<td>
								<input class="form-control input-md" type="date" name="u_birthday"  required value="<?php echo $user_birthday;?>">
							</td>
						</tr>

							<tr>
								<td style="font-weight: bold;">Forgotten Password</td>
								<td>
									<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">Turn On</button>
									<div id="myModal" class="modal fade" role="dialog">
										
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal">&times;
														</button>
														<h4 class="modal-title">Modal Header</h4>
													</div>
													<div class="modal-body">
													<!-- didn't create recovery.php -->
													<form action="edit_profile.php?id=<?php echo $suer_id; ?>" method="post"id="f"> 
													<strong>What is your School Best Friend Name</strong>
													<textarea class="form-control" cols="83" rows="4" name="content" placeholder="Someone"></textarea><br>
													<input class="btn btn-default" type="submit" name="sub" value="submit" style="width: 100px;"><br><br>
													<pre>Answer the above question we iwll ask this question if you forget your <br>password. </pre>
													<br><br>
												</form>
												<?php
												if(isset($_POST['sub'])){
													$bfn = htmlentities($_POST['content']);

													if($bfn == ''){

														echo"<script>alert('please enter something')</script>";
       													 echo"<script>window.open('edit_profile.php?u_id=$user_id' , '_self')</script>";
       													 exit();
													}
													else{
														 $update = "update users set recovery_account='$bfn' where user_id='$user_id'";
       													 $run = mysqli_query($con, $update);

        												 if($run){
        												 	echo"<script>alert('Working...')</script>";
            											    echo"<script>window.open('edit_profile.php?u_id=$user_id' , '_self')</script>
            											    ";
        												 }else{
        												 	 echo"<script>alert('Error while updating infomation')</script>";
             												 echo"<script>window.open('edit_profile.php?u_id=$user_id' , '_self')</script>
             												 ";
        												 }
													}
												}

												?>
 
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>									
						</td>								
					</tr>
					<tr align="center">
						<td colspan="6">
						<input type="submit" class="btn btn-info" name="update" style="width: 250px;" value="update">
						</td>
						
					</tr>
				</table>
			</form>			
		</div>
		<div class="col-sm-2">
			
		</div>
</div>
</body>
</div>
</div>
</div>
</html>
<?php
	if(isset($_POST['update'])){
		$f_name =htmlentities($_POST['f_name']);
		$l_name =htmlentities($_POST['l_name']);
		$u_name =htmlentities($_POST['u_name']);
		$describe_user =htmlentities($_POST['describe_user']);
		$Relationship_status =htmlentities($_POST['Relationship']);
		$u_pass =htmlentities($_POST['u_pass']);
		$u_email =htmlentities($_POST['u_email']);
		$u_country =htmlentities($_POST['u_country']);
		$u_gender =htmlentities($_POST['u_gender']);
		$u_birthday =htmlentities($_POST['u_birthday']);

		$update ="update users set f_name='$f_name' , l_name='$l_name',user_name='$u_name',describe_user='$describe_user',Relationship='$Relationship_status',user_pass='$u_pass',user_email='$u_email',user_country='$u_country',user_gender='$u_gender',user_birthday='$u_birthday' where user_id='$user_id'";

		$run = mysqli_query($con, $update);

		if($run){
        	echo"<script>alert('Your Profile Updated')</script>";
            echo"<script>window.open('edit_profile.php?u_id=$user_id','_self')</script>";
      }
	}

?>


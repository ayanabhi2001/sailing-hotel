<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from rn53themes.net/themes/demo/the-royal-hotel/db-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Apr 2022 10:19:20 GMT -->
<head>
	<title>SailingHotel - Hotel Booking and Room Booking Online</title>
	<!-- META TAGS -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- FAV ICON(BROWSER TAB ICON) -->
	<link rel="shortcut icon" href="images/fav.ico" type="image/x-icon">
	<!-- GOOGLE FONT -->
	<link href="https://fonts.googleapis.com/css?family=Poppins%7CQuicksand:500,700" rel="stylesheet">
	<!-- FONTAWESOME ICONS -->
	<link rel="stylesheet" href="csss/font-awesome.min.css">
	<!-- ALL CSS FILES -->
	<link href="csss/materialize.css" rel="stylesheet">
	<link href="dashboard_cs/style.css" rel="stylesheet">
	<link href="csss/bootstrap.css" rel="stylesheet" type="text/css" />
	<!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
	<link href="csss/responsive.css" rel="stylesheet">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body data-ng-app="">
	<!--MOBILE MENU-->
	
	<!--HEADER SECTION-->
	<section>
		<!--TOP SECTION-->
		<?php include "elements/header.php" ?>
		<!--TOP SECTION-->
		<!--DASHBOARD SECTION-->
		<div class="dashboard">
		<div class="db-left">
				<div class="db-left-1" style="padding: 200px 50px 30px 50px;
    background: url('user/user.webp') no-repeat center center;
    background-size: 228px;
background-position: 0px 53px;
    position: relative;">
				<h4><?php echo $_SESSION['user']['fname']." ".$_SESSION['user']['lname'];?></h4> 
					<p><?php echo $_SESSION['user']['uaddress'];?></p>
				</div>
				<div class="db-left-2">
					<ul>
						<li>
							<a href="dashboard.php"><img src="images/icon/db1.png" alt="" /> All</a>
						</li>
						<li>
							<a href="db-booking.php"><img src="images/icon/db2.png" alt="" /> My Bookings</a>
						</li>
						<li>
							<a href="db-profile.php"><img src="images/icon/db7.png" alt="" /> Profile</a>
						</li>
						<!-- <li>
							<a href="#"><img src="images/icon/db6.png" alt="" /> Payments</a>
						</li> -->
						<li>
							<a href="logout.php"><img src="images/icon/db8.png" alt="" /> Logout</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="db-cent">
				<div class="db-cent-1">
					<p>Hi <?php echo $_SESSION['user']['fname'];?>,</p>
					<h4>Welcome to your dashboard</h4> </div>
				<div class="db-profile"> <img src="images/user.png" alt="Profile-pic">
				<h4><?php echo $_SESSION['user']['fname']." ".$_SESSION['user']['lname'];?></h4> 
					<p><?php echo $_SESSION['user']['uaddress'];?></p>
				</div>
				<!-- <div class="db-profile-view">

					<table>
						<thead>
							<tr>
								<th>Age</th>
								<th>Profile Completion</th>
								<th>Join Date</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>32</td>
								<td>90%</td>
								<td>May 2010</td>
							</tr>
						</tbody>
					</table>
				</div> -->
				<div class="db-profile-edit">
				<?php
				                $userid=$_SESSION['user']['uid'];
                                include "database/db.php";
                                $sql="SELECT * FROM `user` WHERE uid={$userid}";
                                $res= mysqli_query($conn,$sql);

                            
                                    while ($row = mysqli_fetch_assoc($res)) {
                                    
                                    ?>
					<form class="col s12" action="update-profile.php" method="post">
						<div>
							<label class="col s4">First Name</label>
							<div class="input-field col s8">
								<input type="text" value="<?php echo $row['fname'];?>" class="validate" name="fname"> </div>
						</div>
						<div>
							<label class="col s4">Last Name</label>
							<div class="input-field col s8">
								<input type="text" value="<?php echo $row['lname'];?>" class="validate" name="lname"> </div>
						</div>
						<div>
							<label class="col s4">Email id</label>
							<div class="input-field col s8">
								<input type="email" value="<?php echo $row['uemail'];?>" class="validate" name="email"> </div>
						</div>
						<div>
							<label class="col s4">Phone</label>
							<div class="input-field col s8">
								<input type="number" value="<?php echo $row['uphone'];?>" class="validate" name="phone"> </div>
						</div>
						<!-- <div>
							<label class="col s4">Age</label>
							<div class="input-field col s8">
								<input type="number" value="34" class="validate"> </div>
						</div> -->
						<div>
							<div class="file-field input-field">
								<div class="btn" id="pro-file-upload"> <span>File</span>
									<input type="file" name="photo"> </div>
								<div class="file-path-wrapper">
									<input class="file-path validate" type="text" placeholder="Upload profile picture" name="picture"> </div>
							</div>
						</div>
						<div>
							<label class="col s4">Address</label>
							<div class="input-field col s8">
								<input type="text" value="<?php echo $row['uaddress'];?>" class="validate" name="address"> </div>
						</div>
						<!-- <div>
							<label class="col s4">Address Line 2</label>
							<div class="input-field col s8">
								<input type="text" value="Suite 180 Farmington Hills, U.S.A" class="validate"> </div>
						</div> -->
						<div>
							<div class="input-field col s8">
								<input type="submit" value="Submit" class="waves-effect waves-light pro-sub-btn" id="pro-sub-btn" name="update-profile"> </div>
						</div>
					</form>
					<?php
									}
								
								?>
				</div>
			</div>
			<!-- <div class="db-righ">
				<h4>Notifications(18)</h4>
				<ul>
					<li>
						<a href="#!"> <img src="images/icon/dbr1.jpg" alt="">
							<h5>Joseph, write a review</h5>
							<p>All the Lorem Ipsum generators on the</p> <span>2 hours ago</span> </a>
					</li>
					<li>
						<a href="#!"> <img src="images/icon/dbr2.jpg" alt="">
							<h5>14 New Messages</h5>
							<p>All the Lorem Ipsum generators on the</p> <span>4 hours ago</span> </a>
					</li>
					<li>
						<a href="#!"> <img src="images/icon/dbr3.jpg" alt="">
							<h5>Ads expairy soon</h5>
							<p>All the Lorem Ipsum generators on the</p> <span>10 hours ago</span> </a>
					</li>
					<li>
						<a href="#!"> <img src="images/icon/dbr4.jpg" alt="">
							<h5>Post free ads - today only</h5>
							<p>All the Lorem Ipsum generators on the</p> <span>12 hours ago</span> </a>
					</li>
					<li>
						<a href="#!"> <img src="images/icon/dbr5.jpg" alt="">
							<h5>listing limit increase</h5>
							<p>All the Lorem Ipsum generators on the</p> <span>14 hours ago</span> </a>
					</li>
					<li>
						<a href="#!"> <img src="images/icon/dbr6.jpg" alt="">
							<h5>mobile app launch</h5>
							<p>All the Lorem Ipsum generators on the</p> <span>18 hours ago</span> </a>
					</li>
					<li>
						<a href="#!"> <img src="images/icon/dbr7.jpg" alt="">
							<h5>Setting Updated</h5>
							<p>All the Lorem Ipsum generators on the</p> <span>20 hours ago</span> </a>
					</li>
					<li>
						<a href="#!"> <img src="images/icon/dbr8.jpg" alt="">
							<h5>Increase listing viewers</h5>
							<p>All the Lorem Ipsum generators on the</p> <span>2 days ago</span> </a>
					</li>
				</ul>
			</div> -->
		</div>
		<!--END DASHBOARD SECTION-->
		<!--TOP SECTION-->
			</section>
	<!--END HEADER SECTION-->
	
	<section class="copy">
		<div class="container">
			<p>copyrights © 2022 Sailing Hotel &nbsp;&nbsp;All rights reserved. </p>
		</div>
	</section>

	<!--ALL SCRIPT FILES-->
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/angular.min.js"></script>
	<script src="js/bootstrap.js" type="text/javascript"></script>
	<script src="js/materialize.min.js" type="text/javascript"></script>
	<script src="js/jquery.mixitup.min.js" type="text/javascript"></script>
	<script src="js/custom.js"></script>
</body>


<!-- Mirrored from rn53themes.net/themes/demo/the-royal-hotel/db-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Apr 2022 10:19:20 GMT -->
</html>
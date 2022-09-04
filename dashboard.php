<?php
session_start();

?>
<!DOCTYPE html>
<php lang="en">
<head>
	<title>MyHotel - Hotel Booking and Room Booking Online Html Responsive Template</title>
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
	<section>
		<div class="mm">
			<div class="mm-inn">
				<div class="mm-logo">
					<a href="main.php"><img src="images/logo.png" alt="">
					</a>
				</div>
				<div class="mm-icon"><span><i class="fa fa-bars show-menu" aria-hidden="true"></i></span>
				</div>
				<div class="mm-menu">
					<div class="mm-close"><span><i class="fa fa-times hide-menu" aria-hidden="true"></i></span>
					</div>
					<ul>
						<li><a href="main.php">Home - Default</a>
						</li>
						<li><a href="index-1.php">Home - Reservation</a>
						</li>
						<li><a href="index-2.php">Home - FullSlider</a>
						</li>
						<li><a href="index-3.php">Home - Block Color</a>
						</li>
						<li><a href="room-details.php">Room Details</a>
						</li>
						<li><a href="room-details-block.php">Room Details Block</a>
						</li>
						<li><a href="hotel-details.php">Hotel Details</a>
						</li>
						<li><a href="hotel-detail.php">Hotel Details - 1</a>
						</li>
						<li><a href="about-us.php">About Us</a>
						</li>
						<li><a href="aminities.php">Aminities</a>
						</li>
						<li><a href="aminities1.php">Aminities - 1</a>
						</li>
						<li><a href="menu.php">Food Menu</a>
						</li>
						<li><a href="menu1.php">Food Menu - 1</a>
						</li>
						<li><a href="blog.php">Blog</a>
						</li>
						<li><a href="blog-inner.php">Blog Inner</a>
						</li>
						<li><a href="dashboard.php">User Dashboard</a>
						</li>
						<li><a href="db-activity.php">DB Activity</a>
						</li>
						<li><a href="db-booking.php">DB-Booking</a>
						</li>
						<li><a href="db-event.php">DB-Event</a>
						</li>
						<li><a href="db-new-booking.php">DB New Booking</a>
						</li>
						<li><a href="booking.php">Booking</a>
						</li>
						<li><a href="collapsible.php">Collapsible</a>
						</li>
						<li><a href="events.php">Events</a>
						</li>
						<li><a href="form-fields.php">Form Fields</a>
						</li>
						<li><a href="preloading.php">Preloading</a>
						</li>
						<li><a href="gallery.php">Gallery</a>
						</li>
						<li><a href="gallery1.php">Gallery - 1</a>
						</li>
						<li><a href="gallery2.php">Gallery - 2</a>
						</li>
						<li><a href="detail.php">Room Detail</a>
						</li>
						<li><a href="all-rooms.php">All Rooms</a>
						</li>
						<li><a href="all-rooms1.php">All Rooms - 1</a>
						</li>
						<li><a href="services.php">Services</a>
						</li>
						<li><a href="services1.php">Services - 1</a>
						</li>
						<li><a href="typho-grid.php">Grid Layout</a>
						</li>
						<li><a href="typo-alert.php">Alert Messages</a>
						</li>
						<li><a href="typo-all-head.php">All Headers</a>
						</li>
						<li><a href="typo-badges-labels.php">Labels</a>
						</li>
						<li><a href="typo-buttons.php">Buttons</a>
						</li>
						<li><a href="typo-pagination.php">Pagination</a>
						</li>
						<li><a href="typo-progressbar.php">Progressbar</a>
						</li>
						<li><a href="typo-slider.php">Image Sliders</a>
						</li>
						<li><a href="typo-table.php">Table</a>
						</li>
						<li><a href="typo-buttons.php">Buttons</a>
						</li>
						<li><a href="typo-pagination.php">Pagination</a>
						</li>
						<li><a href="typo-progressbar.php">Progressbar</a>
						</li>
						<li><a href="sitemap.php">Sitemap</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
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

					<h3 style="text-align: center; padding-top: 50px;"> Go to My Bookings to see all bookings! </h3>
				<div class="db-cent-2" style="opacity: 0;">
					<div class="db-2-main-1">
						<div class="db-2-main-2"> <img src="images/icon/dbc5.png" alt=""> <span>My Bookings</span>
							<p>All the Lorem Ipsum generators on the</p>
							<h2>12</h2> </div>
					</div>
					<!-- <div class="db-2-main-1">
						<div class="db-2-main-2"> <img src="images/icon/dbc6.png" alt=""> <span>Events</span>
							<p>All the Lorem Ipsum generators on the</p>
							<h2>04</h2> </div>
					</div> -->
					<div class="db-2-main-1" style="opacity: 0;">
						<div class="db-2-main-2"> <img src="images/icon/dbc3.png" alt=""> <span>Payment</span>
							<p>All the Lorem Ipsum generators on the</p>
							<h2>16</h2> </div>
					</div>
				</div>
				<!-- <div class="db-cent-3">
					<div class="db-cent-table db-com-table">
						<div class="db-title">
							<h3><img src="images/icon/dbc5.png" alt=""/> My Bookings</h3>
							<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
						</div>
						<table class="bordered responsive-table">
							<thead>
								<tr>
									<th>No</th>
									<th>Name</th>
									<th>Phone</th>
									<th>City</th>
									<th>Arrival</th>
									<th>Departure</th>
									<th>Members</th>
									<th>Payment</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>01</td>
									<td>Alvin</td>
									<td>+01 4215 3521</td>
									<td><span class="db-tab-hi">New york,</span>USA</td>
									<td>12may</td>
									<td>20may</td>
									<td>12</td>
									<td><a href="#" class="db-success">Success</a>
									</td>
								</tr>
								<tr>
									<td>02</td>
									<td>Liam</td>
									<td>+01 2484 6521</td>
									<td><span class="db-tab-hi">Bangalore,</span>India</td>
									<td>18apr</td>
									<td>24apr</td>
									<td>12</td>
									<td><a href="#" class="db-success">Success</a>
									</td>
								</tr>
								<tr>
									<td>03</td>
									<td>Logan</td>
									<td>+01 6524 6521</td>
									<td><span class="db-tab-hi">Los Angeles,</span>USA</td>
									<td>05dec</td>
									<td>12dec</td>
									<td>12</td>
									<td><a href="#" class="db-not-success">Pending</a>
									</td>
								</tr>
								<tr>
									<td>04</td>
									<td>Michael</td>
									<td>+01 3652 1425</td>
									<td><span class="db-tab-hi">Bristol,</span>UK</td>
									<td>14jen</td>
									<td>24jen</td>
									<td>12</td>
									<td><a href="#" class="db-not-success">Pending</a>
									</td>
								</tr>
								<tr>
									<td>05</td>
									<td>Alvin</td>
									<td>+01 4215 3521</td>
									<td><span class="db-tab-hi">New york,</span>USA</td>
									<td>12may</td>
									<td>20may</td>
									<td>12</td>
									<td><a href="#" class="db-success">Success</a>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div> -->
				<!-- <div class="db-cent-3">
					<div class="db-cent-table db-com-table">
						<div class="db-title">
							<h3><img src="images/icon/dbc6.png" alt=""/> My Events</h3>
							<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
						</div>
						<table class="bordered responsive-table">
							<thead>
								<tr>
									<th>No</th>
									<th>Name</th>
									<th>Phone</th>
									<th>City</th>
									<th>Arrival</th>
									<th>Departure</th>
									<th>Members</th>
									<th>Payment</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>01</td>
									<td>Alvin</td>
									<td>+01 4215 3521</td>
									<td><span class="db-tab-hi">New york,</span>USA</td>
									<td>12may</td>
									<td>20may</td>
									<td>12</td>
									<td><a href="#" class="db-success">Success</a>
									</td>
								</tr>
								<tr>
									<td>02</td>
									<td>Liam</td>
									<td>+01 2484 6521</td>
									<td><span class="db-tab-hi">Bangalore,</span>India</td>
									<td>18apr</td>
									<td>24apr</td>
									<td>12</td>
									<td><a href="#" class="db-success">Success</a>
									</td>
								</tr>
								<tr>
									<td>03</td>
									<td>Logan</td>
									<td>+01 6524 6521</td>
									<td><span class="db-tab-hi">Los Angeles,</span>USA</td>
									<td>05dec</td>
									<td>12dec</td>
									<td>12</td>
									<td><a href="#" class="db-not-success">Pending</a>
									</td>
								</tr>
								<tr>
									<td>04</td>
									<td>Michael</td>
									<td>+01 3652 1425</td>
									<td><span class="db-tab-hi">Bristol,</span>UK</td>
									<td>14jen</td>
									<td>24jen</td>
									<td>12</td>
									<td><a href="#" class="db-not-success">Pending</a>
									</td>
								</tr>
								<tr>
									<td>05</td>
									<td>Alvin</td>
									<td>+01 4215 3521</td>
									<td><span class="db-tab-hi">New york,</span>USA</td>
									<td>12may</td>
									<td>20may</td>
									<td>12</td>
									<td><a href="#" class="db-success">Success</a>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div> -->
				<!-- <div class="db-cent-3">
					<div class="db-cent-acti">
						<div class="db-title">
							<h3><img src="images/icon/dbc1.png" alt=""/> My Activity</h3>
							<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
						</div>
						<ul>
							<li>
								<div class="db-cent-wr-img"> <img src="images/users/3.png" alt=""> </div>
								<div class="db-cent-wr-con">
									<h6>Hotel Booking Canceled</h6> <span class="lr-revi-date">21th July, 2016</span>
									<p>The hotel is clean, convenient and good value for money. Staff are courteous and helpful. However, they need more training to be efficient.</p>
									<ul>
										<li><a href="#!"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
										<li><a href="#!"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
										<li><a href="#!"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
										<li><a href="#!"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
										<li><a href="#!"><i class="fa fa-youtube" aria-hidden="true"></i></a> </li>
									</ul>
								</div>
							</li>
							<li>
								<div class="db-cent-wr-img"> <img src="images/users/3.png" alt=""> </div>
								<div class="db-cent-wr-con">
									<h6>Hotel Payment Success</h6> <span class="lr-revi-date">08th August, 2016</span>
									<p>The hotel is clean, convenient and good value for money. Staff are courteous and helpful. However, they need more training to be efficient.</p>
									<ul>
										<li><a href="#!"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
										<li><a href="#!"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
										<li><a href="#!"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
										<li><a href="#!"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
										<li><a href="#!"><i class="fa fa-youtube" aria-hidden="true"></i></a> </li>
									</ul>
								</div>
							</li>
						</ul>
					</div>
				</div> -->
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


<!-- Mirrored from rn53themes.net/themes/demo/the-royal-hotel/dashboard.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Apr 2022 10:18:52 GMT -->
	</html>
<?php
session_start();

?>
<!DOCTYPE html>
<php lang="en">


<!-- Mirrored from rn53themes.net/themes/demo/the-royal-hotel/db-booking.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Apr 2022 10:18:52 GMT -->
<head>
	<title>Sailing Hotel</title>
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
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body data-ng-app="">
	
<?php

  
 if(isset($_GET['massage']) && $_GET['massage'] == "1")
 {
	 print '<script type="text/javascript">';
	 print 'window.onload = function(e){';
	 print 'swal("Refund Generated!", "Please check your email for refund information", "success");';
	 print '};';
	 print '</script>';
 }








?>



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
				<div class="db-cent-3">
					<div class="db-cent-table db-com-table">
						<div class="db-title">
							<h3><img src="images/icon/dbc5.png" alt=""/> My Bookings</h3>
							<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
						</div>
						<?php
                              include "database/db.php";
							  $sql = "SELECT * FROM cart";
							  $result = mysqli_query($conn,$sql);
							  if (mysqli_num_rows($result)>0) {
								  # code...
							  
						?>
						<table class="bordered responsive-table">
							<thead>
								<tr>
									<th>Booking ID</th>
									<th>Name</th>
									<th>Email</th>
									<th>Phone</th>
									<th>Room No</th>
									<th>Arrival</th>
									<th>Departure</th>
									<th>Members</th>
									<th>Payment</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php 
                                    while($data=mysqli_fetch_assoc($result)){
										?>
								<tr>
									<td><?php echo $data['cart_id']; ?></td>
									<td><?php echo $data['booking_name'];?></td>
									<td><?php echo $data['booking_email']; ?></td>
									<td><?php echo $data['phone']; ?></td>
									<td><span class="db-tab-hi"><?php echo $data['room_id']; ?></span></td>
									<td><?php echo $data['check_in']; ?></td>
									<td><?php echo $data['check_out']; ?></td>
									<td><?php echo $data['adults']+$data['childrens']; ?></td>
									<td><a href="#" class="db-success">Success</a>
									</td>
									<?php $bookid=$data['cart_id']; ?>
									<td><button type="button" class="btn btn-danger"><a href="Cancel.php?booking_id=<?php echo $bookid ;?>&amount=<?php echo $data['total_price']; ?>&email=<?php echo $data['booking_email']; ?>&name=<?php echo $data['booking_name']; ?>">Cancle</a></button></td>
								</tr>
								<?php }?>
							</tbody>
						</table>
						<?php }else{
							echo "<h3>  No Bookings Available!! </h3>";
						}
							?>
					</div>
					<!-- <div class="db-pagi">
						<ul class="pagination">
							<li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a>
							</li>
							<li class="active"><a href="#!">1</a>
							</li>
							<li class="waves-effect"><a href="#!">2</a>
							</li>
							
							<li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a>
							</li>
						</ul>
					</div> -->
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


<!-- Mirrored from rn53themes.net/themes/demo/the-royal-hotel/db-booking.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Apr 2022 10:18:52 GMT -->
	</html>
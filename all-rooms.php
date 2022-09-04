<?php 
    session_start();
?>


<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from rn53themes.net/themes/demo/the-royal-hotel/all-rooms.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Apr 2022 10:19:17 GMT -->
<head>
	<title>Sailing Hotel - Hotel Booking and Room Booking </title>
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
	<link href="csss/style.css" rel="stylesheet">
	<link href="csss/bootstrap.css" rel="stylesheet" type="text/css" />
	<!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
	<link href="csss/responsive.css" rel="stylesheet">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
  
        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



</head>

<body data-ng-app="">

	<!--HEADER SECTION-->
	<?php include "elements/header.php"; ?>
	
		<!--TOP SECTION-->
		<!--TOP BANNER-->
		<div class="inn-banner">
			<div class="container">
				<div class="row">
					<h4>All Room Types</h4>
					<p>Great rooms make great mornings.
						<p>
							<ul>
								<li><a href="index.php">Home</a>
								</li>
								<li><a href="all-rooms.php">Rooms</a>
								</li>
							</ul>
				</div>
			</div>
		</div>
		<!--TOP SECTION-->
		<div class="inn-body-section pad-bot-55">
			<div class="container">
				<div class="row">
					<div class="page-head">
						<h2>Room Types</h2>
						<div class="head-title">
							<div class="hl-1"></div>
							<div class="hl-2"></div>
							<div class="hl-3"></div>
						</div>
						<!-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p> -->
					</div>

		</div>

		<br>
		<br>
					<!--ROOM SECTION-->
					<?php 


                    include("database/db.php");
                    $sql = "SELECT * FROM `rooms`"; 
                    $res = mysqli_query($conn,$sql);
                    

                     while($data=mysqli_fetch_assoc($res)){
				     ?>
					<div class="room">
						<div class="ribbon ribbon-top-left"><span>Featured</span>
						</div>
						<!--ROOM IMAGE-->
						<?php
				
				include "database/db.php";

				$roomid = $data['room_number'];

				$sql = "SELECT * FROM rooms JOIN images WHERE rooms.photo = images.img_ref AND room_number=$roomid ";
				$result = mysqli_query($conn, $sql) or die("query unsuccessfull!!");
				if (mysqli_num_rows($result) > 0) {
					 $row = mysqli_fetch_assoc($result)
						 
												   
				  ?>

                    

						<div class="r1 r-com"><img src="admin/room/<?php echo $row['image']; ?>" alt="" />
						</div>

			<?php	} ?>
						<!--ROOM RATING-->
						<div class="r2 r-com">
							<h4> <?php echo $data['room_type']; ?> </h4>
							<div class="r2-ratt"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <img src="images/h-trip.png" alt="" /> <span>Excellent  4.5 / 5</span> </div>
							<ul>
								<li>Max Adult : <?php echo $data['max_persions']; ?> </li>
								<!-- <li>Max Child : 1</li> -->
								<li></li>
								<li></li>
							</ul>
						</div>
						<!--ROOM AMINITIES-->
						<div class="r3 r-com">
							<ul>
								<li>Ironing facilities</li>
								<li>Tea/Coffee maker</li>
								<li><?php echo $data['ac_nonac']; ?></li>
								<li>Flat-screen TV</li>
								<li>Wake-up service</li>
								<li><?php echo $data['meal']; ?></li>
							</ul>
						</div>
						<!--ROOM PRICE-->
						<div class="r4 r-com">
							<p>Price for 1 night</p>
							<p><span class="room-price-1"><?php echo $data['price_per_night']; ?></span> <span class="room-price">$: 7000</span>
							</p>
							<p><?php echo $data['cancllecation_charge']; ?></p>
						</div>
						<!--ROOM BOOKING BUTTON-->
						<div class="r5 r-com">
							<div class="r2-available">Available</div>
							<p>Price for 1 night</p> 

							<?php 
							if (isset($_SESSION['user'])) { ?>

							<a href="room-details.php?id=<?php echo $data['room_number']; ?> " class="inn-room-book">Book</a>
							
							<?php }else{ ?>
								
							     <a href="" onclick="book()" class="inn-room-book">Book</a> 
						
						     <?php }?>
						
						
						</div>
					</div>
					<?php } ?>
					<!--END ROOM SECTION-->
				
				</div>
			</div>
		</div>
		<script>
			function book() {
			 swal("Please Login !", "to book ");
			}
		
		 </script>
		
		<!--TOP SECTION-->
		<!--TOP SECTION-->
		
	<!--END HEADER SECTION-->
	<?php include "elements/footer.php"; ?>
	<!--ALL SCRIPT FILES-->
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/angular.min.js"></script>
	<script src="js/bootstrap.js" type="text/javascript"></script>
	<script src="js/materialize.min.js" type="text/javascript"></script>
	<script src="js/jquery.mixitup.min.js" type="text/javascript"></script>
	<script src="js/custom.js"></script>
</body>
</html>
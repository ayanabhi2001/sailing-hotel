<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

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
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
		
	</script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
</head>

<body data-ng-app="">
      
	<section>
		<!--TOP SECTION NAVBAR-->
		<?php
            include "elements/header.php";

 if(isset($_GET['login']) && $_GET['login'] == "1")
{
    print '<script type="text/javascript">';
    print 'window.onload = function(e){';
    print 'swal("Good job!", "You Logged In Successfully!", "success");';
    print '};';
    print '</script>';
}
		?>
		<!--TOP SECTION-->
		<!--Check Availability SECTION-->
		
 

		<div>
			<div class="slider fullscreen">
				<ul class="slides">
					<li> <img src="images/slider/1.jpg" alt="">
						<!-- random image -->
						<div class="caption center-align slid-cap">
							<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
							<h2>Located at the perfect place for a perfect vacation.</h2>
							<p>It’s all in the details!</p> <a href="#" class="waves-effect waves-light">Book Now</a> </div>
					</li>
					<li> <img src="images/slider/2.jpg" alt="">
						<!-- random image -->
						<div class="caption center-align slid-cap">
							<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
							<h2>Don’t call it a hotel, call it a home away from home</h2>
							<p>It’s all in the details!</p> <a href="#" class="waves-effect waves-light">Book Now</a> </div>
					</li>
					<li> <img src="images/slider/3.jpg" alt="">
						<!-- random image -->
						<div class="caption center-align slid-cap">
							<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
							<h2>Always deliver more than expected.</h2>
							<p>It’s all in the details!</p> <a href="#" class="waves-effect waves-light">Book Now</a> </div>
					</li>
					<li> <img src="images/slider/4.jpg" alt="">
						<!-- random image -->
						<div class="caption center-align slid-cap">
							<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
							<h2>Great rooms make great mornings.</h2>
							<p>Unpack your worries and leave them here</p> <a href="#" class="waves-effect waves-light">Book Now</a> </div>
					</li>
				</ul>
			</div>
		</div>
		<!--End Check Availability SECTION-->
		<!--HOTEL ROOMS SECTION-->
		<div class="hom1 hom-com pad-bot-40">
			<div class="container">
				<div class="row">
					<div class="hom1-title">
						<h2>Our Hotel Rooms</h2>
						<div class="head-title">
							<div class="hl-1"></div>
							<div class="hl-2"></div>
							<div class="hl-3"></div>
						</div>
						<p></p>
					</div>
				</div>
				<div class="row">
					<div class="to-ho-hotel">
						<!-- HOTEL GRID -->
                        <?php 


                    include("database/db.php");
                    $sql = "SELECT * FROM `rooms`"; 
                    $res = mysqli_query($conn,$sql);
                    

                     while($data=mysqli_fetch_assoc($res)){
				     ?>
						<div class="col-md-4">
							<div class="to-ho-hotel-con">
								<div class="to-ho-hotel-con-1">
								<?php
				
				include "database/db.php";

				$roomid = $data['room_number'];

				$sql = "SELECT * FROM rooms JOIN images WHERE rooms.photo = images.img_ref AND room_number=$roomid ";
				$result = mysqli_query($conn, $sql) or die("query unsuccessfull!!");
				if (mysqli_num_rows($result) > 0) {
					 $row = mysqli_fetch_assoc($result)
						 
												   
				  ?>
									<div class="hom-hot-av-tic">Bookings open </div> <img src="admin/room/<?php echo $row['image']; ?>" alt=""> </div>

									<?php	} ?>
								<div class="to-ho-hotel-con-23">
									<div class="to-ho-hotel-con-2"> <a href="all-rooms.php"><h4><?php echo $data['room_type']; ?></h4></a> </div>
									<div class="to-ho-hotel-con-3">
										<ul>
											<li>City: Sonarpur,Kolkata
												<!-- <div class="dir-rat-star ho-hot-rat-star"> Rating: <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i> </div> -->
											</li>
											<li><span class="ho-hot-pri-dis">$720</span><span class="ho-hot-pri"><?php echo $data['price_per_night']; ?></span> </li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					<?php } ?>

					</div>
				</div>
			</div>
		</div>
		<!--END HOTEL ROOMS-->
		<!--TOP SECTION-->
		<!-- <div class="offer">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="offer-l"> <span class="ol-1"></span> <span class="ol-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span> <span class="ol-4">Standardized Budget Rooms</span> <span class="ol-3"></span> <span class="ol-5">$99/-</span>
							<ul>
								<li>
									<a href="#!" class="waves-effect waves-light btn-large offer-btn"><img src="images/icon/dis1.png" alt="">
									</a><span>Free WiFi</span>
								</li>
								<li>
									<a href="#!" class="waves-effect waves-light btn-large offer-btn"><img src="images/icon/h2.png" alt=""> </a><span>Breakfast</span>
								</li>
								<li>
									<a href="#!" class="waves-effect waves-light btn-large offer-btn"><img src="images/icon/dis3.png" alt=""> </a><span>Pool</span>
								</li>
								<li>
									<a href="#!" class="waves-effect waves-light btn-large offer-btn"><img src="images/icon/dis4.png" alt=""> </a><span>Television</span>
								</li>
								<li>
									<a href="#!" class="waves-effect waves-light btn-large offer-btn"><img src="images/icon/dis5.png" alt=""> </a><span>GYM</span>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-6">
						<div class="offer-r">
							<div class="or-1"> <span class="or-11">go</span> <span class="or-12">Stays</span> </div>
							<div class="or-2"> <span class="or-21">Get</span> <span class="or-22">70%</span> <span class="or-23">Off</span> <span class="or-24">use code: RG5481WERQ</span> <span class="or-25"></span> </div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		
		<!-- <div class="blog hom-com pad-bot-0">
			<div class="container">
				<div class="row">
					<div class="hom1-title">
						<h2>Photo Gallery</h2>
						<div class="head-title">
							<div class="hl-1"></div>
							<div class="hl-2"></div>
							<div class="hl-3"></div>
						</div>
						<p>Aenean euismod sem porta est consectetur posuere. Praesent nisi velit, porttitor ut imperdiet a, pellentesque id mi.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="inn-services head-typo typo-com mar-bot-0">
							<ul id="filters" class="clearfix">
								<li><span class="filter active" data-filter=".app, .card, .icon, .logo, .web">All</span>
								</li>
								<li><span class="filter" data-filter=".app">Hotels</span>
								</li>
								<li><span class="filter" data-filter=".card">Aminities</span>
								</li>
								<li><span class="filter" data-filter=".icon">Rooms</span>
								</li>
								<li><span class="filter" data-filter=".logo">Food Menu</span>
								</li>
								<li><span class="filter" data-filter=".web">Events</span>
								</li>
							</ul>
							<div id="portfoliolist">
								<div class="portfolio logo" data-cat="logo">
									<div class="portfolio-wrapper"> <img src="img/portfolios/logo/5.jpg" alt="" />
										<div class="label">
											<div class="label-text"> <a class="text-title">Photo Caption</a> <span class="text-category">Logo</span> </div>
											<div class="label-bg"></div>
										</div>
									</div>
								</div>
								<div class="portfolio app" data-cat="app">
									<div class="portfolio-wrapper"> <img src="img/portfolios/app/1.jpg" alt="" />
										<div class="label">
											<div class="label-text"> <a class="text-title">Photo Caption</a> <span class="text-category">APP</span> </div>
											<div class="label-bg"></div>
										</div>
									</div>
								</div>
								<div class="portfolio web" data-cat="web">
									<div class="portfolio-wrapper"> <img src="img/portfolios/web/4.jpg" alt="" />
										<div class="label">
											<div class="label-text"> <a class="text-title">Photo Caption</a> <span class="text-category">Web design</span> </div>
											<div class="label-bg"></div>
										</div>
									</div>
								</div>
								<div class="portfolio card" data-cat="card">
									<div class="portfolio-wrapper"> <img src="img/portfolios/card/1.jpg" alt="" />
										<div class="label">
											<div class="label-text"> <a class="text-title">Photo Caption</a> <span class="text-category">Business card</span> </div>
											<div class="label-bg"></div>
										</div>
									</div>
								</div>
								<div class="portfolio app" data-cat="app">
									<div class="portfolio-wrapper"> <img src="img/portfolios/app/3.jpg" alt="" />
										<div class="label">
											<div class="label-text"> <a class="text-title">Photo Caption</a> <span class="text-category">APP</span> </div>
											<div class="label-bg"></div>
										</div>
									</div>
								</div>
								<div class="portfolio card" data-cat="card">
									<div class="portfolio-wrapper"> <img src="img/portfolios/card/4.jpg" alt="" />
										<div class="label">
											<div class="label-text"> <a class="text-title">Photo Caption</a> <span class="text-category">Business card</span> </div>
											<div class="label-bg"></div>
										</div>
									</div>
								</div>
								<div class="portfolio card" data-cat="card">
									<div class="portfolio-wrapper"> <img src="img/portfolios/card/5.jpg" alt="" />
										<div class="label">
											<div class="label-text"> <a class="text-title">Photo Caption</a> <span class="text-category">Business card</span> </div>
											<div class="label-bg"></div>
										</div>
									</div>
								</div>
								<div class="portfolio logo" data-cat="logo">
									<div class="portfolio-wrapper"> <img src="img/portfolios/logo/1.jpg" alt="" />
										<div class="label">
											<div class="label-text"> <a class="text-title">Photo Caption</a> <span class="text-category">Logo</span> </div>
											<div class="label-bg"></div>
										</div>
									</div>
								</div>
								<div class="portfolio app" data-cat="app">
									<div class="portfolio-wrapper"> <img src="img/portfolios/app/2.jpg" alt="" />
										<div class="label">
											<div class="label-text"> <a class="text-title">Photo Caption</a> <span class="text-category">APP</span> </div>
											<div class="label-bg"></div>
										</div>
									</div>
								</div>
								<div class="portfolio card" data-cat="card">
									<div class="portfolio-wrapper"> <img src="img/portfolios/card/2.jpg" alt="" />
										<div class="label">
											<div class="label-text"> <a class="text-title">Photo Caption</a> <span class="text-category">Business card</span> </div>
											<div class="label-bg"></div>
										</div>
									</div>
								</div>
								<div class="portfolio logo" data-cat="logo">
									<div class="portfolio-wrapper"> <img src="img/portfolios/logo/6.jpg" alt="" />
										<div class="label">
											<div class="label-text"> <a class="text-title">Photo Caption</a> <span class="text-category">Logo</span> </div>
											<div class="label-bg"></div>
										</div>
									</div>
								</div>
								<div class="portfolio logo" data-cat="logo">
									<div class="portfolio-wrapper"> <img src="img/portfolios/logo/7.jpg" alt="" />
										<div class="label">
											<div class="label-text"> <a class="text-title">Photo Caption</a> <span class="text-category">Logo</span> </div>
											<div class="label-bg"></div>
										</div>
									</div>
								</div>
								<div class="portfolio icon" data-cat="icon">
									<div class="portfolio-wrapper"> <img src="img/portfolios/icon/4.jpg" alt="" />
										<div class="label">
											<div class="label-text"> <a class="text-title">Photo Caption</a> <span class="text-category">Icon</span> </div>
											<div class="label-bg"></div>
										</div>
									</div>
								</div>
								<div class="portfolio web" data-cat="web">
									<div class="portfolio-wrapper"> <img src="img/portfolios/web/3.jpg" alt="" />
										<div class="label">
											<div class="label-text"> <a class="text-title">Photo Caption</a> <span class="text-category">Web design</span> </div>
											<div class="label-bg"></div>
										</div>
									</div>
								</div>
								<div class="portfolio icon" data-cat="icon">
									<div class="portfolio-wrapper"> <img src="img/portfolios/icon/1.jpg" alt="" />
										<div class="label">
											<div class="label-text"> <a class="text-title">Photo Caption</a> <span class="text-category">Icon</span> </div>
											<div class="label-bg"></div>
										</div>
									</div>
								</div>
								<div class="portfolio web" data-cat="web">
									<div class="portfolio-wrapper"> <img src="img/portfolios/web/2.jpg" alt="" />
										<div class="label">
											<div class="label-text"> <a class="text-title">Photo Caption</a> <span class="text-category">Web design</span> </div>
											<div class="label-bg"></div>
										</div>
									</div>
								</div>
								<div class="portfolio icon" data-cat="icon">
									<div class="portfolio-wrapper"> <img src="img/portfolios/icon/2.jpg" alt="" />
										<div class="label">
											<div class="label-text"> <a class="text-title">Photo Caption</a> <span class="text-category">Icon</span> </div>
											<div class="label-bg"></div>
										</div>
									</div>
								</div>
								<div class="portfolio icon" data-cat="icon">
									<div class="portfolio-wrapper"> <img src="img/portfolios/icon/5.jpg" alt="" />
										<div class="label">
											<div class="label-text"> <a class="text-title">3D Map</a> <span class="text-category">Icon</span> </div>
											<div class="label-bg"></div>
										</div>
									</div>
								</div>
								<div class="portfolio web" data-cat="web">
									<div class="portfolio-wrapper"> <img src="img/portfolios/web/1.jpg" alt="" />
										<div class="label">
											<div class="label-text"> <a class="text-title">Note</a> <span class="text-category">Web design</span> </div>
											<div class="label-bg"></div>
										</div>
									</div>
								</div>
								<div class="portfolio logo" data-cat="logo">
									<div class="portfolio-wrapper"> <img src="img/portfolios/logo/3.jpg" alt="" />
										<div class="label">
											<div class="label-text"> <a class="text-title">Native Designers</a> <span class="text-category">Logo</span> </div>
											<div class="label-bg"></div>
										</div>
									</div>
								</div>
								<div class="portfolio logo" data-cat="logo">
									<div class="portfolio-wrapper"> <img src="img/portfolios/logo/4.jpg" alt="" />
										<div class="label">
											<div class="label-text"> <a class="text-title">Bookworm</a> <span class="text-category">Logo</span> </div>
											<div class="label-bg"></div>
										</div>
									</div>
								</div>
								<div class="portfolio icon" data-cat="icon">
									<div class="portfolio-wrapper"> <img src="img/portfolios/icon/3.jpg" alt="" />
										<div class="label">
											<div class="label-text"> <a class="text-title">Sandwich</a> <span class="text-category">Icon</span> </div>
											<div class="label-bg"></div>
										</div>
									</div>
								</div>
								<div class="portfolio card" data-cat="card">
									<div class="portfolio-wrapper"> <img src="img/portfolios/card/3.jpg" alt="" />
										<div class="label">
											<div class="label-text"> <a class="text-title">Reality</a> <span class="text-category">Business card</span> </div>
											<div class="label-bg"></div>
										</div>
									</div>
								</div>
								<div class="portfolio logo" data-cat="logo">
									<div class="portfolio-wrapper"> <img src="img/portfolios/logo/2.jpg" alt="" />
										<div class="label">
											<div class="label-text"> <a class="text-title">Speciallisterne</a> <span class="text-category">Logo</span> </div>
											<div class="label-bg"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		
				
	</section>
	<!--END HEADER SECTION-->
	<?php
	   include "elements/footer.php";
	?>
   
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
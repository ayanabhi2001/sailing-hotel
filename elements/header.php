
<?php 
include "loginpopup.php";
?>
<div class="menu-section" >
			<div class="container">

				
				<div class="row">
					<div class="logo">
						<a href="index.php"><img src="images/logo-3.png" alt="" />
						</a>
					</div>
					<div class="menu-bar">
						<ul>
							<!-- <li><a href="#" class='dropdown-button' data-activates='drop-home'>Home <i class="fa fa-angle-down"></i></a>
							</li> -->
							<li><a href="index.php" >Home</i></a>
							</li>
							<li><a href="all-rooms.php">Rooms</i></a>
							</li>
							<!-- <li><a href="services.php">Services</a>
							</li> -->
							<li><a href="about-us.php">About Us</a>
							</li>
							<li><a href="contact-us.php">Contact Us</a>
							</li>
							<?php if(!isset($_SESSION['user'])){?>
							<li>
								<a href="#!" data-toggle="modal" data-target="#modal2"> Register</a>
							</li>
							<?php }?>
							<?php 
			                if(!isset($_SESSION['user'])){
                           ?>
							<li>
								<a href="#!" data-toggle="modal" data-target="#modal1"> Log In</a>
							</li>
							<?php   } else{?>
							<li><a href="dashboard.php">Dashboard</a>
							</li>
							<li><a href="logout.php">Log Out</a>
							</li>
							<?php } ?>
							<!-- <li><a href="menu.php">Menu</a>
							</li>
							<li><a href="events.php">Events</a>
							</li>
							<li><a href="aminities1.php">Amenities</a>
							</li> -->
							<!-- <li><a href="#" class='dropdown-button' data-activates='drop-page'>Pages <i class="fa fa-angle-down"></i></a>
							</li> -->
						</ul>
					</div>
				</div>
			</div>
		</div>

<?php session_start();?>
<!DOCTYPE html>

<html lang="en">

<!-- Mirrored from techydevs.com/demos/themes/html/trizen-demo/trizen/room-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Jun 2022 21:15:52 GMT -->
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sailing Hotel - Booking System</title>
    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&amp;display=swap" rel="stylesheet">

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="extra_css/css/bootstrap.min.css">
    <link rel="stylesheet" href="extra_css/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="extra_css/css/line-awesome.css">
    <link rel="stylesheet" href="extra_css/css/owl.carousel.min.css">
    <link rel="stylesheet" href="extra_css/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="extra_css/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="extra_css/css/daterangepicker.css">
    <link rel="stylesheet" href="extra_css/css/animate.min.css">
    <link rel="stylesheet" href="extra_css/css/animated-headline.css">
    <link rel="stylesheet" href="extra_css/css/jquery-ui.css">
    <link rel="stylesheet" href="extra_css/css/flag-icon.min.css">
    <link rel="stylesheet" href="extra_css/css/leaflet.css">
    <link rel="stylesheet" href="extra_css/css/style.css">

    <link rel="stylesheet" href="csss/style.css">

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    
    
    
</head>
<body>
<!-- start cssload-loader -->
<!-- <div class="preloader" id="preloader">
    <div class="loader">
        <svg class="spinner" viewBox="0 0 50 50">
            <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
        </svg>
    </div>
</div> -->
<!-- end cssload-loader -->

<!-- ================================
            START HEADER AREA
================================= -->
<?php include "elements/header.php";

if(isset($_GET['massage']) && $_GET['massage'] == "1")
{
    print '<script type="text/javascript">';
    print 'window.onload = function(e){';
    print 'swal("Sorry!", "This room is not available for this date range");';
    print '};';
    print '</script>';
}

?>
<!-- ================================
         END HEADER AREA
================================= -->

<!-- ================================
    START ROOM DETAIL BREAD
================================= -->
<section class="room-detail-bread">
    <div class="full-width-slider carousel-action">
    <?php
				
                include "database/db.php";
                $roomid= $_REQUEST['id'];
                $sql = "SELECT * FROM rooms JOIN images WHERE rooms.photo = images.img_ref AND room_number=$roomid";
                $result = mysqli_query($conn, $sql) or die("query unsuccessfull!!");
                if (mysqli_num_rows($result) > 0) {
                     while ($row = mysqli_fetch_assoc($result)) {
                         
                                                   
                  ?>

   
        <div class="full-width-slide-item">
            <img src="admin/room/<?php echo $row['image']; ?>" alt="">
        </div> 
        <?php
											}
									      }
									?>

        <!-- <div class="hp-banner"> <img src="images/detailed-banner.jpg" alt=""> </div> -->
      

    </div><!-- end full-width-slider -->
</section><!-- end room-detail-bread -->
<!-- ================================
    END ROOM DETAIL BREAD
================================= -->

<!-- ================================
    START TOUR DETAIL AREA
================================= -->
<section class="tour-detail-area padding-bottom-90px">
    <div class="single-content-navbar-wrap menu section-bg" id="single-content-navbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-content-nav" id="single-content-nav">
                        <ul>
                            <li><a data-scroll="description" href="#description" class="scroll-link active">Description</a></li>
                            <li><a data-scroll="services" href="#services" class="scroll-link">Services</a></li>
                            <li><a data-scroll="amenities" href="#amenities" class="scroll-link">Amenities</a></li>
                            <!-- <li><a data-scroll="location-map" href="#location-map" class="scroll-link">Map</a></li> -->
                            <!-- <li><a data-scroll="reviews" href="#reviews" class="scroll-link">Reviews</a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end single-content-navbar-wrap -->

    <?php
							
                                include "database/db.php";
                                $roomid= $_REQUEST['id'];
								$sql = "SELECT * FROM rooms WHERE room_number=$roomid";
								$result = mysqli_query($conn,$sql);
								$data = mysqli_fetch_assoc($result);
                             ?>
    <div class="single-content-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="single-content-wrap padding-top-60px">
                        <div id="description" class="page-scroll">
                            <div class="single-content-item pb-4">
                                <h3 class="title font-size-26"><?php echo $data['room_type']; ?></h3>
                                <!-- <p class="pt-2">
                                    <span class="badge badge-warning text-white font-size-16">4.6</span>
                                    <span>(4,209 Reviews)</span>
                                </p> -->
                            </div><!-- end single-content-item -->
                            <div class="section-block"></div>
                            <div class="single-content-item padding-top-30px padding-bottom-40px">
                                <h3 class="title font-size-20">Description</h3>
                                <p class="py-3"><?php echo $data['roomdetails']; ?></p>
                                <!-- <p class="pb-4">Cum et probo menandri. Officiis consulatu pro et, ne sea sale invidunt, sed ut sint blandit efficiendi. Atomorum explicari eu qui, est enim quaerendum te. Quo harum viris id. Per ne quando dolore evertitur, pro ad cibo commune.</p> -->
                                <h3 class="title font-size-15 font-weight-medium pb-3">House Rules</h3>
                                <ul class="list-items">
                                    <li><i class="la la-dot-circle mr-2"></i>No smoking, parties or events.</li>
                                    <li><i class="la la-dot-circle mr-2"></i>Check-in time is 2 PM - 4 PM and check-out by 10 AM.</li>
                                </ul>
                            </div><!-- end single-content-item -->
                            <div class="section-block"></div>
                        </div><!-- end description -->
                        <div id="services" class="page-scroll">
                            <div class="single-content-item padding-top-40px padding-bottom-40px">
                                <h3 class="title font-size-20">Services</h3>
                                <div class="row pt-4">
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-check-circle"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Bicycle Hire</h3>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-check-circle"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Conference Rooms</h3>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-check-circle"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Fruit Basket</h3>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-check-circle"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Massage</h3>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                     <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-check-circle"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Sightseeing</h3>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                     <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-check-circle"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Car Hire</h3>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                     <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-check-circle"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Fitness Center</h3>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                     <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-check-circle"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Laundry</h3>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                     <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-check-circle"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Own Parking Space</h3>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-check-circle"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Wake-Up Call</h3>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                </div><!-- end row -->
                            </div><!-- end single-content-item -->
                            <div class="section-block"></div>
                        </div><!-- end itinerary -->
                        <div id="amenities" class="page-scroll">
                            <div class="single-content-item padding-top-40px padding-bottom-40px">
                                <h3 class="title font-size-20">Amenities</h3>
                                <div class="row pt-4">
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-couch"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">2 Seater Sofa</h3>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-television"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">40-Inch Samsung LED TV</h3>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-gear"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Butler Service</h3>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-wifi"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Free Wi – Fi</h3>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                    <!-- <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-swimming-pool"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Private Pool</h3>
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-user"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">24h Room Service</h3>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                    <!-- <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-air-freshener"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Air Conditioning</h3>
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-phone"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Direct Dial Phone</h3>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-bullhorn"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Hair Dryer</h3>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-bathtub"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Bathtub</h3>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                    <!-- <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-hand-holding-usd"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Safe Deposit Box</h3>
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-luggage-cart"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Luggage storage</h3>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div>
                                    <!-- end col-lg-4 -->



                                    <?php
							
                            include "database/db.php";
                            
                            $sql2 = "SELECT * FROM rooms WHERE room_number=$roomid";
                            $result2 = mysqli_query($conn,$sql2);
                            $data2 = mysqli_fetch_assoc($result2);
                            if (mysqli_num_rows($result2)>0) { ?>
                                <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-air-freshener"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium"><?php echo $data2['ac_nonac']; ?></h3>
                                            </div>
                                        </div>
                                    </div> 
                                    <?php
                                        }
                                 ?>    

                               
                                







                                    
                                </div><!-- end row -->
                            </div><!-- end single-content-item -->
                            <div class="section-block"></div>
                        </div><!-- end itinerary -->
                        <br>
                        
                        
                        
                    </div><!-- end single-content-wrap -->
                </div><!-- end col-lg-8 -->
                
                <div class="col-lg-4">
                    <div class="sidebar single-content-sidebar mb-0">
                        <div class="sidebar-widget single-content-widget">
                            <h3 class="title stroke-shape">Your Reservation</h3>
                            <div class="sidebar-widget-item">
                                <div class="contact-form-action">
                                    <form action="check.php" method="post"  onsubmit="return validedForm()">
                                        <div class="input-box">
                                            <label class="label-text">Check-in</label>
                                            <div class="form-group">
                                                <span class="la la-calendar form-icon"></span>
                                                <input class="date-range form-control" type="date" id="check_in" name="check_in" required >
                                            </div>
                                        </div>
                                        <div class="input-box">
                                            <label class="label-text">Check-out</label>
                                            <div class="form-group">
                                                <span class="la la-calendar form-icon"></span>
                                                <input class="date-range form-control" type="date" id="check_out" name="check_out" required>
                                            </div>
                                        </div>
                                        <!-- <div class="input-box">
                                            <label class="label-text">Rooms</label>
                                            <div class="form-group">
                                                <div class="select-contain w-auto">
                                                    <select class="select-contain-select" name="">
                                                        <option value="0">Select Room</option>
                                                        <option value="1" selected>1 Room</option>
                                                        <option value="2">2 Rooms</option>
                                                        <option value="3">3 Rooms</option>
                                                        <option value="4">4 Rooms</option>
                                                        <option value="5">5 Rooms</option>
                                                        <option value="6">6 Rooms</option>
                                                        <option value="7">7 Rooms</option>
                                                        <option value="8">8 Rooms</option>
                                                        <option value="9">9 Rooms</option>
                                                        <option value="10">10 Rooms</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div> -->
                                        <div class="sidebar-widget-item">
                                <div class="qty-box mb-2 d-flex align-items-center justify-content-between">
                                    <label class="font-size-16">Adults <span>Age 18+</span></label>
                                    <div class="qtyBtn d-flex align-items-center">
                                        <div class="qtyDec"><i class="la la-minus"></i></div>
                                        <input type="text" name="adults" id="adults"  value="1" required>
                                        <div class="qtyInc"><i class="la la-plus"></i></div>
                                    </div>
                                </div><!-- end qty-box -->
                                <div class="qty-box mb-2 d-flex align-items-center justify-content-between">
                                    <label class="font-size-16">Children <span>2-12 years old</span></label>
                                    <div class="qtyBtn d-flex align-items-center">
                                        <div class="qtyDec"><i class="la la-minus"></i></div>
                                        <input type="text" name="children" id="childrens" value="0" required>
                                        <div class="qtyInc"><i class="la la-plus"></i></div>
                                    </div>
                                </div><!-- end qty-box -->
                                <!-- <div class="qty-box mb-2 d-flex align-items-center justify-content-between">
                                    <label class="font-size-16">Infants <span>0-2 years old</span></label>
                                    <div class="qtyBtn d-flex align-items-center">
                                        <div class="qtyDec"><i class="la la-minus"></i></div>
                                        <input type="text" name="qtyinfant" id="infants" value="0">
                                        <div class="qtyInc"><i class="la la-plus"></i></div>
                                    </div>
                                </div> -->
                            </div>
                            <br>
                            
                            <input  type="text" value="<?php echo $roomid; ?>" name="room_id" readonly hidden>
                            <input  type="text" value="<?php echo $data['price_per_night'];?>" name="total_price" readonly hidden>
                            
                            <button type="submit" class="theme-btn text-center w-100 mb-2" >Check Availiblity</button>
                            
                                    </form>

                                <script>
                                    
                                    function validedForm(){
                                        var dateOK  = false;
                                        var today   = new Date().toISOString().slice(0, 10);
                                        var startDt = document.getElementById("check_in").value;
                                        var endDt   = document.getElementById("check_out").value;
                                        console.log(today);
                                        console.log(startDt);
                                        console.log(endDt);
                                        
                                        if (startDt < today || endDt < today){
                                            alert('Cannot select a date in the past.');
                                        }else{
                                            // alert ('Checkout date is greater than Checkin date.');
                                            dateOK = true;
                                        }
                                        return dateOK;
                                        }    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                            </script>



                                </div>
                            </div>
                            <!-- <div class="sidebar-widget-item"> 
                                <div class="qty-box mb-2 d-flex align-items-center justify-content-between">
                                    <label class="font-size-16">Adults <span>Age 18+</span></label>
                                    <div class="qtyBtn d-flex align-items-center">
                                        <div class="qtyDec"><i class="la la-minus"></i></div>
                                        <input type="text" name="qtyadults" id="adults"  value="0">
                                        <div class="qtyInc"><i class="la la-plus"></i></div>
                                    </div>
                                </div>
                                <div class="qty-box mb-2 d-flex align-items-center justify-content-between">
                                    <label class="font-size-16">Children <span>2-12 years old</span></label>
                                    <div class="qtyBtn d-flex align-items-center">
                                        <div class="qtyDec"><i class="la la-minus"></i></div>
                                        <input type="text" name="qtychildren" id="childrens" value="0">
                                        <div class="qtyInc"><i class="la la-plus"></i></div>
                                    </div>
                                </div>
                                <div class="qty-box mb-2 d-flex align-items-center justify-content-between">
                                    <label class="font-size-16">Infants <span>0-2 years old</span></label>
                                    <div class="qtyBtn d-flex align-items-center">
                                        <div class="qtyDec"><i class="la la-minus"></i></div>
                                        <input type="text" name="qtyinfant" id="infants" value="0">
                                        <div class="qtyInc"><i class="la la-plus"></i></div>
                                    </div>
                                </div> 
                            </div>-->
                            <!-- <div class="sidebar-widget-item py-4">
                                <h3 class="title stroke-shape">Extra Services</h3>
                                <div class="extra-service-wrap">
                                    <form action="#" method="" class="extraServiceForm" id="extraServiceForm">
                                        <div id="checkboxContainPrice">
                                            <div class="custom-checkbox">
                                                <input type="checkbox" name="cleaning" id="cleaningChb" value="15" />
                                                <label for="cleaningChb" class="d-flex justify-content-between align-items-center">Cleaning Fee <span class="text-black font-weight-regular">&#8377 15</span></label>
                                            </div>
                                            <div class="custom-checkbox">
                                                <input type="checkbox" name="airport-pickup" id="airportPickupChb" value="20" />
                                                <label for="airportPickupChb" class="d-flex justify-content-between align-items-center">Airport pickup <span class="text-black font-weight-regular">&#8377 20</span></label>
                                            </div>
                                            <div class="custom-checkbox">
                                                <input type="checkbox" name="breakfast" id="breakfastChb" value="10" />
                                                <label for="breakfastChb" class="d-flex justify-content-between align-items-center">Breakfast <span class="text-black font-weight-regular">&#8377 10 / per person</span></label>
                                            </div>
                                            <div class="custom-checkbox">
                                                <input type="checkbox" name="parking" id="parkingChb" value="5" />
                                                <label for="parkingChb" class="d-flex justify-content-between align-items-center">Parking <span class="text-black font-weight-regular">&#8377 5 / per night</span></label>
                                            </div>
                                        </div>
                                        <div class="total-price pt-3">
                                            <p class="text-black">Your Price</p>
                                            <p class="d-flex align-items-center"><span class="font-size-17 text-black">&#8377</span> <input type="text" id="total_price" name="total" class="num" value="<?php echo $data['price_per_night']; ?>" readonly="readonly"/><span>/ per room</span></p>
                                        </div>
                                    </form>
                                </div>
                            </div>end sidebar-widget-item -->
                            
                            
                        </div><!-- end sidebar-widget -->
                        <div class="sidebar-widget single-content-widget">
                            <h3 class="title stroke-shape">Why Book With Us?</h3>
                            <div class="sidebar-list">
                                <ul class="list-items">
                                    <li><i class="la la-dollar icon-element mr-2"></i>No-hassle best price guarantee</li>
                                    <li><i class="la la-microphone icon-element mr-2"></i>Customer care available 24/7</li>
                                    <!-- // <li><i class="la la-thumbs-up icon-element mr-2"></i>Hand-picked Tours & Activities</li>
                                    // <li><i class="la la-file-text icon-element mr-2"></i>Free Travel Insureance</li> -->
                                </ul>
                            </div><!-- end sidebar-list -->
                        </div><!-- end sidebar-widget -->
                        <div class="sidebar-widget single-content-widget">
                            <h3 class="title stroke-shape">Get a Question?</h3>
                            <p class="font-size-14 line-height-24">Do not hesitate to give us a call. We are an expert team and we are happy to talk to you.</p>
                            <div class="sidebar-list pt-3">
                                <ul class="list-items">
                                    <li><i class="la la-phone icon-element mr-2"></i><a href="#">+ 61 23 8093 3400</a></li>
                                    <li><i class="la la-envelope icon-element mr-2"></i><a href="mailto:sailinghotel@trizen.com">sailinghotel"gmail.com</a></li>
                                </ul>
                            </div><!-- end sidebar-list -->
                        </div><!-- end sidebar-widget -->
                    </div><!-- end sidebar -->
                </div><!-- end col-lg-4 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end single-content-box -->
</section><!-- end tour-detail-area -->
<!-- ================================
    END TOUR DETAIL AREA
================================= -->

<div class="section-block"></div>

<!-- ================================
    START RELATE TOUR AREA
================================= -->
<!-- end related-tour-area -->
<!-- ================================
    END RELATE TOUR AREA
================================= -->

<!-- ================================
    START CTA AREA
================================= -->
<!-- end cta-area -->
<!-- ================================
    END CTA AREA
================================= -->

<!-- ================================
       START FOOTER AREA
================================= -->
<?php include "elements/footer.php"; ?>
<!-- end footer-area -->
<!-- ================================
       START FOOTER AREA
================================= -->

<!-- start back-to-top -->
<div id="back-to-top">
    <i class="la la-angle-up" title="Go top"></i>
</div>
<!-- end back-to-top -->










<!-- Template JS Files -->
<script src="extra_css/js/jquery-3.4.1.min.js"></script>
<script src="extra_css/js/jquery-ui.js"></script>
<script src="extra_css/js/popper.min.js"></script>
<script src="extra_css/js/bootstrap.min.js"></script>
<script src="extra_css/js/bootstrap-select.min.js"></script>
<script src="extra_css/js/moment.min.js"></script>
<script src="extra_css/js/daterangepicker.js"></script>
<script src="extra_css/js/owl.carousel.min.js"></script>
<script src="extra_css/js/jquery.fancybox.min.js"></script>
<script src="extra_css/js/jquery.countTo.min.js"></script>
<script src="extra_css/js/animated-headline.js"></script>
<script src="extra_css/js/jquery.ripples-min.js"></script>
<script src="extra_css/js/quantity-input.js"></script>
<script src="extra_css/js/navbar-sticky.js"></script>
<script src="extra_css/js/total-price.js"></script>
<script src="extra_css/js/leaflet.js"></script>
<script src="extra_css/js/map.js"></script>
<script src="extra_css/js/main.js"></script>
<script src="js/jquery.min.js"></script>
	

</body>

<!-- Mirrored from techydevs.com/demos/themes/html/trizen-demo/trizen/room-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Jun 2022 21:15:52 GMT -->
</html>
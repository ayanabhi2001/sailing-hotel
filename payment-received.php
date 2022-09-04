<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from techydevs.com/demos/themes/html/trizen-demo/trizen/payment-received.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Jun 2022 21:15:38 GMT -->
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sailing Hotel</title>
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
    <link rel="stylesheet" href="extra_css/css/style.css">
    <link rel="stylesheet" href="csss/style.css">  
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
<?php include "elements/header.php"; ?>
<!-- ================================
         END HEADER AREA
================================= -->

<!-- ================================
    START PAYMENT AREA
================================= -->
<section class="payment-area section-bg section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="form-box payment-received-wrap mb-0">
                    <div class="form-title-wrap">
                        <div class="step-bar-wrap text-center">
                            <ul class="step-bar-list d-flex align-items-center justify-content-around">
                                <li class="step-bar flex-grow-1 step-bar-active">
                                    <span class="icon-element">1</span>
                                    <p class="pt-2 color-text-2">Choose Your Room</p>
                                </li>
                                <li class="step-bar flex-grow-1 step-bar-active">
                                    <span class="icon-element">2</span>
                                    <p class="pt-2 color-text-2">Your Booking & Payment Details</p>
                                </li>
                                <li class="step-bar flex-grow-1">
                                    <span class="icon-element">3</span>
                                    <p class="pt-2 color-text-2">Booking Completed!</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <?php
                               
                               $roomid = $_REQUEST['roomid'];
                               $check_in = $_REQUEST['check_in'];
                               $check_out = $_REQUEST['check_out'];
                               $address = $_REQUEST['address'];
                               $total_price = $_REQUEST['total_price'];
                               $adults = $_REQUEST['adults'];

               
               
               ?>
                    <div class="form-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="payment-received-list">
                                    <h3 class="title font-size-24">Sailing Hotel </h3>
                                    <!-- <div class="card-rating">
                                        <span class="badge badge-warning text-white">4.4/5</span>
                                        <span class="review__text text-warning">Average</span>
                                        <span class="rating__text">(30 Reviews)</span>
                                    </div> -->
                                    <?php 
                                    $check_in = $check_in;
                                    $check_out = $check_out;

                                    $startTimeStamp = strtotime("{$check_in}");                                   
                                    $endTimeStamp = strtotime("{$check_out}");                                      
                                    
                                    $timeDiff = abs($endTimeStamp - $startTimeStamp);                            
                                    
                                    $numberDays = $timeDiff/86400;  // 86400 seconds in one day                  
                                    
                                    
                                    $numberDays = intval($numberDays); 
                                    
                                    ?>
                                    <ul class="list-items list-items-2 py-3">
                                        <li><span>Location:</span>Karbala More, Kolkata</li>
                                        <li><span>Check-in:</span><?php echo $check_in; ?></li>
                                        <li><span>Check-out:</span><?php echo $check_out; ?></li>
                                        <li><span>Booking details:</span><?php echo $numberDays; ?> Nights,Max <?php echo $adults; ?> Adult(s)</li>
                                            
                                        

                                        <!-- <li><span>Room type:</span></li> -->


                                       
                                        <!-- <li><span>Client:</span>David Martin</li> -->
                                    </ul>
                                </div><!-- end card-item -->
                            </div><!-- end col-lg-6 -->
                            <div class="col-lg-6">
                                <div class="card-item card-item-list payment-received-card">
                                    <div class="card-img">
                                        <img src="user/hotel.webp" alt="hotel-img">
                                    </div>
                                    <div class="card-body">

                                    
                                        <h3 class="card-title">1 Room x <?php echo $numberDays; ?> Nights</h3>
                                        <div class="card-price pb-3">
                                            <span class="price__from">From</span>

                                            <span class="price__num"><?php echo $price =($total_price/$numberDays); ?></span>

                                            <span class="price__text">Per night</span>
                                        </div>
                                        <div class="section-block"></div>
                                        <p class="card-text pt-3">Hotel tax 7% not included, Service charge 10% not included</p>
                                    </div>
                                </div><!-- end card-item -->
                            </div><!-- end col-lg-6 -->
                        </div><!-- end row -->
                         <div class="row">
                            <div class="col-lg-6">
                                <div class="payment-received-list">
                                    <h3 class="title">Received</h3>
                                    <p>Thank you. Your order has been received</p>
                                    <div class="table-form table-responsive pt-3 pb-3">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th scope="col">Order</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Total</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row">#121</th>
                                                <td>
                                                    <div class="table-content">
                                                        <h3 class="title"><?php echo date("Y-m-d");?></h3>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="table-content">
                                                        <h3 class="title"><?php echo $total_price; ?></h3>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <p>Make your payment derectly into our bank account. Please ues your Order ID as the payment reference. Your order wont be shipped until the funds have cleared in our account</p>
                                </div><!-- end card-item -->
                            </div><!-- end col-lg-6 -->
                            <div class="col-lg-6">
                                <div class="payment-received-list">
                                    <h3 class="title">Payment Detail</h3>
                                    <div class="table-form table-layout-2 table-responsive pt-3">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th scope="col">Room</th>
                                                <th scope="col" class="text-right">Total</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row">
                                                    <div class="table-content">
                                                        <p class="title pb-2">Sailing Hotel</p>
                                                        <p class="font-size-13 text-gray line-height-20 font-weight-medium"><span class="mr-2 color-text-2">Start Date:</span><?php echo $check_in; ?></p>
                                                        <p class="font-size-13 text-gray line-height-20 font-weight-medium"><span class="mr-2 color-text-2">End Date:</span><?php echo $check_out; ?></p>
                                                    </div>
                                                </th>
                                                <!-- <td>
                                                    <div class="table-content text-right">
                                                        <h3 class="title color-text"><?php echo $check_out; ?></h3>
                                                    </div>
                                                </td> -->
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="table-content">
                                                        <p class="title">Subtotal</p>
                                                    </div>
                                                </th>
                                                <td>
                                                    <div class="table-content text-right">
                                                        <h3 class="title color-text"><?php echo $total_price; ?></h3>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="table-content">
                                                        <p class="title">Order Total</p>
                                                    </div>
                                                </th>
                                                <td>
                                                    <div class="table-content text-right">
                                                        <h3 class="title color-text"><?php echo $total_price; ?></h3>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div><!-- end card-item -->
                            </div><!-- end col-lg-6 -->
                             <div class="col-lg-12">
                                 <div class="section-block mt-3"></div>
                                 <div class="btn-box text-center pt-4">
                                     <a href="payment-complete.php?check_in=<?php echo $check_in;?>&check_out=<?php echo $check_out;?>" class="theme-btn">Book Complete</a>
                                 </div>
                             </div>
                        </div><!-- end row -->
                    </div>
                </div><!-- end payment-card -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<!-- ================================
    END PAYMENT AREA
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
<script src="extra_css/js/main.js"></script>
</body>

<!-- Mirrored from techydevs.com/demos/themes/html/trizen-demo/trizen/payment-received.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Jun 2022 21:15:38 GMT -->
</html>
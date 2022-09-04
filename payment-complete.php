<?php 

session_start();
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from techydevs.com/demos/themes/html/trizen-demo/trizen/payment-complete.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Jun 2022 21:15:38 GMT -->
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trizen - Travel Booking HTML Template</title>
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
                                <li class="step-bar flex-grow-1 step-bar-active">
                                    <span class="icon-element">3</span>
                                    <p class="pt-2 color-text-2">Booking Completed!</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="form-content">
                        <div class="payment-received-list">
                            <div class="d-flex align-items-center">
                                <i class="la la-check icon-element flex-shrink-0 mr-3 ml-0"></i>
                                <div>
                                    <h3 class="title pb-1">Thanks <?php echo $name = $_SESSION['user']['fname']." ".$_SESSION['user']['lname']; ?></h3>
                                    <h3 class="title">Your booking in Sailing Hotel is confirmed.</h3>
                                </div>
                            </div>
                            <ul class="list-items py-4">
                                <li><i class="la la-check text-success mr-2"></i><strong class="text-black">Sailing Hotel </strong> is Expecting you on <strong class="text-black"><?php echo date("Y-m-d");?></strong></li>
                                <li><i class="la la-check text-success mr-2"></i>Your <strong class="text-black">payment</strong> will be handled by Sailing Hotel , the <strong class="color-text-2">'Payment'</strong> section below has more details</li>
                                <li><i class="la la-check text-success mr-2"></i>Make changes to your booking or ask the properly a question in just a few clicks</li>
                            </ul>
                            <!-- <div class="btn-box pb-4">
                                <a href="#" class="theme-btn mb-2 mr-2">Make changes to your booking</a>
                                <a href="#" class="theme-btn mb-2 theme-btn-transparent">Make your booking in the app</a>
                            </div> -->
                            <h3 class="title"><a href="#" class="text-black">Sailing Hotel</a></h3>
                            <p>Karbala More, South 24 Parganas</p>
                            <p class="py-1"><a href="#" class="text-color">Click for directions on Google maps <i class="la la-arrow-right"></i></a></p>
                            <p><strong class="text-black mr-1">Phone:</strong>+ 00 222 44 5678</p>
                            <ul class="list-items list-items-3 list-items-4 py-4">
                                <!-- <li><span class="text-black font-weight-bold">Your reservation</span>2 Nights, 1 Room</li> -->
                                <?php
                               
                             $check_in = $_REQUEST['check_in'];
                             $check_out = $_REQUEST['check_out'];
               
               
               ?>
                                <li><span class="text-black font-weight-bold">Check-in</span><?php echo $check_in; ?></li>
                                <li><span class="text-black font-weight-bold">Check-out</span><?php echo $check_out; ?></li>
                                <li><span class="text-black font-weight-bold">Prepayment</span>You will be charged a prepayment of the total price at any time.</li>
                                <!-- <li><span class="text-black font-weight-bold">Cancellation cost</span>From now on: USD 34</li> -->
                                
                            </ul>
                            <div class="btn-box">
                                <a href="index.php" class="theme-btn border-0 text-white bg-7">Go to Home</a>
                            </div>
                        </div><!-- end card-item -->
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
<?php include "elements/footer.php" ?>
<!-- end footer-area -->
<!-- ================================
       START FOOTER AREA
================================= -->

<!-- start back-to-top -->
<div id="back-to-top">
    <i class="la la-angle-up" title="Go top"></i>
</div>
<!-- end back-to-top -->

<!-- end modal-shared -->
<div class="modal-popup">
    <div class="modal fade" id="signupPopupForm" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <h5 class="modal-title title" id="exampleModalLongTitle">Sign Up</h5>
                        <p class="font-size-14">Hello! Welcome Create a New Account</p>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="la la-close"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="contact-form-action">
                        <form method="post">
                            <div class="input-box">
                                <label class="label-text">Username</label>
                                <div class="form-group">
                                    <span class="la la-user form-icon"></span>
                                    <input class="form-control" type="text" name="text" placeholder="Type your username">
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">Email Address</label>
                                <div class="form-group">
                                    <span class="la la-envelope form-icon"></span>
                                    <input class="form-control" type="text" name="text" placeholder="Type your email">
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">Password</label>
                                <div class="form-group">
                                    <span class="la la-lock form-icon"></span>
                                    <input class="form-control" type="text" name="text" placeholder="Type password">
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">Repeat Password</label>
                                <div class="form-group">
                                    <span class="la la-lock form-icon"></span>
                                    <input class="form-control" type="text" name="text" placeholder="Type again password">
                                </div>
                            </div><!-- end input-box -->
                            <div class="btn-box pt-3 pb-4">
                                <button type="button" class="theme-btn w-100">Register Account</button>
                            </div>
                            <div class="action-box text-center">
                                <p class="font-size-14">Or Sign up Using</p>
                                <ul class="social-profile py-3">
                                    <li><a href="#" class="bg-5 text-white"><i class="lab la-facebook-f"></i></a></li>
                                    <li><a href="#" class="bg-6 text-white"><i class="lab la-twitter"></i></a></li>
                                    <li><a href="#" class="bg-7 text-white"><i class="lab la-instagram"></i></a></li>
                                    <li><a href="#" class="bg-5 text-white"><i class="lab la-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </form>
                    </div><!-- end contact-form-action -->
                </div>
            </div>
        </div>
    </div>
</div><!-- end modal-popup -->

<!-- end modal-shared -->
<div class="modal-popup">
    <div class="modal fade" id="loginPopupForm" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <h5 class="modal-title title" id="exampleModalLongTitle2">Login</h5>
                        <p class="font-size-14">Hello! Welcome to your account</p>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="la la-close"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="contact-form-action">
                        <form method="post">
                            <div class="input-box">
                                <label class="label-text">Username</label>
                                <div class="form-group">
                                    <span class="la la-user form-icon"></span>
                                    <input class="form-control" type="text" name="text" placeholder="Type your username">
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">Password</label>
                                <div class="form-group mb-2">
                                    <span class="la la-lock form-icon"></span>
                                    <input class="form-control" type="text" name="text" placeholder="Type your password">
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="custom-checkbox mb-0">
                                        <input type="checkbox" id="rememberchb">
                                        <label for="rememberchb">Remember me</label>
                                    </div>
                                    <p class="forgot-password">
                                        <a href="recover.html">Forgot Password?</a>
                                    </p>
                                </div>
                            </div><!-- end input-box -->
                            <div class="btn-box pt-3 pb-4">
                                <button type="button" class="theme-btn w-100">Login Account</button>
                            </div>
                            <div class="action-box text-center">
                                <p class="font-size-14">Or Login Using</p>
                                <ul class="social-profile py-3">
                                    <li><a href="#" class="bg-5 text-white"><i class="lab la-facebook-f"></i></a></li>
                                    <li><a href="#" class="bg-6 text-white"><i class="lab la-twitter"></i></a></li>
                                    <li><a href="#" class="bg-7 text-white"><i class="lab la-instagram"></i></a></li>
                                    <li><a href="#" class="bg-5 text-white"><i class="lab la-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </form>
                    </div><!-- end contact-form-action -->
                </div>
            </div>
        </div>
    </div>
</div><!-- end modal-popup -->

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

<!-- Mirrored from techydevs.com/demos/themes/html/trizen-demo/trizen/payment-complete.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Jun 2022 21:15:38 GMT -->
</html>
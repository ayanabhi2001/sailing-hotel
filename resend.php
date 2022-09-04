<?php
session_start();
$arrival_date= rand(100000,999999);

$_SESSION['cotp'] = $arrival_date;

$name = $_SESSION['name'];
$email = $_SESSION['email'];
include("sendmail.php");
                
               
header("location:verify_otp.php?massage=2");











?>
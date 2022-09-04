<?php
session_start();





include "database/db.php";
 $bookid = $_REQUEST['booking_id'];
  
 $email = $_REQUEST['email'];
 $amount = $_REQUEST['amount'];
 $name = $_REQUEST['name'];


 include ("refund.php");

 $sqlDelete = "DELETE FROM cart WHERE cart_id = '{$bookid}'"; 
					
 $result=mysqli_query($conn,$sqlDelete)or die("Query Unsuccessfull!");

 

 header("location: http://localhost/sailinghotel/db-booking.php?massage=1");













?>
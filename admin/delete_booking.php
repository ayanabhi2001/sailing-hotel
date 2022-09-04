<?php
include "database/db.php";
$bookingid=$_GET['bookingid'];
$sql="DELETE FROM `cart` WHERE cart_id= {$bookingid}";
$result = mysqli_query($conn,$sql);
header("location: http://localhost/sailinghotel/admin/view_booking.php");
mysqli_colse($conn);
?>
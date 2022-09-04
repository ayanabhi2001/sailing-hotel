<?php
if (isset($_POST['updatebooking'])) {
   
   
   echo  $booking_id = $_POST['booking_id'];
    echo $room_number = $_POST['room_number'];
   echo  $name = $_POST['name'];
   echo  $email = $_POST['email'];
   echo  $room_type = $_POST['room_type'];
   echo  $phone = $_POST['phone'];
   echo  $arrival = $_POST['arrival_date'];
   echo  $depart = $_POST['depart_date'];
   echo  $noofadults= $_POST['noofadults'];
   echo  $noofchildrens= $_POST['noofchildrens'];




    include("database/db.php");
					
    $sql="UPDATE `bookings` SET room_number='{$room_number}',booking_name='{$name}',booking_email='{$email}',room_type='{$room_type}',booking_phone='{$phone}',arrival='{$arrival}',checkout='{$depart}',noofadults='{$noofadults}',noofchildren ='{$noofchildrens}' WHERE booking_id='{$booking_id}'";
    
    $result=mysqli_query($conn,$sql)or die("Query Unsuccessfull!");
     

    
    header("location: http://localhost/sailinghotel/admin/view_booking.php");
	mysqli_colse($conn);
   
   
   
   
    # code...
}



?>
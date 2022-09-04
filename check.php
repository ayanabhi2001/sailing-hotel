<?php
session_start();
include "database/db.php";
 $user_id = $_POST['user_id'];
 $check_in= $_POST['check_in'];
 $check_out= $_POST['check_out'];
 $adults = $_POST['adults'];
 $children = $_POST['children'];
 $room_id= $_POST['room_id'];

$startTimeStamp = strtotime("{$check_in}");                                   
$endTimeStamp = strtotime("{$check_out}");                                      

$timeDiff = abs($endTimeStamp - $startTimeStamp);                            

$numberDays = $timeDiff/86400;  // 86400 seconds in one day                  


$numberDays = intval($numberDays);                                           

      



 $total_price = $_POST['total_price'];

 $total_price = $total_price * $numberDays;
 

 $sql = "SELECT * FROM CART WHERE room_id='{$room_id}' AND check_in >='{$check_in}' AND check_out <= '{$check_out}'";

 $res = mysqli_query($conn,$sql);

 if (mysqli_num_rows($res)>0) {

    
    header("location:http://localhost/sailinghotel/room-details.php?id=$room_id&massage=1");
    
 }else{
      //  $query = "INSERT INTO `cart` (`check_in`, `check_out`,`adults`, `childrens`, `total_price`, `u_id`,`room_id`) VALUES ('$check_in', '$check_out','$adults', '$children', '$total_price', '$user_id', '$room_id');";
      //  $reult = mysqli_query($conn,$query);
       header("location:http://localhost/sailinghotel/check_out.php?roomid=$room_id&check_in=$check_in&check_out=$check_out&adults=$adults&childrens=$children&total_price=$total_price");

 }









?>







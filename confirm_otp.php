<?php 
    session_start();  
     $otp = $_POST['otp'];
     echo "<br>"; 
     echo $cotp = $_SESSION['cotp'];
     echo "<br>";
     
  echo   $name = $_SESSION['name'];    echo "<br>";
  echo   $email =$_SESSION['email'];    echo "<br>"; 
  echo   $phone= $_SESSION['phone'];    echo "<br>"; 
  echo   $country= $_SESSION['country']; echo "<br>";
  echo   $address=  $_SESSION['address']; echo "<br>";
  echo   $cardno =  $_SESSION['cardno']; echo "<br>";
         
  echo   $roomid = $_SESSION['roomid']; echo "<br>";
  echo   $check_in = $_SESSION['check_in']; echo "<br>";
  echo   $check_out = $_SESSION['check_out']; echo "<br>";
  echo   $adults=  $_SESSION['adults']; echo "<br>";
  echo   $childrens= $_SESSION['childrens']; echo "<br>";
  echo   $total_price= $_SESSION['total_price']; echo "<br>";

  echo   $u_id = $_SESSION['user']['uid'];


        if ($otp==$cotp) {
               include "database/db.php";
               $query = "INSERT INTO `cart` (`check_in`, `check_out`, `adults`, `childrens`, `total_price`, `u_id`, `room_id`, `booking_name`, `booking_email`,`country`, `cardno`, `phone`, `address`, `payment_status`) VALUES ('$check_in', '$check_out','$adults', '$childrens', '$total_price', '$u_id', '$roomid', '$name', '$email','$country', '$cardno', '$phone', '$address', '1');";
               $reult = mysqli_query($conn,$query);
            
            header("location:payment-received.php?roomid=$roomid&check_in=$check_in&check_out=$check_out&adults=$adults&total_price=$total_price&address=$address");

    
                } else{
                    header("location:http://localhost/sailinghotel/verify_otp.php?massage=1");
                }
  
        
    
    
?>
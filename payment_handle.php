<?php 
        
                        include("database/db.php");

                       



			echo	$name=$_POST['fname']." ".$_POST['lname'];
			echo	$email=$_POST['email'];
            echo    $phone=$_POST['phone'];
			echo	$country=$_POST['country'];
			
            echo   $address=$_POST['address'];
            // echo    $zipCode=$_POST['zipCode'];
            //echo    $type=$_POST['type'];
            echo    $cardno=$_POST['c_no'];
                
                       echo  $roomid = $_REQUEST['roomid'];
                        
                       echo  $check_in = $_REQUEST['check_in'];
                       echo  $check_out= $_REQUEST['check_out'];
                       echo  $adults = $_REQUEST['adults'];
                      echo   $childrens=$_REQUEST['childrens'];
                      echo   $total_price=$_REQUEST['total_price'];

            

            
        
            // echo $price = $_POST['amount'];

              $arrival_date= rand(100000,999999);
            // echo    $depurture_time=$_SESSION['departure_date'];
            
            if (isset($_POST['book'])) {
                session_start();
                
                $_SESSION['cotp'] = $arrival_date;
                $_SESSION['name'] = $name;
                $_SESSION['email'] = $email;
                $_SESSION['phone'] = $phone;
                $_SESSION['country'] = $country;
                $_SESSION['address'] = $address;
                $_SESSION['cardno'] = $arrival_date;
                $_SESSION['roomid'] = $roomid;
                $_SESSION['check_in'] = $check_in;
                $_SESSION['check_out'] = $check_out;
                $_SESSION['adults'] = $adults;
                $_SESSION['childrens'] = $childrens;
                $_SESSION['total_price'] = $total_price+5;

                  



                include("sendmail.php");
                
               
                header("location:verify_otp.php");

            } 

          
                 
           
            ?>
<!--                     
            	exit();
                    
					$sql="INSERT INTO `payment` (`name`, `email`, `amount`, `country`, `state`, `zipcode`, `cardno`, `phone`,`address`) VALUES ('$name', '$email', '$price', '$country', '$state', '$zipCode', '$cardno', '$phone','$address');";
					//exit();
                    
                    mysqli_query($conn,$sql); -->

                    
					

	
	
	
	
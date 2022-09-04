<?php 
           session_start();

			if(isset($_POST['update-profile']))
			{
                

			    $fname=$_POST['fname'];
				$lname=$_POST['lname'];
				$email=$_POST['email'];
				$phone=$_POST['phone'];
				$address=$_POST['address'];
                echo $uid=$_SESSION['user']['uid'];
               
                    include("database/db.php");
					
                    $sql="UPDATE `user` SET fname = '{$fname}',lname = '{$lname}',uemail='{$email}',uphone='{$phone}',uaddress='{$address}' WHERE uid='{$uid}'";
					
					$result=mysqli_query($conn,$sql)or die("Query Unsuccessfull!");
					
                     unset($_SESSION['user']);
                     session_destroy();
                 
                     header("location: http://localhost/sailinghotel/index.php");
                   
                }
					

            
	
	?>

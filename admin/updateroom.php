<?php 

			if(isset($_POST['update']))
			{

			    $roomnumber=$_POST['roomnumber'];
				$roomtype=$_POST['roomtype'];
				$acnonac=$_POST['acnonac'];
				$meal=$_POST['meal'];
				$charge=$_POST['charge'];
				$bedcapacity=$_POST['bedcapacity'];
				$telephone=$_POST['telephone'];
				$rent=$_POST['rent'];
				$roomdetails=$_POST['roomdetails'];
				$noofrooms = $_POST['noofrooms'];

                

                    include("database/db.php");
					
                    $sql="UPDATE `rooms` SET room_type = '{$roomtype}',price_per_night='{$rent}',max_persions='{$bedcapacity}',ac_nonac='{$acnonac}',meal='{$meal}',cancllecation_charge='{$charge}',telephone_number='{$telephone}',roomdetails='{$roomdetails}',no_of_rooms='{$noofrooms}' WHERE room_number='{$roomnumber}'";
					
					$result=mysqli_query($conn,$sql)or die("Query Unsuccessfull!");
					echo $result;

                    header("location: http://localhost/sailinghotel/admin/all_rooms.php");
					mysqli_colse($conn);
                   
                }
					

			

            
	
	?>

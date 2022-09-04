<?php 

			if(isset($_POST['ok']))
			{
                include("database/db.php");
				$roomnumber=$_POST['roomnumber'];
				$roomtype=$_POST['roomtype'];
				$acnonac=$_POST['acnonac'];
				$meal=$_POST['meal'];
				$charge=$_POST['charge'];
				$bedcapacity=$_POST['bedcapacity'];
				$telephone=$_POST['telephone'];
				$rent=$_POST['rent'];
				$roomdetails=$_POST['roomdetails'];
				

				
                $uploadDirectory = "room/";
	$validExtensions = array('jpg', 'jpeg', 'png', 'bmp');

	$message = $errorType = $errorSize = $errorImage = "";
	$img_ref = rand();
	$sqlValues = "";
	
	foreach ($_FILES['image']['tmp_name'] as $imageKey => $imageValue) {

		$image = $_FILES['image']['name'][$imageKey];
		$imageSize = $_FILES['image']['size'][$imageKey];
		$imageTmp = $_FILES['image']['tmp_name'][$imageKey];
		$imageType = pathinfo($uploadDirectory.$image, PATHINFO_EXTENSION);

		// Get Image New Name
		if ($image !== '') {

			$imageNewName = uniqid().".".$imageType;
		}
		else{
			$imageNewName = "";
			$errorImage .= "<span style='color:red;'>Image Required...!</span>";
		}

		if ($imageSize > 1024000) {
			
			$errorSize .= "<span style='color:red;'>Larg Image Size must be under 1 Mb...!</span>";
		}else if (!empty($image) && !in_array($imageType, $validExtensions)) {
			
			$errorType .= "<span style='color:red;'>File must be an Image...!</span>";
		}else if (empty($message)) {
			
			$sqlValues .= "('".$imageNewName."', '".$img_ref."'),";

			$store = move_uploaded_file($imageTmp, $uploadDirectory.$imageNewName); 
		}		
	}

	if (empty($_POST['roomnumber'])) {
		
		$message .= "<span style='color:red;'>Name Required...!</span>";
	}
	else if (!empty($errorType) || !empty($errorSize) || !empty($errorImage)) {
		
		$message .= $errorType . $errorSize . $errorImage;
	}
	else{
		$sqlIns = "INSERT INTO `rooms` (`room_number`, `room_type`, `price_per_night`,`max_persions`,`ac_nonac`, `meal`, `cancllecation_charge`, `telephone_number`, `photo`,`roomdetails`) VALUES ('$roomnumber', '$roomtype', '$rent','$bedcapacity','$acnonac', '$meal', '$charge', '$telephone', '".$img_ref."', '$roomdetails');";

		$sqlIns .= "INSERT INTO images (image, img_ref) VALUES $sqlValues";

		$sqlIns = rtrim($sqlIns, ",");

		$result = mysqli_multi_query($conn, $sqlIns);

		
		if ($result) {
			
			header("Location: http://localhost/sailinghotel/admin/all_rooms.php?message=success");
		}
		else{
			$message .= "<span style='color:red;'>Process Failed...!</span>";
			
		}
		//header("location: http://localhost/sailinghotel/admin/all_rooms.php");
		//mysqli_colse($conn);
		
	}
	
}

				
		
				
                
			// 	$sql="INSERT INTO `rooms` (`room_number`, `room_type`, `price_per_night`,`max_persions`,`ac_nonac`, `meal`, `cancllecation_charge`, `telephone_number`, `photo`,`roomdetails`) VALUES ('$roomnumber', '$roomtype', '$rent','$bedcapacity','$acnonac', '$meal', '$charge', '$telephone', '$images', '$roomdetails');";
			
					

			
		
	
	?>

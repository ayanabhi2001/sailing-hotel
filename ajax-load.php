<?php
include "database/db.php";

if (!empty($_POST["uemail"])) {
    # code...
    $email =  $_POST["uemail"];
    $emailquery = "SELECT * FROM user WHERE uemail = '$email'";
    $dupcheck =  mysqli_query($conn,$emailquery) ;

  $emailcount = mysqli_num_rows($dupcheck);

  if ($emailcount>0) {

  echo "<span style='color:red'>Email already exists.</span>";
  echo " <script>$('#submitxx').prop('disabled',true);</script> ";


  }else{
    
    echo " <script>$('#submitxx').prop('disabled',false);</script> ";
  }
}




  







?>

<?php
include "database/db.php";
$roomid=$_GET['roomid'];
$sql="DELETE FROM `rooms` WHERE room_number= {$roomid}";
$result = mysqli_query($conn,$sql);
header("location: http://localhost/sailinghotel/admin/all_rooms.php");
mysqli_colse($conn);
?>
<?php

$adults = $_POST['adults'];

$childrens = $_POST['childrens'];

$rooms = $_POST['rooms'];

 


$uid = $_POST['uid'];

include "database/db.php";
 $in = date("Y-m-d h:i:s", strtotime($_POST['from']));
 echo "<br><pre></pre>";
 $out = date("Y-m-d h:i:s", strtotime($_POST['to']));
 echo "<br><pre></pre>";

// SELECT *  FROM `cart` WHERE `check_in` >= '2022-06-10 00:00:00' AND `check_out` <= '2022-06-12 00:00:00'

// $q = "select * from rooms r inner join cart c on r.room_number = c.room_id where check_in >= '{$in}' AND check_out <= '{$out}' ";

 // $q = "SELECT * from cart WHERE check_in != '$in' and check_out != '$out' ";

// echo $q; exit;





// exit;
    
    echo $in;
    echo "<br>";
    echo $out;

			
     $sql ="SELECT * FROM rooms";
     $result = mysqli_query($conn,$sql);
     while($row=mysqli_fetch_assoc($result))
     {
        include "database/db.php";
        $a=$row['room_number'];

      

        $query = "SELECT sum(rooms) FROM `cart` WHERE `check_in` >= '{$in}' AND `check_out` <='{$out}' AND `room_id` ='{$a}'";

       $result2 = mysqli_query($conn,$query);
       
       
         while($rows = mysqli_fetch_array($result2))
           {
               
           $total = $rows['sum(rooms)'];
        
           }

           
        
           echo $total;
          
           
    //    $angavil = 2 - $inogbuwin;
    //      if($angavil>0){
    //      echo '<div class="product"><img src="img/products/'.$row['photo'].'" alt="'.htmlspecialchars($row['room_type']).'" width="128" height="128" class="pngfix" /></div>';
    //      }
     }

     






?>
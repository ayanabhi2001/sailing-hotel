<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Payment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>





         
    <div class="card text-center" style="width: 30rem; height: 20rem; margin:180px auto;
    ">
      <div class="card-header">
        <h4>Otp Verification</h4>
      </div>
      <div class="card-body">
        <br>
        <h5 class="card-title">Enter Your OTP</h5>
        <form  action="confirm_otp.php" method="post">
        
              <input class="form-control" style="width: 260px; margin: auto;" type="text" name="otp"> <br> <a href="resend.php">Resend</a> <br>
              
                <?php 
                if (isset($_GET['massage']) && $_GET['massage'] == "1") {
                     echo '<span style="color:red;" > INVALID OTP!! <br>Please enter again </span>';
                }elseif (isset($_GET['massage'])&& $_GET['massage'] == "2"){ 
                    
                  echo '<span style="color:green;" > Otp Re-generated successfully! </span>';

                }else {
                  echo '<span style="color:green;" > Otp generated successfully! </span>';
                }
                ?>
              
                  <br>
             <button class="btn btn-primary" type="submit" name="ok">SUBMIT</button>

            </form>
      </div>
      
    </div>













    











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>

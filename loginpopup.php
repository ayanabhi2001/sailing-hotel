


<!-- LOGIN SECTION -->












<div id="modal1" class="modal fade" role="dialog">
    <div class="log-in-pop">
        <div class="log-in-pop-left">
            <h1>Hello... <span>{{ name }}</span></h1>
            <p>Don't have an account? Create your account. It's take less then a minutes</p>
            <h4 style="opacity:0 ;">Login with social media</h4>
            <ul style="opacity:0 ;">
                <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a>
                </li>
                <li><a href="#"><i class="fa fa-google"></i> Google+</a>
                </li>
                <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a>
                </li>
            </ul>
        </div>
        <div class="log-in-pop-right">
            <a href="#" class="pop-close" data-dismiss="modal"><img src="images/cancel.png" alt="" />
            </a>
            <h4>Login</h4>
            <!-- <p>Don't have an account? Create your account. It's take less then a minutes</p> -->
            <form class="s12" method="post" action="" id="loginform">
                <div>
                    <div class="input-field s12">
                        <input type="email" data-ng-model="name" class="validate" name="uemail" id="u_email" required>
                        <label>Email</label>
                    </div>
                </div>
                <div>
                    <div class="input-field s12">
                        <input type="password" class="validate" name="upassword" id="u_pass" required>
                        <label>Password</label>
                    </div>
                </div>
                <div>
                    <div class="s12 log-ch-bx">
                        <p id="loginerror">
                            <!-- <input type="checkbox" id="test5" />
                            <label for="test5">Remember me</label> -->
                        </p>
                    </div>
                </div>
                <div>
                    <div class="input-field s4">
                        <input type="button" value="Login" class="waves-effect waves-light log-in-btn" name="login" onclick="login_check()">
                    </div>
                </div>
                <div>
                    <div class="input-field s12"> <a href="#" data-dismiss="modal" data-toggle="modal"
                            data-target="#modal3">Forgot password</a> | <a href="#" data-dismiss="modal"
                            data-toggle="modal" data-target="#modal2">Create a new account</a> </div>
                </div>
            </form>
            
            
        </div>
    </div>
</div>


<script>
    
function login_check() {
    
    var email = $("#u_email").val();
    var pass = $("#u_pass").val();

    jQuery.ajax({
		url : "login_ajax.php",
		data : "uemail="+email+"&upassword="+pass,
		type : "POST",
		success : function(data){
			$("#loginerror").html(data);
            $('#u_email').val('');
            $("#u_pass").val('');
            
		},
		error:function(){}
	});
}


</script>














<!-- REGISTER SECTION -->








<?php
//define variables and set to empty values
include "database/db.php";
$fname = $lname = $uemail = $upassword = $uaddress = $uphone = "";

if (isset($_POST['register'])) {
  $fname = test_input($_POST["fname"]);
  $lname = test_input($_POST["lname"]);
  $uemail = test_input($_POST["uemail"]);
  $upassword = test_input($_POST["upassword"]);
  $uaddress = test_input($_POST["uaddress"]);
  $uphone = test_input($_POST["phone"]);

  $upassword = password_hash($upassword, PASSWORD_BCRYPT);

  
	$sql = "INSERT INTO user (`fname`,`lname`, `uemail`, `upassword`, `uaddress`, `uphone`) VALUES ('$fname','$lname','$uemail','$upassword','$uaddress','$uphone');";
	mysqli_query($conn,$sql);
	if ($conn) {
		?>
		<script>swal({
  title: "Good job!",
  text: "Your Registration Is Successfull!",
  icon: "success",
  button: "Log In Now!",
});



</script>
		<?php
        
        include("sendmail_thankyou.php");
	}else{

	}
  }

  



function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
  }


?>
<script>

function checkemail() {
	
	jQuery.ajax({
		url : "ajax-load.php",
		data : 'uemail='+$("#uemail").val(),
		type : "POST",
		success : function(data){
			$("#check-email").html(data);
		},
		error:function(){}
	});
}

</script>

<div id="modal2" class="modal fade" role="dialog">
    <div class="log-in-pop">
        <div class="log-in-pop-left">
            <h1>Hello... <span>{{ name1 }}</span></h1>
            <p>Don't have an account? Create your account. It's take less then a minutes</p>
            <h4 ></h4>
            <ul style="opacity:0 ;" >
                <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a>
                </li>
                <li><a href="#"><i class="fa fa-google"></i> Google+</a>
                </li>
                <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a>
                </li>
            </ul>
        </div>
        <div class="log-in-pop-right">
            <a href="#" class="pop-close" data-dismiss="modal"><img src="images/cancel.png" alt="" />
            </a>
            <h4>Create an Account</h4>
            <!-- <p>Don't have an account? Create your account. It's take less then a minutes</p> -->
            <form class="s12" method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" name="myForm"
                onsubmit="return validedForm()">
                <div>
                    <div class="input-field s12" id="fname">
                        <input type="text" data-ng-model="name1" class="validate" pattern="[a-zA-Z'-'\s]*" title="Minimum 5 letters" name="fname" required>
                        <b><span class="formerror" style="color:red;"></span></b>
                        <label>First Name</label>
                    </div>
                </div>
                <div>
                    <div class="input-field s12" id="lname">
                        <input type="text" class="validate" name="lname" pattern="[a-zA-Z'-'\s]*" title="Minimum 2 letters" required>
                        <label>Last Name</label>
                        <b><span class="formerror" style="color:red;"></span></b>
                    </div>
                </div>
                <div>
                    <div class="input-field s12" id="phone">
                        <input type="number" class="validate" name="phone" required maxlength="10">
                        <label>Phone</label>
                        <b><span class="formerror" style="color:red;"></span></b>
                    </div>
                </div>
                <div>
				<div class="input-field s12" >
                        <input type="email" class="validate" name="uemail" id="uemail" oninput="checkEmail()" required>
                        <label>Email</label>
                        <b><span id="check-email"></span></b>
                    </div>
                </div>
                <div>
                    <div class="input-field s12" id="upassword">
                        <input type="password" class="validate" title="Atleast 1 uppercase 1 special character 1 number" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,12}$" name="upassword" required>
                        <label>Password</label>
                        <b><span class="formerror" style="color:red;"></span></b>
                    </div>
                    <p style="color:red;opacity: 0.3;">Ex. Atleast 1 uppercase 1 special character 1 number </p>
                </div>
                <div>
                    <div class="input-field s12" id="uaddress">
                        <input type="text" class="validate" pattern="^[#.0-9a-zA-Z\s,-]+$"  title="Please enter a valid address" name="uaddress" required>
                        <label>Address</label>
                        <b><span class="formerror" style="color:red;"></span></b>
                    </div>
                </div>

                <!-- <div>
							<div class="input-field s12">
								<input type="password" class="validate">
								<label>Confirm password</label>
							</div>
						</div> -->
                <div>
                    <div class="input-field s4">
                        <input type="submit" value="Register" class="waves-effect waves-light log-in-btn"
                            name="register" id="submitxx" >
                    </div>
                </div>
                <div>
                    <div class="input-field s12"> <a href="#" data-dismiss="modal" data-toggle="modal"
                            data-target="#modal1">Are you a already member ? Login</a> </div>
                </div>
            </form>
        </div>
    </div>
</div>





















<script>
function clearErrors() {
    errors = document.getElementsByClassName('formerror');
    for (let item of errors) {
        item.innerHTML = "";

    }
}

function seterror(id, error) {
    // set error inside tag of id
    element = document.getElementById(id);
    element.getElementsByClassName('formerror')[0].innerHTML = error;

}

function validedForm() {
    var returnval = true;
    clearErrors();

    // perform validation and if the validation fails, set value of returnval to false

    var phone = document.forms['myForm']["phone"].value;
    if (phone.length != 10) {
        seterror("phone", "*Phone number should be of 10 digits!");
        returnval = false;
    }
    var password = document.forms['myForm']["upassword"].value;
    if (password.length < 8) {
        seterror("upassword", "*Password should be alteast 8 characters long!");
        returnval = false;
		
    }
    

	return returnval;
}

function checkEmail() {
	
	jQuery.ajax({
		url : "ajax-load.php",
		data : 'uemail='+$("#uemail").val(),
		type : "POST",
		success : function(data){
			$("#check-email").html(data);
		},
		error:function(){}
	});
}

</script>




























<!-- FORGOT SECTION -->
<!-- <div id="modal3" class="modal fade" role="dialog">
			<div class="log-in-pop">
				<div class="log-in-pop-left">
					<h1>Hello... <span>{{ name3 }}</span></h1>
					<p>Don't have an account? Create your account. It's take less then a minutes</p>
					<h4>Login with social media</h4>
					<ul>
						<li><a href="#"><i class="fa fa-facebook"></i> Facebook</a>
						</li>
						<li><a href="#"><i class="fa fa-google"></i> Google+</a>
						</li>
						<li><a href="#"><i class="fa fa-twitter"></i> Twitter</a>
						</li>
					</ul>
				</div>
				<div class="log-in-pop-right">
					<a href="#" class="pop-close" data-dismiss="modal"><img src="images/cancel.png" alt="" />
					</a>
					<h4>Forgot password</h4>
					<p>Don't have an account? Create your account. It's take less then a minutes</p>
					<form class="s12">
						<div>
							<div class="input-field s12">
								<input type="text" data-ng-model="name3" class="validate">
								<label>User name or email id</label>
							</div>
						</div>
						<div>
							<div class="input-field s4">
								<input type="submit" value="Submit" class="waves-effect waves-light log-in-btn"> </div>
						</div>
						<div>
							<div class="input-field s12"> <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal1">Are you a already member ? Login</a> | <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal2">Create a new account</a> </div>
						</div>
					</form>
				</div>
			</div>
		</div> -->
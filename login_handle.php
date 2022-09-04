<?php
			         include "database/db.php";
					if(isset($_POST['login']))
					{
						    
						    $uemail = $_POST['uemail'];
							$upassword = $_POST['upassword'];

							$email_search = "SELECT * FROM user WHERE uemail = '$uemail'";

							$query = mysqli_query($conn,$email_search);

							$email_count = mysqli_num_rows($query);
                            
							if ($email_count) {
								
								$email_pass = mysqli_fetch_assoc($query);

								$db_pass = $email_pass['upassword'];

								$pass_decode = password_verify($upassword,$db_pass);

								if ($pass_decode) {
									echo "Login Successfull!!";
									$_SESSION['user'] = $email_pass;
									?>
									<script>
									location.replace("index.php");
                                   
									
									</script>
									<?php
                                    
								}else{
                                    
									
                                  echo '  <div class="alert alert-danger" role="alert">
  This is a danger alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
</div>';
								}
							}else{
								?>
									<script>
									alert("Wrong Email");
									
									</script>
									<?php
							}
							
							
							
					} ?>

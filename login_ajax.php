<?php
session_start();
			         include "database/db.php";
				
						    
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
									
									$_SESSION['user'] = $email_pass;
									?>
									<script>
										var value = "index.php?login=1";
									window.location.replace(value);
									</script>

                                    <?php
									
								}else{
									
                                  echo '<div class="alert alert-danger" role="alert">
								  Incorrect Password!!
								</div>';
								}
							}else{
								
									echo '<div class="alert alert-danger" role="alert">
									Incorrect Email Id!!
								  </div>';
							}
							
							
							
				 ?>
<?php session_start();  ?>
<?php include('header.php'); ?>





	<!-- this is for donor registraton -->
	<div class="login" style="background-color:#fff;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;">Patient Login</h3>
			<div class="formstyle" style="float: right;padding:20px;border: 1px solid lightgrey;margin-right:415px; margin-bottom:30px;background-color:#f3f3f8;color:#141313;">
				<form action="" method="post" class="text-center form-group">
					<label>
						 <input type="email" name="email"  placeholder="email" required>
					</label><br><br>
					<label>
						 <input type="password" name="password"  placeholder="password" required>
					</label><br><br>
					<button name="submit" type="submit" style="margin-left: -26px;width: 85px;border-radius: 3px;">Login</button> <br>

					<span style="color:#000;">Not a member yet?</span> <a href="patient_regi.php" title="create a account" target="" style="color:#000;">&nbsp;Sign Up</a> <br>


					<!-- login validation -->
			<?php 
					$_SESSION['patient']="";
							
							include('config.php');
							if(isset($_POST["submit"])){


							$sql= "SELECT * FROM patient WHERE email= '" . $_POST["email"]."' AND password= '" . $_POST["password"]."'";

							$result = $conn->query($sql);

									if ($result->num_rows > 0) {
											$_SESSION["email"]= $_POST["email"];
											
											$_SESSION['patient']= "yes";
										    echo "<script>location.replace('patient/dashboard.php');</script>";
												// echo "u are supposed to redirect to ur profile";
										} else {
										    echo "<span style='color:red;'>Invalid username or password</span>";
										}
						$conn->close();		
					}
					
 			?>
		<!-- login validation End-->


				</form> <br>&nbsp;&nbsp;&nbsp;
				
				<br>

				
		
				
			
		
	</div>
	
	
</div>
	
 <?php include('footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


 
			



	
</body>
</html>


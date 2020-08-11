<?php include('header.php'); ?>





	<!-- this is for donor registraton -->
	<div class="login" style="background-color:#fff;">
		<h1 class="text-center" style="background-color:#0616BC;color: #fff;padding: 5px;">User Login</h1>
		
		<form action="" method="post" class="">
			<div class="col-md-12">
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<label>
							Email: <input type="email" name="email"  placeholder="email" required>
					</label><br><br>
					<label>
							Password: <input type="password" name="password"  placeholder="password" required>
					</label><br><br>
					
					<!-- <button name="submit" type="submit">Login</button> <br> -->
					
						<input type="submit" value="Login" name="submit">
					
					<!-- login validation -->
			<?php 
		
				// $_SESSION['userstatus']="";

							include('config.php');
							if(isset($_POST["submit"])){
							$sql= "SELECT * FROM donarregistration WHERE email= '" . $_POST["email"]."' AND password= '" . $_POST["password"]."'";

							$result = $conn->query($sql);

									if ($result->num_rows > 0) {
											// $_SESSION["email"]= $_POST["email"];
											// $_SESSION['userstatus']= "yes";
										    echo "<script>location.replace('donor/index.php');</script>";
												// echo "u are supposed to redirect to ur profile";
										} else {
										    echo "<span style='color:red;'>Invalid username or password</span>";
										}
						$conn->close();		
					}
					
 			?>
			<!-- login validation End-->
			
			
		</form><br><br>
			

					Not A User?<a href="allregistration.php" style="color:#C30">Click here</a> to Register.



			

				</div>
				<div class="col-md-4"></div>
			</div> <!-- col-md-12 -->
			
		
	</div>
	
	

	
 <?php include('footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


 
			



	
</body>
</html>

<?php if(!isset($_SESSION)){
	session_start();
	}  
?>
<?php include('header.php'); ?>
<?php include('uptomenu.php'); ?>

<!-- for retriving data -->
				<?php 
							include('../config.php');
							$sql="SELECT * FROM patient where email='" . $_SESSION["email"] . "'";
			
							$q=mysqli_query($conn,$sql);
							$row=mysqli_num_rows($q);
							
							$data=mysqli_fetch_array($q);
							$name=$data[1];
							$age=$data[2];
							$contact=$data[3];
							$address=$data[4];
							$bgroup=$data[5];
							$email=$data[6];

							mysqli_close($conn);
				?>
<!-- for retriving data -->

<div class="login" style="background-color:#fff;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;">My Details</h3>
			<div class="formstyle" style="float: right;padding:20px;border: 1px solid lightgrey;margin-right:415px; margin-bottom:30px;background-color:#f3f3f8;color:#141313;">
				<form action="" method="post" class="text-center form-group">
					<label>
						Your Name: <input type="text" name="name" value="<?php echo $name; ?>" placeholder="Full name" required>
					</label><br><br>

					<label>
						Age: <input type="number" name="age"  value="<?php echo $age; ?>" placeholder="age" required="required" pattern="[0-9]{2,2}" title="please enter only  numbers between 2 to 2 for age"/>
					</label><br><br>
					<label>
						Mobile: <input type="text" name="contact" value="<?php echo $contact; ?>" placeholder="contact no" required="required" pattern="[0-9]{10,11}" title="please enter only numbers between 10 to 11 for mobile no."/>
					</label><br><br>
 					
 					<label>
						Address: <input type="text" name="address" value="<?php echo $address; ?>" placeholder="address" required>
					</label><br><br>
					

				     <label>
						Email: <input type="email" name="email" value="<?php echo $email; ?>" placeholder="email" required>
					</label><br><br>
					
					
					
					<button name="submit" type="submit" style="margin-left:43px;width:108px;border-radius: 3px;">UpdateProfile</button> <br>


			</form> <br>
				
				<br>

				
		
				
			
		
	</div>
	
	
</div>
<br><br><br>

			<!-- update information -->

				<?php
							include('config.php');
							if(isset($_POST['submit'])){
							

							$sql="UPDATE patient SET name='" .$_POST["name"]. "' ,age='" .$_POST["age"]."' , contact='" .$_POST["contact"]. "',address='" .$_POST["address"]. "', email='".$_POST["email"]."' WHERE email='" .$_SESSION["email"]. "'";
		
							if (mysqli_query($conn, $sql)) {
						    echo "<script>alert(' Record updated successfully');</script>";
							} else {
							    echo "<script>alert('There was a Error Updating profile');</script>";
							}

						mysqli_close($conn);
													}
					?> 
			<!-- update information End -->


 <?php include('footer.php'); ?>


</body>
</html>

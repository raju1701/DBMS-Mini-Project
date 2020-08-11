<?php if(!isset($_SESSION)){
	session_start();
	}  
?>
<?php include('header.php'); ?>
<?php include('uptomenu.php'); ?>

<!-- <?php include('function.php'); ?> -->



	<!-- this is for donor registraton -->
	<div class="search" style="background-color:;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;padding: 5px;">Search Here</h3>

		 <div class="formstyle" style="padding:70px;border: 1px solid lightgrey;margin-right: 293px;margin-bottom: 30px;background-color:#f3f3f8;color:#141313;width: 530px;margin-left: 400px;">
					<form action="search_result.php" method="post" class="form-group">

					<!-- testing -->
					<label>
						Search By:<select name="address" type="text" style="width: 110px;margin-right: 175px;" />
												<option>-Select-</option>
												
											    <option>Fortis Hospital, Bannerugatta Road</option>
												<option>Manipal Hospital, HAL Airport Road</option>
												<option>Columbia Asia Referral Hospital, Yeshwanthpur</option>
												<option>Aster CMI, Hebbal</option>
												<option>Apollo Hospital, Jayanagar</option>
												<option>Fortis Hospital, Cunningham Road</option>
												<option>Columbia Asia, Whitefield</option>
												<option>Manipal Hospital, Whitefield</option>
												<option>Hosmat Hospital, Magrath Road</option>
												<option>Columbia Asia, Hebbal</option>
												
											</select>

					</label><br><br>
					<!-- testing end-->

					<label>
						 Category:<select name="expertise" type="text" style="width: 110px;margin-right: 175px;" />
												<option>-Select-</option>
												<option>Medicine</option>
												<option>Heart</option>
												<option>Bone</option>
												<option>Neurologist</option>
												<option>kedney</option>
												<option>Cardiologist</option>
												<option>Plastic Surgeon</option>
												<option>General Physician</option>
											</select>

					</label>
					<button name="submit" type="submit" style="border-radius: 3px;color:#000;margin-left: 145px;margin-top: 8px;">Search</button>
					<br>
					
					</form>



					
		 	</div>
	</div>
	
	

	
 <?php include('../footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>




</body>
</html>
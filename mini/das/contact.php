<?php include('header.php'); ?>

<?php include('Admin/function.php'); ?>



	<!-- this is for donor registraton -->
	<div class="contact"  style="background-color: #7faf81;">
		<h1 class="text-center">Contact us</h1>
		<form  enctype="multipart/form-data" method="post" class="text-center">
			
			 Name:<input type="text" name="t1"  required="required" pattern="[a-zA-Z _]{2,15}" title="please enter only character  between 2 to 15 for donor name" />  <br>

			 E-Mail</td><td><input type="email" name="t2" required="required" /> <br>

			Mobile No</td><td><input type="number" name="t3"   pattern="[0-9]{10,12}" title="please enter only numbers between 10 to 12 for mobile no." /> <br>

			Subject</td><td><textarea name="t4"></textarea> <br>

			<input type="submit" value="Send Us" name="sbmt">
		</form>
	</div>
	
	

	
 <?php include('footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


 


	<?php include('regivalidate.php'); ?>

	<?php
		if(isset($_POST["sbmt"])) 
		{
			
			$cn=makeconnection();			

					$s="insert into contacts(name,email,mobile,subj) values('" . $_POST["t1"] ."','" . $_POST["t2"] . "','" . $_POST["t3"] . "','" . $_POST["t4"]   ."')";
					
					
			$q=mysqli_query($cn,$s);
			mysqli_close($cn);
			if($q>0)
			{
			echo "<script>alert('Record Save');</script>";
			}
			else
			{echo "<script>alert('Saving Record Failed');</script>";
			}
				
				}	
			

		?> 
</body>
</html>
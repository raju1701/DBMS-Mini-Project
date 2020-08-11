<?php if(!isset($_SESSION)){
	session_start();
	}  
?>
<?php include('header.php'); ?>





	<!-- this is for donor registraton -->
	<div class="search" style="background-color:;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;padding: 5px;">Customer Details</h3>

			<div class="formstyle" class="formstyle" style="padding: 10px;border: 1px solid lightgrey;margin-right: 376px;margin-left: 406px; margin-bottom: 25px;background-color:#f3f3f8;color:#141313;">

					<form action="" method="post" class="form-group">

					<!-- testing -->
					<label>
						<input type="text" name="search"  placeholder="Booking ID/phone/email" required style="margin-right: 140px;">
					</label><br><br>

					<button name="submit" type="submit" style="float: right;margin-right:66px;margin-top: -38px;border-radius: 3px;padding: 4px">Search</button> <br>
					
					</form>

		 	</div>
	</div>
			<?php 
					include('../config.php');
					if(isset($_POST["submit"])){

					$sql = " SELECT * FROM patient WHERE contact = '" . $_POST["search"]."' OR email = '" . $_POST["search"]."' ";
					$result = mysqli_query($conn,$sql);
					$count = mysqli_num_rows($result);

					if($count>=1){
						echo "<table border='1' align='center' cellpadding='32'>
							<tr>
								<th>Name</th>
								<th>Age</th>
								<th>Contact</th>
								<th>Address</th>
								<th>Blood Group</th>
								<th>Email</th>
							</tr>";
						while($row=mysqli_fetch_array($result)){
								echo "<tr>";
								echo "<td>".$row['name']."</td>";
								echo "<td>".$row['age']."</td>";
								
								echo "<td>".$row['contact']."</td>";
								echo "<td>".$row['address']."</td>";
								
								echo "<td>".$row['bgroup']."</td>";
								echo "<td>".$row['email']."</td>";
								echo "</tr>";
						}
						echo "</table>";
					}
					else{
						print "<p align='center'>Sorry, No match found for your search result..!!!</p>";
					}
				}	

			?>
	

	
 <?php include('../footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


 
 	 	 

<<!-- ?php 
	if(isset($_POST["sbmt"])){
		//header("location:result.php?bg=".$_POST["s2"]);
		echo "<script>location.replace('result.php?bg=". $_POST["s2"] ."');</script>";
	}

?>
 -->

</body>
</html>
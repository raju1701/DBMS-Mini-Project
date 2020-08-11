<?php include('header.php'); ?> <br>





	<!-- this is for donor registraton -->
	<div class="donor_reg"  style="background-color: #7faf81;"> <br>
		
		<form method="post" enctype="multipart/form-data"> <br>
	   <table cellpadding="20" cellspacing="20" width="1000px" height=""  style="margin:auto;background-color:#f9f9f9;color:#151314;" >

	  		 <tr><td colspan="9" align="center"><h1 class="text-center"><u>Who has requested for Blood</u></h1></td></tr>
			 

	  		<tr style="background-color:bisque" align="center" class="bold">            
	            <th align="center">Name</th>
	            <td align="center">Gender</td>
	            <th align="center">Age</th>
	            <td align="center">Mobile</td>
	            <th align="center">BloodGroup</th>
	            <td align="center">Email</td>
	            <th align="center">Till Required Date</th>
	            <td align="center">Details</td>
	        </tr>
	                   

	<?php

	$cn=mysqli_connect("localhost","root","","projectmms");
		$s="select * from requestes";
			$result=mysqli_query($cn,$s);
			$r=mysqli_num_rows($result);
			//echo $r;
			while($data=mysqli_fetch_array($result)){

						echo"<tr>
								
								<td>$data[1]</td>
								<td>$data[2]</td>
								<td>$data[3]</td>
								<td>$data[4]</td>
								<td>$data[5]</td>
								<td>$data[6]</td>
								<td>$data[7]</td>
								<td>$data[8]</td>
							</tr>";
					}
					mysqli_close($cn);
	?>


		</table> <br>
	</form>
	</div>
	
	

	
 <?php include('footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


	 
</body>
</html>
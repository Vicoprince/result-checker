<?php 
	session_start();
		if(isset($_SESSION['sid'])){
			echo "";
		}

		else{
			header('location:../studentlogin.php');
		}

	include('../assets/studentheader.php');
 ?>

<div class="content" style="text-align: left;">

	<form action="updateinfo.php" method="post">

		<?php 

 			include("../dbcon.php");

 			$id = $_SESSION['sid'];

 			$qry = "SELECT * FROM `student2` WHERE `roll_no` = '$id'";
 			$run = mysqli_query($con,$qry);
 			while($data = $run->fetch_assoc()){
 				?>

		<table style="margin-top: 20px;  color: #800000;" cellpadding="5px">


			<tr>
				<td colspan="4"><img src="../dataimg/<?php echo $data['image'];?>" style="max-width: 150px" /><br><br>
				</td>
			</tr>

			<tr>
			<td  colspan="4"><input type="file" name="image"></td>
			</tr>

			<tr>
				<th>Registration No.</th>
				<td><?php echo $data['roll_no']; ?></td>
				<th>Name</th>
				<td><?php echo $data['fname']." ".$data['lname']; ?></td>
			</tr>

			<tr>
				<th>Date OF Birth</th>
				<td><?php echo $data['dob']; ?></td>
				<th>Gender</th>
				<td><?php echo $data['gender']; ?></td>
			</tr>
			<tr>
				<th>Program</th>
				<td><?php echo $data['program']; ?></td>
			</tr>
		</table>



		<table style="color: #800000;" cellpadding="7px">

			<tr>
				<th>Mobile</th>
				<td><input type="text" name="mobile" value="<?php echo $data['mobile']; ?>"></td>
			 </tr>
			 <tr>
				<th>Email</th>
				<td><input type="email" name="email" value="<?php echo $data['email']; ?>"></td>
			</tr>


			<tr>
				<td colspan="4">
					<center><br><input type="submit" name="submit" value="Save"
					style="margin-top: 10px; padding: 4px 30px;"></center>
				</td>
			</tr>

		</table>


		<?php

 				
 				
 			}
?>




	</form>

</div>



<body>
	<html>
	<?php
  if (isset($_POST['submit'])) {
 				$id= $_SESSION['sid'];
				$newemail = $_POST['email'];
				$newmobile = $_POST['mobile'];
				$newimage = $_POST['image'];
				
				$imgname = $_FILES['image']['name'];
				$tempname = $_FILES['image']['tmp_name'];


				move_uploaded_file($tempname, "dataimg/$imgname");
			

				$qry = "UPDATE student2 SET email = '$newemail', mobile = '$newmobile', `image` = '$newimage' WHERE roll_no='$id'";
				$run = mysqli_query($con,$qry);
				
					echo "";
				
				
 			}

 			
 		 ?>
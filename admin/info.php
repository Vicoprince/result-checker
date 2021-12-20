<?php 

	session_start();
// echo($_SESSION['uid']);exit();


	if(isset($_SESSION['uid'])){
		echo "";
	}

	else{
		header('location:../adminlogin.php');
	}

	include('../assets/adminheader.php');

 ?>

<div class="content" style="text-align: left;">
	<div class="upper">

		<?php 
	
	if(isset($_REQUEST['id'])){

		$id = $_REQUEST['id'];
	} 
?>


		<?php
	include("../dbcon.php");

  	$qry = "SELECT * FROM `student2` WHERE `roll_no` = '$id'";

		$run = mysqli_query($con,$qry);

		if(mysqli_num_rows($run)<1){
			echo "<tr><td colspan = 8>No Record Found<td><tr>";
		}
		else{
			$count = 0;
			while($data = $run->fetch_assoc()){
				$count++;
				?>

		<table style="margin-top: 20px; margin-left: 80px;" cellpadding="7px">


			<tr>
				<td colspan="2"><img src="../dataimg/<?php echo $data['image'];?>"
						style="max-width: 150px; margin-top: 30px;" /><br><br></td>
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
				<th>Email</th>
				<td><?php echo $data['email']; ?></td>
			</tr>

			<tr>
				<th>Mobile</th>
				<td><?php echo $data['mobile']; ?></td>
				<th>Gender</th>
				<td><?php echo $data['gender']; ?></td>
			</tr>
			<tr>
				<th>Program</th>
				<td><?php echo $data['program']; ?></td>
			</tr>

		</table>
		<?php
			}
		}
?>


<!-- Upload of result test -->




<form action="fileprocess.php" method="Post" enctype="multipart/form-data">
 	<input type="file" name="file">
 	<input type="submit" name="Submit" value="Upload">
 </form>

<?php 
	$Submit = "";

	$files = scandir("../Uploads");

	for ($a=2; $a < count($files) ; $a++) { 
		
		?>
		<!-- <p>
			<a download="<?php echo $files[$a] ?>" href="Uploads/<?php echo $files[$a] ?>"><?php echo $files[$a] ?></a>
		</p> -->
		<?php
	}

	// if(isset(["Submit"])){

		

	// }

 ?>



<!-- Quit -->
	</div>

	<br /><br />
		<table align="center" class="table table-bordered" id="show_course">
			<thead class="alert-info">
				<tr bgcolor="#31708f" height="40px">
					<th>Course_Title</th>
					<th>Course_Code</th>
					<th>Course_Unit</th>
				</tr>
			</thead>
			<tbody>
				<?php
					include_once("../dbcon.php");
				

					$query = mysqli_query($con, "SELECT * FROM `data`where `sid` = $id") or die(mysqli_error());
					while($fetch = mysqli_fetch_array($query)){
					
				?>
				<tr>
					<td><?php echo $fetch['course_title']?></td>
					<td align="center"><?php echo $fetch['co_code']?></td>
					<td align="center"><?php echo $fetch['subject_unit']?></td>
					</tr>
				<?php
					}
				?>
			</tbody>
		</table>
</div>
</body>
</html>
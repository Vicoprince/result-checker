<?php

	include('../assets/adminheader.php');

	if (isset($_POST['submit'])){
		echo "<script> alert ('File uploded successfully!)'</script>";
	}


?>

 <form action="fileprocess.php" method="Post" enctype="multipart/form-data" style="margin-left: 40px">
 <h1></h1>
 	<input type="file" name="file" required>
 	<input type="submit" value="Upload">
 </form>

<?php 



	$files = scandir("../Uploads");

	for ($a=2; $a < count($files) ; $a++) { 
		
		?>
		<!-- <p>
			<a download="<?php echo $files[$a] ?>" href="Uploads/<?php echo $files[$a] ?>"><?php echo $files[$a] ?></a>
		</p> -->
		<?php
	}

 ?>
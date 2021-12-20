<?php 


	$file = $_FILES["file"];

	move_uploaded_file($file["tmp_name"], "../Uploads/" . $file["name"]);

	header("Location: Upload.php");


 ?>
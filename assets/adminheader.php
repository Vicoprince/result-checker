<!DOCTYPE html>
<head>
<title>Admin Dashboard</title>
<style>
* {
  box-sizing: border-box;
  font-family: Arial, Helvetica, sans-serif;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #800000;
}

/* Style the topnav links */
.topnav a {
  float: right;
  display: block; 
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 20px;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #333;
  color: #fff;

}

.topnav span{
  display: inline-block;
  color: #fff;
  font-size: 20px;
  font-weight: 600;
  padding: 12px 16px;

}

.sidenav {
  height: 100%;
  width: 250px;
  position: fixed;
  background-color: #111;
  overflow-x: hidden;
}

/* Side navigation links */
.sidenav a {
  color: white;
  padding: 16px;
  text-decoration: none;
  display: block;
  border-bottom: 1px solid #fff;
}

.sidenav a:hover {
  background-color:#800000;
  color: #fff;
}

/* Style the content */
.content {
  margin-top:0; 
  margin-left: 250px;
  padding-left: 20px;
  height: 80vh; 
}

.upper{
  margin-left: 60px;
  margin-top: 30px;
}

#show_course{
  width: 80%;
  
}

table{
  align: center;
}

thead {
  color: white;
  
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 10px 8px 10px 32px;
  text-decoration: none;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}



</style> 
		<!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
</head>
<body>


<div class="topnav">
  <span class="logo">Admin Dashboard</a></span>
  <a href="../admin/logout.php">Logout</a>
  <a href="../admin/changepass.php">Edit Profile</a>
</div>


<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="admindash.php">View Student Records</a>
  <a href="add-course.php">Add Courses</a>
  <a href="Upload.php">Upload Result</a>
</div>

<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
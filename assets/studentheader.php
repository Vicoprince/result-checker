<!DOCTYPE html>
<head>
<title>Student Dashboard</title>

<style>
* {
  box-sizing: border-box;
  font-family: Arial, Helvetica, sans-serif;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  overflow-y: hidden;
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
  border-top: 1px solid #fff;
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
  height: 80vh; /*Should be removed. Only for demonstration*/
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
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
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
</head>
<body>


<div class="topnav">
  <span class="logo">Student Dashboard</a></span>
  <a href="../Student/logout.php">Logout</a>
  <a href="../Student/editprofile.php">Change Password</a>
</div>


<div id="mySidenav" class="sidenav">
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="studentdash.php">View Profile</a>
  <a href="updateinfo.php">Update Profile</a>
  <a href="course_add.php">My Course</a>
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
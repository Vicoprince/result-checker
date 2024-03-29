<!DOCTYPE html>
<head>
<title>Student Information System</title>
<style>
* {
  box-sizing: border-box;
  font-family: Arial, Helvetica, sans-serif;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-color: #999;
  background-image: url("images/bg.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  overflow-y: hidden;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: right;
  display: inline-block; 
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 20px;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #800000;
  color: #fff;
}

.topnav span{
  display: inline-block;
  color: #fff;
  font-size: 20px;
  font-weight: 600;
  padding: 12px 16px;

}

/* Style the content */
.content {
 text-align: center;
  height: 100vh; /* Should be removed. Only for demonstration */
}
h1{
  color: #fff;
  font-size: 50px;
  margin-top: 100px;
}

.reg-btn {
  text-decoration: none;
  color: #fff;
  font-size: 20px;
}
button{
  padding: 8px 25px;
  background-color: #800000;
  border: none;
  border-radius: 10%;
  margin-top: 100px;
}
</style>
</head>
<body>


<div class="topnav">
  <span class="logo">Student Management</span>
  <a href="signup2.php">Signup</a>
  <a href="adminlogin.php">Admin</a>
  <a href="studentlogin.php">Student</a>
</div>


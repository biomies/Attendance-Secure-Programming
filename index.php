<?php
session_start();
//$error_msg = $_SESSION['error'];
?>

<!DOCTYPE html>
<html>
<head>

	<title>Attendance Management System</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	 
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
	 
	<link rel="stylesheet" href="styles.css" >
	 
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>
	<center>

<header>

  <h1>Attendance Management System</h1>

</header>

<h3>Login Panel</h3>

<?php

//printing error message
if(isset($_SESSION['error']))
{
	echo $_SESSION['error'];
}
unset($_SESSION['error']);
?>

<!-- Old Version -->
<!-- 
<form action="" method="post">
	
	<table>
		<tr>
			<td>Username </td>
			<td><input type="text" name="username"></input></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password"></input></td>
		</tr>
		<tr>
			<td>Role</td>
			<td>
			<select name="type">
				<option name="teacher" value="teacher">Teacher</option>
				<option name="student" value="student">Student</option>
				<option name="admin" value="admin">Admin</option>
			</select>
			</td>
		</tr>
		<tr><td><br></td></tr>
		<tr>
			<td><button><input type="submit" name="login" value="Login"></input></button></td>
			<td><button><input type="reset" name="reset" value="Reset"></button></td>
		</tr>
	</table>
</form>
-->

<div class="content">
	<div class="row">

		<form action="Controller/loginCo.php" method="post" class="form-horizontal col-md-6 col-md-offset-3">
			<div class="form-group">
			    <label for="input1" class="col-sm-3 control-label">Username</label>
			    <div class="col-sm-7">
			      <input type="text" name="username"  class="form-control" id="input1" placeholder="Your Username" />
			    </div>
			</div>

			<div class="form-group">
			    <label for="input1" class="col-sm-3 control-label">Password</label>
			    <div class="col-sm-7">
			      <input type="password" name="password"  class="form-control" id="input1" placeholder="Your Password" />
			    </div>
			</div>


			<div class="form-group" class="radio">
			<label for="input1" class="col-sm-3 control-label">Login As:</label>
			<div class="col-sm-6">
			  <label>
			    <input type="radio" name="type" id="optionsRadios1" value="student" checked> Student
			  </label>
			  	  <label>
			    <input type="radio" name="type" id="optionsRadios1" value="teacher"> Teacher
			  </label>
			  <label>
			    <input type="radio" name="type" id="optionsRadios1" value="admin"> Admin
			  </label>
			</div>
			</div>


			<input type="submit" class="btn btn-success col-md-3 col-md-offset-7" style="border-radius:0%" value="Login" name="login" />
		</form>
	</div>
</div>

<p><strong><a href="signup.php" style="text-decoration:none;">Create New Account</a></strong></p>

</center>
</body>
</html>
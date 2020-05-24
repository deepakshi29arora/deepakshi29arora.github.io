<?php
session_start();
include 'connect.php';

if(isset($_POST['submit'])){
	$email=$_POST['email'];
	$password=$_POST['password'];
	$check=$conn->query("SELECT * FROM regg WHERE email='$email' &&  password='$password'");
	$checkk=mysqli_fetch_array($check);
	if($checkk){
		$_SESSION['user']=$email;
	    header('location:landing.php');
}else{
	echo "<script>alert('WRONG id password');
	window.location.href='userlog.php';</script>";
}
}


?>
<!DOCTYPE html>
<html>
<head>
<title>form</title>
<link rel="stylesheet" href="css/bootstrap.css"/>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<script src="js/bootstrap.js"></script>
<script src="js/jquery-1.11.0.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="angular.min.js"></script>
</head>
<body>
	<body style="background-image:url('2.jpg'); height: 720px; color: #688aed;background-size: 100% 100%;">
<div class="col-lg-4 col-lg-offset-4 a" ng-app="" style="border: 1px solid white;;margin-top:100px;background-color: white;border: 3px solid #688aed;border-radius: 50px;margin-top: 150px; padding: 10px;">
	<center><h1>LOGIN</h1></center>
		<form name="myForm" action="" method="post">
			<div class="form-group">
				<label>Email</label>
				<input type="email" name="email" ng-model="email" required class="form-control">
				<div class="alert alert-danger" ng-show="myForm.email.$touched && myForm.email.$invalid">
					<span ng-show="myForm.email.$error.required">Email is required.</span>
					<span ng-show="myForm.email.$error.email">Invalid email address.</span>
				</div>
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" ng-model="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" class="form-control">
				<div class="alert alert-danger" ng-show="myForm.pattern.$touched && myForm.pattern.$invalid">
					<span ng-show="myForm.password.$error.required">Password is required.</span>
					<span ng-show="myForm.password.$error.pattern">Invalid Password.</span>
				</div>
			</div>
			<center>
			<a href="index.php" class="btn btn-primary">Home</a>
			<input type="submit" name="submit" class="btn btn-primary" ng-disabled="myForm.user.$dirty && myForm.user.$invalid || myForm.email.$dirty && myForm.email.$invalid || myForm.password.$dirty && myForm.password.$invalid">
			<a href="usereg.php" class="btn btn-primary">Signup</a>
			</center>
		</form>
</div>

</body>
</html>
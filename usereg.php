<?php
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
	<body style="/*background:linear-gradient(to left top ,#ff99ff,#4e004d,#ff3385,#262626);*/ height: 720px; color: #688aed;background-image: url('im/1.jpg');background-repeat: no-repeat;background-size: 100% 100%;">
<div class="col-lg-4 col-lg-offset-4 a" ng-app="" style="border: 3px solid #688aed;;margin-top:150px;background-color:white;border-radius:50px; padding: 10px;">
	<center><h1>SIGNUP</h1></center>
		<form name="myForm" action="regi.php" method="post">
			<div class="form-group">
				<label>Username</label>
			<input type="text" name="username" ng-model="username" required class="form-control" pattern="^[A-Za-z ]+">
				<div class="alert alert-danger" ng-show="myForm.user.$touched && myForm.user.$invalid">
					<span ng-show="myForm.user.$error.required">Username is required.</span>
					<span ng-show="myForm.user.$error.pattern">Alphabet is required.</span>
				</div>
			</div>
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
			<div class="form-group">
			</div>
			<center>
			<a href="index.php" class="btn btn-primary">Home</a>
			<input type="submit" name="submit" class="btn btn-primary" ng-disabled="myForm.user.$dirty && myForm.user.$invalid || myForm.email.$dirty && myForm.email.$invalid || myForm.password.$dirty && myForm.password.$invalid">
			<a href="userlog.php" class="btn btn-primary">Login</a>
		</center>
		</form>
</div>

</body>
</html>
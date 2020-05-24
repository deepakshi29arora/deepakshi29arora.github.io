<?php
include 'connect.php';
if(isset($_POST['submit'])){
$name=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$contact=$_POST['contact'];
$ins=$conn->query("INSERT INTO regg (name,email,password,contact) VALUES('$name','$email','$password','$contact')");
if($ins){
	echo "<script>alert('thanks for registration');
	window.location.href='userlog.php';
	</script>";
}
else{
	 header('location:usereg.php');
}
}
?>
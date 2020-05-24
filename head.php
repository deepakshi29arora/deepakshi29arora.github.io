<?php
session_start();
?>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <img src="logo.jpg" class="navbar-brand" style="height: 50px;">
    </div>
    <style type="text/css">
      .aa li a
      {
        font-weight: bolder;
        color: white !important;
        font-family: Gabriola;
        font-size: 23px;
      }
    </style>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav aa">
		<li><a href="index.php">HOME</a></li>
		<li ><a href="index.php">FEATURES</a></li>
		<li ><a href="index.php">INTEGRATION</a></li>
		<li ><a href="index.php">PRICING</a></li>
    <li ><a href="usereg.php">MY ACCOUNT</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right aa">
	<?php
	if (isset($_SESSION['user'])) {
	?>
	<li><a href="logout.php">Logout</a></li>
	<li><a href="landing.php">Book Slot</a></li>
  <li><a href="landing.php">My Account</a></li>
	<?php
	}else
	{
	?>
      <li><a href="usereg.php">Sign Up</a></li>
      <li><a href="userlog.php">Login</a></li>
      <?php
  		}
      ?>
      </ul>
    </div>
  </div>
</nav>
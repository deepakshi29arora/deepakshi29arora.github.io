<?php
include 'head.php';
?>
<html>
<head>
<title>project</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/bootstrap.css"/>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<script src="js/bootstrap.js"></script>
<script src="js/jquery-1.11.0.js"></script>
<script src="js/bootstrap.min.js"></script>
<style type="text/css">
#web-logo
{
  opacity: 0.4;
  height: 170px;
  width: 170px;
  border-radius: 50%;
  margin-left: 40px;
  margin-top:300px;
  border: white solid 2px;
  animation-name: fade;
  animation-duration: 4s;
  animation-fill-mode: forwards;
}

#header{
  color: black;
  font-family:ALGERIAN;
  font-size: 70px;
  margin-left: 230px;
  margin-top: 320px;
  position: absolute;
  letter-spacing:4px;
  opacity: .8;
  animation-name: fade;
  animation-duration: 4s;
  animation-fill-mode: forwards;
}

@keyframes fade{
  0%{
    opacity: 0.1;
  }
  100%{
    opacity: 0.8;
  }
}
.ptext{
  position:absolute;
  width:100%;
  text-align:center;
  color:white;
  font-size:27px;
  letter-spacing:8px;
  text-transform:uppercase;
  margin-top:370px;
  margin-left:0px;
  z-index: 6;
}
.ptext .border{
  background-color:#111;
  border: white solid 2px;
  color:#fff;
  padding:20px;
  border-radius: 10px;  
}

.ptext .border:hover{
  background: white;
  color: black;
  font-weight: bold;
  transition: all 1s ease-in-out;
  text-decoration: none;
}
.ptext .border.trans{
  background-color:transparent;
}
.b
{
  background-color:darkgrey;
  height:900px;
  margin-top:400px;
  z-index: 1;
}
.c
{
	 background-color:white;
	 height:600px;
   font-family:Algerian; 
   text-align: center;
}
.pimg3{
  position:relative;
  opacity:0.70;
  background-position:center;
  background-size:cover;
  background-repeat:no-repeat;

  /*
    fixed = parallax
    scroll = normal
  */
  background-attachment:fixed;
}
.pimg3{
  background-image:url('33.jpg');
  height:600px;
  background-size:100% 100%;
}
</style>
</head>
<body>

<div class=" col-lg-12" style="padding:0px;">
	<img src="logo.jpg" class="col-lg-12" style="height:900px;position:fixed;padding: 0px;opacity: 0.7;">
    <h1 id="header">WELCOME TO SLOT BOOKER</h1>
    <img id="web-logo" src="11.jpg">
    <div class="ptext">
      <span class="border">
        <a href="usereg.php" id="check-in" style="font-family: ALGERIAN;">BOOK YOUR FIRST SLOT NOW!!!</a>
      </span>
    </div>
</div>
<div class="col-lg-12 b" style="padding:0px;">
    <h2 class="col-lg-12" style="margin-top:80px; text-align: center;color:black;font-size:30px;font-family: ALGERIAN;">Advantages</h2>
    <p class="col-lg-12" style="color:black;margin-top:4px;text-align:center;font-size:20px;font-family: Times New Roman;">
        </p>
   <div class="col-lg-12 " style="padding: 0px; margin-left: 0px;">
<img src="11.jpg" style="height:100px;border:2px solid white;border-radius:50px;margin-left:630px;z-index:6;position:absolute;">
<div class="col-lg-8 col-lg-offset-2 container" style="margin-top:50px;z-index:1;"> 
<div class="carousel slide img-thumbnail" id="ab" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#ab" data-slide-to="0" class="active"></li>
    <li data-target="#ab" data-slide-to="1"></li>
    <li data-target="#ab" data-slide-to="2"></li>
    <li data-target="#ab" data-slide-to="3"></li>
    <li data-target="#ab" data-slide-to="4"></li>
  </ol>
  
  <div class="carousel-inner">
    <div class="item active">
      <img src="11.jpg" style="height:500px;width:1000px;"></div>
    <div class="item">
      <img src="logo.jpg" style="height:500px;width:1000px;"></div>
    <div class="item">
      <img src="11.jpg" style="height:500px;width:1000px;"></div>
      <div class="item">
      <img src="logo.jpg" style="height:500px;width:1000px;"></div>  
      <div class="item">
      <img src="11.jpg" style="height:500px;width:1000px;"></div>    
  </div>
    </div>
</div>
</div>
</div>

<div class="col-lg-12" style="padding:0px;background-color:#ffcccc;height:600px;">
	
 <div class="pimg3">
    <div class="ptext">
      <a href="userlog.php"><span class="border" style="font-family: ALGERIAN;">
       Login Now!!
      </a></span>
    </div>
  </div>
</div>


<div class="col-lg-12" style="padding:0px;background-color:black;height:500px;">
        <div class="col-lg-12">
        <br><br><br>
    </div>
        <div class="col-lg-12">
          <font color="white" font-size="10px">
  
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-2">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2" >About Us</h2>
              <h4 style="color:#688aed;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            </h4>
            </div>
          </div>
          <div class="col-lg-2 col-lg-offset-1">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">USEFUL LINKS</h2>
              <div class="list-unstyled" style="color: white;">
                <h4 style="color:white;"><a href="#" class="py-2 d-block">Blog</a></h4>
                <h4><a href="#" class="py-2 d-block">Services</a></h4>
                <h4><a href="#" class="py-2 d-block">Integration</a></h4>
                <h4><a href="#" class="py-2 d-block">Features</a></h4>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-lg-offset-1">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">PRIVACY</h2>
              <ul class="list-unstyled">
                <h4><a href="#" class="py-2 d-block">Career</a></h4>
                <h4><a href="#" class="py-2 d-block">About Us</a></h4>
                <h4><a href="#" class="py-2 d-block">Contact Us</a></h4>
                <h4><a href="#" class="py-2 d-block">Services</a></h4>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-lg-offset-1">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">HAVE A QUESTION?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <h4 style="color:#688aed;"><span class="fa fa-map-marker" style="margin-left: -30px;"></span><span  style="margin-left: 30px;"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim </span></h4><br>
                  <h4><a href="#"><span class="fa fa-mobile" style="margin-left: -30px;"></span><span  style="margin-left: 30px;">+0000000000</span></a></h4><br>
                  <h4><a href="#"><span class="fa fa-envelope" style="margin-left: -30px;"></span><span style="margin-left: 30px; margin-bottom:2000px;">lorem ipsum dolor</span></a></h4><br>
                </ul>
              </div>
            </div>
          </div>
        </div>
  </div>
   
 </font>


</div>

</div>


</body>
</html>
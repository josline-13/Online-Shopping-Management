<?php
error_reporting(E_ALL ^ E_NOTICE);  // erase  notice
session_start();
require("connect.php");
$ck=$_SESSION['logged'];
if($ck=="yes")
{
	header("location:Home1.php");
	exit;
}
?>

<html>
<head>
<title>online shopping</title>
<link rel="stylesheet" type="text/css" href="onlineshop.css">
<style>
body {
    background-image: url("grp.jpg");
    background-repeat: no-repeat;
    height: 100%;
    width: 100%;
}
  ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}
</style>


<script type="text/javascript">
<!--
var image1=new Image()
image1.src="slide1.jpg"
var image2=new Image()
image2.src="slide2.jpg"
var image3=new Image()
image3.src="slide3.jpg"
var image4=new Image()
image4.src="slide5.jpg"

//-->
</script>

<script src="reg_valid.js"></script>

</head>




<?php // require('Header.php'); ?>
<body background=tit.jpg background-size="100% 70px";>
<div id="header" style="background-image:url("tit.jpg")">
    
  <p><font size="25" color="white" >ONE AVENUE</font></p>

<large><marquee behavior="alternate"><font size="5" color="white" >ONEAVENUE-ONE STOP SHOP FOR ALL TYPES OF PRODUCTS</font></marquee></large>
<br><br>


 
       
<br><br>

&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; 

<img src="slide1.jpg" name="slide" width="500" height="350">
<script>
<!--
//variable that will increment through the images
var step=1
function slideit(){
//if browser does not support the image object, exit.
if (!document.images)
return
document.images.slide.src=eval("image"+step+".src")
if (step<4)
step++
else
step=1
//call function "slideit()" every 2.5 seconds
setTimeout("slideit()",1200)
}
slideit()
//-->
</script>

&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

<section>
    <div class="container" >
        <div class="login-form" style="margin-top:-100px;" >
    <form action="data.php" method="post">
        <h1>Sign Up</h1>
		<h5><input type="text" name="fname" placeholder="Enter First Name" required>
		<h5><input type="text" name="lname" placeholder="Enter Last Name" required>
        <h5><input type="email" name="email" placeholder="Enter  Valid Email" required>
        <h5><input type="text"  name="num" placeholder="Enter Phone No" maxlength="10" required>
		<h5><input type="password"  name="pass" placeholder="Enter Password" required>
        <h5><input type="submit" name="" value="Register"><br><center>
        <a href="index.php">Login Here</a></center>

    </form>
</div>
</div>
</section>
</div>
</body>
</html>
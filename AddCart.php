<?php
error_reporting(E_ALL ^ E_NOTICE);
require("check.php");
require("connect.php");
	
	$item=$_GET['V'];
	
	
	
	$res="select * from products where IMG='$item' ";
	$db=mysql_query($res);
	
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


&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

<br><br><br>

<?php  require('Header.php'); ?>
<body background=tit.jpg background-size="100% 70px";>
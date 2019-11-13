<?php 
error_reporting(E_ALL ^ E_NOTICE);
require("check.php");
require("connect.php");

if($_GET)
{
	$id=$_GET['id'];
	
	
	
	$res="delete from Cart where id='$id' ";
	$db=mysql_query($res);
	
	   echo "<script>
			alert('Item  Successfully Removed From Cart');
			window.location.href='cart.php';
	        </script>";
        exit;
	  
	
}






?>



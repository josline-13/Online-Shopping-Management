<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);
require("connect.php");


	
	$Email=$_POST['email'];
	$Password=$_POST['pass'];
	
	
	$res="select * from register where Email='$Email' and  Password='$Password' ";
	$db=$result= mysql_query($res);
	$int_count= mysql_num_rows($db);
	if($int_count==0)
	{
		echo "<script>
			alert('Sorry ... Invalid Credentials');
			window.location.href='index.php';
	        </script>";
        exit;
	}
	else
	{
		
		$_SESSION['eid']=$Email;
		$_SESSION['logged']="yes";
	    echo "<script> alert('Login Success..!!');
	        window.location.href='Home1.php';   </script>";
	}
	
	
	
    ?>
	
	
	

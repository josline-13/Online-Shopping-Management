<?php
	error_reporting(E_ALL ^ E_NOTICE);
require("connect.php");

	$Fname=$_POST['fname'];
	$Lname=$_POST['lname'];
	$Email=$_POST['email'];
	$Password=$_POST['pass'];
	
	
	$Pno=$_POST['num'];
	
	$res="insert into register values('$Fname','$Lname','$Email','$Password','$Pno')";
	$result=mysql_query($res,$con) or die('Errorrs:' .mysql_error());
	
	if($result==0)
	   {
			 echo "<script>
			alert('Sorry ... Something went wrong ..');
			window.location.href='signup.php';
	        </script>";
        exit;
	  }
	  else
	  {
	   echo "<script>
			alert('Successfully Registered....Sign In Please');
			window.location.href='index.php';
	        </script>";
        exit;
	  }
	 
	 
    ?>

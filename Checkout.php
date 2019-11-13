<?php 
error_reporting(E_ALL ^ E_NOTICE);
require("check.php");
require("connect.php");


	$Email=$_SESSION['eid'];
	
	
	
	if($_POST)
	{
		$res="select * from Cart where Email='$Email' ";
		$db=mysql_query($res);
	
		$Fname=$_POST['fname'];
		$Phone=$_POST['phone'];
		$BAddr=$_POST['baddr'];
		$NPoint=$_POST['npoint'];
		$Pin=$_POST['pin'];
	
		
		$sum=0;
		while($row=mysql_fetch_array($db))
		{
				
			$Pname=$row['PName']; 
		    $Qty=$row['QTY']; 
		    $Amt=$row['Amount']; 
	        $QAmt=$Qty*$Amt; 
			$sum=$sum+$QAmt; 
			$b=$row['id'];
	        $res2="insert into orders values('','$Pname','$Qty','$Amt','$QAmt','$Email','$Fname','$Phone','$BAddr','$NPoint','$Pin')";
			$result=mysql_query($res2,$con) or die('Errorrs:' .mysql_error());
		}
		
		
		if($sum==0)
		{
			
		 echo "<script>
			alert('Sorry ... Something went wrong  Cart Is Empty ');
			window.location.href='Home1.php';
	        </script>";
         exit;
		}
		else
		{
			$res1="delete from Cart where Email='$Email'";
			mysql_query($res1,$con) or die('Errorrs:' .mysql_error());
			
		echo "<script>
			alert('Order Placed Successfull  Total Amount : $sum ');
			window.location.href='Home1.php';
	        </script>";
        exit;	
		}
	}


?>




<!DOCTYPE html>
<html>
<head>
  <title></title>
   <link rel="stylesheet" type="text/css" href="watch.css">
</head>
<p><font size="25" color="white" >ONE AVENUE</font></p>

<large><marquee behavior="alternate"><font size="5" color="white" >ONEAVENUE-ONE STOP SHOP FOR ALL TYPES OF PRODUCTS</font></marquee></large>
<br>


 
       


<?php require('header.php'); ?>


<body>



<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
	font-size:22px;
    width: 80%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
	 
	 text-align: center;
    padding: 8px;
	background-color:pink;
	
}



#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 5px;
    padding-bottom: 12px;
    text-align: center;
    background-color: orange;
    color: white;
	
}
input[type=text], textarea {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
</style>
<link rel="stylesheet" type="text/css" href="onlineshop.css">
<center>
 <div  style="margin-top:10px;" >
  <form action="Checkout.php" method="Post">
<table id="customers" >
<tr><th colspan="4"  style="background-color:black;">Fill Out Shipping Details   </tr>
  <tr>
    <th>Full Name		<td><input type="text" name="fname" placeholder="Enter First Name" required>	</tr><tr>
	<th>Phone No		<td><input type="text" maxlength="10" pattern="[0-9]{10}" name="phone" placeholder="Phone Number" required>	</tr><tr>
	<th>Billing Address	<td><Textarea name="baddr"  required></textarea></tr><tr>
	<th>Nearest Point	<td><input type="text" name="npoint" placeholder="Enter Location Mark" required>	</tr><tr>
	<th>Pin Code		<td><input type="text" maxlength="6" pattern="[0-9]{6}" name="pin" placeholder="Enter PinCode" required>	</tr><tr>
	
     
  </tr>
 
  
  </table>

  
  <style>
input[type="submit"]
{
  color:#fff;
  cursor:pointer;
  font-size:30px;
  border:none;

  background: #0072ff;
}
 input[type="submit"]:hover
{
  background: #ff0000;
  opacity: 0.8;
}
  </style>
<br>
<h3><input type="submit" name="" value="Confirm Order"><br><center>
</form>
</div>
<br><br>

</body>
</html>
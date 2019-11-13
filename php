<!DOCTYPE html>
<html>
<head>
	<?php
	include("page.php");
	
	$localhost1='localhost';
	$username='root';
	$password='';
	
	$con= mysqli_connect($localhost1,$username,$password) or exit('could not connect to server');
	mysqli_select_db($con, 'online_shop') or exit('could not find the database');
	$userid=$_POST['UserId'];
	$name=$_POST['UserName'];
	$email=$_POST['Email'];
	$password=$_POST['Password'];
	$address=$_POST['Address'];
	
	$res="insert into register(UserId,UserName,Email,Password,Address)values('$userid','$name','$email','$password','$address')";
	$db=mysqli_query($con,$res);
	 echo'<center><div id="aside" style="background-color:#D8D8D8;height:200px;width:350px;float:">';
	echo"<br>"." You have been successfully registered<br> Plzz remember your userid and password";
	echo"</div></center>";


	include("page.php");
$localhost1='localhost';
	$username='root';
	$password='';
	$con= mysqli_connect($localhost1,$username,$password) or exit('could not connect to server');
	mysqli_select_db($con, 'online_shop') or exit('could not find the database');
	
	$userid=$_POST['Id'];
	
	$sql="select * from cart where UserId1='".$_POST['Id']."'";
	$retval=mysqli_query( $con, $sql );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
$sum=0;
#echo'<table><th><td></td>';

$sql="select distinct UserName1,Address1 from cart where UserId1='".$_POST['Id']."'";
	$retval1=mysqli_query( $con, $sql );
if(! $retval1 )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysqli_fetch_array($retval1))
{
echo'<center><div id="aside" style="background-color:#D8D8D8;height:50px;width:350px;float:">';
 echo "<h4>User Name :{$row['UserName1']}<br>"."Address : {$row['Address1']}<br></h4>";
echo"</div></center>";
}

while($row = mysqli_fetch_array($retval))
{
    echo'<center><div id="aside" style="background-color:#D8D8D8;height:120px;width:350px;border:2px solid darkred">';
   # echo "User Name :{$row['UserName1']}  <br> "."Address : {$row['Address1']} <br>";
	echo "Product id :{$row['ProductId1']}<br><br> "."Product Name : {$row['ProductName1']}<br> ";
    echo "Product Cost:{$row['ProductCost1']}<br>";
	$productid1=$row['ProductId1'];
	
	echo'<form action="del.php" method="post"><input type="hidden" name="Uid" id="Uid" value="'.$userid.'"><input type="checkbox" name="Pid"  id="Pid" value="'.$productid1.'">';
	echo '<input type="submit" value="delete"></form> ';
	
	echo"</div></center>";
    $sum=$sum+$row['ProductCost1'];
}
 echo'<center><div id="aside" style="background-color:#D8D8D8;height:50px;width:350px;float:">'; 
echo "<h4>Total cost:".$sum;echo"</h4></div></center>";


include("page.php");
$localhost1='localhost';
	$username='root';
	$password='';
	
	$con= mysqli_connect($localhost1,$username,$password) or exit('could not connect to server');
	mysqli_select_db($con, 'online_shop') or exit('could not find the database');
	
	$sql="delete from cart where ProductId1='".$_POST['Pid']."'AND UserId1='".$_POST['Uid']."'LIMIT 1";
	$retval=mysqli_query( $con, $sql );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}

$sql="select distinct UserName1,Address1 from cart where UserId1='".$_POST['Uid']."'";
	$retval1=mysqli_query( $con, $sql );
if(! $retval1 )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysqli_fetch_array($retval1))
{
  echo'<center><div id="aside" style="background-color:#D8D8D8;height:50px;width:350px;float:">';
 echo "<h4>User Name :{$row['UserName1']}<br>"."Address : {$row['Address1']}</h4><br>";
echo"</div></center>";
}


$sel="select * from cart where UserId1='".$_POST['Uid']."'";
	$ret=mysqli_query( $con, $sel );
if(! $ret )
{
  die('Could not get data: ' . mysql_error());
}
$sum=0;
while($row = mysqli_fetch_array($ret))
{

    echo'<center><div id="aside" style="background-color:#D8D8D8;height:120px;width:350px;float:">';
   # echo "User Name :{$row['UserName1']}  <br> "."Address : {$row['Address1']} <br>";
	echo "Product id :{$row['ProductId1']}  <br> "."Product Name : {$row['ProductName1']} <br><br>";
    echo "Product Cost:{$row['ProductCost1']}  <br> ";	
    echo"</div></center>";
	
	
    $sum=$sum+$row['ProductCost1'];
}
 echo'<center><div id="aside" style="background-color:#D8D8D8;height:75px;width:350px;float:">'; 
echo "total cost:".$sum;
echo "<h4>You will get your delivery within 10 days </h4></div></center>";

	 
    ?>

</head>
<body>

</body>
</html>

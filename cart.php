<?php 
error_reporting(E_ALL ^ E_NOTICE);
require("check.php");
require("connect.php");


	$Email=$_SESSION['eid'];
	
	$res="select * from Cart where Email='$Email' ";
	$db=mysql_query($res);
	
	






?>




<!DOCTYPE html>
<html>
<head>
  <title></title>
   <link rel="stylesheet" type="text/css" href="watch.css">
</head>
<p><font size="25" color="white" >ONE AVENUE</font></p>

<large><marquee behavior="alternate"><font size="5" color="white" >ONEAVENUE-ONE STOP SHOP FOR ALL TYPES OF PRODUCTS</font></marquee></large>
<br><br>


 
       
<br><br>

<?php require('header.php'); ?>


<body>



<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
	font-size:22px;
    width: 90%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
	 text-align: center;
    padding: 8px;
	background-color:#fcfcfc;
}



#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color: #4CAF50;
    color: white;
}
</style>

<center>
<table id="customers">
  <tr>
    <th>ITEM</th>
	<th>ITEM NAME</th>
	<th>QTY </th>
	<th>Amount</th>
	<th>Total Amount</th>
	<th>Remove</th>
	
    
  </tr>
  <?php 
  $sum=0;
  while($row=mysql_fetch_array($db))
  {
  ?>
 <tr>
    <td><image src="<?php echo $row['IMG'].".jpg"; ?>" height="100px" width="100px"/></td>
    <td><?php echo $row['PName']; ?> </td>
	<td><?php echo $row['QTY']; ?></td>
	 <td><?php echo $row['Amount']; ?></td>
	  <td><?php  $a=$row['QTY']*$row['Amount']; $sum=$sum+$a; $b=$row['id'];
	              echo $a; ?></td>
				  
				  
				  
	<?php echo"<td align='center' style='color:red;width:120px;'>
                      <a href='delete.php?id=$b'>Delete</a></td>";	?>		  
	 
	 
  </tr>
  <?php
  }
  ?>
  <tr><th colspan="4">Total Cart  Amount  <th><?php echo $sum;?></th><th> </tr>
  </table>

  
  <style>
input[type="submit"]
{
  color:#fff;
  cursor:pointer;
  font-size:26px;
  border:none;
  radious:20;
  background: #0072ff;
}
 input[type="submit"]:hover
{
  background: #ff0000;
  opacity: 0.8;
}
  </style>
  <form action="Checkout.php" method="Get">
  <br>
<h3><input type="submit" name="" value="Check Out"><br><center>
</form>
<br><br>

</body>
</html>
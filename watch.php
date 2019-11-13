<?php 
error_reporting(E_ALL ^ E_NOTICE);
require("check.php");
require("connect.php");

if($_POST)
{
	$item=$_POST['V'];
	$qty=$_POST['qty'];
	$Email=$_SESSION['eid'];
	
	$res="select * from products where IMG='$item' ";
	$db=mysql_query($res);
	$row=mysql_fetch_array($db);
	
	$img=$row['IMG'];
	$pname=$row['Name'];
	$amount=$row['Amount'];
	
	$res="insert into Cart values('','$Email','$img','$pname','$qty','$amount')";
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
			alert('$pname Successfully Added To Cart');
			window.location.href='watch.php';
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
<br><br>


 
       
<br><br>

<?php require('header.php'); ?>



<body>

<form action="watch.php" method="post">
  <figure class="snip1268 ">
  <div class="image">
    <img src="img12.jpg" alt="watch"/>
    <input type="submit"  class="add-to-cart" value="Add to Cart" >
  </div>
  <figcaption>
    <h2>ROTARTY
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  <input type="number" placeholder="QTY"  style="width:60px;" min="1" name="qty" required></h2>
	  <input type="hidden" value="img12" name="V">
    <div class="price">Rs.22200.00 </div>
  </figcaption>
</figure>
</form>



<form action="watch.php" method="post">
<figure class="snip1268 ">
  <div class="image">
    <img src="img13.jpg" alt="watch" />
   
   <input type="submit"  class="add-to-cart" value="Add to Cart" >
  </div>
  <figcaption>
    <h2>QUARTZ
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  <input type="number" placeholder="QTY"  style="width:60px;" min="1" name="qty" required></h2>
	  <input type="hidden" value="img13" name="V">
    
    <div class="price">Rs.33400.00 </div>
  </figcaption>
</figure>
</form>

<form action="watch.php" method="post">
<figure class="snip1268 ">
  <div class="image">
    <img src="img14.jpg" alt="watch" />
   
    <input type="submit"  class="add-to-cart" value="Add to Cart" >
  </div>
  <figcaption>

    <h2>TITAN 
	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  <input type="number" placeholder="QTY"  style="width:60px;" min="1" name="qty" required></h2>
	  <input type="hidden" value="img14" name="V">
    <div class="price">Rs.18895.00 </div>
  </figcaption>
</figure>
</form>


<form action="watch.php" method="post">
<figure class="snip1268 ">
  <div class="image">
    <img src="img16.jpg" alt="Hollister" />
   
 <input type="submit"  class="add-to-cart" value="Add to Cart" >
  </div>
  <figcaption>
    <h2>SEKOND
	  A&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  <input type="number" placeholder="QTY"  style="width:60px;" min="1" name="qty" required></h2>
	  <input type="hidden" value="img16" name="V">
    
    <div class="price">Rs.42000.00 </div>
  </figcaption>
</figure>
</form>

</body>
</html>
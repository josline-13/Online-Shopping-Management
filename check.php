<?php
session_start();
$ck=$_SESSION['logged'];
if($ck!="yes")
{
header("location:index.php");
}
else
{
}
?>
<?php
require_once('admindb.php');
require_once('sellerdb.php');


function auth($id,$pass)
{
	$con=con();
	$sql="select * from admin where ID='$id' and Pass='$pass'";
	$res=mysqli_query($con,$sql);
	return $res;
}

function data()
{
	$con=con();
	$sql="select * from admin";
	$res=mysqli_query($con,$sql);
	return $res;
}

function delete($sellerid)
{
	$con=con1();
	$sql="Delete from seller where sellerid='$sellerid'";
	$res1=mysqli_query($con,$sql);
	return $res1;
}

function add1($sellerid,$name,$email,$pass)
{
	$con=con1();
	$sql="Insert into seller values ('$sellerid','$name','$email','$pass')";
	$res1=mysqli_query($con,$sql);
	return $res1;
}


function data1()
{
	$con=con1();
	$sql="select * from seller";
	$res1=mysqli_query($con,$sql);
	return $res1;
}

?>








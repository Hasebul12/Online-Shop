<?php
require_once('../Models/alldb.php');
session_start();
$id=$_POST['id'];
$pass=$_POST['pass'];

if(empty($id || $pass))
{
   $_SESSION['error']="Please sign up the form";
   header("location:../Views/signup.php");
}
else
{
	$status=auth($id,$pass);
	if(mysqli_num_rows($status)==1)
	{
		header("location:../Views/home.php");
		$_SESSION['id']=$id;
	}
	else
	{
		$_SESSION['error']="Invalid User";
		header("location:../Views/signup.php");
	}
}

if(isset($_GET['logout']))
{
	unset($_SESSION['id']);
	header("location:../Views/signup.php");

}

?>
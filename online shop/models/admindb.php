<?php 

function con()
{
	$serverName="localhost";
	$userName="root";
	$password="";
	$dbname="oshop";
	$conn=new mysqli($serverName,$userName,$password,$dbname);
	return $conn;
}

?>





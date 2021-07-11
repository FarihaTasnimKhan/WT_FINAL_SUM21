<?php


$name="";
$err_name="";

$pass="";
$err_pass="";

$has_error=false;

if(isset($_POST["signup"]))
{
	if(empty($_POST["name"]))
	{
		$err_name="Name Required";
		$has_error=false;
	}else
	{
		$name=$_POST["name"];
	}
	if(empty($_POST["password"]))
	{
		$err_pass="Password Required";
		$has_error=false;
	}else
	{
		$pass=$_POST["password"];
	}
	
}





?>

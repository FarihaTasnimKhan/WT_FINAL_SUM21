<?php


include 'Model/db_config.php';


$name="";
$err_name="";

$uname="";
$err_uname="";

$pass="";
$err_pass="";

$email="";
$err_email="";

$has_error=false;

$err_db_error="";


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
	if(empty($_POST["uname"]))
	{
		$err_uname="Username Required";
		$has_error=false;
	}else
	{
		$uname=$_POST["uname"];
	}
	if(empty($_POST["password"]))
	{
		$err_pass="Password Required";
		$has_error=false;
	}else
	{
		$pass=$_POST["password"];
	}
	if(empty($_POST["email"]))
	{
		$err_email="Email Required";
		$has_error=false;
	}else
	{
		$email=$_POST["email"];
	}
	if(!$has_error)
	{
		$rs=insertUser($name,$uname,$email,$pass);
		if($rs===true){
			header("Location: Login.php");
		}
		$err_db_error= $rs;
		 
	}
}


function insertUser($name,$uname,$email,$pass)
{
	$query= "insert into signup values (NULL,'$name','$uname','$email','$pass')";
	return execute($query);
	
	
}




?>

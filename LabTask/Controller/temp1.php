<?php
include 'Model/db_config.php';


$name="";
$err_name="";

$uname="";
$err_uname="";

$pass="";
$err_pass="";


$has_error=false;

$err_db_error="";

 if (isset($_POST["Login"]))
{
	if(empty($_POST["name"]))
	{
		$err_name="Name Required";
		$has_error=true;
	}else
	{
		$name=$_POST["name"];
	}
	if(empty($_POST["password"]))
	{
		$err_pass="Password Required";
		$has_error=true;
	}else
	{
		$pass=$_POST["password"];
	}
	
	if(!$has_error)
	{
   $query="select * from signup where Name='$name' and Password='$pass'";
   $rs=get($query);
   if(count($rs)>0)
   {
	  header("Location: Dashboard.php");
   }
   else{
	  $err_db_error= "Invalid Name and Password.";
   }
}
}
	
		


function insertUser($name,$uname,$email,$pass)
{
	$query= "insert into signup values (NULL,'$name','$uname','$email','$pass')";
	return execute($query);
	
	
}


function authenticateUser($name,$pass)
{
   $query="select * from signup where Name='$name' and Password='$pass'";
   $rs=get($query);
   if(count($rs)>0)
   {
	   return true;
   }
   return false;
}




?>

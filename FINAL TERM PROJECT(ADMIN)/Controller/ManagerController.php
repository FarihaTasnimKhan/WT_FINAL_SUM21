<?php


include 'Model/db_config.php';

    $err_db = "";
	$name="";
	$err_name="";
	$salary="";
	$err_salary="";
	$uname="";
	$err_uname="";
	$email="";
	$err_email="";
	$address="";
	$err_address="";
	$gender="";
	$err_gender="";
	$DOB="";
	$err_DOB="";
	$err=false;
	$err_message="";
	$message="";

	
	if(isset($_POST["add_manager"])){
		
		if(empty($_POST["name"])){
			$err_name="Name Required.";
			$err=true;
		}
		else{
			$name=$_POST["name"];
		}
		if(empty($_POST["username"])){
			$err_uname="Username Required.";
			$err = true;
		}
		else if(strlen($_POST["username"])<=6){
			$err_uname="Your USERNAME MUST be greater than 6 letters.";
			$err = true;
		}
		else if(strpos($_POST["username"]," ")){
				$err_uname="You CANNOT have any space.";
		}
		else{
			$uname=$_POST["username"];
		}
		
		if(empty($_POST["email"])){
			$err_email="Email Required.";
			$err=true;
		}
		else{
			$email=$_POST["email"];
		}
		
		if(empty($_POST["address"])){
			$err_address="Address Required.";
			$err=true;
		}
		else{
			$address=$_POST["address"];
		}
		if(empty($_POST["dateOfBirth"])){
			$err_DOB="Date of Birth Required.";
			$err=true;
		}
		else{
			$DOB=$_POST["dateOfBirth"];
		}
		if(!isset($_POST["gender"])){
			$err_gender="Please select your GENDER";
			$err = true;
		}
		else{
			$gender = $_POST["gender"];
		}
		if(empty($_POST["salary"])){
			$err_salary="Salary Required. ";
			$err=true;
		}
		else{
			$salary=$_POST["salary"];
		}
		
		if(!$err){
			$rs = insertManager($name,$uname,$email,$address,$DOB,$salary,$gender);
			
			if($rs === true){
			//	var_dump(); 
			//echo "Manager Added.";
			header("Location: AdminDashboard.php");
			}
			echo $rs;
			
			
	}
	}
	
	else if (isset($_POST["verify"])){
		if(empty($_POST["name"])){
			$err_name="Name Required";
			$hasError=true;
		}else{
			$name=$_POST["name"];
		}
		if(empty($_POST["username"])){
			$err_uname="Username Required";
			$hasError=true;
		}else{
			$uname=$_POST["username"];
		}
		
		if(!$hasError){

			if(authenticateManager($uname)){
				//session_start();
				//$_SESSION["loggeduser"] = $_POST["username"];
				
				header("Location: AdminDashboard.php");
			}
			$err_db = "Username Invalid";
		}
	}
	else if (isset($_POST["back"])){
		header("Location: AdminDashboard.php");

	}
	else if(isset($_POST["sendmessage"])){
		
		if(empty($_POST["username"])){
			$err_uname="Username Required.";
			$err = true;
		}
		else{
			$uname=$_POST["username"];
		}
		if(empty($_POST["message"])){
			$err_message="PLEASE WRITE YOUR MESSAGE TO SEND. ";
			$err=true;
		}
		else{
			$message=$_POST["message"];
		}
		
		if(!$err){
			
			if(authenticateManager($uname)){
				$rs = insertManagerMessage($uname,$message);
				if($rs === true){
			
			echo "MESSAGE SENT SUCCESSFULLY";
			}
			echo "MESSAGE WAS NOT SENT";
			}
			echo "MESSAGE WAS NOT SENT DUE TO INVALID USERNAME";
					
			
	}
	}else if(isset($_POST["sendnothermessage"])){
		header("Location: MessageManager.php");
	}
	else if (isset($_POST["updateManager"]))
	{
		
		$rs = updateManager($_POST["name"],$_POST["email"],$_POST["address"],$_POST["salary"],$_POST["id"]);
		if($rs == true){
			header("Location: AdminDashboard.php");
		}
		$db_err = $rs;
	}
	else if(isset($_POST["delete"]))
	{
		$rs = deleteManager($_POST["Username"]);
		
		if($rs == true)
		{
			header("Location: AdminDashboard.php");
		}
		$db_err = $rs;
	}
	

	
	
	
	
	
	function insertManager($name,$uname,$email,$address,$DOB,$salary,$gender){
		$query  = "insert into manager values (NULL,'$name','$uname','$email','$address','$DOB','$salary','$gender')";
		return execute($query);	
	}
	function insertManagerMessage($uname,$message){
		$query  = "insert into message_manager values (NULL,'$uname','$message')";
		return execute($query);	
	}
	
	function authenticateManager($uname){
		$query ="select * from manager where Username='$uname'";
		$rs = get($query);
		if(count($rs)>0){
			return true;
		}
		return false;

	}
	function getAllManager(){
		$query = "select * from manager";
		$rs = get($query);
		return $rs;
	}
	function getManager($id){
		$query= "select Name,Email,Address,Salary from manager where ID=$id";
		$rs = get($query);
	return $rs[0];
	}
	function updateManager($name,$email,$address,$id){
		$query= "update manager set Name='$name',Email='$email',Address='$address',Salary='$salary' where ID=$id";
		return execute($query);
	}
	function deleteManager($id)
	{
		$query= "DELETE FROM manager WHERE ID='$id'";
		return execute($query);
	}
	
?>
<?php
session_start();
$user = $_POST['user'];
$pass = $_POST['pass'];
$cnfrmpass = $_POST['cnfrmpass'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$pass_len = strlen($pass);
$mobile_len = strlen($mobile);
	if(empty($user)){
	$msg  = "Please enter username";
	}
	else if(empty($pass)){
		$msg = "Please enter your password";
	}
	else if($pass_len <= 6){
		$msg = "Password should be more than 6 characters";
	}
	else if(empty($cnfrmpass)){
		$msg = "Please cnfrm your password";
	}
	else if($pass != $cnfrmpass){
		$msg = "Password does not match";
	}
	else if(empty($email)){
		$msg = "Please enter your email";
	}
	else if(!filter_var($email,FILTER_VALIDATE_EMAIL))
	{
		$msg = "Please enter valid email";
	}
	else if(empty($mobile)){
		$msg = "Please enter your mobile number";
	}
	else if($mobile_len < 10){
		$msg = "Please enter correct mobile number";
	}
	else{
		$c_msg = "Everything is correct";
	}
$mysqli=mysqli_connect("localhost", "root", "", "kramah")or die("connection error");
$mysqli->query("insert into login_details(user,pass,email,mobile) values(
'$user',
'$pass',
'$email',
'$mobile')");
?>
<?php
if(isset($msg)){
	echo $msg;
}
header("refresh:4; url=signup.html");
?>
<?php
if(isset($c_msg)){
	echo $c_msg;
}
header("refresh:4; url=signup.html");
?>



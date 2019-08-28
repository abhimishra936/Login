<?php
$user=$_POST["user"];
$pass=$_POST["pass"]; 
$mysqli = mysqli_connect("localhost","root","", "kramah");

if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  header("refresh:1; url=new1.html");
}
else
{
	echo "database connection successful <br>";
	header("refresh:1; url=index.html");
}
$result=$mysqli->query("select * from login_details where user='$user' and pass='$pass'") or die("Failed to query database ". mysqli_error($mysqli));
$row = $result->fetch_assoc();
if( $row['user']==$user &&($row['pass']==$pass))
{
	echo "  User Authenticated<br>";
	header("refresh:2; url=welcome.html");
}
else
{
	echo "failed to log in <br>" ;
	header("refresh:2; url=signup.html");
}	
?>

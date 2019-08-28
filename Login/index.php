<?php
if(isset($_POST['submit']))
{
$to = $_POST['email'];
$subject = "Login";
$message = "Thankyou for registering click on the following to login:";
$message .="http://localhost/Login/signup.html";
$header = "From:mylaptop936@gmail.com";
$sentmail =mail($to, $subject, $message, $header);
if($sentmail == true){
	echo "Message sent successfully...";
}else{
	echo "Message could not be sent...";
}
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Registration</title>
<link type="text/css" rel="stylesheet" href="stylesheet.css">
</head>
<body>
<div class="login-box"><form action="" method="POST">
  <h1>Registration</h1>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" placeholder="First_name">
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="text" placeholder="Last_name">
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="email" name="email" placeholder="Email">
  </div>

  <input type="submit" class="btn" name="submit" value="submit">

</div>
</body>
</html>
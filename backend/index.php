<?php
session_start();
if(!isset($_SESSION['user_admin'])) {header("location:index.php");}

include('../config/db.php');
  
if(empty($username) && empty($password)){
    
}
    
 $username= isset($_POST['username']) ? $_POST['username'] : "";
 $password= isset($_POST['password']) ? $_POST['password'] : "";
$sql = "select * from admin where username='$username' and password='$password'";
$result=mysqli_query($connection, $sql);
$count=mysqli_num_rows($result);
if($count==1)
{
$_SESSION["user_admin"] = $username;
header("location:cpanel.php");
}
else
 {
    $message = '<span style="color:red">ชื่่อเข้าระบบและรหัสผ่านผิดค่ะ กรุณาลองใหม่</span>';
 }

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
	
<title>Administrator Login</title>
	
	<link rel='stylesheet' type='text/css' href='css/style.css' />
<script type='text/javascript' src='js/jquery.min.js'></script>
<script type='text/javascript' src='js/example.js'></script>
    <style type="text/css">
<!--
.style2 {color: #0066FF}
.style3 {color: #666666}
.style5 {
	font-size: 18px
}
.style7 {
	font-size: 16px;
	font-weight: bold;
	text-decoration:none;
}
-->
    </style>
</head>

<body>
<div id="page-wrap">    
  <div align="center" class="login-block">
          <h3 class="style5"><span class="style2">ADMINISTRATOR</span> <span class="style3">LOGIN</span></h3>
          <p class="style5"></p>
<form action="" method="post" target="">
                <p><label for="ftp-user-name">User Name</label><input type="text" name="username" id="user-name" /></p>
                <p><label for="ftp-password">Password</label><input type="password" name="password" id="password" /></p>
                <p class="submit-wrap"><input type="submit" id="submit" class="button" value="Login" /> 
&nbsp;&nbsp;                <span class="style7"><a href="../index.php" class="style7">กลับหน้าหลัก</a></span></p>
    </form>
  </div>
        
        
        </div>
			
	</div>
	<p>&nbsp;</p>
</body>
</html>
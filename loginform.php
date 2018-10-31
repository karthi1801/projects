
<html>
<head>
<title>Log in form</title>

<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="homestyle.css">
<link rel="stylesheet" type="text/css" href="loginstyle.css">

<script type="text/javascript">
function f1()
{
x=document.frml.username.value;
if(x=="")
{
alert("you have not entered username.");
return false;
}
}
</script>
</head>
<body>
<ul>
  <li><a class="active" href="house.php"><font size="4"><img src="icon1.png" width="40" height="40">HRM SYSTEM</a></li>
   <div style="float:right";><li><a href="loginform.php"><img src="login.png" width="35" height="35">Login</a></li>
  
  <li><a href="about.html"><img src="about.png" width="35" height="35">About</a></li></div>
</ul>
<div class="login-box">
<img src="HCDAC-login-icon.png" class="avatar">
<h1>Login Here</h1>
<form name="frml" action="" onsubmit="return f1()" method="post" >
<p>Username</p>
<input type="text" name="username" placeholder="enter username">
<p>Password</p>
<input type="password" name="Password" placeholder="enter Password">
<input type="submit" name="sub" value="Login" >
<a href="a">Forget Password</a>
</form>
</div>
</body
</html>

<?php

include_once('connect_db.php');

	if(isset($_POST['sub']))
	{
$un=$_POST['username'];
$pw=$_POST['Password'];
$qry=mysql_query("select * from admin where a_uname = '$un' AND a_pword = '$pw' ");
if($qry>0)
{
$row=mysql_fetch_array($qry);
	session_start();
	$_SESSION['user']=$un;
	$_SESSION['id']=$row[0];
	header("location:drop.php");
	}
	else
	{
		echo "invalid";
	}
}

?>
<?php

include_once ('connect_db.php');

	if(isset($_POST['sub']))
	{
$un=$_POST['username'];
$pw=$_POST['Password'];
$qry=mysql_query("select * from employees where username = '$un' AND password = '$pw' ");
$row=mysql_fetch_array($qry); 
if($row>0)
{
	session_start();
	$_SESSION['username']=$un;
	$_SESSION['id']=$row[0];
	header("location:emphome.php");
	}
	else
	{
	echo "invalid";
	}
	}


?>
<?php
include_once ('connect_db.php');

	if(isset($_POST['sub']))
	{
$un=$_POST['username'];
$pw=$_POST['Password'];
$qry=mysql_query("select * from head where username = '$un' AND password = '$pw' ");
$row=mysql_fetch_array($qry);
if($row>0)
{
	session_start();
	$_SESSION['user1']=$un;
	$_SESSION['id']=$row[0];
	header("location:hrhome.php");
	}
	else
	{
		echo "invalid";
	}
}

?>



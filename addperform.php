<?php
session_start();
include_once ('connect_db.php');
if(isset($_SESSION['user'])){
	$user=$_SESSION['user'];
	$id=$_SESSION['id'];

	}
else
{
	header("location:loginform.php");
	session_destroy();
}
?>
<html>
<head>
<title>sign in form</title>
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="homestyle.css">

</head>
<style>
body
{
margin: 0;
padding: 0;
background-size: cover;
background-position: center;
font-family: sans-serif;
}

.login-box
{
width: 430px;
height: 670px;
border-radius: 20px;
background: rgba(0, 0, 0, 0.5);
color: #fff;
top: 80%;
left: 50%;
position: absolute;
transform: translate(-50%,-60%);
//box-sizing: border-box;
padding: 70px 39px;
}
button {
	
  background-color: #4CAF50;
  border-radius: 20px;
  color: white;
  
  font-size: 18px;
  padding: 50px 10px;
  margin: 12px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}


.avatar
{
width: 100px;
height: 100px;
border-radious: 50%;
position: absolute;
top: 4px;
left: calc(50% - 50px);
}
h1
{
margin: 0;
padding: 40px 0 30px;
text-align: center;
font-size: 20px;
}
.login-box p{
margin: 0;
padding: 0;
font-weight: bold;
}
.login-box input{
width: 100%;
margin-bottom: 20px;
}
.login-box input[type="text"], input[type="password"],input[type="number"],input[type="email"]
{
border: none;
border-bottom: 1px solid #fff;
background: transparent;
//outline: none;
height: 40px;
color: #fff;
font-size: 16px;
}
.login-box input[type="submit"]
{
border: none;
outline: none;
height: 40px;
background: #1c8adb;
color: #fff;
font-size: 18px;
border-radius: 20px;
}
.login-box a{
text-decoration: none;
font-size: 14px;
color: #fff;

}


 
</style>
<body>
<ul>

  <li><a class="active" href=""><font size="4"><img src="icon1.png" width="40" height="40">HRM SYSTEM</a></li>
  <div style="float:right";><li><a href="drop.php"><img src="login.png" width="35" height="35">Admin home</a></li>
</ul>
<img src="green.jpg" width="1500" height="800">
<form  action="" onsubmit="return validate()" style="border:1px solid #ccc" method="post">
<div class="login-box">
<img src="HCDAC-login-icon.png" class="avatar">
<h1>Add performence details</h1>
<p>Employee id</p>
<input type="text" name="empid" id="eid" placeholder="enter emp id">
<p>key skills</p>
<input type="text" name="keyskills" id="key" placeholder="enter keyskills">
<p>feed back</p>
<input type="text" name="feed" id="feed" placeholder="enter emp feedback">
<p>Rating</p>
<input type="number" step="any" name="num" id="numb" placeholder="enter emp rating out of 5">


 <input type="submit" name="sub" value="submit">                    
 <a href="a">Forget Password</a>
</form>

</body
</html>
<?php
$con=new mysqli('localhost','root','',"hr_system");
if(isset($_POST['sub'])){
$id=$_POST['empid'];
$keyskills=$_POST['keyskills'];
$feedback=$_POST['feed'];
$rating=$_POST['num'];
$qry="insert into emp_perform (p_id,keyskills,feedback,rating) values ('$id',
'$keyskills','$feedback','$rating')";
$result=mysqli_query($con,$qry);
if($result==TRUE)
{
header("location:drop.php");
echo"inserted";
}
else
{
echo"do nothing";
}
}

?>




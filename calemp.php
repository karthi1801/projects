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
<title>employee call letter form</title>
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="homestyle.css">
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
height: 900px;
border-radius: 20px;
background: rgba(0, 0, 0, 0.5);
color: #fff;
top: 95%;
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
</head>
<body>
<ul>

  <li><a class="active" href="house.html"><font size="4"><img src="icon1.png" width="40" height="40">HRM SYSTEM</a></li>
  
  <div style="float:right";><li><a href="hrhome.php"><img src="login.png" width="35" height="35">HR home</a></li>
  
</ul>
<img src="green.jpg" width="1500" height="1050">
<form  action="" onsubmit="return validate()" style="border:1px solid #ccc" method="post">
<div class="login-box">
<img src="HCDAC-login-icon.png" class="avatar">
<h1>call letter form</h1>
<p>employee id</p>
<input type="text" name="empid" id="eid" placeholder="enter emp id">
<p>Job title</p>
<input type="text" name="jobtitle" id="jid" placeholder="enter job title">
<p>Reporting to</p>
<input type="text" name="report" id="report" placeholder="enter Reporting details">
<p>Company name</p>
<input type="text" name="company" id="comp" placeholder="enter company name">
<p>state</p>
<select name="state">
  <option value="tamilnadu">tamil nadu</option>
  <option value="kerala">kerala</option>
  <option value="andhra">andhra pradesh</option>
  <option value="karnataka">karnataka</option>
</select>
<p>city</p>
<select name="city">
  <option value="coimbathore">coimbathore</option>
  <option value="cheenai">cheenai</option>
   <option value="bangalore">bangalore</option>
    <option value="cochin">cochin</option>
	 <option value="hydrabath">hydrabath</option>
	  <option value="madurai">madurai</option>
</select>
<p>Key activities</p>
<input type="text" name="key" id="key" placeholder="enter Key activities">
<p>Any special requirments</p>
<input type="text" name="special" id="exper" placeholder="enter special requirements">


 <input type="submit" name="sub" value="submit">                    
 <a href="a">Forget Password</a>
</form>
<script type="text/javascript">
	function f1()
{
var x=document.getElementById("eid").value
if(x=="")
{
alert("you have not entered username.");
return false;
}
else
{
alert("call letter send succesfully");
}
}
</script>
</body
</html>
<?php
$con=new mysqli('localhost','root','',"hr_system");
if(isset($_POST['sub'])){
$id=$_POST['empid'];
$jobtitle=$_POST['jobtitle'];
$report=$_POST['report'];
$company=$_POST['company'];
$state=$_POST['state'];
$city=$_POST['city'];
$key=$_POST['key'];
$special=$_POST['special'];
$qry="insert into empcalls(e_id,jobtitle,reporting,company,state,city,keyactive,special) values ('$id','$jobtitle','$report','$company','$state','$city','$key','$special')";
//echo "string";
$result=mysqli_query($con,$qry);
if($result==TRUE)
{
header("location:hrhome.php");
echo"inserted";
}
else
{
echo"do nothing";
}
}

?>





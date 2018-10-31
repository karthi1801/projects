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
<?php
 $id=$_GET['empid'];
include_once('connect_db.php');
	$qry=mysql_query("select * from head where id='$id'");
	$row=mysql_fetch_array($qry);	
if(isset($_POST['sub']))
{
$id=$_POST['empid'];
$firstname=$_POST['Firstname'];
$lastname=$_POST['Lastname'];
$gender=$_POST['gen'];
$address=$_POST['address'];
$state=$_POST['stat'];
$mobno=$_POST['mobileno'];
$mailid=$_POST['email'];
$company=$_POST['company'];
$designation=$_POST['des'];
$exper=$_POST['exp'];
$uname=$_POST['Username'];
$pwd=$_POST['Password'];

$qry=mysql_query("update head set id='$id',fname='$firstname',lname='$lastname',gender='$gender',address='$address',state='$state',
                      mobno='$mobno',mail='$mailid',company='$company',designation='$designation',experience='$exper',
					  username='$uname',password='$pwd' where id='$id'");

if($qry>0)
{
echo "<script type='text/javascript'>alert('data update')</script>";
header("location:edithr.php");

}

}	
?>	
<html>
<head>
<title>sign in form</title>
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="signinstyle.css">
<link rel="stylesheet" type="text/css" href="homestyle.css">

</head>
<body>
<ul>

  <li><a class="active" href=""><font size="4"><img src="icon1.png" width="40" height="40">HRM SYSTEM</a></li>
  <div style="float:right";><li><a href="drop.php"><img src="login.png" width="35" height="35">Admin home</a></li>
</ul>
<img src="green.jpg" width="1500" height="1420">
	
<form  action="" onsubmit="return validate()" style="border:1px solid #ccc" method="post">
<div class="login-box">
<img src="HCDAC-login-icon.png" class="avatar">
<h1>sign in Here</h1>
<p>Employee id</p>
<input type="text" name="empid" id="eid" value='<?php echo $row['id']?>' >
<p>First name</p>
<input type="text" name="Firstname" id="fname" placeholder="enter first name" value="<?php echo $row['fname']?>">
<p>Last name</p>
<input type="text" name="Lastname" id="lname" placeholder="enter last name" value='<?php echo $row['lname']?>'>
<p>Gender</p>
<select name="gen" value='<?php echo $row['gender']?>'>
  <option value="male">male</option>
  <option value="female">female</option>
</select>
<p>Address</p>
<input type="Text" name="address" id="add" placeholder="enter address" value='<?php echo $row['address']?>'>
<p>state</p>
<select name="stat" value='<?php echo $row['state']?>'>
  <option value="tamilnadu">tamil nadu</option>
  <option value="kerala">kerala</option>
  <option value="andhra">andhra pradesh</option>
  <option value="karnataka">karnataka</option>
</select>
<p>Mobile no</p>
<input type="number" name="mobileno" id="mob" placeholder="enter mobile" value='<?php echo $row['mobno']?>'>
<p>Mail id</p>
<input type="email" name="email" id="emailid" placeholder="enter email id"   value='<?php echo $row['mail']?>'>
<p>company</p>
<input type="text" name="company" id="cname" placeholder="enter company name" value='<?php echo $row['company']?>'>
<p>Designation</p>
<input type="text" name="des" id="desig" placeholder="enter designation" value='<?php echo $row['designation']?>'>
<p>Experience</p>
<input type="text" name="exp" id="exper" placeholder="enter experience" value='<?php echo $row['experience']?>'>
<p>User name</p>
<input type="text" name="Username" id="uname" placeholder="enter user name"  value='<?php echo $row['username']?>'>
<p>Password</p>
<input type="password" name="Password" id="Password1" placeholder="enter password" value="<?php echo $row['password']?>">

 <input type="submit" name="sub" value="update">                    
 <a href="a">Forget Password</a>
</form>

<script type="text/javascript">
	function validate()
	{
	var fname=document.getElementById("fname").value;
	var lname=document.getElementById("lname").value;
	var uname=document.getElementById("uname").value;
	var Password1=document.getElementById("Password1").value;
	var emailid=document.getElementById("emailid").value;
	var add=document.getElementById("add").value;
	var mob=document.getElementById("mob").value;
	var emailreg= /^[a-zA-Z0-9._-]+@[[a-zA-Z0-9._-]+\.[a-zA-Z]{2,6}$/;
	if(fname!="" && lname!="" && uname!=""  && Password1!=""  && emailid!="" && add!="" && mob!="")
	{
	  if(emailid.match(emailreg))
	  {
	    
		    if(mob.length==10)
			 {
			 alert('all entered values are valid form successfull validated');
			 }
			 else
			 {
			 alert('enter mobile no of 10 digits');
			 return false;
			 }
	    
	}
	else
	   {
	    alert('enter a valid email');
		return false;
	   }
	}
	
	else
	   {
	alert('please fill the form');
	return false;
	   }

	}	
</script>
</body>
</html>

<?php
$con=new mysqli('localhost','root','',"hr_system");

	if(isset($_POST['sub']))
	{
$un=$_POST['username'];
$pw=$_POST['Password'];
$qry="select * from admin where a_uname = '$un' AND a_pword = '$pw' ";
$result=mysqli_query($con,$qry);
$count=mysqli_affected_rows($con);
if($count==1)
{
	header("location:drop.html");
	}
	else
	{
		echo "wrong";
	}
}

?>
<?php
$con=new mysqli('localhost','root','',"hr_system");

	if(isset($_POST['sub']))
	{
$un=$_POST['username'];
$pw=$_POST['Password'];
$qry="select * from employees where username = '$un' AND password = '$pw' ";
$result=mysqli_query($con,$qry);
$id=$qry['id'];
$count=mysqli_affected_rows($con);
if($count==1)
{
	header("location:emphome.php");
	}
	else
	{
		echo "wrong";
	}
}

?>
<?php
$con=new mysqli('localhost','root','',"hr_system");

	if(isset($_POST['sub']))
	{
$un=$_POST['username'];
$pw=$_POST['Password'];
$qry="select * from head where username = '$un' AND password = '$pw' ";
$result=mysqli_query($con,$qry);
$count=mysqli_affected_rows($con);
if($count==1)
{
	header("location:drop.html");
	}
	else
	{
		echo "wrong";
	}
}

?>
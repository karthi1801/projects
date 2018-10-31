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
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="signinstyle.css">
<link rel="stylesheet" type="text/css" href="homestyle.css">
	<style type="text/css">
	body{
		background:black;
	}
	table{
	border-collapse- collapse;
	width:100%;
	color:black;
	font-family:monospace;
	font-size:20px;
	text-align:left;
	}
	th
	{
	background-color:#d96459;
	color:white;
	}
	tr:nth-child(even) {background-color: #f2f2f2}
   
.block
{
width: 1300px;
height: 1000px;
border-radius: 20px;
background: white;
//border-color:white ;
top: 99%;
left: 50%;
position: absolute;
transform: translate(-50%,-60%);
//box-sizing: border-box;
padding: 70px 39px;
}
	
	</style>
</head>
<body>
<ul>

  <li><a class="active" href=""><font size="4"><img src="icon1.png" width="40" height="40">HRM SYSTEM</a></li>
  <div style="float:right";><li><a href="drop.php"><img src="login.png" width="35" height="35">Admin home</a></li>
</ul>
<div class ="block">
<table>
<tr>
<th>id</th>
<th>name</th>
<th>address</th>
<th>company name</th>
<th>contact no</th>
<th>Email id</th>
<th>username</th>
<th>password</th>
</tr>
	<tbody>
	
	
		<?php
		include_once('connect_db.php');
		
		$result=mysql_query("select * from admin where a_id='$id'");
		
        if($result>0){
		while($row=mysql_fetch_array($result))  
		{
			echo "<tr><td>".$row['a_id']."</td><td>".$row['a_name']."</td><td>".$row['a_address']."</td><td>".$row['a_compname']."</td><td>".$row['a_cntno']."</td><td>".$row['a_email']."</td><td>".$row['a_uname']."</td><td>".$row['a_pword']."</td></tr>";
		}
		}
		else
		{
		echo "0 result";
		}
		
		?> 
	</tbody>
</table>
</div>


</body>
</html>
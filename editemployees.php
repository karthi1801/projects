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
width: 1330px;
height: 1000px;
border-radius: 20px;
background: white;
//border-color:white ;
top: 99%;
left: 50%;
position: absolute;
transform: translate(-50%,-60%);
//box-sizing: border-box;
padding: 7px 39px;
}
.block h1
{
	font;black;
	text-align:center;
	
	
}
</head>	
	</style>
<body>
<ul>

  <li><a class="active" href=""><font size="4"><img src="icon1.png" width="40" height="40">HRM SYSTEM</a></li>
  <div style="float:right";><li><a href="drop.php"><img src="login.png" width="35" height="35">Admin home</a></li>
</ul>
<div class ="block">
<h1>employee details</h1>
<table>
<tr>
<th>id</th>
<th>fname</th>
<th>lname</th>
<th>gender</th>
<th>address</th>
<th>state</th>
<th>contact no</th>
<th>Email id</th>

<th>username</th>
<th>password</th>
<th>edit</th>
</tr>
	<tbody>
	
	
		<?php
		$con=new mysqli('localhost','root','','hr_system');

		$qry="select * from employees ";
		$result=mysqli_query($con,$qry);
		
        if($result->num_rows >0){
			
		while($row= $result->fetch_assoc())  
		{
			
			
			echo "<tr>
			      <td>".$row['id']."</td>
			      <td>".$row['fname']."</td>
				  <td>".$row['lname']."</td>
				  <td>".$row['gender']."</td>
				  <td>".$row['address']."</td>
				  <td>".$row['state']."</td>
				  <td>".$row['mobno']."</td>
				   <td>".$row['mail']."</td>
				  <td>".$row['username']."</td>
				  <td>".$row['password']."</td>
				 <td><a href='editdata.php?empid=".$row['id']."'>edit profile</a></td>
				  </tr>";
				  
		}
		}
		else
		{
		echo "0 result";
		}
		$con->close();
		?> 
	</tbody>
</table>
</div>


</body>
</html>
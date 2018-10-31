<?php
session_start();
include_once ('connect_db.php');
if(isset($_SESSION['user1'])){
	$user=$_SESSION['user1'];
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
width: 1350px;
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
 

  <div style="float:right";><li><a href="hrhome.php"><img src="login.png" width="35" height="35">HR Home</a></li>
  
</ul>
<div class ="block">
<h1>Employee call letter details</h1>
<table>
<tr>
<th>emp id</th>
<th>fname</th>
<th>lname</th>
<th>gender</th>
<th>Job title</th>
<th>Reporting to</th>
<th>Company</th>
<th>State</th>
<th>City</th>
<th>Key activities</th>
<th>Special Requirements</th>
</tr>
	<tbody>
	
	
		<?php
	    include('connect_db.php');
		$result=mysql_query("select employees.id,employees.fname,employees.lname,employees.gender,empcalls.jobtitle,empcalls.reporting,empcalls.company,empcalls.state,
		empcalls.city,empcalls.keyactive,empcalls.special from employees,empcalls where employees.id=empcalls.e_id ");
		
        if($result>0){
		while($row=mysql_fetch_array($result))  
		{
			echo "<tr>
			      <td>".$row['id']."</td>
			      <td>".$row['fname']."</td>
				  <td>".$row['lname']."</td>
				  <td>".$row['gender']."</td>
				   <td>".$row['jobtitle']."</td>
				    <td>".$row['reporting']."</td>
				  <td>".$row['company']."</td>
				 <td>".$row['state']."</td>
				    <td>".$row['city']."</td>
				  <td>".$row['keyactive']."</td>
				  <td>".$row['special']."</td>
				    
				  </tr>";
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
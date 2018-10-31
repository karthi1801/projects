<?php
session_start();
include_once ('connect_db.php');
if(isset($_SESSION['username'])){
	$user=$_SESSION['username'];
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
	text-align:center;
	padding:10px;
	}
	td{
		height:39px;
	}
	tr:nth-child(even) {
		background-color: #f2f2f2
	}
   
.block
{
width: 1240px;
height: 700px;
border-radius: 20px;
background: white;
//border-color:white ;
top: 82%;
left: 50%;
position: absolute;
transform: translate(-50%,-60%);
//box-sizing: border-box;
padding: 50px 39px;
}
	
	</style>
</head>
<body>
<ul>

  <li><a class="active" href=""><font size="4"><img src="icon1.png" width="40" height="40">HRM SYSTEM</a></li>
  <div style="float:right";><li>
 <a href="emphome.php"><img src="login.png" width="35" height="35">employee home</a></li>
 
</ul>
<div class ="block">
<table>
<tr>
<th>Employee Performence</th>
</tr>
	<tbody>
	
	
		<?php
		include_once ('connect_db.php');
		
		$result=mysql_query("select employees.id,employees.fname,employees.lname,employees.gender,emp_perform.keyskills,emp_perform.feedback,emp_perform.rating
		from employees,emp_perform where employees.id=emp_perform.p_id and employees.id='$id'");
		if($result>0){
		while($row = mysql_fetch_array($result))                                                
		{
			
			echo "<tr>
			<tr><td>ID:  "  .$row['id']."</td></tr>
			<tr><td>FNAME:  "  .$row['fname']."</td></tr>
			<tr><td>LNAME:  "  .$row['lname']."</td></tr>
			<tr><td>GENDER:  "  .$row['gender']."</td></tr>
			<tr><td>KEYSKILLS:  "   .$row['keyskills']."</td></tr>
			<tr><td>FEEDBACK:  "   .$row['feedback']."</td></tr>
			<tr><td>RATING:  "   .$row['rating']."</td></tr>
			
			
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
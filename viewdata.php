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
  
  <div style="float:right";><li><a href="hrhome.php"><img src="login.png" width="35" height="35">HR home</a></li>
  
</ul>
<div class ="block">
<h1>Employee performence</h1>
<table>
<tr>
<th>id</th>
<th>fname</th>
<th>lname</th>
<th>gender</th>
<th>keyskills</th>
<th>feed back</th>
<th>Rating</th>
<th>emp calls</th>
</tr>
	<tbody>
	
	
		<?php
		include_once('connect_db.php');
		$result=mysql_query("select employees.id,employees.fname,employees.lname,employees.gender,emp_perform.keyskills,emp_perform.feedback,emp_perform.rating from employees,emp_perform where employees.id=emp_perform.p_id ");
        if($result>0){
		while($row=mysql_fetch_array($result))  
		{
			echo "<tr>
			      <td>".$row['id']."</td>
			      <td>".$row['fname']."</td>
				  <td>".$row['lname']."</td>
				  <td>".$row['gender']."</td>
				   <td>".$row['keyskills']."</td>
				    <td>".$row['feedback']."</td>
				  <td>".$row['rating']."</td>
				

     
	  
				  <td><a href='calemp.php' >send call letter</a></td></tr>";	
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
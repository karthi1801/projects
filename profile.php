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
height: 860px;
border-radius: 20px;
background: white;
//border-color:white ;
top: 86%;
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
  
  <div style="float:right";><li><a href="emphome.php"><img src="login.png" width="35" height="35">employee home</a></li>
  
  
</ul>
<div class ="block">
<table>
<tr>
<th>Employee Profile</th>
</tr>
	<tbody>
	
	
		<?php
		
		
		$con=new mysqli('localhost','root','','hr_system');
		$qry="select * from employees where id='$id'";
		$result=mysqli_query($con,$qry);
        if($result->num_rows >0){
		while($row= $result->fetch_assoc())  
		{
			$image = $row['image'];
			echo "<tr>
			<tr><td>PROFILE IMAGE: <img src='image/".$image."' height='150' width='150' ></td></tr>
			<tr><td>ID:  "  .$row['id']."</td></tr>
			<tr><td>FNAME:  "  .$row['fname']."</td></tr>
			<tr><td>LNAME:  "  .$row['lname']."</td></tr>
			<tr><td>GENDER:  "  .$row['gender']."</td></tr>
			<tr><td>ADDRESS:  "  .$row['address']."</td></tr>
			<tr><td>STATE:  "   .$row['state']."</td></tr>
			<tr><td>MOB NO:  "   .$row['mobno']."</td></tr>
			<tr><td>EMAIL ID:  "   .$row['mail']."</td></tr>
			<tr><td>COMPANY NAME:  "   .$row['company']."</td></tr>
			<tr><td>DESIGNATION:  "   .$row['designation']."</td></tr>
			<tr><td>EXPERIENCE:  "   .$row['experience']."</td></tr>
			<tr><td>USER NAME:  "   .$row['username']."</td></tr>
			<tr><td>PASSWORD:  "   .$row['password']."</td></tr>
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

	<img src=""
	
	
	
</table>
</div>


</body>
</html>
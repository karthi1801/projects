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

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>

body
{

background: url(cropped-iStock.jpg);
background-size: cover;
//background-position: center;
font-family: sans-serif;
}
.navbar {
    overflow: hidden;
    background-color: #333;
    font-family: Arial, Helvetica, sans-serif;
margin-top: -10px; 
margin-left: -9px; 
width: 1370px;
border-radius:10px;
}
 h1
{
margin-left:60px;
color: white;
}

.navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    
   
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: grey;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    
   
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
</head>
<body>
<h1><i>HRMS SYSTEM</i></h1>
<div class="navbar">
  <div class="dropdown">
  <div class="dropbtn">Profile
  <div class="fa fa-caret-down"></div>
  </div>
  <div class="dropdown-content">
  

       <a href="viewhrparticular.php">View profile</a>
	
	  
	   
  </div>
  </div>
<div class="dropdown">
  <div class="dropbtn">Performence
  <div class="fa fa-caret-down"></div>
  </div>
  <div class="dropdown-content">
 
	   <a href="viewhrperparticular.php">View Performence</a>
	 
	  
  </div>
  </div>	   
 
  <div class="dropdown">
    <div class="dropbtn">Employees
      <i class="fa fa-caret-down"></i>
    </div>
    <div class="dropdown-content">
	

      <a href="viewemployees1.php">Employee details</a>
	  
	  
 <a href="viewdata.php">Employee Performence</a>
	  
      <a href="viewcall.php">Employee calls</a>
	 
	 
      
    </div>
  </div> 
 
  <div style="float:right";><a href="logout.php">Logout</a> 
</div>
</body>
</html>

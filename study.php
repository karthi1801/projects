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
<html>
<head>
<title>Studey materials</title>
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="homestyle.css">
<link rel="stylesheet" type="text/css" href="aboutstyle.css">
</head>
<style>
.login-box
{
width: 560px;
height: 500px;
border-radius: 20px;
background: rgba(0, 0, 0, 0.5);
color: #fff;
top: 60%;
left: 50%;
position: absolute;
transform: translate(-50%,-60%);
//box-sizing: border-box;
padding: 70px 39px;
}
</style>
<body>
<ul>
 <ul>

  <li><a class="active" href=""><font size="4"><img src="icon1.png" width="40" height="40">HRM SYSTEM</a></li>
  
  <div style="float:right";><li><a href="emphome.php"><img src="login.png" width="35" height="35">Emp home</a></li>
</ul>
</ul>
<div class="login-box">
<h1>Studey Materials Links</h1>
<form>
<pre>HTML,Css,Javascript Tutorials:          <a href="https://www.w3schools.com/html/html_links.asp" target="_blank">Web link 1</a></pre>
<pre>Data Structure tutorials:               <a href="https://www.javatpoint.com/data-structure-tutorial"target="_blank">Web link 2</a></pre>
<pre>Algorithms,Data Structure tutorials:    <a href="https://www.geeksforgeeks.org/"target="_blank">Web link 3</a></pre>
<pre>Php,MYsql tutorials:                    <a href="https://www.w3schools.com/sql/default.asp" target="_blank">Web link 4</a></pre>
<pre>Java Tutorials:                         <a href="https://www.javatpoint.com/java-tutorial" target="_blank">Web link 5</a></pre>
<pre>Programming Practice:                   <a href="https://www.hackerrank.com/login?h_r=login&h_l=body_middle_left_button " target="_blank">Web link 6</a></pre>



</form>
</div>
</body
</html>

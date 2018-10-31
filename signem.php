<?php
$con=new mysqli('localhost','root','',"hr_system");
if(isset($_POST['sub'])){
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
$filename = $_FILES['img']['name'];
  $filetmpname = $_FILES['img']['tmp_name'];
  $folder = 'image/';
  $filename1=$_FILES['resume']['name'];
  $filetmpname1=$_FILES['resume']['tmp_name'];
  $folder1='resume/';
  move_uploaded_file($filetmpname, $folder.$filename);
  move_uploaded_file($filetmpname1,$folder1.$filename1);
$qry="insert into employees (id,fname,lname,gender,address,state,mobno,mail,company,designation,experience,username,password,image,resume) values ('$id',
'$firstname','$lastname','$gender','$address','$state','$mobno','$mailid','$company','$designation','$exper','$uname','$pwd','$filename','$filename1')";
//echo "string";
$result=mysqli_query($con,$qry);
if($result==TRUE)
{
	echo"inserted";
header("location:drop.php");

}
else
{
echo"do nothing";
}
}

?>





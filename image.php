<?php

$conn = mysqli_connect("localhost", "root", "", "image_upload");

if($conn) {

 echo "connected";



}

 if(isset($_POST['uploadfilesub'])) {

  $filename = $_FILES['uploadfile']['name'];

  $filetmpname = $_FILES['uploadfile']['tmp_name'];

  $folder = 'image/';



  move_uploaded_file($filetmpname, $folder.$filename);





 $sql = "INSERT INTO `image` (`image`)  VALUES ('$filename')";

                          



 $qry = mysqli_query($conn,  $sql);

 if( $qry) {

  echo "image uploaded";

 }





}



 

?>
<?php



$connection = mysqli_connect("localhost", "root", "", "image_upload");

if ($connection) {

 echo "connected";

}

$select = " SELECT * FROM `image` " ;

$query = mysqli_query($connection, $select) ;



while($row = mysqli_fetch_array($query)) {

 $image = $row['image'];

<img src="image/'.$image.'" height="150" width="150" >

 




}





?>










<!DOCTYPE html>

<html>



<body>





<form action="" method="post" enctype="multipart/form-data" >



 <input type="file" name="uploadfile" />

 <input type="submit" name="uploadfilesub" value="upload" />



</form>

</body>



</html>





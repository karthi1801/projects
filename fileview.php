<table width="80%" border="1">
    <tr>
    <td>File Name</td>
    <td>File Type</td>
    <td>File Size(KB)</td>
    <td>View</td>
    </tr>
    <?php
	$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "hr_system";
mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($dbname) ;
 $sql="SELECT * FROM tbl_uploads";
 $result_set=mysql_query($sql);
 while($row=mysql_fetch_array($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row['file'] ?></td>
        <td><?php echo $row['type'] ?></td>
        <td><?php echo $row['size'] ?></td>
        <td><a href="C:/xampp/phpMyAdmin/hrsystem/<?php echo $row['file'] ?>" target="_blank">view file</a></td>
        </tr>
        <?php
 }
 ?>
</table>
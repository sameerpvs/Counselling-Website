<?php

$host = 'localhost';
$user = 'sam_admin';
$pass = 'admin ';

mysql_connect($host, $user, $pass);

mysql_select_db('test_it');



 if($_SERVER["REQUEST_METHOD"] == "POST") {

$imagename=$_FILES["myimage"]["name"]; 


$imagetmp=addslashes (file_get_contents($_FILES['myimage']['tmp_name']));


$insert_image="INSERT INTO  `test_it`.`images_tbl` (`images_id`,`images_path` ,`images_name`) VALUES (NULL , '$imagetmp','$imagename')";

mysql_query($insert_image);
}

?>


<html>
<body>
		
<form method="POST"  enctype="multipart/form-data">
 <input type="file" name="myimage">
 <input type="submit" name="submit" value="Upload">
</form>

</body>
</html>






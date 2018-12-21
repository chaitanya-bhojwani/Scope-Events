<?php
include 'connect.php';
$a = $_POST['request_id'];
$file_name=$_FILES['file']['name'];
//$file_type=$_FILES['file']['type'];
//$file_size=$_FILES['file']['size'];
$file_tmp_loc=$_FILES['file']['tmp_name'];
$file_store="upload/".$file_name;
move_uploaded_file($file_tmp_loc, $file_store);
mysqli_query($con,'UPDATE events SET doc_status=1, upload_file_path="'.$file_store.'" WHERE request_id='.$a.';');
echo $a;
?>
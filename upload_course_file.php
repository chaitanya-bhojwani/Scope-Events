<?php
include 'connect.php';
$a = $_POST['request_id'];
$b = $_POST['type'];
if($b==1){
    $b="Syllabus";
}
else if($b==2){
    $b="Lesson_Planner";
}
else if($b==3){
    $b="CAT1_QP";
}
else if($b==4){
    $b="CAT1_Key";
}
else if($b==5){
    $b="CAT2_QP";
}
else if($b==6){
    $b="CAT2_Key";
}
else if($b==7){
    $b="DA1";
}
else if($b==8){
    $b="Quiz1";
}
else if($b==9){
    $b="Quiz2";
}
else if($b==10){
    $b="Analysis";
}
$file_name=$_FILES['file']['name'];
//$file_type=$_FILES['file']['type'];
//$file_size=$_FILES['file']['size'];
$file_tmp_loc=$_FILES['file']['tmp_name'];
$file_store="upload/".$file_name;
move_uploaded_file($file_tmp_loc, $file_store);
mysqli_query($con,'UPDATE courses SET '.$b.'="'.$file_store.'" WHERE rec_no='.$a.';');
echo $a;
?>
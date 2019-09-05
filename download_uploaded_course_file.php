<?php
include 'connect.php';
$a = $_POST['param1'];
$b = $_POST['param2'];
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
$query ='SELECT * FROM courses WHERE rec_no="'.$a.'"';
$result = mysqli_query($con, $query);
if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $path=$row["Syllabus"];
        }
}
echo $path;
?>
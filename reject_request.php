<?php
include 'connect.php';
$a = $_POST['param1'];
$b = $_POST['param2'];
mysqli_query($con,'UPDATE events SET approval_status="2" WHERE request_id='.$a.';');
echo $a;
?>
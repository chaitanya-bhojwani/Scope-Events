<?php
include 'connect.php';
$a = $_POST['param1'];
$b = $_POST['param2'];
mysqli_query($con,'DELETE FROM events WHERE request_id='.$a.';');
echo $a;
?>
<?php
include 'connect.php';
$a = $_POST['param1'];
$b = $_POST['param2'];
$query ='SELECT * FROM events WHERE request_id="'.$a.'"';
$result = mysqli_query($con, $query);
if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $path=$row["upload_file_path"];
        }
}
echo $path;
?>
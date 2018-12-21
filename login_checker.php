<?php
include 'connect.php';
$email = $_POST['email1'];
$password = $_POST['password1'];
$query = 'SELECT * FROM login WHERE id="'.$email.'" and password="'.$password.'"';
$result = mysqli_query($con, $query);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if($row["role"]=="teacher") {
            session_start();
            $_SESSION["loginid"] = $email;
            $_SESSION["department"] = $row["department"];
            header("Location: Portal_teachers.php");
        }
        else if($row["role"]=="hod") {
            session_start();
            $_SESSION["loginid"] = $email;
            $_SESSION["department"] = $row["department"];
            header("Location: Portal_HOD.php");
        }
    }
}
else {
header("Location: index.php?msg=1");
}
?>
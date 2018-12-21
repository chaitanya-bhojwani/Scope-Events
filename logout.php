<?php
session_start();
unset($_SESSION["loginid"]);
unset($_SESSION["department"]);
session_destroy();
header("Location: index.php");
?>
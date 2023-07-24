<?php

require("DBConnection.php");
session_start();

date_default_timezone_set("Asia/Kolkata");
$time = date("h:i:sa");
$date = date("d-m-Y");

$adminemail = $_SESSION["mobile"];

$sql3 = "UPDATE `parentlogin` SET `status`='false' WHERE `mobile`='$adminemail'";
if (mysqli_query($conn, $sql3))
{
    session_destroy();
    header("location:../../../home.php");
}
else
{
    echo "Logout Failed";
}

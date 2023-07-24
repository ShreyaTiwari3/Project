<?php

require("DBConnection.php");
session_start();

date_default_timezone_set("Asia/Kolkata");
$time = date("h:i:sa");
$date = date("d-m-Y");

$adminemail = $_SESSION["AdminEmail"];

$sql3 = "UPDATE `adminlogin` SET `LastLogoutDate`='$date',`LastLogoutTime`='$time',`CurrentStatus`='false' WHERE `AdminEmail`='$adminemail'";
if (mysqli_query($conn, $sql3))
{
    session_destroy();
    header("location:../../../home.php");
}
else
{
    echo "Logout Failed";
}

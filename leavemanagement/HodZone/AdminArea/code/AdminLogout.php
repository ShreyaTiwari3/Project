<?php

require("DBConnection.php");
session_start();

date_default_timezone_set("Asia/Kolkata");
$time = date("h:i:sa");
$date = date("d-m-Y");

$adminemail = $_SESSION["email"];

$sql3 = "UPDATE `hodlogin` SET `status`='false' WHERE `email`='$adminemail'";
if (mysqli_query($conn, $sql3))
{
    session_destroy();
    header("location:../../../home.php");
}
else
{
    echo "Logout Failed";
}

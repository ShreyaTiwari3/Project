<?php
session_start();
require("DBConnection.php");
date_default_timezone_set("Asia/Kolkata");
$time = date("h:i:sa");
$date = date("d-m-Y");
$datetime = $date . " " . $time;

$mobile = $_POST['mobile'];
$password = $_POST['password'];



$sel = "select * from parentlogin where mobile='$mobile' and password='$password'";
$r = mysqli_query($conn, $sel);
$res = mysqli_fetch_array($r, MYSQLI_BOTH);


if ($res['2'] == $mobile)
{
    if ($res['3'] == $password)
    {
        $up = "update parentlogin set status='true' where mobile='$mobile'";
        if (mysqli_query($conn, $up))
        {
            $_SESSION['mobile'] = $mobile;
            header("location:../Dashboard.php");
        }
        else 
        {
            echo "<br>";
            echo "YOUR DETAILS NOT MATCHED.<br>KINDLY RE-ENTER:";
        }
    }
    else
    {
        echo "<br>";
        echo "YOUR DETAILS NOT MATCHED.<br>KINDLY RE-ENTER:";
    }
}

else
{
    echo "<br>";
    echo "YOUR DETAILS NOT MATCHED.<br>KINDLY RE-ENTER:";
}

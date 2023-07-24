<?php
session_start();
require("DBConnection.php");
date_default_timezone_set("Asia/Kolkata");
$time = date("h:i:sa");
$date = date("d-m-Y");
$datetime = $date . " " . $time;

$email = $_POST['email'];
$password = $_POST['password'];



$sel = "select * from hodlogin where email='$email' and password='$password'";
$r = mysqli_query($conn, $sel);
$res = mysqli_fetch_array($r, MYSQLI_BOTH);


if ($res['2'] == $email)
{
    if ($res['3'] == $password)
    {
        $up = "update hodlogin set status='true' where email='$email'";
        if (mysqli_query($conn, $up))
        {
            $_SESSION['email'] = $email;
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


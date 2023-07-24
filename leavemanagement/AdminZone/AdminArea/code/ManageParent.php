<?php

require("DBConnection.php");
$a = $_POST['fullname'];
$b = $_POST['mobile'];
$c = $_POST['password'];
$date = date("d-m-y");
$time = date("h:i:sa");
date_default_timezone_set("Asia/Kolkata");
$ins = "insert into parentlogin(name,mobile,password,date,time,status) values('$a','$b','$c','$date','$time','true')";
if (mysqli_query($conn, $ins))
{
    header("location:../Parent?msg=addsuccess");
}
else
{
    header("location:../Parent?msg=adderror");
}

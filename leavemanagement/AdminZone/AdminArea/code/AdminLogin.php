<?php

require("DBConnection.php");

session_start();

date_default_timezone_set("Asia/Kolkata");
$time=date("h:i:sa");
$date=date("d-m-Y");

$email=mysqli_real_escape_string($conn,$_POST['AdminEmail']);
//echo $email;
//echo "<br/>";
$password=mysqli_real_escape_string($conn,$_POST['AdminPassword']);
//$password=md5($password);
//echo $password;
//echo "<br/>";

$sql1="select * from adminlogin where AdminEmail='".$email."' and AdminPassword='".$password."'";
$res1=mysqli_query($conn,$sql1);
$row1=mysqli_fetch_array($res1,MYSQLI_BOTH);

if(mysqli_num_rows($res1)>0)
{
    if($row1["Status"]=="true")
    {
        if($row1["AdminEmail"]==$email && $row1["AdminPassword"]==$password )
        {
            $_SESSION["AdminEmail"]=$email;
            // $_SESSION["AdminID"]=$row1['AdminLoginID'];
            $_SESSION["UserType"]=$row1["UserType"];
            error_reporting(0);
            require("class.logindetails.php");
            $logindetail = new logindetails();

            $mac="Unable to Fetch";
            if($logindetail->get_mac()!="")
            {
                $mac=$logindetail->get_mac();
            }
            $ip=$logindetail->get_ip();
            $browser=$logindetail->get_useragent();
            $os=$logindetail->get_os();
            $uname=$logindetail->get_userName();

            $adminid=$row1["AdminLoginID"];
            $adminname=$row1["AdminName"];

            $sql2="INSERT INTO `logindetails`(`LoginID`, `IP`, `MAC`, `UserName`, `BrowserName`, `OSName`, `Date`, `Time`) VALUES ($adminid,'$ip','$mac','$uname','$browser','$os','$date','$time')";
			
            mysqli_query($conn,$sql2);

            $sql3="UPDATE `adminlogin` SET `LastLoginDate`='$date',`LastLoginTime`='$time',`CurrentStatus`='true' WHERE `AdminLoginID`=$adminid";
            mysqli_query($conn,$sql3);
            
            header("location:../Dashboard");
        }
        else
        {
            header("location:../index?msg=userpasserror");
        }
    }
    else
    {
       header("location:../index?msg=blocked");
    }
}
else
{
   header("location:../index?msg=userpasserror");
}

?>
<?php
session_start();
echo $_SESSION['mobile'];
require("DBConnection.php");

$a = $_POST['roll'];
$b = $_POST['id'];
$c = $_POST['stname'];
$d = $_POST['class'];
$e = $_POST['hname'];
$f = $_POST['gname'];
$g = $_POST['reason'];
$h = $_POST['dog'];
$i = $_POST['to'];
$j = $_POST['days'];
$k = $_POST['yn'];
$l = $_POST['in'];
$m = $_POST['relws'];
$n = $_POST['add'];
$o = $_POST['mobile'];
$p = $_POST['addofan'];
$q = $_POST['date'];
//$r = $_POST['sign'];
$s = $_POST['parent'];
$t = $_POST['cate'];
//$u=$_POST['file']['name'];
//$v=$_POST['file']['type'];
//$w=$_POST['file']['size'];
//$x=$_POST['file']['tmp_name'];
$loc="../../../images/";

  

$ins = "INSERT INTO `application`(`parid`,`cate`,`roll`, `idn`, `stname`, `class`, `htname`, `gname`, `reason`, `dog`, `to`, `days`, `yn`, `in`, `relws`, `add`, `mobile`, `addofan`, `date`, `sign`, `status`) VALUES ('$s','$t','$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o','$p','$q','$u','pending')";
if (mysqli_query($conn, $ins))
{
    move_uploaded_file($x,$loc.$u);

    header("location:../Dashboard.php");
}
else
{
    header("location:../ManageApplication.php");
}

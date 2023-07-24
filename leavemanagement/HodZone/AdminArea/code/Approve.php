<?php
require("DBConnection.php");
$id = $_REQUEST['i'];
$sel = "select * from application where id='$id'";
$r = mysqli_query($conn, $sel);
$res = mysqli_fetch_array($r, MYSQLI_BOTH);

$up = "update application set status='Approved' where id='$id'";
if (mysqli_query($conn, $up))
{
    header("location:../ManageNleave.php");
}
else
{
    echo "error";
}

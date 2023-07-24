<?php

require("DBConnection.php");
require("SMSSender.php");

session_start();

date_default_timezone_set("Asia/Kolkata");
$time = date("h:i:sa");
$date = date("d-m-Y");
$datetime = $date . " " . $time;

$action = mysqli_real_escape_string($conn, $_REQUEST['action']);

switch ($action)
{
    case "addCategory":

        $category = mysqli_real_escape_string($conn, $_POST['category']);
        $categoryimage = $_FILES['categoryimage']['name'];
        $tmp = $_FILES['categoryimage']['tmp_name'];
        $type = $_FILES['categoryimage']['type'];
        $size = $_FILES['categoryimage']['size'];
        $location = "../uploads/cat_image/";

        $sel = "INSERT INTO `category`(`category`,`categoryimage`, `status`, `date`, `time`) VALUES ('$category','$categoryimage','true','$date','$time')";

        if (mysqli_query($conn, $sel))
        {
            move_uploaded_file($tmp, $location . $categoryimage);
            header("location:../ManageVideoCategory?msg=addsuccess"); // Add Success
        }
        else
        {
            header("location:../ManageVideoCategory?msg=adderror"); // Something went wrong
        }

        break;


    case "changestatus":

        $status = mysqli_real_escape_string($conn, $_POST['status']);
        $id = mysqli_real_escape_string($conn, $_POST['id']);
        if ($status == "true")
        {
            $query2 = "update category set Status='true' where ID='$id'";
            if (mysqli_query($conn, $query2))
            {
                echo "Success";
            }
            else
            {
                echo "Error";
            }
        }
        else if ($status == "false")
        {
            $query2 = "update category set Status='false' where ID='$id'";
            if (mysqli_query($conn, $query2))
            {
                echo "Success";
            }
            else
            {
                echo "Error";
            }
        }


        break;

    case "delete":
        $id = mysqli_real_escape_string($conn, $_POST['id']);
        $query = "delete from category where ID='$id'";
        if (mysqli_query($conn, $query))
        {
            echo "Success";
        }
        else
        {
            echo "Error";
        }

        break;
}

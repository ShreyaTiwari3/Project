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
	case "add":

		$fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
		$mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$username = mysqli_real_escape_string($conn, $_POST['username']);
		$password = mysqli_real_escape_string($conn, $_POST['password']);

		$status = "true";

		$query_auth = "select * from employees where mobile='$mobile'";
		$res_auth = mysqli_query($conn, $query_auth);
		$num_rows = mysqli_num_rows($res_auth);
		if ($num_rows > 0)
		{
			header("location:../ManageVolunteers?msg=alredyexist"); // Mobile Already Exist
		}
		else
		{
			$query = "INSERT INTO `employees`(`FullName`, `Mobile`, `Email`,  `UserName`, `Password`, `Date`, `Status`) VALUES ('$fullname','$mobile','$email','$username','$password','$datetime','$status')";
			if (mysqli_query($conn, $query))
			{
				// $msg="Welcome to HEWF, Your Username : $username and Password : $password , Download App, Thank you.";
				// SendSMS($msg,$mobile);

				header("location:../ManageVolunteers?msg=addsuccess"); // Add Success
			}
			else
			{
				header("location:../ManageVolunteers?msg=adderror"); // Something went wrong
			}
		}


		break;


	case "changestatus":

		$status = mysqli_real_escape_string($conn, $_POST['status']);
		$id = mysqli_real_escape_string($conn, $_POST['id']);
		if ($status == "true")
		{
			$query2 = "update employees set Status='true' where ID='$id'";
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
			$query2 = "update employees set Status='false' where ID='$id'";
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
		$query = "delete from employees where ID='$id'";
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

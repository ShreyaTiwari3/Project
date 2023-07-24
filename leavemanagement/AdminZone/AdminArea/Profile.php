<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <?php include("HeaderLink.php"); ?>
    <title>Admin Profile - <?= $panel_name ?></title>
    
</head>

<body class="sb-nav-fixed">

    <?php include("TopBar.php"); ?>

    <div id="layoutSidenav">
        <?php include("SideBar.php"); ?>

        <div id="layoutSidenav_content">
            <main>

                <div class="sb-page-header pb-10 sb-page-header-dark bg-gradient-primary-to-secondary">
                    <div class="container-fluid">
                        <div class="sb-page-header-content py-5">
                            <h1 class="sb-page-header-title">
                                <div class="sb-page-header-icon"><i data-feather="activity"></i></div>
                                <span>Manage Admin Profile</span>
                            </h1>
                            <div class="sb-page-header-subtitle"></div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid mt-n10">

                    <div class="modal fade" id="editprofile">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">

                                    <h4 class="modal-title">Edit Details</h4>
                                    <button class="close" data-dismiss="modal"><span>&times;</span></button>

                                </div>
                                <div class="modal-body">

                                    <form action="code/ManageProfileCode?action=editprofile" method="post">

                                        <div class="form-group">
                                            <label>Admin Email</label>
                                            <input type="email" value="<?php echo $row_admin["AdminEmail"]; ?>"
                                                name="adminemail" class="form-control" />
                                        </div>

                                        <div class="form-group">
                                            <label>Admin Name</label>
                                            <input type="text" value="<?php echo $row_admin["AdminName"]; ?>"
                                                name="adminname" class="form-control" />
                                        </div>

                                        <div class="form-group">
                                            <button class="btn btn-primary"> Submit </button>
                                        </div>
                                    </form>

                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-sm btn-danger" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="changepassword">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">

                                    <h4 class="modal-title">Edit Details</h4>
                                    <button class="close" data-dismiss="modal"><span>&times;</span></button>

                                </div>
                                <div class="modal-body">

                                    <form action="code/ManageProfileCode?action=changepassword" method="post">

                                        <div class="form-group">
                                            <label>Enter Old Password</label>
                                            <input type="password" name="oldpass" class="form-control"
                                                placeholder="Enter Old Password" />
                                        </div>

                                        <div class="form-group">
                                            <label>Enter New Password</label>
                                            <input type="password" name="newpass" class="form-control"
                                                placeholder="Enter New Password" />
                                        </div>

                                        <div class="form-group">
                                            <label>Re-Enter New Password</label>
                                            <input type="password" name="cnfnewpass" class="form-control"
                                                placeholder="Re-Enter New Password" />
                                        </div>

                                        <div class="form-group">
                                            <button class="btn btn-primary"> Submit </button>
                                        </div>
                                    </form>

                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-sm btn-danger" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card">
                        <div class="card-header"> Admin Profile &emsp; <a href="#" data-toggle="modal"
                                data-target="#editprofile" class="btn btn-secondary">Edit &nbsp; <i
                                    class="fa fa-edit"></i> </a> </div>
                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table table-bordered table-hover" width="100%" cellspacing="0">
                                    

                                    <tbody>
                                        <?php
                                            

                                        ?>
                                        <tr>
                                            <th>Admin Name</th>
                                            <td><?php echo $row_admin["AdminName"]; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Admin Email</th>
                                            <td><?php echo $row_admin["AdminEmail"]; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Admin Password</th>
                                            <td><?php echo $row_admin["AdminPassword"]; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Last Login</th>
                                            <td><?php echo $row_admin["LastLoginDate"]; ?>
                                                <?php echo $row_admin["LastLoginTime"]; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Last Logout</th>
                                            <td><?php echo $row_admin["LastLogoutDate"]; ?>
                                                <?php echo $row_admin["LastLogoutTime"]; ?></td>
                                        </tr>

                                    </tbody>

                                    
                                </table>
                            </div>


                        </div>
                    </div>

                    <br /><br />

                    <div class="card">
                        <div class="card-header"> Admin Login History &emsp; <a href="#" data-toggle="modal"
                                data-target="#changepassword" class="btn btn-danger">Change Password &nbsp; <i
                                    class="fa fa-edit"></i> </a> </div>
                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table table-bordered table-hover" id="dataTable" width="100%"
                                    cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>SR. No.</th>
                                            <th>IP</th>
                                            <th>MAC</th>
                                            <th>User Name</th>
                                            <th>Browser Name</th>
                                            <th>OS Name</th>
                                            <th>Date Time</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
											$id=$row_admin["AdminLoginID"];
											$query1="select * from logindetails where LoginID='$id'";
											$res1=mysqli_query($conn,$query1);
											while($row1=mysqli_fetch_array($res1,MYSQLI_BOTH))
											{
											?>
                                        <tr>
                                            <td> <?php echo $row1["LoginDetailsID"]; ?> </td>
                                            <td> <?php echo $row1["IP"]; ?> </td>
                                            <td> <?php echo $row1["MAC"]; ?> </td>
                                            <td> <?php echo $row1["UserName"]; ?> </td>
                                            <td> <?php echo $row1["BrowserName"]; ?> </td>
                                            <td> <?php echo $row1["OSName"]; ?> </td>
                                            <td> <?php echo $row1["Date"]; ?> <?php echo $row1["Time"]; ?> </td>
                                        </tr>
                                        <?php
											}
											?>
                                    </tbody>

                                   
                                </table>
                            </div>


                        </div>
                    </div>


                </div>


            </main>

            <?php include("Footer.php"); ?>
        </div>
    </div>
    <?php include("FooterLink.php"); ?>

    <?php
		if(isset($_REQUEST["msg"]) && $_REQUEST["msg"]=="changepasswordsuccess")
		{
		?>
    <script>
    $(document).ready(function() {
        toastr.success('Password Changed Successfully.', 'Success', {
            timeOut: 10000
        })
    });
    </script>
    <?php
		}
		else if(isset($_REQUEST["msg"]) && $_REQUEST["msg"]=="editsuccess")
		{
		?>
    <script>
    $(document).ready(function() {
        toastr.success('Profile Edited Successfully.', 'Success', {
            timeOut: 10000
        })
    });
    </script>
    <?php
		}
		else if(isset($_REQUEST["msg"]) && $_REQUEST["msg"]=="oldpasserror")
		{
		?>
    <script>
    $(document).ready(function() {
        toastr.warning('Old Password not Matched.', 'Warning', {
            timeOut: 10000
        })
    });
    </script>
    <?php
		}
		else if(isset($_REQUEST["msg"]) && $_REQUEST["msg"]=="newpasserror")
		{
		?>
    <script>
    $(document).ready(function() {
        toastr.warning('New Password not Matched.', 'Warning', {
            timeOut: 10000
        })
    });
    </script>
    <?php
		}
		else if(isset($_REQUEST["msg"]) && $_REQUEST["msg"]=="editerror")
		{
		?>
    <script>
    $(document).ready(function() {
        toastr.warning('Problem in editing Profile.', 'Warning', {
            timeOut: 10000
        })
    });
    </script>
    <?php
		}
		else if(isset($_REQUEST["msg"]) && $_REQUEST["msg"]=="changepassworderror")
		{
		?>
    <script>
    $(document).ready(function() {
        toastr.warning('Problem in Changing the Password.', 'Warning', {
            timeOut: 10000
        })
    });
    </script>
    <?php
		}
		?>


</body>

</html>
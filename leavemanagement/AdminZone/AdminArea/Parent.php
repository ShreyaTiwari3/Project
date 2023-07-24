<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <?php include("HeaderLink.php"); ?>
    <title>Manage Parent - <?= $panel_name ?></title>

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
                                <span>Manage Parent</span>
                            </h1>
                            <div class="sb-page-header-subtitle"> </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid mt-n10">

                    <div class="modal fade" id="addnewemployee">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">

                                    <h4 class="modal-title">Add New Parent</h4>
                                    <button class="close" data-dismiss="modal"><span>&times;</span></button>

                                </div>
                                <div class="modal-body">

                                    <form action="code/ManageParent?action=add" method="post" enctype="multipart/form-data">

                                        <div class="form-group">
                                            <label class="mb-1">Full Name*</label>
                                            <input class="form-control" required type="text" name="fullname" placeholder="Enter First Name" />
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1">Mobile</label>
                                            <input class="form-control" required type="tel" name="mobile" placeholder="Enter Mobile Number" />
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1">Password</label>
                                            <input class="form-control" required type="text" name="password" placeholder="Enter Password" />
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
                        <div class="card-header"> List of Parent &emsp; <a href="#" data-toggle="modal" data-target="#addnewemployee" class="btn btn-secondary">Add New Parent &nbsp; <i class="fa fa-plus"></i> </a> </div>
                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>SR No</th>
                                            <th>Name</th>
                                            <th>Mobile</th>
                                            <th>Password</th>




                                    </thead>

                                    <tbody>
                                        <?php
                                        $sr = 1;
                                        $sel = "select * from parentlogin";
                                        $res = mysqli_query($conn, $sel);
                                        while ($row = mysqli_fetch_array($res, MYSQLI_BOTH))
                                        {

                                        ?>
                                            <tr>
                                                <td><?= $sr++ ?></td>
                                                <td><?= $row['1'] ?></td>
                                                <td><?= $row['2'] ?></td>
                                                <td><?= $row['3'] ?></td>



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
</body>

</html>
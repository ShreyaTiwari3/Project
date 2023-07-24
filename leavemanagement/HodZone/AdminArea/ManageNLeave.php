<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <?php include("HeaderLink.php"); ?>
    <title>Manage Enteries - <?= $panel_name ?></title>

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
                                <span>Applications</span>
                            </h1>

                        </div>
                    </div>
                </div>

                <div class="container-fluid mt-n10">



                    <div class="card">
                        <div class="card-header"> Application status&emsp; </div>
                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>SR No</th>
                                            <th>Name</th>
                                            <th>Roll no</th>
                                            <th>View Application</th>
                                            <th>Action</th>
                                            <th>Status
                                            </th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        $sr = 1;
                                        $sel = "select * from application where status='Verified'";
                                        $res = mysqli_query($conn, $sel);
                                        while ($row = mysqli_fetch_array($res, MYSQLI_BOTH))
                                        {

                                        ?>
                                            <tr>

                                                <td><?= $sr++ ?></td>
                                                <td><?= $row[5] ?></td>
                                                <td><?= $row[3] ?></td>
                                                <td><a onclick="Show(<?= $row[0]; ?>,'application')" href="javascript:void(0)" class="btn btn-primary">View Application</a></td>
                                                <td><a href="code/Approve?i=<?php echo $row[0]; ?>" class=" btn btn-success ">APPROVE</a>
                                                    <a href=" code/Reject?i=<?php echo $row[0]; ?>" class="btn btn-danger ">REJECT</a>
                                                </td>
                                                <td><?= $row['status'] ?></td>

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
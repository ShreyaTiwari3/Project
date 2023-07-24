<?php
session_start();
require("code/DBConnection.php");
$a = $_SESSION['mobile'];
$sel = "select * from parentlogin where mobile='$a'";
$res = mysqli_query($conn, $sel);
$r = mysqli_fetch_array($res, MYSQLI_BOTH);

$p = $r[0];


?>



<!DOCTYPE html>
<html lang="en">

<head>

    <?php include("HeaderLink.php"); ?>
    <title>Leave Status - <?= $panel_name ?></title>

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
                                <div class="sb-page-header-icon"> <i class="fa-solid fa-window-restore"></i></div>
                                <span>Leave Status</span>
                            </h1>

                        </div>
                    </div>
                </div>

                <div class="container-fluid mt-n10">



                    <div class="card">

                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>SR No</th>
                                            <th>Name</th>
                                            <th>Roll no</th>
                                            <th>Status</th>
                                            <th>Show Application </th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        $sr = 1;
                                        $sel = "select * from application where parid='$p' order by id desc";
                                        $res = mysqli_query($conn, $sel);
                                        while ($row = mysqli_fetch_array($res, MYSQLI_BOTH))
                                        {

                                        ?>
                                            <tr>

                                                <td><?= $sr++ ?></td>
                                                <td><?= $row[5] ?></td>
                                                <td><?= $row[3] ?></td>
                                                <td><?= $row['status'] ?></td>
                                                <td><a onclick="Show(<?= $row[0]; ?>,'application')" href="javascript:void(0)" class="btn btn-primary">View Application</a></td>
                                                </td>

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
<?php
session_start();
require("code/DBConnection.php");
$a = $_SESSION['mobile'];
$sel = "select * from parentlogin where mobile='$a'";
$res = mysqli_query($conn, $sel);
$r = mysqli_fetch_array($res, MYSQLI_BOTH);

$p = $r[0];


?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Gate Pass</title>
</head>

<body>
    <?php

    $sel = "select * from application where status='Approved' ";
    $res = mysqli_query($conn, $sel);
    $row = mysqli_fetch_array($res, MYSQLI_BOTH)


    ?>

    <div class="container">

        <div class="row text-center">
            <div class="col-sm-3 text-left">
                <img src="../../images/logo.jpeg" style="height: 100px;" />
            </div>
            <div class="col-sm-6">
                <p class="text-center" style="color:black;font-size:50px; padding:20px;"><b>Banasthali Vidyapith</b></p>
                <hr>
                <p class="text-center" style="color:blue;font-size:40px; "><b>Gate Pass</b></p>

            </div>

        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-sm-8 text">
                <p style="font-size: 25px;">Date:&ensp;<?= $row['date'] ?> </p>
            </div>
            <div class="col-sm-4 textr">
                <p style="font-size: 25px;">Name:&ensp;<?= $row['stname'] ?></p>
            </div>
            <div class="col-sm-6"></div>


        </div>

        <div class="row">
            <div class="col-sm-8 text">
                <p style="font-size: 25px;">Parent's Name: &ensp;<?= $row['gname'] ?></p>
            </div>
            <div class="col-sm-4 text">
                <p style="font-size: 25px;">Class:&ensp;<?= $row['class'] ?> </p>
            </div>


        </div>

        <div class="row">
            <div class="col-sm-8 text">
                <p style="font-size: 25px;">Date From:&ensp;<?= $row['dog'] ?> </p>
            </div>
            <div class="col-sm-4 text">
                <p style="font-size: 25px;">Date To: &ensp;<?= $row['to'] ?></p>
            </div>


        </div>
        <br>
        <br>
        <br>
        <br>
        <div class="row">
            <div class="col-sm-8 text">
                <br>
                <p style="font-size: 22px;">Issuer Signature</p>
            </div>
            <div class="col-sm-4 text">
                <img src="assets/img/Sign.jpeg" alt="" height="40px" width="200px">
                <p style="font-size: 22px;">Dean Signature </p>
            </div>


        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>

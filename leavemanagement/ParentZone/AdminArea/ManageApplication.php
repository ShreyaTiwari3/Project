<?php
session_start();
require("code/DBConnection.php");
$a = $_SESSION['mobile'];
$sel = "select * from parentlogin where mobile='$a'";
$res = mysqli_query($conn, $sel);
$r = mysqli_fetch_array($res, MYSQLI_BOTH);



?>

<!DOCTYPE html>
<html lang="en">

<head>

    <?php include("HeaderLink.php"); ?>
    <title>Apply - <?= $panel_name ?></title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        

    </script>

</head>

<body class="sb-nav-fixed">

    <?php include("TopBar.php"); ?>

    <div id="layoutSidenav">
        <?php include("SideBar.php"); ?>

        <div id="layoutSidenav_content">
            <main>

                <div class="sb-page-header sb-page-header-dark bg-gradient-primary-to-secondary">
                    <div class="container-fluid">
                        <div class="sb-page-header-content py-5">
                            <h1 class="sb-page-header-title">
                                <div class="sb-page-header-icon"><i class="fa-solid fa-gears"></i></div>
                                <span>Apply For Leave</span>
                            </h1>

                        </div>
                    </div>
                </div>
                <br>
                <div class="container">
                    <form action="code/form.php" method="post">
                        <div class="form-group">
                            <label for="inputEmail4">Type Of Leave.</label>
                            <select class="form-select" name="cate" required>

                                <option value="casual leave">Casual Leave</option>
                                <option value="emergency leave">Emergency Leave</option>
                                <option value="summer vacation">Summer Vacation</option>
                                <option value="academic">Academic</option>

                            </select>
                        </div>

                        <div class="form-row">

                            <input type="hidden" value="<?= $r[0] ?>" name="parent">


                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Roll No.</label>
                                <input type="number" required class="form-control" id="inputEmail4" placeholder="Roll No." name="roll" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="id">ID No.</label>
                                <input type="text" class="form-control" id="inputPassword4" placeholder="ID No." name="id" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Student Name</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="Student Name" name="stname" required>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Class</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="Class" name="class"required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="id">Hostel Name</label>
                                <input type="text" class="form-control" id="inputPassword4" placeholder="Hostel Name" name="hname"required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2">Guardian Name</label>
                            <input type="text" class="form-control" id="inputAddress2" placeholder="Guardian Name" name="gname"required>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2">Reason of Applying For Leave</label>
                            <input type="text" class="form-control" id="inputAddress2" placeholder="Reason" name="reason"required>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputCity">Date Of Going On Leave</label>
                                <input type="date" class="form-control" id="inputCity" name="dog"required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputCity">To</label>
                                <input type="date" class="form-control" id="inputCity" name="to"required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="">Days </label>
                                <input type="number" class="form-control" id="inputZip" name="days"required>
                            </div>
                        </div>

                        <div class="form-row">

                            <div class="form-group col-md-6">
                                <label for="inputCity">Whether The Student is Permitted to go alone(YES/NO)</label>

                                <input type="text" class="form-control" id="inputZip" name="yn"required>
                            </div>
                        </div>
                        <div>

                            <p>If No,The Details Of The Accompanying Person</p>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Name</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="Name" name="in">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="id">Relation With The Student</label>
                                <input type="text" class="form-control" id="inputPassword4" placeholder="Relation" name="relws">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Address</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="Address" name="add">
                        </div>
                        <div class="form-row">

                            <div class="form-group col-md-6">
                                <label for="inputCity">Mobile Number</label>

                                <input type="number" class="form-control" id="inputZip" name="mobile">
                            </div>
                        </div>
                        <div>

                            <p>Vidyapith is requested to allow my ward to go on leave on my responsibility. I give this assurance that she will reach Vidyapith after availing the leave, failing which I will have no objection on any disciplinary action taken by the Vidyapith. If my ward fails on account of this short of attendance because of going on leave and if she is not allowed to appear in examination. I will be solely held.</p>
                        </div>

                        <div>

                            <p>Address of the place where your ward will be going on leave (If you are giving permission to your ward to go to some other place on leave, give the address and contact no. of the place,</p>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="inputAddress" placeholder="Address" name="addofan">
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Date</label>
                                <input type="date" class="form-control" id="inputEmail4" placeholder="Date(dd/mm/yy)" name="date"required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="id">Parent Sign</label>
                                <input type="file" class="form-control" id="inputEmail4" placeholder="Parent Name" name="file"required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>


            </main>

            <?php include("Footer.php"); ?>
        </div>
    </div>
    <?php include("FooterLink.php"); ?>


</body>

</html>
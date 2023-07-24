<?php

require("DBConnection.php");
$table = $_REQUEST['table'];
$id = $_REQUEST['id'];


$sel = "select * from $table where id='$id'";
$res = mysqli_query($conn, $sel);
$fetch = mysqli_fetch_array($res, MYSQLI_BOTH);

switch ($table)
{
    case "application":

?>
        <form>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Roll No.</label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="Roll No." name="roll" value="<?php echo $fetch['1']; ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="id">ID No.</label>
                    <input type="text" class="form-control" id="inputPassword4" placeholder="ID No." name="id" value="<?php echo $fetch['2']; ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Student Name</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="Student Name" name="stname" value="<?php echo $fetch['3']; ?>">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Class</label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="Class" name="class" value="<?php echo $fetch['4']; ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="id">Hostel Name</label>
                    <input type="text" class="form-control" id="inputPassword4" placeholder="Hostel Name" name="hname" value="<?php echo $fetch['5']; ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress2">Guardian Name</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Guardian Name" name="gname" value="<?php echo $fetch['6']; ?>">
            </div>
            <div class="form-group">
                <label for="inputAddress2">Reason of Applying For Leave</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Reason" name="reason" value="<?php echo $fetch['7']; ?>">
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputCity">Date Of Going On Leave</label>
                    <input type="text" class="form-control" id="inputCity" name="dog" value="<?php echo $fetch['8']; ?>">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputCity">To</label>
                    <input type="text" class="form-control" id="inputCity" name="to" value="<?php echo $fetch['9']; ?>">
                </div>
                <div class="form-group col-md-4">
                    <label for="">Days </label>
                    <input type="text" class="form-control" id="inputZip" name="days" value="<?php echo $fetch['10']; ?>">
                </div>
            </div>

            <div class="form-row">

                <div class="form-group col-md-6">
                    <label for="inputCity">Whether The Student is Permitted to go alone(YES/NO)</label>

                    <input type="text" class="form-control" id="inputZip" name="yn" value="<?php echo $fetch['11']; ?>">
                </div>
            </div>
            <div>

                <p>If No,The Details Of The Accompanying Person</p>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Name</label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="Name" name="in" value="<?php echo $fetch['12']; ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="id">Relation With The Student</label>
                    <input type="text" class="form-control" id="inputPassword4" placeholder="Relation" name="relws" value="<?php echo $fetch['13']; ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="Address" name="add" value="<?php echo $fetch['14']; ?>">
            </div>
            <div class="form-row">

                <div class="form-group col-md-6">
                    <label for="inputCity">Mobile Number</label>

                    <input type="tel" class="form-control" id="inputZip" name="mobile" value="<?php echo $fetch['15']; ?>">
                </div>
            </div>
            <div>

                <p>Vidyapith is requested to allow my ward to go on leave on my responsibility. I give this assurance that she will reach Vidyapith after availing the leave, failing which I will have no objection on any disciplinary action taken by the Vidyapith. If my ward fails on account of this short of attendance because of going on leave and if she is not allowed to appear in examination. I will be solely held.</p>
            </div>

            <div>

                <p>Address of the place where your ward will be going on leave (If you are giving permission to your ward to go to some other place on leave, give the address and contact no. of the place,</p>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="inputAddress" placeholder="Address" name="addofan" value="<?php echo $fetch['16']; ?>">
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Date</label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="Date(dd/mm/yy)" name="date" value="<?php echo $fetch['17']; ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="id">signature</label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="Signature" name="sign" value="<?php echo $fetch['18']; ?>">
                </div>
            </div>


        </form>


<?php
        break;
}
?>
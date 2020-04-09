<?php
session_start();


if (isset($_SESSION['msg'])) {
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}
include_once '../dbCon.php';
$conn = connect();
?>
<?php include_once '../template/header.php'; ?>
<?php include_once '../template/nav-bar.php'; ?>
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * from packages WHERE id=$id";
    $result = $conn->query($sql);
    $row = mysqli_fetch_assoc($result);
    $cabin_type = $row['cabin_type'];
    $num_of_adult = $row['num_of_adult'];
    $num_of_children = $row['num_of_children'];
    $start_date = $row['start_date'];
    $end_date = $row['end_date'];
    $package_period = $row['package_period'];
    $package_price = $row['package_price'];
    $package_description = $row['package_description'];
    $image = $row['image'];
    $home_page_item = $row['home_page_item'];
}
?>
<script>
    document.onreadystatechange = function () {
        if (document.readyState === 'complete') {
            var dateToday = new Date();

            $(function () {
                $("#start_date").datepicker({
                    beforeShowDay: DisableMonday,
                    minDate: dateToday,
                    onClose: function (selectedDate) {
                        $("#e_date").datepicker("option", "minDate", selectedDate);
                    }
                });
            });

            $(function () {
                $("#end_date").datepicker({
                    beforeShowDay: DisableMonday,
                    minDate: dateToday,
                    onClose: function (selectedDate) {
                        $("#start_date").datepicker("option", "maxDate", selectedDate);
                    }
                });
            });

            function DisableMonday(date) {
                var day = date.getDay();
                if (day == 2 || day == 3 || day == 4 || day == 6 || day == 0) {
                    return [false];
                } else {
                    return [true];
                }
            }




        }
    }
</script>

<div class="container">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">

            <div class="well" style="margin-top: 20px">
                <form class="form-horizontal" action="edit-package-controller.php" method="POST" enctype="multipart/form-data" name="edit">

                    <h2 class="text-center "><span style="color: pink; ">Add Packages of log Cabin</span></h2>

                    <h4 class="text-center text-success"><?php if (isset($message)) echo $message ?></h4>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"> Cabin Type</label>
                        <div class="col-sm-9">
                            <select name="cabin_type" id="cabin_type" class="form-control" required>
                                <option value="">----------Select One-----------</option>
                                <option value="Luxury"<?php if ($row['cabin_type'] == 'Luxury') echo ' selected="selected"'; ?>>Luxury</option>
                                <option value="Contemporary"<?php if ($row['cabin_type'] == 'Contemporary') echo ' selected="selected"'; ?>>Contemporary</option>
                                <option value="Original"<?php if ($row['cabin_type'] == 'Original') echo ' selected="selected"'; ?>>Original.</option>
                            </select>
                        </div>
                    </div>
                    <input type="hidden" name="id" value="<?= $_GET['id'] ?>" />
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">Number Of Adult</label>
                        <div class="col-sm-9">
                            <select name="num_of_adult" id="member" class="form-control" required>
                                <option value="">----------Select one-----------</option>
                                <option value="2"<?php if ($row['num_of_adult'] == 2) echo ' selected="selected"'; ?>>2</option>
                                <option value="3"<?php if ($row['num_of_adult'] == 3) echo ' selected="selected"'; ?>>3</option>
                                <option value="4"<?php if ($row['num_of_adult'] == 4) echo ' selected="selected"'; ?>>4</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">Number Of Children</label>
                        <div class="col-sm-9">
                            <select name="num_of_children" id="member" class="form-control" required>
                                <option value="">----------Select one-----------</option>
                                <option value="2" <?php if ($row['num_of_children'] == 2) echo ' selected="selected"'; ?>>2</option>
                                <option value="3" <?php if ($row['num_of_children'] == 3) echo ' selected="selected"'; ?>>3</option>
                                <option value="4" <?php if ($row['num_of_children'] == 4) echo ' selected="selected"'; ?>>4</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-3 control-label" >Start Date</label>
                        <div class="col-sm-9">
                            <input type="text" name="start_date" id="s_date" class="form-control" placeholder="Start Date" value="<?= $start_date ?>">
                        </div>

                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">End Date</label>
                        <div class="col-sm-9">
                            <input type="text" name="end_date"   id="e_date" class="form-control" placeholder="End Date" value="<?= $end_date ?>">
                        </div>

                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"> Package Period</label>
                        <div class="col-sm-9">
                            <select name="package_period" class="form-control" required>
                                <option value="">----------Select One-----------</option>
                                <option value="4 Days" <?php if ($row['package_period'] == '4 Days') echo ' selected="selected"'; ?>>4 Days</option>
                                <option value="5 Days" <?php if ($row['package_period'] == '5 Days') echo ' selected="selected"'; ?>>5 Days</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Package Price</label>
                        <div class="col-sm-9">
                            <input type="float" name="package_price"  tabindex="2" class="form-control" placeholder="Price"  value="<?= $package_price ?>">
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">Package Description</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="package_description" rows="5"><?= $package_description ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Image</label>

                        <div class="col-sm-9">
                            <input type="file" name="package_image" class="form-control">

                            <img src="<?= $image ?>"height="80" width="80">

                        </div>
                    </div>


                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Home Page Show</label>
                        <div class="col-sm-9">
                            <select name="home_page_item" class="form-control" required>
                                <option value="">----------Select-----------</option>
                                <option value="1"<?php if ($row['home_page_item'] == 1) echo ' selected="selected"'; ?>>Yes</option>
                                <option value="0" <?php if ($row['home_page_item'] == 0) echo ' selected="selected"'; ?> >No</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6 col-sm-offset-3">
                            <input  type="submit" class="btn btn-success btn-block" name="submit" value="Upadate"/>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

</div>




<?php include_once '../template/footer.php'; ?>
<script>
    //document.forms['edit'].elements['cabin_type'].value = '$cabin_type';
</script>
<?php include_once '../template/foot-scripts.php'; ?>
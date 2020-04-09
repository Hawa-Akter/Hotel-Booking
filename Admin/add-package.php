<?php
session_start();



?>
<?php include_once '../template/header.php'; ?>
<?php include_once '../template/nav-bar.php'; ?>
<script>
    document.onreadystatechange = function () {
        if (document.readyState === 'complete') {
            var dateToday = new Date();

            $(function () {
                $("#start_date").datepicker({
                    beforeShowDay: DisableMonday,
                    minDate: dateToday,
                    onClose: function (selectedDate) {
                        $("#end_date").datepicker("option", "minDate", selectedDate);
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
                <form class="form-horizontal" action="add-package-controller.php" method="POST" enctype="multipart/form-data">

                    <h2 class="text-center "><span style="color: pink; ">Add Packages of log Cabin</span></h2>

                    <h4 class="text-center text-success"><?php
                        if (isset($_SESSION['msg'])) {
                            echo $_SESSION['msg'];
                            unset($_SESSION['msg']);
                        }
                        ?></h4>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"> Cabin Type</label>
                        <div class="col-sm-9">
                            <select name="cabin_type" id="cabinType" class="form-control" required>
                                <option value="">----------Select One-----------</option>
                                <option value="Luxury">Luxury</option>
                                <option value="Contemporary">Contemporary</option>
                                <option value="Original">Original.</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">Number Of Adult</label>
                        <div class="col-sm-9">
                            <select name="num_of_adult" id="member" class="form-control" required>
                                <option value="">----------Select one-----------</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">Number Of Children</label>
                        <div class="col-sm-9">
                            <select name="num_of_children" id="member" class="form-control" required>
                                <option value="">----------Select one-----------</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-3 control-label" >Start Date</label>
                        <div class="col-sm-9">
                            <input type="text" name="start_date" id="start_date" class="form-control" placeholder="Start Date" >
                        </div>

                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">End Date</label>
                        <div class="col-sm-9">
                            <input type="text" name="end_date"   id="end_date" class="form-control" placeholder="End Date" >
                        </div>

                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"> Package Period</label>
                        <div class="col-sm-9">
                            <select name="package_period" class="form-control" required>
                                <option value="">----------Select One-----------</option>
                                <option value="4 Days" >4 Days</option>
                                <option value="5 Days" >5 Days</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Package Price</label>
                        <div class="col-sm-9">
                            <input type="float" name="package_price"  tabindex="2" class="form-control" placeholder="Price"  value="<?php if (isset($editBookingInfo['package_price'])) echo $editBookingInfo['package_price']; ?>">
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">Package Description</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="package_description" rows="5"><?php if (isset($editBookingInfo['package_description'])) echo $$editBookingInfo['package_description']; ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Image</label>

                        <div class="col-sm-9">
                            <input type="file" name="package_image" class="form-control">
                            <?php if (isset($editBookingInfo['package_image'])) { ?>
                                <img src="<?= $editBookingInfo['package_image'] ?>" height="80" width="80">
<?php } ?>
                        </div>
                    </div>


                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Home Page Show</label>
                        <div class="col-sm-9">
                            <select name="home_page_item" class="form-control" required>
                                <option value="">----------Select-----------</option>
                                <option value="1">Yes</option>
                                <option value="0" >No</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6 col-sm-offset-3">
                            <input  type="submit" class="btn btn-success btn-block" name="submit" value="ADD"/>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

</div>




<?php include_once '../template/footer.php'; ?>

<?php include_once '../template/foot-scripts.php'; ?>
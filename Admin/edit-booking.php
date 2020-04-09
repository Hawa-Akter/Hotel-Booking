<?php
session_start();
include_once '../dbCon.php';
$id=$_GET['id'];

    $conn = connect();
$sql="select m.booking_id, m.booking_time, u.name, u.email,u.number, p.package_id,p.cabin_type,p.num_of_adult,p.num_of_children,p.start_date,p.end_date,p.package_period,p.package_price from users as u, manage_booking as m, packages as p where u.id=m.user_id and p.package_id=m.package_id and booking_id='$id'";
    $result=$conn->query($sql);
$updatebook= mysqli_fetch_assoc($result);
//echo '<pre>';
//print_r($updatebook);
//exit();

?>
<?php include_once '../template/header.php'; ?>
<?php include_once '../template/nav-bar.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">

            <div class="well" style="margin-top: 20px">
                <form class="form-horizontal" action="update-booking-controller.php" method="POST" enctype="multipart/form-data">

                    <h2 class="text-center "><span style="color: pink; ">Edit Booking Information</span></h2>

                    <h4 class="text-center text-success"><?php
                        if (isset($_SESSION['msg'])) {
                            echo $_SESSION['msg'];
                            unset($_SESSION['msg']);
                        }
                        ?></h4>
                     <div class="form-group">
                        <label  class="col-sm-3 control-label" >Booking ID</label>
                        <div class="col-sm-9">
                            <input type="text" name="booking_id" id="" class="form-control" placeholder="Booking Id" value="<?=$updatebook['booking_id']?>" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label" >Booking Time</label>
                        <div class="col-sm-9">
                            <input type="text" name="booking_time" id="" class="form-control" placeholder="booking time" value="<?=$updatebook['booking_time']?>" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label" >Customer Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="customer_name" id="" class="form-control" value="<?=$updatebook['name']?>"disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label" >Customer Email</label>
                        <div class="col-sm-9">
                            <input type="email" name="customer_email" id="" class="form-control" value="<?=$updatebook['email']?>"disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label" >Customer Number</label>
                        <div class="col-sm-9">
                            <input type="text" name="customer_number" id="" class="form-control" value="<?=$updatebook['number']?>"disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label" >Package ID</label>
                        <div class="col-sm-9">
                            <input type="text" name="package_id" class="form-control" value="<?=$updatebook['package_id']?>"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Package Category</label>
                        <div class="col-sm-9">
                            <select name="cabin_type" id="" class="form-control" required>
                                <option value="">----------Select One-----------</option>
                                <option value="Luxury"<?php if ($updatebook['cabin_type'] == 'Luxury') echo ' selected="selected"'; ?>>Luxury</option>
                                <option value="Contemporary"<?php if ($updatebook['cabin_type'] == 'Contemporary') echo ' selected="selected"'; ?>>Contemporary</option>
                                <option value="Original"<?php if ($updatebook['cabin_type'] == 'Original') echo ' selected="selected"'; ?>>Original.</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">Number Of Adult</label>
                        <div class="col-sm-9">
                            <select name="num_of_adult" id="member" class="form-control" required>
                                <option value="">----------Select one-----------</option>
                                 <option value="2"<?php if ($updatebook['num_of_adult'] == 2) echo ' selected="selected"'; ?>>2</option>
                                <option value="3"<?php if ($updatebook['num_of_adult'] == 3) echo ' selected="selected"'; ?>>3</option>
                                <option value="4"<?php if ($updatebook['num_of_adult'] == 4) echo ' selected="selected"'; ?>>4</option>
                            </select>
                        </div>
                    </div>
                    <input type="hidden" name="id" id="" class="form-control" value="<?=$updatebook['id']?>"disabled>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">Number Of Children</label>
                        <div class="col-sm-9">
                            <select name="num_of_children" id="member" class="form-control" required>
                                <option value="">----------Select one-----------</option>
                                <option value="2" <?php if ($updatebook['num_of_children'] == 2) echo ' selected="selected"'; ?>>2</option>
                                <option value="3" <?php if ($updatebook['num_of_children'] == 3) echo ' selected="selected"'; ?>>3</option>
                                <option value="4" <?php if ($updatebook['num_of_children'] == 4) echo ' selected="selected"'; ?>>4</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-3 control-label" >Start Date</label>
                        <div class="col-sm-9">
                            <input type="text" name="start_date" id="" class="form-control" value="<?=$updatebook['start_date']?>" >
                        </div>

                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">End Date</label>
                        <div class="col-sm-9">
                            <input type="text" name="end_date"   id="end_date" class="form-control" value="<?=$updatebook['end_date']?>">
                        </div>

                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"> Package Period</label>
                        <div class="col-sm-9">
                            <select name="package_period" class="form-control" required>
                                <option value="">----------Select One-----------</option>
                                <option value="4 Days" <?php if ($updatebook['package_period'] == '4 Days') echo ' selected="selected"'; ?>>4 Days</option>
                                <option value="5 Days" <?php if ($updatebook['package_period'] == '5 Days') echo ' selected="selected"'; ?>>5 Days</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Package Price</label>
                        <div class="col-sm-9">
                            <input type="float" name="package_price"  tabindex="2" class="form-control" placeholder="Price"  value="<?php echo  $updatebook['package_price'];?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6 col-sm-offset-3">
                            <input  type="submit" class="btn btn-success btn-block" name="submit" value="Update Booking"/>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

</div>




<?php include_once '../template/footer.php'; ?>

<?php include_once '../template/foot-scripts.php'; ?>
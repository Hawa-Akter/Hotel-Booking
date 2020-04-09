
<?php
session_start();
if (!isset($_SESSION['id'])) {
    header('location:login.php');
}
?>


<?php include_once 'template/header.php'; ?>
<?php include_once 'template/nav-bar.php'; ?>

<?php
include_once 'dbCon.php';
$conn = connect();
$sql = "select * from packages where home_page_item=1 and special=1";
$result = $conn->query($sql);

?>
<script>
    var fromCurrency = 'GBP';
</script>




<div class="container">

    <!-- Marketing Icons Section -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Welcome to WoodlandsAway
            </h1>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class=" form-group col-sm-6 ">
                    <label for="inputPassword3" class="col-sm-6 control-label">Chose Your Local Currency:</label>
                    <select id='currency' class="col-sm-3 form-control ">
                        <option value='GBP'>GBP</option>
                        <option value='USD'>USD</option>
                        <option value='EUR'>EUR</option>
                    </select>
                </div>
            </div>
        </div>
        <?php foreach ($result as $row) { ?>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw"></i><?php echo $row['cabin_type'] ?></h4>
                    </div>
                    <img src="admin/<?php echo $row['image'] ?>" alt="img" height="200" width="100%">


                    <div class="panel-body">
                        <h4><b>Number of Adult:&nbsp;</b><?= $row['num_of_adult'] ?></h4>
                        <h4 class="pull-right package-price">Price:&nbsp;<?= $row['package_price'] ?></h4>
                        <input type="hidden" class="package-base-price" value="<?= $row['package_price'] ?>" />
                        <h4><b>Start Date:&nbsp;</b><?= $row['start_date'] ?></h4>
                        <h4><b>End Date:&nbsp;</b><?= $row['end_date'] ?></h4>
                        <h4><b>Total Time:&nbsp;</b><?= $row['package_period'] ?></h4>

                        <a href="booking.php?id=<?php echo $row['package_id'] ?>" class="btn btn-info">Book</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
   

<?php include_once 'template/foot-scripts.php'; ?>
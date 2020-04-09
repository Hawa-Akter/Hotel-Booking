<?php session_start(); ?>
<?php include_once '../template/header.php'; ?>
<?php include_once '../template/nav-bar.php'; ?>

<?php
include_once '../dbCon.php';
$conn = connect();
$sql = "select * from packages";
$result = $conn->query($sql);
?>


<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="text-center text-success"></h1>
            <div class="panel panel-info">
                <div class="panel-heading panel-title text-center">
                    <span class="text-success">Manage Packages</span>
                </div>
                <div>
                    <h4></h4>
                </div>
                <div class="panel-body">

                    <table class="table table-bordered table-hover">
                        <tr class="table-success">
                            <th>SL. No</th>
                            <th>Package ID</th>
                            <th>Cabin Type</th>
                            <th>Number of Adult</th>
                            <th>Number of Children</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Package Period</th>
                            <th>Package Price</th>
                            <th>Package Description</th>
                            <th>Image</th>
                            <th>Home Page view</th>
                            <th>Action</th>
                        </tr>
<?php $i = 1; ?>
<?php foreach ($result as $row) { ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><?= $row['package_id'] ?></td>
                <td><?= $row['cabin_type'] ?></td>
                <td><?= $row['num_of_adult'] ?></td>
                <td><?= $row['num_of_children'] ?></td>
                <td><?= $row['start_date'] ?></td>
                <td><?= $row['end_date'] ?></td>
                <td><?= $row['package_period'] ?></td>
                <td><?= $row['package_price'] ?></td>
                <td><?= $row['package_description'] ?></td>
                <td><img src="<?= $row['image'] ?>" alt="img" height="70px" width="70px"></td>
                <td><?= $row['home_page_item']==1? 'Yes' : ' No' ?></td>
                <td><a href="<?= BASE_URL ?>/admin/edit-package.php?id=<?= $row['id'] ?>" class="btn btn-xs btn-warning">Edit</a></td>
            </tr>
<?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once '../template/footer.php'; ?>

<?php include_once '../template/foot-scripts.php'; ?>
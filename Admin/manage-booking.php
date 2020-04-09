<?php session_start(); ?>
<?php include_once '../template/header.php'; ?>
<?php include_once '../template/nav-bar.php'; ?>
<?php
include_once '../dbCon.php';
    $conn = connect();
    $sql="select m.booking_id, m.booking_time, u.name, u.email,u.number, p.package_id,p.cabin_type,p.num_of_adult,p.num_of_children,p.start_date,p.end_date,p.package_period,p.package_price from  manage_booking as m,users as u, packages as p where u.id=m.user_id and p.package_id=m.package_id";
    $result=$conn->query($sql);
    
    
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="text-center text-success"></h1>
            <div class="panel panel-info">
                <div class="panel-heading panel-title text-center">
                    <span class="text-success">Booking Information</span>
                </div>
                <h4 class="text-center text-success"><?php
                        if (isset($_SESSION['message'])) {
                            echo $_SESSION['message'];
                            unset($_SESSION['message']);
                        }
                        ?></h4>
                <div class="panel-body">
                    
                    <table class="table table-bordered table-hover">
                        <tr>
                            <th> SL. No</th>
                            <th> Booking Id</th>
                            <th>Booking Time</th>
                            <th>Customer Name</th>
                            <th>Customer Email</th>
                            <th>Customer Number</th>
                            <th>Package Id</th>
                            <th>Package Category</th>
                            <th>Number Of Adult</th>
                            <th>Number Of Child</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Package Duration</th>
                            <th>Package Price</th>
                            <th>Action</th>
                        </tr>
                        
                        
                        
                        <?php $i=1;?>
                        <?php while ($book = mysqli_fetch_assoc($result)) {?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $book['booking_id']; ?></td>
                                <td><?php echo $book['booking_time']; ?></td>
                                <td><?php echo $book['name']; ?></td>
                                <td><?php echo $book['email']; ?></td>
                                <td><?php echo $book ['number']; ?></td>
                                <td><?php echo $book ['package_id']; ?></td>
                                <td><?php echo $book['cabin_type']; ?></td>
                                <td><?php echo $book ['num_of_adult']; ?></td>
                                <td><?php echo $book ['num_of_children']; ?></td>
                                <td><?php echo $book['start_date']; ?></td>
                                <td><?php echo $book['end_date']; ?></td>
                                <td><?php echo $book['package_period'];?></td>
                                <td><?php echo $book['package_price']; ?></td>
                                <td>
                                    <a href="edit-booking.php?id=<?php echo $book['booking_id']?>" class="btn btn-info btn-xs" title="Edit Booking">
                                        <span>Edit</span>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

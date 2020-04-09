<?php session_start();?>
<?php include_once 'template/header.php'; ?>
<?php include_once 'template/nav-bar.php'; ?>
<?php
    include_once 'dbCon.php';
    $conn = connect();
    if($_GET['id']){
        $id=$_GET['id'];
         $sql="select * from packages where package_id='$id'";
    $res=$conn->query($sql);
    $result= mysqli_fetch_assoc($res);
    
    }
   

?>
<div class="container" >
    <div class="row">
        <div class="col-sm-offset-2 col-sm-8 col-sm-offset-2 ">
            
            <table class="table table-striped table-bordered table-hover">
                <tr>
                    <th colspan="2" style="text-align: center"><h2> Confirm your Booking</h2></th>
                    
                </tr>
                <tr>
                    <th>Package Name</th>
                    <td><?=$result['cabin_type']?></td>
                </tr>
                <tr>
                    <th>Number of Adult</th>
                    <td><?=$result['num_of_adult']?></td>
                </tr>
                <tr>
                    <th>Number of Children</th>
                    <td><?=$result['num_of_children']?></td>
                </tr>
                <tr>
                    <th>Start Date</th>
                    <td><?=$result['start_date']?></td>
                </tr>
                <tr>
                    <th>End Date</th>
                    <td><?=$result['end_date']?></td>
                </tr>
                <tr>
                    <th>Package Price</th>
                    <td><?=$result['package_price']?></td>
                </tr>
                <tr>
                    <th>Package Period</th>
                    <td><?=$result['package_period']?></td>
                </tr>
                <tr>
                    <th>Package Description</th>
                    <td><?=$result['package_description']?></td>
                </tr>
            </table>
            <form action="confirm-booking.php" method="post" style="text-align: center">
              
                <input type="hidden" name="book_id" value="<?php echo $_GET['id']?>"/>
                <input type="submit" class="btn btn-info" value="Confirm Reservation"/>
        </form>
        </div>


    </div>
</div>

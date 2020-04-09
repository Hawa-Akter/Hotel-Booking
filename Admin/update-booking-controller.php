<?php

include_once '../dbCon.php';
    $conn = connect();
    $package_category=$_POST['cabin_type'];
    $num_of_adult=$_POST['num_of_adult'];
    $num_of_children=$_POST['num_of_children'];
    $start_date=$_POST['start_date'];
    $end_date=$_POST['end_date'];
    $package_period=$_POST['package_period'];
    $package_price=$_POST['package_price'];
    $package_id=$_POST['package_id'];
    
    
    $sql="update packages set cabin_type='$package_category',num_of_adult='$num_of_adult',num_of_children='$num_of_children',start_date='$start_date',package_period='$package_period',package_price='$package_price' where package_id='$package_id'";
    
    if($conn->query($sql)){
        
       $message="successfully Updated";
       header('location:manage-booking.php');
    }else{
       $message="Not Updated Booking Info";
       header('location:manage-booking.php');
    }
    $_SESSION['message']=$message;
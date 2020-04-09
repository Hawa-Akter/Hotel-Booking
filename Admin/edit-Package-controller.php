<?php

$id=$_POST['id'];
$data=$_POST;
 extract($data);
// echo "<pre>";
// print_r($data);
// echo "</pre>";
// exit(); 
require_once './imageUploader.php';
         if($finalimage){   
              $sql="update packages set cabin_type='$cabin_type',num_of_adult='$num_of_adult',num_of_children='$num_of_children',start_date='$start_date',end_date='$end_date', package_period='$package_period',package_price='$package_price',package_description='$package_description', image='$finalimage',home_page_item='$home_page_item' WHERE package_id='$id'";
            }else{
             $sql="update packages set cabin_type='$cabin_type',num_of_adult='$num_of_adult',num_of_children='$num_of_children',start_date='$start_date',end_date='$end_date', package_period='$package_period',package_price='$package_price',package_description='$package_description',home_page_item='$home_page_item' WHERE package_id='$id'";
     
//            $sql="update packages set cabin_type='$cabin_type',num_of_adult='$num_of_adult',num_of_children='$num_of_children',start_date='$start_date',end_date='$end_date', package_period='$package_period',package_price='$package_price',package_description='$package_description', image='$finalimage',home_page_item='$home_page_item' WHERE id='$id'";
         }
         require_once '../dbCon.php';
          $conn = connect();
 if($conn->query($sql)){
     $_SESSION['msg']="Successfully Updated!";
     header('location:manage-package.php');
 }else{
     echo "Not done";
 }
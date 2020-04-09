<?php
session_start();
require_once './imageUploader.php';
include_once '../dbCon.php';
    $conn = connect();
    $data=$_POST;
    extract($data);
   // print_r($data);
    if($finalimage){
    $sql="insert into packages(cabin_type,num_of_adult,num_of_children,start_date,end_date,package_period,package_price,package_description,image,home_page_item) values('$cabin_type','$num_of_adult','$num_of_children','$start_date','$end_date','$package_period','$package_price','$package_description','$finalimage','$home_page_item')";
    if($conn->query($sql)){
        
        $_SESSION['msg']="Package Added Successfully";
        header('location:add-package.php');
    }else{
        $_SESSION['msg']="Package Insertion Failed";
        header('location:add-package.php');
    }
    }else{
        $_SESSION['msg']="Image not uploaded";
    }
   
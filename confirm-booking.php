<?php

session_start();

  include_once 'dbCon.php';
    $conn = connect();
    $userId=$_SESSION['id'];
    $packageId=$_POST['book_id'];
      $booking_time=date("Y-m-d h:i:sa");
        $sql="insert into manage_booking(user_id,package_id,booking_time) values ('$userId','$packageId','$booking_time')";
    
    if($conn->query($sql)){
        echo "confirmed booking";
        $sql1="update packages set home_page_item=0 where package_id='$packageId'";
        $conn->query($sql1);
         include_once './mailSender.php';
    $to=$_SESSION['email'];
    $name=$_SESSION['username'];
    $subject="Confirmation of booking";
    $content="you have successfully booked. And your booking package id is".$packageId;
    $mailSend= sendMail($to, $name, $subject, $content);
    header('location:index.php');
    }else{
        $message="not done";
    }
   


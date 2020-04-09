<?php

session_start();

$okFlag = TRUE;
$message = '';

    if (!isset($_REQUEST['name']) || $_REQUEST['name'] == '') {
        $message .= 'Please type your name.<br>';

        $okFlag = FALSE;
    }
    if (!isset($_REQUEST['email']) || $_REQUEST['email'] == '') {
        $message .= 'Please type your email.<br>';
        $okFlag = FALSE;
    }
    if (!isset($_REQUEST['password']) || $_REQUEST['password'] == '') {
        $message .= 'Please type your password.<br>';
        $okFlag = FALSE;
    }

    if (isset($_REQUEST['password']) && isset($_REQUEST['confirm-password'])) {
        if ($_REQUEST['password'] != $_REQUEST['confirm-password']) {
            $message .= 'Password didn\'t match.<br>';
            $okFlag = FALSE;
        }
    }
    if (!isset($_REQUEST['postCode']) || $_REQUEST['postCode'] == '') {
        $message .= 'Please type your PostCode here.<br>';
        $okFlag = FALSE;
    }
if ($okFlag) {
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $postCode = $_REQUEST['postCode'];
    $password = md5($_REQUEST['password']);

    //echo '29:'.$password; 
    include_once 'dbCon.php';
    $con = connection();

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $con->query($sql);
    //echo $result->num_rows;
    if ($result->num_rows <= 0) {
        $sql = "INSERT INTO users(name,email,postcode,pass) VALUES ('$name','$email','$postCode',$password')";
        //echo $sql; exit;
        if ($con->query($sql)) {
            
            $_SESSION['msg'] = 'Successfully Registered';
            
        } else {
            
            $_SESSION['msg'] = 'Database Error';
            
        }
    } else {
        $_SESSION['msg'] = 'email already exist.<br>';
        //header('location:registered.php?msg=email already exist.<br>');
        header('location:registered.php');
    }
} else {
    $_SESSION['msg'] = $message;
    //header('location:login.php?msg='.$message);
    header('location:login.php?msg=' . $message);
}
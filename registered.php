<?php

echo"<pre>";
print_r($_POST);
echo"</pre>";
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
if (!isset($_REQUEST['number']) || $_REQUEST['number'] == '') {
    $message .= 'Please type your number.<br>';
    $okFlag = FALSE;
}
if (!isset($_REQUEST['address']) || $_REQUEST['address'] == '') {
    $message .= 'Please type your address.<br>';
    $okFlag = FALSE;
}
if (!isset($_REQUEST['password']) || $_REQUEST['password'] == '') {
    $message .= 'Please type your password.<br>';
    $okFlag = FALSE;
}


if (isset($_REQUEST['password']) && isset($_REQUEST['confirm-password'])) {
    if ($_REQUEST['password'] != $_REQUEST['confirm-password']) {
        $message .= 'Password didn\'t match with confirm password.<br>';
        $okFlag = FALSE;
    }
}
if (!isset($_REQUEST['postCode']) || $_REQUEST['postCode'] == '') {
    $message .= 'Please type your Post Code.<br>';
    $okFlag = FALSE;
}

if ($okFlag) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $address = $_POST['address'];
    $pass=$_POST['password'];
    $gender=$_POST['gender'];
    
    include_once 'dbCon.php';
    $conn = connect();
    //echo '31:'.$password; exit;
    //Validate Email uniqueness
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);
    //echo $result->num_rows;
    if ($result->num_rows <= 0) {
        $sql = "INSERT INTO users(name,email,number,address,pass,gender) VALUES ('$name','$email','$number','$address','$pass','$gender')";
        //echo $sql; exit;
        if ($conn->query($sql)) {
            //header('location:signup.php?msg=Successfully Registered'); Sending message through get method
            $_SESSION['msg'] = 'Successfully Registered';
            header('location:login.php');
        } else {
            //header('location:signup.php?msg=Database Error');
            $_SESSION['msg'] = 'Database Error';
            header('location:registration.php');
        }
    } else {
        header('location:login.php');
         $_SESSION['msg'] = 'email already exist.<br>';
    }
} else {
    $_SESSION['msg'] = $message;
   header('location:registration.php');
}
?>
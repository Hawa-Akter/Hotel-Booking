<?php
include_once 'dbCon.php';
$conn = connect();

if(isset($_POST['submit'])){
//    print_r($_POST);
//    exit();
    $ques=$_POST['general_query'];
    $sql2="insert into query(general_query) values ('$ques')";
    $conn->query($sql2);
}
if(isset($_POST['ans'])){
//    print_r($_POST);
//    exit();
    $ans=$_POST['answer'];
    $question=$_POST['ques_id'];
    $sql2="insert into answers(answer,question_id) values ('$ans','$question')";
    if($conn->query($sql2)){
        header('location:index.php');
    }else{
        echo "not done";
    }
}
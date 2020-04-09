<?php

include_once '../dbCon.php';
    $conn = connect();
    $sql="select * from packages";
    $queryResult=$conn->query($sql);
    $result= mysqli_fetch_assoc($queryResult);
    foreach ($result as $row){
        
    }

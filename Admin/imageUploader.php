<?php

 $directory ='../Asset/Images/';
        $imageUrl = $directory.$_FILES['package_image']['name'];
        $check = getimagesize($_FILES['package_image']['tmp_name']);
        if($check) {

            if ( file_exists($imageUrl) ) {
                echo "File Already exists. please try another one";
            } else {
                if( $_FILES['package_image']['size'] > 5124000 ) {
                    echo "File size is too large. Maximum image size is 5mb";
                } else {
                    $fileType = pathinfo($imageUrl, PATHINFO_EXTENSION);
                    if($fileType == 'jpg' || $fileType == 'png') {
                        move_uploaded_file($_FILES['package_image']['tmp_name'], $imageUrl);
                        $finalimage=$imageUrl;
                    } else {
                        echo "File type not valid. Please upload jpg or png file";
                    }
                }
            }
        } else {
            echo "Please use an image file to upload";
        }

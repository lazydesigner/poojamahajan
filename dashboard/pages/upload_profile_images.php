<?php

$file = $_FILES['imgPath'];

if($file['error'] == 0){

    $path = '../assets/images/profile_images/'. basename($_FILES["imgPath"]["name"]);

if(move_uploaded_file($file['tmp_name'], $path)){
    echo json_encode(['status'=>200,'file_name' => basename($_FILES["imgPath"]["name"])]);
}else{
    echo json_encode(['status'=>500]);
}

}


?>
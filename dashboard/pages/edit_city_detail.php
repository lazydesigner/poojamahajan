<?php
include '../connection.php';

$page_id = $_POST['page_id'];
$page_title = $_POST['page_title'];
$page_meta = $_POST['page_meta'];
$city = $_POST['city'];
$page_h1 = $_POST['page_h1'];
$top_content = $_POST['top_content'];
$bottom_content = $_POST['bottom_content'];


$sql = "UPDATE `city` SET `page_title`='$page_title',`page_meta`='$page_meta',`city`='$city',`page_h1`='$page_h1',`top_content`='$top_content',`bottom_content`='$bottom_content' WHERE city_id = $page_id";


$result = mysqli_query($con, $sql);
if($result){
    header('Location: http://localhost/poojamahajan.com/dashboard/');
}else{
    echo 'Not Inserted';
}

?>
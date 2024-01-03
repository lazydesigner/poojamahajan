<?php
include '../connection.php';


$page_title = $_POST['page_title'];
$page_meta = $_POST['page_meta'];
$city = $_POST['city'];
$page_h1 = $_POST['page_h1'];
$top_content = $_POST['top_content'];
$bottom_content = $_POST['bottom_content'];


$sql = "INSERT INTO `city`(`page_title`, `page_meta`, `page_h1`, `city`, `top_content`, `bottom_content`) VALUES ('$page_title', '$page_meta', '$page_h1', '$city', '$top_content', '$bottom_content')";


$result = mysqli_query($con, $sql);
if($result){
    header('Location: http://localhost/poojamahajan.com/dashboard/');
}else{
    echo 'Not Inserted';
}

?>
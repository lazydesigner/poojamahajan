<?php
include '../connection.php';
include '../../routes.php';

$query = "SELECT * FROM profiles ORDER BY id DESC LIMIT 1";

$res = mysqli_query($con, $query);
if ($res) {
    if (mysqli_num_rows($res) > 0) {
        // output data of each row
        $row = mysqli_fetch_assoc($res);
    } else {
        $count = 1;
    }
}


// $page_title = $_POST['page_title'];
$service_type = $_POST['service_type'];

$pro_id = $_POST['pro_id'];
$state = $_POST['state'];
$page_h1 = $_POST['page_h1'];
$area = $_POST['area'];
$profile_name = $_POST['profile_name'];
$profile_age = $_POST['profile_age'];
$profile_height = $_POST['profile_height'];
$profile_location = $area . '-' . $state . '-India';
$profile_type = $_POST['profile_type'];
$profile_body_breast = $_POST['profile_body_breast'];
$profile_body_hip = $_POST['profile_body_hip'];
$profile_body_hips = $_POST['profile_body_hips'];
$profile_body = $profile_body_breast . '-' . $profile_body_hip . '-' . $profile_body_hips;
$content = $_POST['content'];

if ($service_type == 'call-girls') {
    if (isset($count)) {
        $profile_id = 'call-girls-' . $count;
    } else {
        $profile_id = 'call-girls-' . $row['id'] + 1;
    }
    $url = 'call-girls/' . $state . '/' . $area . '/' . $profile_id . '/';
} else {
    if (isset($count)) {
        $profile_id = 'escorts-' . $count;
    } else {
        $profile_id = 'escorts-' . $row['id'] + 1;
    }
    $url = 'escorts/' . $state . '/' . $area . '/' . $profile_id . '/';
}


$list_of_images = [];
if (isset($_POST['image0'])) {
    $list_of_images[] = $_POST['image0'];
}
if (isset($_POST['image1'])) {
    $list_of_images[] = $_POST['image1'];
}
if (isset($_POST['image2'])) {
    $list_of_images[] = $_POST['image2'];
}
if (isset($_POST['image3'])) {
    $list_of_images[] = $_POST['image3'];
}
if (isset($_POST['image4'])) {
    $list_of_images[] = $_POST['image4'];
}
if (isset($_POST['image5'])) {
    $list_of_images[] = $_POST['image5'];
}
$list_of = json_encode($list_of_images);


$sql = "UPDATE `profiles` SET `content`='$content' WHERE id = $pro_id";


$result = mysqli_query($con, $sql);
if ($result) {
    header('Location: '.get_url().'dashboard/profiles');
} else {
    echo 'Not Inserted';
}

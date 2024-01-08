<?php
include './connection.php';
include '../routes.php';
session_start();

$email = $_POST['email'];
$pass = $_POST['pass'];

$query = "SELECT * FROM admin_login WHERE username = '$email' ";
$res = mysqli_query($con, $query);
if(mysqli_num_rows($res)>0){
    $row = mysqli_fetch_assoc($res);
    if (password_verify($pass, $row['password'])) {
        $_SESSION['email'] = $email;
        header('Location: '.get_url().'dashboard');
    } else {
        echo 'Password is incorrect';
    }
}else{
    header('Location: '.get_url().'auth-log');
}


?>


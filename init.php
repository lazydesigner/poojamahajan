<?php

$path = $_SERVER['DOCUMENT_ROOT'] .'/poojamahajan.com/routes.php';

if (file_exists($path)) {
    include $_SERVER['DOCUMENT_ROOT'] .'/poojamahajan.com/routes.php';
    include $_SERVER['DOCUMENT_ROOT'] .'/poojamahajan.com/dashboard/connection.php';
}else{
    include $_SERVER['DOCUMENT_ROOT'] .'/routes.php';
    include $_SERVER['DOCUMENT_ROOT'] .'/dashboard/connection.php';
}


?>
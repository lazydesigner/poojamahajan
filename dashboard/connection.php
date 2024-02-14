<?php

function localConnection() {
    // Define an array of common localhost hostnames or IP addresses
    $localhosts = array('localhost', '127.0.0.1');

    // Get the server's hostname
    $serverHostname = $_SERVER['SERVER_NAME'];

    // Check if the server's hostname is in the array of localhost values
    return in_array($serverHostname, $localhosts);
}

if(localConnection()){
    $con = mysqli_connect('localhost','root','','poojamahajan');
    
    if(!$con){
        die('Not Connected');
    }

}else{
    $con = mysqli_connect('localhost','astrlbbp','Gauty9839107285$','astrlbbp_pooja');
    if(!$con){
        die('Not Connected');
    }
}

$image_url_cdn = 'http://localhost/dash.poojamahajan.com/profiles/';

?>
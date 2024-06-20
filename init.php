<?php

$path = $_SERVER['DOCUMENT_ROOT'] .'/poojamahajan.com/routes.php';

if (file_exists($path)) {
    include $_SERVER['DOCUMENT_ROOT'] .'/poojamahajan.com/routes.php';
    include $_SERVER['DOCUMENT_ROOT'] .'/poojamahajan.com/dashboard/connection.php';
}else{
    include $_SERVER['DOCUMENT_ROOT'] .'/routes.php';
    include $_SERVER['DOCUMENT_ROOT'] .'/dashboard/connection.php';
}


$combination_cities = [
    "Delhi" => ["Agra", "Jaipur", "Rishikesh", "Ghaziabad", "Gurugram"],
    "Agra" => ["Delhi", "Jaipur", "Kota", "Aligarh", "Mathura"],
    "Jaipur" => ["Delhi", "Agra", "Ajmer", "Kota", "Jodhpur"],
    "Guwahati" => ["Patna", "Varanasi", "Ranchi", "Raipur", "Visakhapatnam"],
    "Rishikesh" => ["Dehradun", "Meerut", "Chandigarh", "Shimla", "Dharamshala"],
    "Goa" => ["Mumbai", "Pune", "Kolhapur", "Nashik", "Aurangabad"],
    "Ghaziabad" => ["Delhi", "Noida", "Greater Noida", "Meerut", "Faridabad"],
    "Kota" => ["Jaipur", "Ajmer", "Udaipur", "Indore", "Bhopal"],
    "Ahmedabad" => ["Vadodara", "Surat", "Rajkot", "Udaipur", "Indore"],
    "Gurugram" => ["Delhi", "Faridabad", "Noida", "Ghaziabad", "Jaipur"],
    "Faridabad" => ["Delhi", "Gurugram", "Ghaziabad", "Noida", "Agra"],
    "Mumbai" => ["Pune", "Nashik", "Thane", "Aurangabad", "Goa"],
    "Udaipur" => ["Jaipur", "Kota", "Ahmedabad", "Ajmer", "Indore"],
    "Indore" => ["Bhopal", "Udaipur", "Ahmedabad", "Kota", "Nagpur"],
    "Noida" => ["Delhi", "Ghaziabad", "Greater Noida", "Faridabad", "Meerut"],
    "Greater-Noida" => ["Delhi", "Ghaziabad", "Noida", "Faridabad", "Meerut"],
    "Patna" => ["Varanasi", "Guwahati", "Ranchi", "Lucknow", "Gorakhpur"],
    "Visakhapatnam" => ["Hyderabad", "Guntur", "Vijayawada", "Bhubaneswar", "Rajahmundry"],
    "Varanasi" => ["Patna", "Lucknow", "Prayagraj", "Kanpur", "Gorakhpur"],
    "Lucknow" => ["Kanpur", "Varanasi", "Agra", "Bareilly", "Prayagraj"],
    "Ajmer" => ["Jaipur", "Udaipur", "Kota", "Delhi", "Agra"],
    "Manali" => ["Shimla", "Dharamshala", "Chandigarh", "Dehradun", "Rishikesh"],
    "Bhopal" => ["Indore", "Kota", "Nagpur", "Ujjain", "Ahmedabad"],
    "Dehradun" => ["Rishikesh", "Haridwar", "Meerut", "Chandigarh", "Bareilly"],
    "Kanpur" => ["Lucknow", "Varanasi", "Prayagraj", "Agra", "Jhansi"],
    "Thane" => ["Mumbai", "Pune", "Nashik", "Aurangabad", "Kolhapur"],
    "Pune" => ["Mumbai", "Thane", "Kolhapur", "Nashik", "Aurangabad"],
    "Kolhapur" => ["Pune", "Nashik", "Aurangabad", "Mumbai", "Thane"],
    "Nashik" => ["Mumbai", "Pune", "Thane", "Aurangabad", "Kolhapur"],
    "Aurangabad" => ["Nashik", "Pune", "Thane", "Mumbai", "Kolhapur"],
    "Nagpur" => ["Bhopal", "Indore", "Aurangabad", "Nashik", "Mumbai"],
    "Greater Noida" => ["Noida", "Delhi", "Ghaziabad", "Faridabad", "Meerut"],
    "Prayagraj" => ["Varanasi", "Kanpur", "Lucknow", "Patna", "Gorakhpur"],
    "Jhansi" => ["Kanpur", "Gwalior", "Agra", "Lucknow", "Bhopal"],
    "Gorakhpur" => ["Varanasi", "Patna", "Prayagraj", "Lucknow", "Kanpur"],
    "Aligarh" => ["Agra", "Delhi", "Ghaziabad", "Noida", "Kanpur"],
    "Meerut" => ["Ghaziabad", "Noida", "Delhi", "Haridwar", "Rishikesh"],
    "Bareilly" => ["Lucknow", "Kanpur", "Delhi", "Agra", "Meerut"],
    "Moradabad" => ["Bareilly", "Delhi", "Meerut", "Ghaziabad", "Noida"],
    "Mathura" => ["Agra", "Delhi", "Jaipur", "Aligarh", "Ghaziabad"],
    "Chandigarh" => ["Shimla", "Dharamshala", "Dehradun", "Zirakpur", "Manali"],
    "Zirakpur" => ["Chandigarh", "Shimla", "Dharamshala", "Dehradun", "Manali"],
    "Vadodara" => ["Ahmedabad", "Surat", "Rajkot", "Gandhinagar", "Udaipur"],
    "Rajkot" => ["Ahmedabad", "Surat", "Vadodara", "Gandhinagar", "Udaipur"],
    "Surat" => ["Ahmedabad", "Vadodara", "Rajkot", "Gandhinagar", "Mumbai"],
    "Jodhpur" => ["Jaipur", "Ajmer", "Udaipur", "Kota", "Ahmedabad"],
    "Ranchi" => ["Patna", "Varanasi", "Guwahati", "Gorakhpur", "Lucknow"],
    "Hyderabad" => ["Visakhapatnam", "Guntur", "Vijayawada", "Nagpur", "Pune"],
    "Guntur" => ["Hyderabad", "Visakhapatnam", "Vijayawada", "Rajahmundry", "Bhubaneswar"],
    "Shimla" => ["Chandigarh", "Dharamshala", "Dehradun", "Manali", "Rishikesh"],
    "Dharamshala" => ["Shimla", "Chandigarh", "Dehradun", "Manali", "Rishikesh"],
    "Raipur" => ["Nagpur", "Jabalpur", "Ranchi", "Bhubaneswar", "Patna"]
];


?>
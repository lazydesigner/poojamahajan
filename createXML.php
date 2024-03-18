<?php
// Connect to your MySQL database
header("Content-type: text/xml");
date_default_timezone_set('Asia/Kolkata');
include './dashboard/connection.php';


// Check if the connection was successful
if (!$con) {
    echo "Failed to connect to MySQL: ";
    exit();
}

// Retrieve the list of pages from the database

$pagess = array(
    'city',
    'area',
    'profiles'
);
$xml = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
$xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;
$url = htmlspecialchars('https://poojamahajan.com');
$xml .= "\t<url>\n";
$xml .= "\t\t<loc>$url</loc>\n";
$xml .= "\t\t<lastmod>"."2024-01-02T13:23:31+05:30"."</lastmod>\n";
$xml .= "\t\t<changefreq>weekly</changefreq>\n";
$xml .= "\t\t<priority>1.00</priority>\n";
$xml .= "\t</url>\n";

foreach($pagess as $page){

    if($page == 'profiles'){
        $query = "SELECT * FROM  $page WHERE `index_page` = 'index'";
    }else{
        $query = "SELECT * FROM  $page";
    }
    
    

    $result =  mysqli_query($con,$query);
    // Create the sitemap XML
    if(mysqli_num_rows($result)>0){
        while ($row = mysqli_fetch_assoc($result)) {
            if($page == 'city'){
                $url = htmlspecialchars('https://poojamahajan.com/call-girls/'.strtolower($row['city']).'/');
                $xml .= "\t<url>\n";
                $xml .= "\t\t<loc>$url</loc>\n";
                $xml .= "\t\t<lastmod>2024-01-04T13:23:31+05:30</lastmod>\n";
                $xml .= "\t\t<changefreq>weekly</changefreq>\n";
                $xml .= "\t\t<priority>0.8</priority>\n";
                $xml .= "\t</url>\n";
            }elseif($page == 'area'){
                $url = htmlspecialchars('https://poojamahajan.com/call-girls/'.$row['city_id'].'/'.$row['area_value'].'/');
                $xml .= "\t<url>\n";
                $xml .= "\t\t<loc>$url</loc>\n";
                $xml .= "\t\t<lastmod>2024-01-03T06:13:31+05:30</lastmod>\n";
                $xml .= "\t\t<changefreq>weekly</changefreq>\n";
                $xml .= "\t\t<priority>0.7</priority>\n";
                $xml .= "\t</url>\n";
            }elseif($page == 'profiles'){
                $url = htmlspecialchars('https://poojamahajan.com/call-girls/'.$row['state'].'/'.$row['area'].'/'.$row['profile_id'].'/');
                $xml .= "\t<url>\n";
                $xml .= "\t\t<loc>$url</loc>\n";
                $xml .= "\t\t<lastmod>2024-01-03T06:13:31+05:30</lastmod>\n";
                $xml .= "\t\t<changefreq>weekly</changefreq>\n";
                $xml .= "\t\t<priority>0.7</priority>\n";
                $xml .= "\t</url>\n";
            }
        }
    }else{echo 'Not Found';}

   
}
$xml .= '</urlset>';

// Set the file path for the sitemap XML
$sitemapPath = './sitemap.xml';

// Write the XML content to the sitemap file
file_put_contents($sitemapPath, $xml);
// Close the database connection
$con->close();

// Output a success message
echo "Sitemap generated successfully!";
?>
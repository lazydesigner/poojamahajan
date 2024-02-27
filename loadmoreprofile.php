<?php
include './init.php';
?>
<?php
// $limit = 3; // Number of initial items to display
$limit = $_POST['limit'] ; // Offset for fetching additional items
$city = $_POST['city'] ; // Offset for fetching additional items
$phone_number = $_POST['phone'] ; // Offset for fetching additional items
$query = "SELECT * FROM profiles WHERE `state` = '$city' LIMIT $limit";
$query2 = "SELECT count(*) as i FROM profiles WHERE `state` = '$city'";
$res = mysqli_query($con, $query);
$res2 = mysqli_query($con, $query2);

$c = mysqli_fetch_assoc($res2);

$output = '';

while ($row = mysqli_fetch_assoc($res)) {
    $ax = json_decode($row['profile_images'], true);
    $alt = json_decode($row['image_alt_'], true);
    $s = $ax[0];
    $w = 'amazonaws.com';
?>

    <?php if (strpos($s, $w) !== false) {
        $output .= '<div class="profile-section-box">
        <div class="profile-section-box-image">
            <a href="' . get_url() . $row['page_url'] . '"><img src="' . $ax[0] . '" width="100%" height="100%" style="object-fit: cover;object-position:top" alt=""></a>
        </div>
        <div class="profile-section-box-detail">
            <h3><a href="' . get_url() . $row['page_url'] . '">' . $row['page_h1'] . '</a></h3>
            <div class="multiline-ellipsis" style="margin-bottom: 2%;">' . $row['content'] . '</div>
            <div class="profile-section-button-detail">
                <a href="https://wa.me/' . $phone_number . '"><button><i class="ri-whatsapp-fill"></i> WhatsApp</button></a>
                <a href="tel:' . $phone_number . '"><button><i class="ri-phone-fill"></i> Contact</button></a>
            </div>
        </div>
    </div>';
    } else {
        $output .= '<div class="profile-section-box">
            <div class="profile-section-box-image">
                <a href="'. get_url().$row['page_url'] .'"><img src="https://cdn.poojamahajan.com/profiles/'. $ax[0] .'" width="100%" height="100%" style="object-fit: cover;object-position:top" alt="'. $alt[0] .'"></a>
            </div>
            <div class="profile-section-box-detail">
                <h3><a href="'. get_url().$row['page_url'] .'">'.$row['page_h1'] .'</a></h3>
                <div class="multiline-ellipsis" style="margin-bottom: 2%;">'.$row['content'] .'</div>
                <div class="profile-section-button-detail">
                    <a href="https://wa.me/'.$phone_number.'"><button><i class="ri-whatsapp-fill"></i> WhatsApp</button></a>
                    <a href="tel:'.$phone_number .'"><button><i class="ri-phone-fill"></i> Contact</button></a>
                </div>
            </div>
        </div>';
    }  } 

    echo json_encode(['profiles'=>$output, 'limit'=>$limit, 'count'=>$c['i']]);

?>

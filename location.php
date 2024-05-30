<?php
include './init.php';

$uri = explode('/', $_SERVER['REQUEST_URI']);

$new_city_name = '';
$new_city_name_array = explode('-', $_GET['state']);
for ($w = 0; $w < count($new_city_name_array); $w++) {
    if ($w == (count($new_city_name_array) - 1)) {
        $new_city_name .= ucfirst($new_city_name_array[$w]);
    } else {
        $new_city_name .= ucwords($new_city_name_array[$w]) . ' ';
    }
}


$city = $_GET['state'];

include './new_city_content.php';



$new_area_name = '';

$url_cat = trim($uri[1]);

$phone_number = '00000000000';
if ($city == 'lucknow') {
    $phone_number = '+918800925952';
} elseif ($city == 'goa') {
    $phone_number = '+919548086524';
} elseif ($city == '<?=ucwords($new_city_name) ?>') {
    $phone_number = '+919690131390';
}

$cate = 'call-girls';

$sql = "SELECT * FROM profiles WHERE `state` = '$city'";
$_sql_ = "SELECT * FROM profiles WHERE `state` = '$city' ";
$sql2 = "SELECT * FROM city WHERE `city` = '$city' ";


$new_city_sql = "SELECT * FROM new_city WHERE `city_value` = '$city'";
$new_city_result = mysqli_query($con, $new_city_sql);
$yes_new_city = 'no';

$result2 = mysqli_query($con, $sql2);
if (mysqli_num_rows($result2) > 0) {
    $data2 = mysqli_fetch_assoc($result2);
} else {
    if (mysqli_num_rows($new_city_result) > 0) {
        // header('Location: https://poojamahajan.com/404');
        $yes_new_city = 'ok';
        $new_city_data = mysqli_fetch_assoc($new_city_result);
        $data2 = ['page_h1' => $page_h1, 'bottom_content' => $bottom_content, 'yes_to_title' => 'false', 'yes_to_desc'=>'false'];
    } else {
        header('Location: https://poojamahajan.com/404');
    }
}

$res = mysqli_query($con, $_sql_);
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    $data = mysqli_fetch_assoc($result);
}
$fullURL = "http" . (isset($_SERVER['HTTPS']) ? "s" : "") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= get_url() ?>dashboard/assets/fonts/remixicon.css" async>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css" integrity="sha512-rd0qOHVMOcez6pLWPVFIv7EfSdGKLt+eafXh4RO/12Fgr41hDQxfGvoi1Vy55QIVcQEujUE1LQrATCLl2Fs+ag==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <link rel="stylesheet" href="<?= get_url() ?>dashboard/assets/css/list-of-profile.css?v=2">
    <link rel="stylesheet" href="<?= get_url() ?>dashboard/assets/css/navbar.css">
    <link rel="stylesheet" href="<?= get_url() ?>dashboard/assets/css/faq.css?v=1" defer>
    <link rel="stylesheet" href="<?= get_url() ?>dashboard/assets/css/footer.css?v=1" defer>
    <meta name="robots" content="index, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />
    <title><?php if ($data2['yes_to_title'] != 'false') {
                echo $data2['page_title'];
            } elseif ($city == 'lucknow') {
                echo 'Top Call Girls in Lucknow at your Door Step Available 24x7';
            } elseif ($yes_new_city == 'ok') { ?>Call Girls in <?= $new_city_name ?> |100% Verified High class escorts available 24*7<?php } else { ?>Book Premium call girls in <?= $city ?> | Poojamahajan<?php } ?></title>

    <link rel="canonical" href="<?= get_url() ?>call-girls/<?= strtolower($city) ?>/" />

    <meta name="description" content="<?php if ($data2['yes_to_desc'] != 'false') {
                                            echo $data2['page_meta'];
                                        } elseif ($city == 'lucknow') {
                                            echo 'Explore 250 + Genuine Call Girls in Lucknow at your Hotel Room without any advance. Call or Whatsapp to Avail Lucknow Call girl service 24x7.';
                                        } elseif ($yes_new_city == 'ok') { ?>Get the best VIP Independent Model with our <?= $new_city_name ?> escorts agency. Call on 9867700727 for sexy call girls in <?= $new_city_name ?> cheap rate at your room available 24/7.<?php } else { ?>Genuine Call girls in <?= $city ?> at your place without any advance payment. Call or WhatsApp us to book <?= $city ?> Escorts with room.<?php } ?>">


    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php if ($data2['yes_to_title'] != 'false') {
                                            echo $data2['page_title'];
                                        } elseif ($city == 'lucknow') {
                                            echo 'Top Call Girls in Lucknow at your Door Step Available 24x7';
                                        } elseif ($yes_new_city == 'ok') { ?>Call Girls in <?= $new_city_name ?> |100% Verified High class escorts available 24*7<?php } else { ?>Book Premium call girls in <?= $city ?> | Poojamahajan<?php } ?>" />


    <meta property="og:description" content="<?php if ($data2['yes_to_desc'] != 'false') {
                                                    echo $data2['page_meta'];
                                                } elseif ($city == 'lucknow') {
                                                    echo 'Explore 250 + Genuine Call Girls in Lucknow at your Hotel Room without any advance. Call or Whatsapp to Avail Lucknow Call girl service 24x7.';
                                                } elseif ($yes_new_city == 'ok') { ?>Get the best VIP Independent Model with our <?= $new_city_name ?> escorts agency. Call on 9867700727 for sexy call girls in <?= $new_city_name ?> cheap rate at your room available 24/7.<?php } else { ?>Genuine Call girls in <?= $city ?> at your place without any advance payment. Call or WhatsApp us to book <?= $city ?> Escorts with room.<?php } ?>" />


    <meta property="og:url" content="<?= $fullURL ?>" />
    <meta property="og:site_name" content="Escort" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?php if ($data2['yes_to_title'] != 'false') {
                                            echo $data2['page_title'];
                                        } elseif ($city == 'lucknow') {
                                            echo 'Top Call Girls in Lucknow at your Door Step Available 24x7';
                                        } elseif ($yes_new_city == 'ok') { ?>Call Girls in <?= $new_city_name ?> |100% Verified High class escorts available 24*7<?php } else { ?>Book Premium call girls in <?= $city ?> | Poojamahajan<?php } ?>" />


    <meta name="twitter:description" content="<?php if ($data2['yes_to_desc'] != 'false') {
                                                    echo $data2['page_meta'];
                                                } elseif ($city == 'lucknow') {
                                                    echo 'Explore 250 + Genuine Call Girls in Lucknow at your Hotel Room without any advance. Call or Whatsapp to Avail Lucknow Call girl service 24x7.';
                                                } elseif ($yes_new_city == 'ok') { ?>Get the best VIP Independent Model with our <?= $new_city_name ?> escorts agency. Call on 9867700727 for sexy call girls in <?= $new_city_name ?> cheap rate at your room available 24/7.<?php } else { ?>Genuine Call girls in <?= $city ?> at your place without any advance payment. Call or WhatsApp us to book <?= $city ?> Escorts with room.<?php } ?>" />



    <meta name="google-site-verification" content="P46c2_y0XxT5hj7E7btNolCjHlwZRtbH12YS_wy_2pc">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= get_url() ?>dashboard/assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= get_url() ?>dashboard/assets/images/favicon-16x16.png">
    <meta name="theme-color" content="#ffffff">

    <style>
        .multiline-ellipsis {
            overflow: hidden;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 3;
            /* start showing ellipsis when 3rd line is reached */
            white-space: pre-wrap;
            /* let the text wrap preserving spaces */
        }

        .list-of-profile.ax a {
            font-weight: bolder;
        }

        .load-more-button {
            text-align: center;
        }

        #loadMoreBtn {
            width: 100%;
            height: 50px;
            /* padding: 1% 3%; */
            border: 0;
            background-color: #9f21e3;
            color: white;
            cursor: pointer;
            margin: 2% auto;
            border-radius: 2px;
            font-weight: bold;
        }
    </style>
    <style>
        table {
            width: 100%;
            border-spacing: 0;
            border: 1px solid black;
        }

        table tr:nth-child(odd) {
            background-color: lightgrey;
        }

        table tr td {
            padding: 1%;
        }

        .confirm-18 {
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, .5);
            display: none;
            position: fixed;
            top: 0;
            left: 0;
        }

        .confirm-18 p {
            font-size: 1rem;
            margin: 0;
            padding: 0;
        }

        .confirm-18-body {
            width: 50%;
            /* height: 50%; */
            transform: translate(50%, 10%);
            background-color: white;
            padding: 2%;
            border-radius: 10px;
        }

        .btn1 {
            width: 100px;
            height: 40px;
            border: 0;
            font-weight: bold;
            cursor: pointer;
            background-color: #9f21e3;
            border-radius: 2px;
            color: white;
        }

        .btn2 {
            width: 100px;
            height: 40px;
            border: 1px solid black;
            font-weight: bold;
            cursor: pointer;
            background-color: transparent;
            border-radius: 2px;
            color: black;
        }

        @media screen and (max-width:700px) {
            .confirm-18-body {
                width: 100%;
                background-color: white;
                /* height: 50%; */
                transform: translate(0%, 0%);
            }
        }
        @media screen and (max-width:530px) {
            .profile-section-box-detail h3 {
                padding: 0;
                margin: 0;
                font-size: 1rem;
                line-height: 20px;
            }
            :where(.list-of-profile,.profile-section-box-detail) p {
                font-weight: 400;
                font-size: small;
                line-height: 17px;
                margin: 4% 0;
            }
        }

        @media screen and (max-width:500px) {
            .profile-section-box-image {
                width: 50%;
            }

            .confirm-18-body {
                width: 100%;
                /* height: 50%; */
                transform: translate(0%, 0%);
                background-color: white;
                padding: 2%;
                border-radius: 0px;
            }

            .profile-section-button-detail button {
                width: 85px;
                font-size: 16px;
            }

        }
    </style>
    <script>
        function setCookie(cname, cvalue, exdays) {
            const d = new Date();
            d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
            let expires = "expires=" + d.toGMTString();
            document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
            let user = getCookie("confirm");
            if (user != "") {
                var remove_agree_terms = document.getElementById("confirm-18");
                remove_agree_terms.style.display = 'none';
            }
        }

        function getCookie(cname) {
            let name = cname + "=";
            let decodedCookie = decodeURIComponent(document.cookie);
            let ca = decodedCookie.split(';');
            for (let i = 0; i < ca.length; i++) {
                let c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }

        function checkCookie() {
            let user = getCookie("confirm");
            if (user != "") {
                var remove_agree_terms = document.getElementById("confirm-18");
                remove_agree_terms.style.display = 'none';
            } else {
                var remove_agree_terms = document.getElementById("confirm-18");
                remove_agree_terms.style.display = 'block';
            }
        }
        // const mySchema2 = {
        //     "@context": "https://schema.org/",
        //     "@type": "WebSite",
        //     "name": "Poojamahajan",
        //     "url": "<?php // $fullURL 
                        ?>",
        //     "potentialAction": {
        //         "@type": "SearchAction",
        //         "target": "https://poojamahajan.com/search?{search_term_string}",
        //         "query-input": "required name=search_term_string"

        //     }
        // }
        // const script2 = document.createElement('script');
        // script2.type = "application/ld+json";
        // script2.text = JSON.stringify(mySchema2);
        // document.head.appendChild(script2);
    </script>
    <script>
        const mySchema3 = {
            "@context": "https://schema.org",
            "@type": "FAQPage",
            "mainEntity": [{
                "@type": "Question",
                "name": "What is the price of call girls in <?= $city ?>?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The price of call girls differs from model to model. Generally, the price starts at Rs. 2000 per shot and Rs. 10,000 per night. Contact the provided number for more details."
                }
            }, {
                "@type": "Question",
                "name": "How do I reserve a call girl in <?= $city ?>?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Anyone can book a call girls by visiting our official website and contacting us at the provided number. As we used to update numbers timely, only contact live numbers on our website."
                }
            }, {
                "@type": "Question",
                "name": "What kind of services do these call girls provide in <?= $city ?>?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Our call girls provide various services like body kissing, licking, sex, foreplay, 69, etc. But we don't guarantee anal sex or lip kissing."
                }
            }]
        }
        const script3 = document.createElement('script');
        script3.type = "application/ld+json";
        script3.text = JSON.stringify(mySchema3);
        document.head.appendChild(script3);
    </script>
</head>

<body onload="checkCookie()">
    <header>
        <nav class="navbar">
            <span class="brand-name"><a href="<?= get_url() ?>">Poojamahajan</a></span>
            <ul class="nav-ul" id="nav-ul">
                <li><a href="<?= get_url() ?>">Home</a></li>
                <li><a href="<?= get_url() ?>contact-us/">Contact Us</a></li>
                <li><a href="<?= get_url() ?>login/">Login</a></li>
                <li><a href="<?= get_url() ?>register/">Sign up</a></li>
            </ul>
            <div style="width: 23%;align-self:end"><a href="<?= get_url() ?>login/" style="float: right;" aria-label="post-add"><span class="post-add-txt">Post Ad</span><span class="post-add-icon search-option"><i class="ri-add-box-line"></i></span></a></div>
            <span class="search-option" id="search-filter-menu"><i class="ri-search-2-line"></i></span>
            <span class="menu-option" id="menu-option"><i class="ri-menu-line"></i></span>
        </nav>
    </header>
    <div class="container">
        <div class="search-filter" id="search-filter">
            <?php include './navbar.php' ?>
        </div>



        <div class="page-detail-and-information">
            <div id="breadcrumbs">
                <ol style="display: flex;align-items:center;gap:.5%;list-style:none;padding:0" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                    <li itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem"><a itemtype="http://schema.org/Thing" itemprop="item" title="Genuine Call girls &amp; escorts Service: Photos, Phone number | dreamgal" class="crumb" href="<?= get_url() ?>"><span itemprop="name">Home</span></a>
                        <meta itemprop="position" content="1">
                    </li>
                    <li><b><i class="ri-arrow-right-s-line"></i></b></li>
                    <li itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem"><a itemtype="http://schema.org/Thing" itemprop="item" class="crumb" href="" title="Call girls in <?= $city ?> cash Payment Service"><span itemprop="name"><?= $new_city_name ?></span></a>
                        <meta itemprop="position" content="2">
                    </li>
                </ol>
            </div>
            <h1><?= $data2['page_h1'] ?></h1>
        </div>

        <div class="list-of-profile ax" style="background-color:  rgb(241, 241, 241);">
           <p>Booking and enjoying adult services by girls is now safer and easier than you think. On <a href="<?= get_url() ?>" >Poojamahajan.com</a>, you will find multiple effortless ways to connect with top sexual partners near <?=ucwords($new_city_name) ?>. Booking a <b>call girl in <?=ucwords($new_city_name) ?></b> is no longer a hassle, especially when we are here to help you. A wide range of call girls like Independent, college, desi bhabhi, and Russians are available on our website for booking. Our executives ensure that all the profiles are genuine, but sometimes they could also make mistakes. <b style='color:tomato'>Do not pay in advance; we will not be responsible for fraud</b>. Do let us know if you come across any spammy profiles or misleading content on our platform. We remove all unauthorized profiles or images if reported multiple times. <a href="<?= get_url().'call-girls/'.$city ?>" >call girls in <?=ucwords($new_city_name) ?></a> are proficient in satisfying their customers and getting good ratings from various clients. <b>Call girls <?=ucwords($new_city_name) ?></b> are very sexy and know how to seduce their clients with their talent and experience. For us, our customers' privacy and satisfaction are top concerns. <b>Our website is open to all above 18 years old and looking for Independent call girls in <?=ucwords($new_city_name) ?>.</b></p>
        </div>
        <!-- WORKING AREA -->
        <div id="list-of-all-profiles">
            <?php while ($row = mysqli_fetch_assoc($res)) {
                // if($row['index_page'] != 'noindex'){
                $ax = json_decode($row['profile_images'], true);
                $alt = json_decode($row['image_alt_'], true);

                $s = $ax[0];
                $w = 'amazonaws.com';
                if (strpos($s, $w) !== false) {
                }
            ?>
                <div class="profile-section-box">
                    <div class="profile-section-box-image">
                        <?php

                        if (strpos($s, $w) !== false) { ?>
                            <a href="<?= get_url() ?><?= $row['page_url'] ?>"><img src="<?= $ax[0] ?>" width="100%" height="100%" style="object-fit: cover;object-position:top" alt="call girls in <?= $new_city_name ?> at your Door Step" loading="lazy"></a>
                        <?php } else { ?>
                            <a href="<?= get_url() ?><?= $row['page_url'] ?>"><img src="https://cdn.poojamahajan.com/profiles/<?= $ax[0] ?>" width="100%" height="100%" style="object-fit: cover;object-position:top" alt="<?= $alt[0] ?>" loading="lazy"></a>
                        <?php } ?>

                    </div>
                    <div class="profile-section-box-detail">
                        <h3><a href="<?= get_url() ?><?= $row['page_url'] ?>"><?= $row['page_h1'] ?></a></h3>
                        <div class="multiline-ellipsis" style="margin-bottom: 2%;"><?php if(!empty($row['page_description'])){ echo $row['page_description'];}else{echo $row['content']; } ?></div>
                        <div class="profile-section-button-detail">
                            <a href="https://wa.me/<?= $phone_number ?>"><button><i class="ri-whatsapp-fill"></i> WhatsApp</button></a>
                            <a href="tel: <?= $phone_number ?>"><button><i class="ri-phone-fill"></i> Contact</button></a>
                        </div>
                    </div>
                </div>
            <?php } //} ?>
        </div>

        <!-- <div class="load-more-button">
            <button id="loadMoreBtn" onclick="FetchAllProfiles()" value="20">Load More <?= $new_city_name ?> call girls</button>
        </div> -->
        <!-- WORKING AREA -->

        <div class="list-of-profile ax" style="background-color:  rgb(241, 241, 241);">
            <?= $data2['bottom_content'] ?>
        </div>
        <div class="list-of-profile" style="margin: 3% 0;">
            <h3>FAQS About <?= $city ?> Call Girls Service - Poojamahajan</h3>
            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h4 style="margin: 0;font-size:1.2rem"><span>What is the price of call girls in <?= $city ?>?</span></h4><span class="arrow-down"><i class="ri-arrow-down-s-fill"></i></span>
                    </div>
                    <div class="faq-answer">The price of call girls differs from model to model. Generally, the price starts at Rs. 2000 per shot and Rs. 10,000 per night. Contact the provided number for more details.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <h4 style="margin: 0;font-size:1.2rem"><span>How do I reserve a call girl in <?= $city ?>?</span></h4><span class="arrow-down"><i class="ri-arrow-down-s-fill"></i></span>
                    </div>
                    <div class="faq-answer">Anyone can book a call girls by visiting our official website and contacting us at the provided number. As we used to update numbers timely, only contact live numbers on our website.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <h4 style="margin: 0;font-size:1.2rem"><span>Is there any refund policy?</span></h4><span class="arrow-down"><i class="ri-arrow-down-s-fill"></i></span>
                    </div>
                    <div class="faq-answer">If you make an advance booking, we are unable to refund money after 9 p.m. because we have cancelled other bookings for you. Yes, we provide a refund if you are not satisfied on the basis of cooperation and denial of service from our call girl side. </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <h4 style="margin: 0;font-size:1.2rem"><span>What kind of services do these call girls provide in <?= $city ?>?</span></h4><span class="arrow-down"><i class="ri-arrow-down-s-fill"></i></span>
                    </div>
                    <div class="faq-answer">Our call girls provide various services like body kissing, licking, sex, foreplay, 69, etc. But we don't guarantee anal sex or lip kissing. </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <h4 style="margin: 0;font-size:1.2rem"><span>Is it safe to hire a call girl in <?= $city ?>?</span></h4><span class="arrow-down"><i class="ri-arrow-down-s-fill"></i></span>
                    </div>
                    <div class="faq-answer">Yes, our service is 100% safe in terms of privacy, handling, and safety. Apart from this, we don't encourage any advance payments, so our services are 100 percent safe.</div>
                </div>
                <!-- Add more FAQ items as needed -->
            </div>
        </div>
        <div class="list-of-profile" style="margin: 3% 0;background-color:  rgb(241, 241, 241);">
            <h3>Top Cities of India</h3>
            <div class="top-cities-of-india">
                <a href="<?= get_url() ?><?= $cate ?>/delhi/"><button>Delhi</button></a>
                <a href="<?= get_url() ?><?= $cate ?>/agra/"><button>Agra</button></a>
                <a href="<?= get_url() ?><?= $cate ?>/guwahati/"><button>Guwahati</button></a>
                <a href="<?= get_url() ?><?= $cate ?>/rishikesh/"><button>Rishikesh</button></a>
                <a href="<?= get_url() ?><?= $cate ?>/ghaziabad/"><button>Ghaziabad</button></a>
                <a href="<?= get_url() ?><?= $cate ?>/kota/"><button>Kota</button></a>
                <a href="<?= get_url() ?><?= $cate ?>/arunachal-pradesh/"><button>Arunachal Pradesh</button></a>
                <a href="<?= get_url() ?><?= $cate ?>/bhopal/"><button>Bhopal</button></a>
                <a href="<?= get_url() ?><?= $cate ?>/gurugram/"><button>Gurugram</button></a>
                <a href="<?= get_url() ?><?= $cate ?>/faridabad/"><button>Faridabad</button></a>
                <a href="<?= get_url() ?><?= $cate ?>/mumbai/"><button>Mumbai</button></a>
                <a href="<?= get_url() ?><?= $cate ?>/ajmer/"><button>Ajmer</button></a>
                <a href="<?= get_url() ?><?= $cate ?>/varanasi/"><button>Varanasi</button></a>
                <a href="<?= get_url() ?><?= $cate ?>/dehradun/"><button>Dehradun</button></a>
                <a href="<?= get_url() ?><?= $cate ?>/ahmedabad/"><button>Ahmedabad</button></a>
                <a href="<?= get_url() ?><?= $cate ?>/lucknow/"><button>Lucknow</button></a>
                <a href="<?= get_url() ?><?= $cate ?>/noida/"><button>Noida</button></a>
                <a href="<?= get_url() ?><?= $cate ?>/goa/"><button>Goa</button></a>
                <a href="<?= get_url() ?><?= $cate ?>/jaipur/"><button>Jaipur</button></a>
                <a href="<?= get_url() ?><?= $cate ?>/dehradun/"><button>Dehradun</button></a>
                <a href="<?= get_url() ?><?= $cate ?>/udaipur/"><button>Udaipur</button></a>
                <a href="<?= get_url() ?><?= $cate ?>/indore/"><button>Indore</button></a>
                <a href="<?= get_url() ?><?= $cate ?>/patna/"><button>Patna</button></a>
                <a href="<?= get_url() ?><?= $cate ?>/visakhapatnam/"><button>Visakhapatnam</button></a>
                <a href="<?= get_url() ?><?= $cate ?>/manali/"><button>Manali</button></a>
            </div>

            <h3>Areas of <span style="text-transform: capitalize;"><?= $city ?></span></h3>
            <div class="top-cities-of-india" id="area-near">
                <?php  
                    $query_area_near_by = "SELECT * FROM area WHERE city_id = '$city' ";
                    $c_area_near_by = $city;
                    if(isset($cate )){
                        $cate = $cate ;
                    }
                    
                    $result_area_near_by = mysqli_query($con, $query_area_near_by);
                    $areas = '';
                    $i = 0;
                    if(mysqli_num_rows($result_area_near_by) > 0){
                        while($row_area_near_by = mysqli_fetch_assoc($result_area_near_by)){

                            $filterquery = "SELECT * FROM profiles WHERE area = '{$row_area_near_by['area_value']}' && index_page = 'index'";
                            $filterres = mysqli_query($con, $filterquery);
                            if(mysqli_num_rows($filterres) > 0){
                                if(isset($cate)){
                                    $areas .= '<a href="'.get_url().$cate.'/'.$c_area_near_by.'/'.$row_area_near_by['area_value'].'/"><button>'.$row_area_near_by['area_name'].'</button></a>';
                                    }   
                            }   
                                             
                        };
                    }
                
                    echo $areas
                ?>
            </div>

        </div>
    </div>


    <?php include './footer2.php' ?>

    <div class="confirm-18" id="confirm-18">
        <div class="confirm-18-body" style="text-align: center;">
            <p style="font-size: x-large;font-weight:bolder;margin-bottom:2%"><strong>Important Notice: Please Review Before Proceeding</strong></p>
            <p><b>I hereby confirm that I am 18 years of age or older.</b></p>
            <p>

                The display of any advertisements claiming to provide sexual services in exchange for money is strictly prohibited.</p>
            <p>

                Furthermore, the publication of explicit material featuring genital organs is not allowed.</p>
            <p>

                Any such advertisements will be promptly reported to the appropriate authorities, and the responsible party will be held accountable for any legal consequences.
            </p>
            <p>
                By submitting an advertisement on Poojamahajan, advertisers assert that they possess full rights to the content and acknowledge that they are aged 18 years or older. They also affirm that the advertised content is approved for publication on Poojamahajan.</p>
            <p>

                By clicking the <b>"Confirm"</b> button, users certify that they are over 18 years old and release the service providers, owners, and creators of Poojamahajan.com from any responsibility regarding the content and use of this service.</p>
            <div style="margin-top: 2%;"><button class="btn1" onclick="setCookie('confirm', 'accepted', 30)">Confirm</button>
                <a href="<?= get_url() ?>"><button class="btn2">Reject</button></a>
            </div>
        </div>
    </div>


    <!-- JAVASCRIPT -->
    
    <script>
        function FetchAllProfiles() {
            limit = document.getElementById('loadMoreBtn').value;

            if (limit == 0 || limit == null || limit.trim().length == 0) {
                limit = 10;
            }
            const formdata = new FormData()
            formdata.append('limit', limit)
            formdata.append('city', '<?= $city ?>')
            formdata.append('phone', '<?= $phone_number ?>')
            fetch('<?= get_url() ?>loadmoreprofile.php', {
                    method: 'POST',
                    body: formdata
                }).then(res => res.json())
                .then(data => {
                    document.getElementById('list-of-all-profiles').innerHTML = data['profiles'];
                    document.getElementById('loadMoreBtn').value = 10 + parseInt(data['limit'])

                    if (parseInt(data['count']) < parseInt(data['limit'])) {
                        document.getElementById('loadMoreBtn').style.display = 'none';
                    }
                })
        }
    </script>
    <script>
        document.getElementById('serach-city-input').addEventListener('keyup', (e) => {
            if (e.target.value.trim() != '') {
                const formdata = new FormData()
                formdata.append('search-city', e.target.value)
                formdata.append('category', document.getElementById('category').value)
                formdata.append('status', 'search-city')
                fetch('<?= get_url() ?>dashboard/fetch_data.php', {
                        method: 'POST',
                        body: formdata
                    }).then(res => res.json())
                    .then(d => {
                        document.getElementById('list-of-cities').style.display = 'block';
                        document.getElementById('list-of-cities-id').innerHTML = d['city'];

                    })
            } else {
                document.getElementById('list-of-cities').style.display = 'none';
                document.getElementById('list-of-cities-id').innerHTML = '';
            }
        })
        document.addEventListener('click', () => {
            document.getElementById('list-of-cities').style.display = 'none';
            document.getElementById('list-of-cities-id').innerHTML = '';
            document.getElementById('serach-city-input').value = '<?= $city ?>';
        })
        Area_Locality()

        function Area_Locality() {
            const citys = new FormData()
            citys.append('city_id', '<?= $city ?>')
            citys.append('status', 'city_id')
            citys.append('cate', '<?= $cate ?>')

            fetch('<?= get_url() ?>dashboard/fetch_data.php', {
                    method: 'POST',
                    body: citys
                }).then(res => res.json())
                .then(d => {
                    document.getElementById('area-locality').innerHTML = d['output']
                    // document.getElementById('area-near').innerHTML += d['area']
                })
        }

        document.getElementById('area-locality').addEventListener('change', () => {
            window.location.href = '<?= get_url() ?>call-girls/<?= $city ?>/' + document.getElementById('area-locality').value + ''
        })
        document.getElementById('menu-option').addEventListener('click', () => {
            document.getElementById('nav-ul').classList.toggle('nav-ul-active')
        })
        document.getElementById('search-filter-menu').addEventListener('click', () => {
            document.getElementById('search-filter').classList.toggle('search-filter-active')
        })
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const faqQuestions = document.querySelectorAll('.faq-question');

            faqQuestions.forEach(function(question) {
                question.addEventListener('click', function() {
                    const answer = this.nextElementSibling;

                    // Toggle the 'active' class for the question and answer
                    this.classList.toggle('active');
                    answer.classList.toggle('active');

                    // Adjust the max-height of the answer based on its visibility
                    if (answer.classList.contains('active')) {
                        answer.style.maxHeight = answer.scrollHeight + 'px';
                    } else {
                        answer.style.maxHeight = '0';
                    }
                });
            });
        });
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "Poojamahajan",
            "url": "https://poojamahajan.com",
            "logo": "https://poojamahajan.com/dashboard/assets/images/POOJA.webp.png"
        }
    </script>
</body>

</html>
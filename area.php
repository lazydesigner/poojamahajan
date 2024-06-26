<?php
include './init.php';

// Get the current request URI
$requestUri = $_SERVER['REQUEST_URI'];

// Initialize a variable to track if a redirect is needed
$needsRedirect = false;

// Check if the URI contains any uppercase letters and convert to lowercase
if (preg_match('/[A-Z]/', $requestUri)) {
    $requestUri = strtolower($requestUri);
    $needsRedirect = true;
}

// Check if the URI contains multiple slashes at the end
if (preg_match('/\/{2,}$/', $requestUri)) {
    // Remove multiple slashes at the end
    $requestUri = preg_replace('/\/{2,}$/', '/', $requestUri);
    $needsRedirect = true;
}

// If a redirect is needed, construct the full URL and redirect
if ($needsRedirect) {
    // Get the current host
    $host = $_SERVER['HTTP_HOST'];
    
    // Construct the full URL
    $redirectUrl = "http://$host$requestUri";
    
    // Perform the redirect
    header("Location: $redirectUrl", true, 301);
    exit();
}

$uri = explode('/', $_SERVER['REQUEST_URI']);

$url_cat = trim($uri[1]);

$city = $_GET['state'];
$cate = 'call-girls';


$phone_number = '00000000000';
if ($city == 'lucknow') {
    $phone_number = '+918800925952';
} elseif ($city == 'goa') {
    $phone_number = '+919548086524';
} elseif ($city == 'agra') {
    $phone_number = '+919690131390';
}

$a = explode('-', $_GET['city']);

if (isset($a[1])) {
    if (isset($a[2])) {
        $area = $a[0] . ' ' . $a[1] . ' ' . $a[2];
    } else {
        $area = $a[0] . ' ' . $a[1];
    }
} else {
    $area = $a[0];
}

$sql = "SELECT * FROM profiles WHERE `state` = '$city' and `area` = '{$_GET['city']}'";
$sql2 = "SELECT * FROM city WHERE `city` = '$city' ";

$new_city_sql = "SELECT * FROM new_city WHERE `city_value` = '$city'";
$new_city_result = mysqli_query($con, $new_city_sql);

$result2 = mysqli_query($con, $sql2);
if (mysqli_num_rows($result2) > 0) {
    $sql_area = "SELECT * FROM area WHERE `area_value` =  '{$_GET['city']}'";
    $res_area = mysqli_query($con, $sql_area);
    if (mysqli_num_rows($res_area) > 0) {
    } else {
        header('Location: ' . get_url() . 'call-girls/' . $city . '/');
    }
} else {
    if (mysqli_num_rows($new_city_result) > 0) {
        // header('Location: https://poojamahajan.com/404/');
        $sql_area = "SELECT * FROM area WHERE `area_value` =  '{$_GET['city']}'";
        $res_area = mysqli_query($con, $sql_area);
        if (mysqli_num_rows($res_area) > 0) {
        } else {
            header('Location: ' . get_url() . 'call-girls/' . $city . '/');
        }
    } else {
        header('Location: https://poojamahajan.com/404/');
    }
}

$res = mysqli_query($con, $sql);

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
    <link rel="stylesheet" href="<?= get_url() ?>dashboard/assets/css/list-of-profile.css?v=1">
    <link rel="stylesheet" href="<?= get_url() ?>dashboard/assets/css/navbar.css">
    <link rel="stylesheet" href="<?= get_url() ?>dashboard/assets/css/footer.css?v=1" defer>
    <meta name="robots" content=" index, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />
    <title><?= $city ?> call girls available 24/7 near <?= $area ?> with in-call and out-cal services</title>
    <link rel="canonical" href="<?= get_url() ?>call-girls/<?= strtolower($city).'/'.strtolower($_GET['city']) ?>/" />

    <meta name="description" content="Book No. 1 <?= $city ?> call girls online classified ads. Find high profile call girls in <?= $area ?> and enjoy girlfriend experience in Cash payment.">
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?= $city ?> call girls available 24/7 near <?= $area ?> with in-call and out-cal services" />
    <meta property="og:description" content="Book No. 1 <?= $city ?> call girls online classified ads. Find high profile call girls in <?= $area ?> and enjoy girlfriend experience in Cash payment." />
    <meta property="og:url" content="<?= get_url() ?>call-girls/<?= $city.'/'.$_GET['city'] ?>/" />
    <meta property="og:site_name" content="Escort" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?= $city ?> call girls available 24/7 near <?= $area ?> with in-call and out-cal services" />
    <meta name="twitter:description" content="Book No. 1 <?= $city ?> call girls online classified ads. Find high profile call girls in <?= $area ?> and enjoy girlfriend experience in Cash payment." />
    <meta name="google-site-verification" content="P46c2_y0XxT5hj7E7btNolCjHlwZRtbH12YS_wy_2pc">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= get_url() ?>dashboard/assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= get_url() ?>dashboard/assets/images/favicon-16x16.png">
    <meta name="theme-color" content="#ffffff">

    <style>
        .multiline-ellipsis {
            overflow: hidden;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
            /* start showing ellipsis when 3rd line is reached */
            white-space: pre-wrap;
            /* let the text wrap preserving spaces */
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

        .list-of-profile.ax a {
            font-weight: bolder;
        }
    </style>

    <style>
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
                /* height: 50%; */
                transform: translate(0%, 0%);
                background-color: white;
                padding: 2%;
                border-radius: 0px;
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
                    <li itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem"><a itemtype="http://schema.org/Thing" itemprop="item" class="crumb" href="<?= get_url() ?>call-girls/<?= $city ?>/" title="Call girls in <?= $city ?> cash Payment Service"><span itemprop="name"><?= $city ?></span></a>
                        <meta itemprop="position" content="2">
                    </li>
                    <li><b><i class="ri-arrow-right-s-line"></i></b></li>
                    <li itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem"><a itemtype="http://schema.org/Thing" itemprop="item" class="crumb" href=""><span itemprop="name"><?= $area ?></span></a>
                        <meta itemprop="position" content="3">
                    </li>
                </ol>
            </div>
            <h1>Call girls in <?= $area ?> with WhatsApp number</h1>
        </div>

        <div class="list-of-profile ax" style="background-color: rgb(241, 241, 241);">
            <h2>Are you looking for call girls in <?= $area ?> for friendship?</h2>

            <p>On our website, <a href="https://poojamahajan.com">Poojamahajan Call Girls Portal</a>, you can find multiple ads for <a href="<?= get_url() ?>call-girls/<?= $city ?>/" target="_blank"><?= $city ?> call girls</a> who offer the best erotic services in this locality. If you're tired of searching for reliable girls here and there, now search girls near <?= $area ?> at poojamahajan.com and with just a few clicks, you can see gorgeous call girls near you</p>

            <p>During their visit to the <?= $city ?>, a charming model girl is with our clients. You can book tempting <b>call girl in <?= $city ?></b> for your personal needs on any occasion. Our Independent girls are elite as well as polite. A sultry figure of <b>prostitutes in <?= $area ?></b> without a sense of manners or speech will ruin your mood if you reserve one. So we prefer passionate and curvy-calling girls on our platform with dressing sense.</p>


            <p>Our <a href="<?= get_url() ?>call-girls/<?= $city.'/'.$_GET['city'] ?>/" target="_blank">call girl service in <?= $area ?></a> chooses all our female staff wisely so they will not spoil your mood. We guarantee that if our <?= $area ?> call girls do not compromise and behave well, we will try to refund the full amount. Contact these models now and get a luxurious girlfriend experience at any private party or celebration. You can easily find online girls with numbers and see their real pictures, which helps save time. Poojamahajan also offers other different types of call girls, on the basis of age, color, body type, etc., who offer 24/7 services with no travel charges for nearby hotels or private property bungalows or rooms.</p>


            <p>We do not interfere between the ad publisher and clients. You can negotiate the price and discuss the payment mode. You will easily find high-profile and cheap call girls for short-term or long-term relationships with contact details.</p>


            <h3>Mature Bhabhies and hot housewife call girls near me in <?= $area ?></h3>
            <p>How would you find a juicy and genuine mature busty housewives call girls near you in <?= $area ?>? The answer to this statement is Poojamahajan.com, which allows you to navigate thousands of high-profile married bhabhies or divorced housewives to select the one that suits you best as per your taste. You can book any partner at any time near you in <?= $area ?> of the listed models on our web portal for various sexual or emotional needs. Your reach is not limited to housewifes; you can also browse thousands of other profiles of Models call girls, Air hostess call girls, Actress call girls, Facebook call girls, Instagram celebrities, punjabi call girls, and Russian call girls on your single visit to our Poojamahajan.com</p>
        </div>

        <?php while ($row = mysqli_fetch_assoc($res)) {
                $ax = json_decode($row['profile_images'], true);
                $alt = json_decode($row['image_alt_'], true);
                if(empty($ax[0])){ $w100 = 'style="width:100%"'; 
                    $w0 = 'style="width:0%"'; }else{

                $s = $ax[0];
                $w = 'amazonaws.com';
                if (strpos($s, $w) !== false) {
                    $path_of_img = $ax[0];
                }else{
                    $path_of_img = 'https://cdn.poojamahajan.com/profiles/'.$ax[0];
                }
                $imageData = @getimagesize($path_of_img);
                if ($imageData !== false) {
                    $w100 = ' '; 
                    $w0 = ' '; 
                }else{
                    $w100 = 'style="width:100%"'; 
                    $w0 = 'style="width:0%"'; 
                }}
        ?>
            <div class="profile-section-box">
                <div class="profile-section-box-image" <?=$w0 ?> >
                    <?php

                    if(!empty($ax[0])){
                    if (strpos($s, $w) !== false) { ?>
                        <a href="<?= get_url() ?><?= $row['page_url'] ?>" aria-label="call girls service in <?=$city ?>" ><img src="<?= $ax[0] ?>" width="100%" height="100%" style="object-fit: cover;object-position:top" alt=""><span style="display:none">call girls in <?=$city ?></span></a>
                    <?php } else { ?>
                        <a href="<?= get_url() ?><?= $row['page_url'] ?>" aria-label="call girls service in <?=$city ?>"><img src="https://cdn.poojamahajan.com/profiles/<?= $ax[0] ?>" width="100%" height="100%" style="object-fit: cover;object-position:top" alt="<?= $alt[0] ?>"><span style="display:none">call girls in <?=$city ?></span></a>
                    <?php }} ?>
                </div>
                <div class="profile-section-box-detail" <?=$w100 ?> >
                    <h3><a href="<?= get_url() ?><?= $row['page_url'] ?>"><?= $row['page_h1'] ?></a></h3>
                    <div class="multiline-ellipsis" style="margin-bottom: 2%;"><?php if(!empty($row['page_description'])){ echo $row['page_description'];}else{echo $row['content']; } ?></div>
                    <div class="profile-section-button-detail">
                        <button><i class="ri-whatsapp-fill"></i> WhatsApp</button>
                        <button><i class="ri-phone-fill"></i> Contact</button>
                    </div>
                </div>
            </div>
        <?php } ?>

        <div class="list-of-profile" style="background-color: rgb(241, 241, 241);">
            <h3>FAQ</h3>
            <h3>What things do I need to take care of while booking a call girl in <?= $area ?>?</h3>
            <p>You need to look into following things while booking a call girls in area: -</p>
            <ol>
                <li>Look for any recommendation from your friend or colleague</li>
                <li>Always choose poojamahajan.com services</li>
                <li>Make sure she is above legal age.</li>
                <li>You can read a review of that particular escort.</li>
                <li>Try to deal only in cash payments.</li>
            </ol>
        </div>
        <div class="list-of-profile" style="margin: 3% 0; background-color: rgb(241, 241, 241);">
            <h3>Top Cities of India</h3>
            <div class="top-cities-of-india">
                <?php 
                
                foreach($combination_cities as $cxs => $com){
                    if(strtolower($cxs) == strtolower($city)){
                        foreach($com as $xxs){
                           echo '<a href="'.get_url().$cate.'/'.strtolower($xxs).'/"><button>'.ucwords($xxs).'</button></a>';
                        }
                    }
                }
                
                ?>
                
            </div>

            <h3>Areas of <span style="text-transform: capitalize;"><?= $city ?></span></h3>
            <div class="top-cities-of-india">
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

                            $filterquery = "SELECT * FROM profiles WHERE area = '{$row_area_near_by['area_value']}'";
                            $filterres = mysqli_query($con, $filterquery);
                            if(mysqli_num_rows($filterres) > 0){
                                $sqlcount = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'nashik';
";
                                                                                $rescount = mysqli_query($con, $sqlcount);
                                                                                $rowcount = mysqli_fetch_array($rescount);
                                                                                if($rowcount['a'] > 0){
                                if(isset($cate)){
                                    $areas .= '<a href="'.get_url().$cate.'/'.$c_area_near_by.'/'.$row_area_near_by['area_value'].'/"><button>'.$row_area_near_by['area_name'].'</button></a>';
                                    }   } 
                            }   
                                             
                        };
                    }
                
                    echo $areas
                ?>
            </div>

        </div>
    </div>
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

    </div>
    <?php include './footer2.php' ?>

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
            citys.append('area', '<?= $_GET['city'] ?>')
            citys.append('cate', '<?= $cate ?>')
            fetch('<?= get_url() ?>dashboard/fetch_data.php', {
                    method: 'POST',
                    body: citys
                }).then(res => res.json())
                .then(d => {
                    document.getElementById('area-locality').innerHTML = d['output'];
                    document.getElementById('area-near').innerHTML += d['area'];
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
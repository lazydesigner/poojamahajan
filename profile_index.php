<?php
include './init.php';

$city = $_GET['state'];
$area = $_GET['city'];
$id = $_GET['id'];


$a = explode('-', $_GET['city']);

if (isset($a[1])) {
    if (isset($a[2])) {
        $area2 = $a[0] . ' ' . $a[1] . ' ' . $a[2];
    } else {
        $area2 = $a[0] . ' ' . $a[1];
    }
} else {
    $area2 = $a[0];
}
$new_phone_number = '0000000000';
if ($city == 'lucknow') {
    $new_phone_number = '8800925952';
} elseif ($city == 'agra') {
    $new_phone_number = '9690131390';
} elseif ($city == 'goa') {
    $new_phone_number = '+919548086524';
}

$sql = "SELECT * FROM `profiles` WHERE `state` = '$city' && `area` = '$area' && `profile_id` = '$id'";
$sql2 = "SELECT * FROM `profiles` WHERE `state` = '$city' && `profile_id` != '$id' ";


$res = mysqli_query($con, $sql);

$result = mysqli_query($con, $sql2);

if (mysqli_num_rows($res) > 0) {
    $row = mysqli_fetch_assoc($res);
}

$fullURL = "http" . (isset($_SERVER['HTTPS']) ? "s" : "") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= get_url() ?>dashboard/assets/fonts/remixicon.css" defer>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css" defer />
    <link rel="stylesheet" href="<?= get_url() ?>dashboard/assets/css/profile.css">
    <link rel="stylesheet" href="<?= get_url() ?>dashboard/assets/css/navbar.css">
    <link rel="stylesheet" href="<?= get_url() ?>dashboard/assets/css/footer.css?v=1" defer>
    <link rel="canonical" href="<?= $fullURL ?>" />

    <?php if (empty($row['meta_title'])) { ?>
        <title><?= ucwords($area2) ?> call girl Service With Big Boobs And curvy Ass Ready For Fuck | Poojamahajan</title>
    <?php } else { ?>
        <title><?=$row['meta_title'] ?></title>
    <?php } ?>

    <link rel="icon" type="image/png" sizes="32x32" href="<?= get_url() ?>dashboard/assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= get_url() ?>dashboard/assets/images/favicon-16x16.png">
    <meta name="theme-color" content="#ffffff">

    

    <?php if (empty($row['page_meta_description'])) { ?>
        <meta name="description" content="Experience some outsanding service by model call girls from <?= ucwords($area2) ?> directly to your home. If you want me to come to your room." />
    <?php } else { ?>
        <meta name="description" content="<?=$row['page_meta_description'] ?>" />
    <?php } ?>

    <meta name="robots" content="<?= $row['index_page'] ?>, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <?php if (empty($row['meta_title'])) { ?>
        <meta property="og:title" content="<?= ucwords($area2) ?> call girl Service With Big Boobs And curvy Ass Ready For Fuck | Poojamahajan" />
    <?php } else { ?>
        <meta property="og:title" content="<?=$row['meta_title'] ?>">
    <?php } ?>
    
    

    <?php if (empty($row['page_meta_description'])) { ?>
        <meta property="og:description" content="Experience some outsanding service by model call girls from <?= ucwords($area2) ?> directly to your home. If you want me to come to your room." />
    <?php } else { ?>
        <meta property="og:description" content="<?=$row['page_meta_description'] ?>" />
    <?php } ?>

    <meta property="og:url" content="<?= $fullURL ?>/" />
    <meta property="og:site_name" content="Escort" />
    <meta property="article:section" content="lucknow-escorts" />
    <!-- <meta property="og:image" content="https://s3.ap-south-1.amazonaws.com/poojamahajan.com/lucknow+escorts/<?= $row['profile_name'] ?>+1.png" /> -->
    <!-- <meta property="og:image:secure_url" content="https://s3.ap-south-1.amazonaws.com/poojamahajan.com/lucknow+escorts/<?= $row['profile_name'] ?>+1.png" /> -->
    <meta property="og:image:alt" content="<?= $row['profile_name'] ?> in <?= $area2 ?>" />
    <meta name="twitter:card" content="summary_large_image" />
    <?php if (empty($row['meta_title'])) { ?>
        <meta name="twitter:title" content="<?= ucwords($area2) ?> call girl Service With Big Boobs And curvy Ass Ready For Fuck | Poojamahajan" />
    <?php } else { ?>
        <meta name="twitter:title" content="<?= $row['meta_title'] ?>" />
    <?php } ?>
     
    <?php if (empty($row['page_meta_description'])) { ?>
        <meta name="twitter:description" content="Experience some outsanding service by model call girls from <?= ucwords($area2) ?> directly to your home. If you want me to come to your room." />
    <?php } else { ?>
        <meta name="twitter:description" content="<?=$row['page_meta_description'] ?>" />
    <?php } ?>
    
    <!-- <meta name="twitter:image" content="https://s3.ap-south-1.amazonaws.com/poojamahajan.com/lucknow+escorts/<?= $row['profile_name'] ?>+1.png" /> -->
    <meta name="google-site-verification" content="P46c2_y0XxT5hj7E7btNolCjHlwZRtbH12YS_wy_2pc">
    <style>
        @media screen and (max-width:780px) {
            .profile-image-grid {
                grid-template-columns: repeat(auto-fit, minmax(125px, 1fr));
            }

            .sub-profile {
                margin: auto;
            }
        }

        .container {
            width: 83%;
        }

        @media screen and (max-width:525px) {
            .profile-image-grid {
                grid-template-columns: repeat(auto-fit, minmax(130px, 1fr));
            }

            .profile-section {
                flex-wrap: wrap;
            }

            .profile-section-col:last-child {
                flex: 100%;
            }

            .profile-section-col:last-child {
                margin-top: 10%;
            }

            .container {
                width: 98%;
            }
        }
    </style>
    <style>
        .only-18 {
            width: 300px;
        }

        .confirm-18 {
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, .5);
            display: block;
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

        .main-content a {
            font-weight: bolder;
        }
    </style>
    <script>
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
                    <li itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem"><a itemtype="http://schema.org/Thing" itemprop="item" class="crumb" href="<?= get_url() ?>call-girls/<?= $city ?>/" title="Call girls in <?= ucwords($city) ?> cash Payment Service"><span itemprop="name"><?= $city ?></span></a>
                        <meta itemprop="position" content="2">
                    </li>
                    <li><b><i class="ri-arrow-right-s-line"></i></b></li>
                    <li itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem"><a itemtype="http://schema.org/Thing" itemprop="item" class="crumb"><span itemprop="name"><?= ucwords($area2) ?></span></a>
                        <meta itemprop="position" content="3">
                    </li>
                </ol>
            </div>
            <h1><?= $row['page_h1'] ?></h1>
        </div>

        <div class="profile-section">
            <div class="profile-section-col about-profile-section">
                <h2>About <span style="text-transform:capitalize;"><?= $row['profile_name'] ?></span></h2>
                <p><?= $row['content'] ?></p>
                <p><i class="ri-radio-button-line"></i><span style="text-transform:capitalize;"><?= $row['state'] ?></span>, India</p>
                <p>Contact <?= $row['profile_name'] ?> to given number for more information. </p>
                <button id="change-to-number">CONTACT</button>

                <div class="profile-image-grid">
                    <?php

                    if (($row['profile_images'] == null) or ($row['profile_images'] == 'null')) {
                        echo '';
                    } else {
                        $a = json_decode($row['profile_images'], true);
                        $alt = json_decode($row['image_alt_'], true);
                        for ($j = 0; $j < count($a); $j++) {
                            $s = $a[$j];
                            $w = 'amazonaws.com';
                            if (strpos($s, $w) !== false) {
                    ?>
                                <div class="profile-image-grid-col"><img src="<?= $a[$j] ?>" alt="call girls <?= $city ?>" width="100%" height="100%" loading="lazy"></div>
                            <?php
                            } else {
                            ?>
                                <div class="profile-image-grid-col"><img src="https://cdn.poojamahajan.com/profiles/<?= $a[$j] ?>" alt="<?= $alt[0] ?>" width="100%" height="100%" loading="lazy"></div>
                        <?php
                            }
                        }

                        ?>

                    <?php } ?>
                </div>
            </div>
            <div class="profile-section-col profile-section-information">
                <p>Information of <span style="text-transform:capitalize;"><?= $row['profile_name'] ?></span></p>
                <!-- Tab links -->
                <div class="tab">
                    <button class="tablinks" onclick="openCity(event, 'General')" id="defaultOpen">General</button>
                    <button class="tablinks" onclick="openCity(event, 'Services')">Services</button>
                    <!-- <button class="tablinks" onclick="openCity(event, 'Contact')">Contact</button> -->
                </div>

                <!-- Tab content -->
                <div id="General" class="tabcontent">
                    <table style="width: 100%; border-collapse: collapse;margin-top:2%">
                        <tr>
                            <td> Name:</td>
                            <td><span style="text-transform:capitalize;"><?= $row['profile_name'] ?></span></td>
                        </tr>
                        <tr>
                            <td> Age:</td>
                            <td><?= $row['profile_age'] ?></td>
                        </tr>
                        <tr>
                            <td> Height:</td>
                            <td><?= $row['profile_height'] ?></td>
                        </tr>
                        <tr>
                            <td> Location:</td>
                            <td><a href="<?= get_url() ?>call-girls/<?= $city ?>/<?= $area ?>/"><span style="text-transform:capitalize;"><?= $row['profile_location'] ?></span></a></td>
                        </tr>
                        <tr>
                            <td> Language:</td>
                            <td>English, Hindi</td>
                        </tr>
                        <tr>
                            <td> Nationality:</td>
                            <td>Indian</td>
                        </tr>
                        <tr>
                            <td> Profile Type:</td>
                            <td style="text-transform:capitalize;"><?= $row['profile_type'] ?></td>
                        </tr>
                        <tr>
                            <td> Bust-Waist-Hip:</td>
                            <td><?= $row['profile_body'] ?></td>
                        </tr>
                    </table>
                </div>

                <div id="Services" class="tabcontent">
                    <table style="width: 100%; border-collapse: collapse;margin-top:2%">
                        <tr>
                            <td> Blowjob</td>
                            <td>Shower Together</td>
                        </tr>
                        <tr>
                            <td> Handjob</td>
                            <td>Cum On Body</td>
                        </tr>
                        <tr>
                            <td> Massage</td>
                            <td>Couple Threesome</td>
                        </tr>
                        <tr>
                            <td> Oral Sex</td>
                            <td>Ball Licking</td>
                        </tr>
                        <tr>
                            <td> 69</td>
                            <td>GFE</td>
                        </tr>
                        <tr>
                            <td> Cum On Face</td>
                            <td>Kissing</td>
                        </tr>
                        <tr>
                            <td>Titty Fuck</td>
                            <td>In Call</td>
                        </tr>
                        <tr>
                            <td>Anal</td>
                            <td>Out Call</td>
                        </tr>
                    </table>
                </div>

                <!-- <div id="Contact" class="tabcontent">
    <p>All the contact information given by Alina are below. Contact Alina to know more?</p>
    <button>+91 8800925952</button>
    <a href="https://wa.me/8707033103?text=I'm%20interested%20in%20your%20car%20for%20sale">Chat</a>
  </div> -->
            </div>
        </div>
        <div style="padding: 2% 0;">
            <h2>Profiles from same Place</h2>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <?php while ($rows = mysqli_fetch_assoc($result)) {
                        $ax = json_decode($rows['profile_images'], true);
                        $s = $ax[0];
                        $w = 'amazonaws.com';
                        $alt = json_decode($row['image_alt_'], true);
                    ?>

                        <div class="swiper-slide">
                            <div class="sub-profile">
                                <div class="sub-profile-image">
                                    <?php
                                    if (strpos($s, $w) !== false) { ?>
                                        <a href="<?= get_url() ?><?= $row['page_url'] ?>"><img src="<?= $ax[0] ?>" loading="lazy" width="100%" height="100%" style="object-fit: cover;object-position:top" alt="call girls in <?= $city ?> with genuine photos"></a>
                                    <?php } else { ?>
                                        <a href="<?= get_url() ?><?= $row['page_url'] ?>"><img src="https://cdn.poojamahajan.com/profiles/<?= $ax[0] ?>" width="100%" height="100%" style="object-fit: cover;object-position:top" loading="lazy" alt="<?= $alt[0] ?>"></a>
                                    <?php } ?>
                                </div>
                                <div class="sub-profile-detail">
                                    <a href="<?= get_url() ?><?= $rows['page_url'] ?>" style="color:white">
                                        <p><?= $rows['page_h1'] ?></p>
                                    </a>
                                </div>
                                <div class="sub-profile-information">
                                    <span><?= $rows['state'] ?></span>
                                    <span><?= $rows['profile_age'] ?> Years</span>
                                </div>
                            </div>
                        </div>
                    <?php } ?>


                </div>
                <div class="swiper-pagination" style="display: none;"></div>
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

                    By clicking the <b>"confirm"</b> button, users certify that they are over 18 years old and release the service providers, owners, and creators of Poojamahajan.com from any responsibility regarding the content and use of this service.</p>
                <div style="margin-top: 2%;"><button class="btn1" onclick="setCookie('confirm', 'accepted', 30)">Confirm</button>
                    <a href="<?= get_url() ?>"><button class="btn2">Reject</button></a>
                </div>
            </div>
        </div>

        <!-- Swiper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js" integrity="sha512-Ysw1DcK1P+uYLqprEAzNQJP+J4hTx4t/3X2nbVwszao8wD+9afLjBQYjz7Uk4ADP+Er++mJoScI42ueGtQOzEA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- Initialize Swiper -->
        <script>
            var swiper = new Swiper(".mySwiper", {
                slidesPerView: 5,
                loop: true,
                spaceBetween: 60,
                freeMode: true,
                breakpoints: {
                    // when window width is >= 320px
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 10,
                    },
                    // when window width is >= 480px
                    420: {
                        slidesPerView: 2
                    },
                    // when window width is >= 640px
                    640: {
                        slidesPerView: 3
                    },
                    780: {
                        slidesPerView: 5,
                        spaceBetween: 60,
                    }
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                autoplay: {
                    delay: 2000,
                },
                waitForTransition: true
            });
        </script>
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
            citys.append('area', '<?= $area ?>')
            fetch('<?= get_url() ?>dashboard/fetch_data.php', {
                    method: 'POST',
                    body: citys
                }).then(res => res.json())
                .then(d => {
                    document.getElementById('area-locality').innerHTML = d['output']
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
        document.getElementById('change-to-number').addEventListener('click', (e) => {
            document.getElementById('change-to-number').innerText = "<?= $new_phone_number ?>"
        })

        function openCity(evt, tabName) {
            // Declare all variables
            var i, tabcontent, tablinks;

            // Get all elements with class="tabcontent" and hide them
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            // Get all elements with class="tablinks" and remove the class "active"
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }

            // Show the current tab, and add an "active" class to the button that opened the tab
            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.className += " active";
        }
        document.getElementById("defaultOpen").click();
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
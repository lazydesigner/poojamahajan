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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.6.0/remixicon.min.css" integrity="sha512-pI8MMQ9fC050RkbUOr8cJ75T5bYJpT1PAiML/7QZM6Fr74Ef6csO2/Cl92q+Qpxidm7WonXr6f+DbyxNHPGH8g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css" integrity="sha512-rd0qOHVMOcez6pLWPVFIv7EfSdGKLt+eafXh4RO/12Fgr41hDQxfGvoi1Vy55QIVcQEujUE1LQrATCLl2Fs+ag==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= get_url() ?>dashboard/assets/css/profile.css">
    <link rel="stylesheet" href="<?= get_url() ?>dashboard/assets/css/navbar.css">
    <link rel="stylesheet" href="<?= get_url() ?>dashboard/assets/css/footer.css" defer>
    <link rel="canonical" href="<?= $fullURL ?>" />
    <title><?=$area2 ?> call girl Service With Big Boobs And curvy Ass Ready For Fuck | Poojamahajan</title>

    <link rel="icon" type="image/png" sizes="32x32" href="<?= get_url() ?>dashboard/assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= get_url() ?>dashboard/assets/images/favicon-16x16.png">
    <meta name="theme-color" content="#ffffff">

    <meta name="description" content="Experience some outsanding service by model call girls from <?=$area2 ?> directly to your home. If you want me to come to your room." />
    <meta name="robots" content="index, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="<?=$area2 ?> call girl Service With Big Boobs And curvy Ass Ready For Fuck | Poojamahajan" />
    <meta property="og:description" content="Experience some outsanding service by model call girls from <?=$area2 ?> directly to your home. If you want me to come to your room." />
    <meta property="og:url" content="<?= $fullURL ?>/" />
    <meta property="og:site_name" content="Escort" />
    <meta property="article:section" content="lucknow-escorts" />
    <meta property="og:image" content="https://s3.ap-south-1.amazonaws.com/poojamahajan.com/lucknow+escorts/<?= $row['profile_name'] ?>+1.png" />
    <meta property="og:image:secure_url" content="https://s3.ap-south-1.amazonaws.com/poojamahajan.com/lucknow+escorts/<?= $row['profile_name'] ?>+1.png" />
    <meta property="og:image:alt" content="<?= $row['profile_name'] ?> Telibagh" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?=$area2 ?> call girl Service With Big Boobs And curvy Ass Ready For Fuck | Poojamahajan" />
    <meta name="twitter:description" content="Experience some outsanding service by model call girls from <?=$area2 ?> directly to your home. If you want me to come to your room." />
    <meta name="twitter:image" content="https://s3.ap-south-1.amazonaws.com/poojamahajan.com/lucknow+escorts/<?= $row['profile_name'] ?>+1.png" />
    <meta name="google-site-verification" content="P46c2_y0XxT5hj7E7btNolCjHlwZRtbH12YS_wy_2pc">
    <style>
        @media screen and (max-width:780px) {
            .profile-image-grid {
                grid-template-columns: repeat(auto-fit, minmax(125px, 1fr));
            }
            .sub-profile{margin: auto;}
        }
        .container {width: 83%;}
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
        .container {width: 98%;}
        }
    </style>
    <script>
        // const mySchema2 = {
        //     "@context": "https://schema.org/",
        //     "@type": "WebSite",
        //     "name": "Poojamahajan",
        //     "url": "<?php // $fullURL ?>",
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

<body>
    <header>
        <nav class="navbar">
            <span class="brand-name"><a href="<?= get_url() ?>">Poojamahajan</a></span>
            <ul class="nav-ul" id="nav-ul">
                <li><a href="<?= get_url() ?>">Home</a></li>
                <li><a href="<?= get_url() ?>contact-us/">Contact Us</a></li>
                <li><a href="<?= get_url() ?>login/">Login</a></li>
                <li><a href="<?= get_url() ?>register/">Sign up</a></li>
            </ul>
            <div style="width: 23%;align-self:end"><a href="<?=get_url() ?>login/" style="float: right;"><span class="post-add-txt">Post Ad</span><span class="post-add-icon search-option" ><i class="ri-add-box-line"></i></span></a></div>
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
                <li itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem"><a itemtype="http://schema.org/Thing" itemprop="item" class="crumb" href="<?= get_url() ?>call-girls/<?= $city ?>" title="Call girls in <?= $city ?> cash Payment Service"><span itemprop="name"><?= $city ?></span></a>
                    <meta itemprop="position" content="2">
                </li>
                <li><b><i class="ri-arrow-right-s-line"></i></b></li>
                <li itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem"><a itemtype="http://schema.org/Thing" itemprop="item" class="crumb"><span itemprop="name"><?= $area2 ?></span></a>
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
                    <?php $a = json_decode($row['profile_images'], true);
                    for ($j = 0; $j < count($a); $j++) { ?>
                        <div class="profile-image-grid-col"><img src="<?= $a[$j] ?>" alt="" width="100%" height="100%"></div>
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
                            <td><a href="<?= get_url() ?>call-girls/<?=$city ?>/<?=$area ?>/"><span style="text-transform:capitalize;"><?= $row['profile_location'] ?></span></a></td>
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
                    ?>

                        <div class="swiper-slide">
                            <div class="sub-profile">
                                <div class="sub-profile-image">
                                    <img src="<?= $ax[0] ?>" width="100%" height="100%" style="object-fit: cover;object-position:top" alt="">
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
                        slidesPerView:3
                    },
                    780:{
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
            document.getElementById('change-to-number').innerText = "+91 8800925952"
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
        "@context": "http://schema.org/",
        "@type": "Organization",
        "name": "Poojamahajan",
        "url": "https://poojamahajan.com",
        "logo": "https://poojamahajan.com/dashboard/assets/images/POOJA.webp.png"
    </script>
</body>

</html>
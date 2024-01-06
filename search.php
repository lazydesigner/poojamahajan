<?php
include './init.php';

$city = $_GET['city'];

$a = explode('-', $_GET['locality']);

$gender = $_GET['gender'];

$b = explode('-', $_GET['category']);

$age = explode('-', $_GET['age']);

if (isset($a[1])) {
    if (isset($a[2])) {
        $area = $a[0] . ' ' . $a[1] . ' ' . $a[2];
    } else {
        $area = $a[0] . ' ' . $a[1];
    }
} else {
    $area = $a[0];
}

if (isset($b[1])) {
    $cat = $b[0] . ' ' . $b[1];
} else {
    $cat = $b[0];
}

$sql = "SELECT * FROM profiles WHERE `catigory` = '{$_GET['category']}' ";
$count = "SELECT COUNT(*) as a FROM profiles WHERE `catigory` = '{$_GET['category']}' ";

if (!empty($city)) {
    $sql .= "and `state` = '$city' ";
    $count .= "and `state` = '$city' ";
}
if (!empty($_GET['locality'])) {
    $sql .= "and `area` = '{$_GET['locality']}' ";
    $count .= "and `area` = '{$_GET['locality']}' ";
}
// if(!empty($gender)){

// }
if (!empty($_GET['age'])) {
    if (isset($age[1])) {
        $sql .= " and `profile_age` BETWEEN $age[0] AND $age[1]  ";
        $count .= " and `profile_age` BETWEEN $age[0] AND $age[1]  ";
    } else {
        $sql .= " and `profile_age` > $age[0]  ";
        $count .= " and `profile_age` > $age[0]  ";
    }
}

$res = mysqli_query($con, $sql);
$count_res = mysqli_query($con, $count);
$count_result = mysqli_fetch_assoc($count_res);

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.6.0/remixicon.min.css" integrity="sha512-pI8MMQ9fC050RkbUOr8cJ75T5bYJpT1PAiML/7QZM6Fr74Ef6csO2/Cl92q+Qpxidm7WonXr6f+DbyxNHPGH8g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css" integrity="sha512-rd0qOHVMOcez6pLWPVFIv7EfSdGKLt+eafXh4RO/12Fgr41hDQxfGvoi1Vy55QIVcQEujUE1LQrATCLl2Fs+ag==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= get_url() ?>dashboard/assets/css/list-of-profile.css">
    <link rel="stylesheet" href="<?= get_url() ?>dashboard/assets/css/navbar.css">
    <link rel="stylesheet" href="<?= get_url() ?>dashboard/assets/css/footer.css" defer>
    <meta name="robots" content=" noindex, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />
    <title>Poojamahajan - Search your Escort</title>
    <link rel="canonical" href="<?=$fullURL ?>/" />

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
    </style>
<script type="application/ld+json">
        "@context": "http://schema.org/",
            "@type": "Organization",
            "name": "Poojamahajan",
            "url": "https://poojamahajan.com",
            "logo": "https://poojamahajan.com/dashboard/assets/images/POOJA.webp.png"
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
                <li><a href="<?=get_url() ?>register/">Sign up</a></li>
            </ul>
            <div style="width: 20%;align-self:end"><a href="<?=get_url() ?>login/" style="float: right;">Post Ad</a></div>
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
                <?php if (!empty($city)) { ?>
                    <li><b><i class="ri-arrow-right-s-line"></i></b></li>
                    <li itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem"><a itemtype="http://schema.org/Thing" itemprop="item" class="crumb" href="<?= get_url() ?>call-girls/<?= $city ?>" title="Call girls in <?= $city ?> cash Payment Service"><span itemprop="name"><?= $city ?></span></a>
                        <meta itemprop="position" content="2">
                    </li><?php } ?>
                <?php if (!empty($_GET['locality'])) { ?>
                    <li><b><i class="ri-arrow-right-s-line"></i></b></li>
                    <li itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem"><a itemtype="http://schema.org/Thing" itemprop="item" class="crumb"><span itemprop="name"><?= $area ?></span></a>
                        <meta itemprop="position" content="3">
                    </li><?php } ?>
            </ol>
        </div>
            <div class="result"><?= $count_result['a'] ?> Results for <?= $cat ?> in <span style="text-transform: capitalize;"><?php if (!empty($city)) {
                                                                                                                                    if (!empty($area)) {
                                                                                                                                        echo $area . ', ' . $city;
                                                                                                                                    } else {
                                                                                                                                        echo $city;
                                                                                                                                    }
                                                                                                                                } else {
                                                                                                                                    echo 'India';
                                                                                                                                } ?></span></div>
            <?php if (isset($data)) { ?> <h1>Call girls in <?php if (!empty($area)) {
                                                                echo $area;
                                                            } else {
                                                                echo 'India';
                                                            } ?> with WhatsApp number</h1><?php } ?>
        </div>

        <?php if (isset($data)) { ?>

            <div class="list-of-profile">
                <h2>Are you looking for call girls in <?= $area ?> for friendship?</h2>
                <p>On our website, Poojamahajan Escort Portal, you can find multiple ads for <?= $area ?> call girls who offer the best erotic services in this locality. If you're tired of searching for reliable call girls here and there, now search poojamahajan.com with <?= $area ?> name and with just a few clicks, you can see gorgeous call girls near you.</p>
                <p>During their visit to the <?= $city ?>, a charming model escort is with our clients. You can book tempting call girls for your personal needs on any occasion. Our escorts are both elite and polite. A sultry figure call girl without a sense of manners or speech will ruin your mood if you reserve one. So we prefer passionate and curvy-calling girls of our plateform with dressing sense.</p>
                <p>Our escort service in <?= $area ?> chooses all our escorts wisely so they will not spoil your mood. We guarantee that if our <?= $area ?> call girls do not compromise and behave well, we will try to refund the full amount. Contact these models now and get a luxurious girlfriend experience at any private party or celebration. You can easily find online girls with numbers and see their real pictures, which helps save time. Poojamahajan also offers other different types of <?= $area ?> call girls, on the basis of age, color, body type, etc., who offer 24/7 services with no travel charges for nearby hotels or private property bunglows or rooms.</p>
                <p>We do not interfere between the ad publisher and clients. You can negotiate the price and discuss the payment mode. You will easily find high-profile and cheap call girls for short-term or long-term relationships with contact details.</p>
                <h3>Mature escorts and housewife call girls near me in <?= $area ?></h3>
                <p>How would you find a juicy and genuine mature bursty housewives call girls near you in <?= $area ?>? The answer to this statement is Poojamahajan.com, which allows you to navigate thousands of high-profile married escorts or divorced housewives to select the one that suits you best as per your taste. You can book any partner at any time near you in <?= $area ?> of the listed models on our web portal for various sexual or emotional needs. Your reach is not limited to housewife escorts; you can also browse thousands of other profiles of Models call girls, Air hostess call girls, Actress call girls, Facebook call girls, Instagram celebrities, punjabi call girls, and Russian call girls on your single visit to our Poojamahajan.com</p>
            </div>

            <?php while ($row = mysqli_fetch_assoc($res)) {
                $ax = json_decode($row['profile_images'], true);
            ?>
                <div class="profile-section-box">
                    <div class="profile-section-box-image">
                        <a href="<?= get_url() ?><?= $row['page_url'] ?>"><img src="<?= $ax[0] ?>" width="100%" height="100%" style="object-fit: cover;object-position:top" alt=""></a>
                    </div>
                    <div class="profile-section-box-detail">
                        <h3><a href="<?= get_url() ?><?= $row['page_url'] ?>"><?= $row['page_h1'] ?></a></h3>
                        <div class="multiline-ellipsis" style="margin-bottom: 2%;"><?= $row['content'] ?></div>
                        <div class="profile-section-button-detail">
                            <button><i class="ri-whatsapp-fill"></i> WhatsApp</button>
                            <button><i class="ri-phone-fill"></i> Contact</button>
                        </div>
                    </div>
                </div>
            <?php } ?>

            <div class="list-of-profile">
                <h2>FAQ</h2>
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
        <?php } else {
            echo '<h2 style="font-size:3rem">Not Profile Found</h2>';
        } ?>
    </div>


    </div>
    <footer>
        <div class="new-footer-row">
            <div class="new-footer-col">
                <div class="new-footer-logo">
                    <a href="<?= get_url() ?>"><img src="<?= get_url() ?>dashboard/assets/images/POOJA.webp.png" width="100%" height="100%" class="footer-logo-img" alt=""></a>
                </div>
            </div>
            <div class="new-footer-col">
                <strong>LINKS</strong>
                <ul>
                    <li><a href="<?= get_url() ?>">Home</a></li>
                    <li><a href="<?= get_url() ?>about-us/">About Us</a></li>
                    <li><a href="<?= get_url() ?>call-girls/">Call Girls</a></li>
                </ul>
            </div>
            <div class="new-footer-col">
                <strong>HELP / INFO</strong>
                <ul>
                    <li><a href="<?= get_url() ?>terms-and-conditions/">Terms And Conditions</a></li>
                    <li><a href="<?= get_url() ?>disclaimer/">Disclaimer</a></li>
                    <li><a href="<?= get_url() ?>faqs/">Help and Faqs</a></li>
                </ul>
            </div>
            <div class="new-footer-col">
                <strong>USEFUL LINKS</strong>
                <ul>
                    <li><a href="<?= get_url() ?>contact-us/">Contact US</a></li>
                    <li><a href="<?=get_url() ?>login/">Post Your Ad</a></li>
                    <li><a href="<?= get_url() ?>call-girls/">Gallery</a></li>
                </ul>
            </div>
        </div>
        <div class="new-footer-row-2">
            <p>The purpose of this website is to provide information between advertisers and entertainment seekers. We had never established any linkage with prositution, brokerage, pimp, escort service, brothels, etc. We are not accountable for any liability as we host third-party content, images, and phone numbers. We are not responsible for any transaction that took place between the model, advertiser, and client. Hereby, we request our visitors not to make any advance payments. We are just an online platform to advertise content and details on our web space. By visiting our website, you confirm the age of 18 and above.</p>
        </div>
        <div class="new-footer-row2">
            <p>&copy; Copyrights 2023. All Rights Reserved</p>
            <ul>
                <li><a href="https://www.dmca.com/Protection/Status.aspx?ID=16321de9-a9a4-4373-ae9a-691d86e0fd82&amp;refurl=https://skokra.com/pm/disclaimer/" title="DMCA.com Protection Status" class="dmca-badge"> <img src="https://images.dmca.com/Badges/dmca_protected_16_120.png?ID=16321de9-a9a4-4373-ae9a-691d86e0fd82" width="70px" alt="DMCA.com Protection Status"></a> <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"></script></li>  
                <li><a href="https://www.dmca.com/compliance/poojamahajan.com" title="DMCA Compliance information for poojamahajan.com"><img src="https://www.dmca.com/img/dmca-compliant-grayscale.png" alt="DMCA compliant image" width="70px"></a></li>
                <li><a href="https://www.behance.net/poojamahajan4"><i class="ri-behance-line"></i></a></li>
                <!-- <li><a href=""><i class="ri-instagram-line"></i></a></li> -->
                <li><a href="https://www.flickr.com/photos/195962025@N07/"><i class="ri-flickr-fill"></i></a></li>
                <li><a href="https://www.tumblr.com/poojamahajan1"><i class="ri-tumblr-fill"></i></a></li>
                <li><a href="https://www.youtube.com/channel/UCxJhGcJloIJavPcWub8DEJg"><i class="ri-youtube-fill"></i></a></li>
                <li><a href="https://soundcloud.com/user-77189773"><i class="ri-soundcloud-fill"></i></a></li>
                <li><a href="https://www.reddit.com/user/poojamahajan1/comments/x20lqg/pooja_mahajan/?rdt=58757"><i class="ri-reddit-fill"></i></a></li>
            </ul>
        </div>
    </footer>

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
            citys.append('area', '<?= $_GET['locality'] ?>')
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

</body>

</html>
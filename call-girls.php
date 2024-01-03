<?php include './init.php'; $fullURL = "http" . (isset($_SERVER['HTTPS']) ? "s" : "") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.6.0/remixicon.min.css" integrity="sha512-pI8MMQ9fC050RkbUOr8cJ75T5bYJpT1PAiML/7QZM6Fr74Ef6csO2/Cl92q+Qpxidm7WonXr6f+DbyxNHPGH8g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= get_url() ?>dashboard/assets/css/index.css">
    <link rel="stylesheet" href="<?= get_url() ?>dashboard/assets/css/navbar.css">
    <link rel="stylesheet" href="<?= get_url() ?>dashboard/assets/css/footer.css" defer>
    <title>The Best Escort Services In India | Pooja Mahajan</title>
    <meta name="description" content="If you are looking for a call girl who can give you a satisfying service, Pooja Mahajan is one of the top escort platforms that can provide you with many call girls." />
    <meta name="robots" content=" noindex, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />

    <link rel="canonical" href="<?=$fullURL ?>" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="The Best Escort Services In India | Pooja Mahajan" />
    <meta property="og:description" content="If you are looking for a call girl who can give you a satisfying service, Pooja Mahajan is one of the top escort platforms that can provide you with many call girls." />
    <meta property="og:url" content="https://poojamahajan.com/" />
    <meta property="og:site_name" content="Escort" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="The Best Escort Services In India | Pooja Mahajan" />
    <meta name="twitter:description" content="If you are looking for a call girl who can give you a satisfying service, Pooja Mahajan is one of the top escort platforms that can provide you with many call girls." />

    <style>
        .profile-image-grid-list {
            width: 100%;
            height: auto;
            margin-top: 4%;
            height: 400px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            grid-template-rows: auto;
            /* grid-template-columns: 220px 220px; */
            gap: 3%;
        }

        .sub-profile {
            width: 190px;
            height: 300px;
            background-color: #9f21e3;
            position: relative;
        }

        .sub-profile-image {
            width: 100%;
            height: 150px;
            background-color: lightgrey;
        }

        .sub-profile-detail {
            padding: .1% 4%;
            color: white;
        }

        .sub-profile-information {
            width: 100%;
            height: 40px;
            display: flex;
            justify-content: center;
            position: absolute;
            bottom: 3%;
            gap: 5%;
        }

        .sub-profile-information span {
            width: auto;
            line-height: 40px;
            height: auto;
            padding: 1% 4%;
            background-color: white;
            color: #9f21e3;
            text-align: center;
        }
    </style>
    <script>
        const mySchema2 = {
            "@context": "https://schema.org/",
            "@type": "WebSite",
            "name": "Poojamahajan",
            "url": "<?= $fullURL ?>",
            "potentialAction": {
                "@type": "SearchAction",
                "target": "https://poojamahajan.com/search?{search_term_string}",
                "query-input": "required name=search_term_string"

            }
        }
        const script2 = document.createElement('script');
        script2.type = "application/ld+json";
        script2.text = JSON.stringify(mySchema2);
        document.head.appendChild(script2);
    </script>


</head>

<body>

    <header>
        <nav class="navbar">
            <span class="brand-name"><a href="<?= get_url() ?>">Poojamahajan</a></span>
            <ul class="nav-ul" id="nav-ul">
            <li><a href="<?=get_url() ?>">Home</a></li>
                <li><a href="<?=get_url() ?>contact-us/">Contact Us</a></li>
                <li><a href="<?=get_url() ?>login/">Login</a></li>
                <li><a href="<?=get_url() ?>sign-up/">Sign up</a></li>
            </ul>
            <div style="width: 20%;align-self:end"><a href="" style="float: right;">Post Ad</a></div>
            <span class="search-option" id="search-filter-menu"><i class="ri-search-2-line"></i></span>
            <span class="menu-option" id="menu-option"><i class="ri-menu-line"></i></span>
        </nav>
    </header>
    <div class="container">
        <div class="search-filter" id="search-filter">
            <?php include './navbar.php' ?>
        </div>
        <div class="page-detail-and-information">
            <ol style="display: flex;align-items:center;gap:.5%;list-style:none;padding:0" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                <li itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem"><a itemtype="http://schema.org/Thing" itemprop="item" title="Genuine Call girls &amp; escorts Service: Photos, Phone number | dreamgal" class="crumb" href="<?= get_url() ?>"><span itemprop="name">Home</span></a>
                    <meta itemprop="position" content="1">
                </li>
                <li><b><i class="ri-arrow-right-s-line"></i></b></li>
                <li itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem"><a itemtype="http://schema.org/Thing" itemprop="item" class="crumb" title="Poojamahajan Call Girl Page"><span itemprop="name">call girls</span></a>
                    <meta itemprop="position" content="2">
                </li>
            </ol>
            <h1>Poojamahajan Call Girls</h1>
        </div>
        <div class="page-detail-and-information " style="width: 100%;height:auto">
            <div class="profile-image-grid-list">
            <?php $query = "SELECT * FROM profiles;";
            $result = mysqli_query($con, $query);
            if (mysqli_num_rows($result) > 0) {
                while ($rows = mysqli_fetch_assoc($result)) {
                    $ax = json_decode($rows['profile_images'], true); ?>
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
            <?php }
            } ?>
            </div>
        </div>
    </div>
    <?php // include './footer2.php' ?>
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
            document.getElementById('serach-city-input').value = '';
        })


        document.getElementById('search-for-cities-in-row').addEventListener('keyup', (e) => {
            var searchTerm = e.target.value.toLowerCase()

            var x = document.querySelectorAll('#list-of-cities-row')
            for (j = 0; j < x.length; j++) {
                var items = x[j].getElementsByTagName('li');
                for (i = 0; i < items.length; i++) {
                    var itemText = items[i].innerText.toLowerCase()
                    if (itemText.includes(searchTerm)) {
                        items[i].style.display = 'block';
                    } else {
                        items[i].style.display = 'none';
                    }
                }
            }
        })

        document.getElementById('menu-option').addEventListener('click', () => {
            document.getElementById('nav-ul').classList.toggle('nav-ul-active')
        })
        document.getElementById('search-filter-menu').addEventListener('click', () => {
            document.getElementById('search-filter').classList.toggle('search-filter-active')
        })
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
<?php include './init.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Made By Developer -->
    <!-- <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.6.0/remixicon.min.css"  as="style" onload="this.onload=null;this.rel='stylesheet'" async> -->
    <link rel="stylesheet" href="<?= get_url() ?>dashboard/assets/fonts/remixicon.css" defer>
    <!-- <link rel="stylesheet" href="<?= get_url() ?>dashboard/assets/css/index.css"> -->
    <link rel="stylesheet" href="<?= get_url() ?>dashboard/assets/css/footer.css?v=1" defer loading="lazy">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= get_url() ?>dashboard/assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= get_url() ?>dashboard/assets/images/favicon-16x16.png">
    <meta name="theme-color" content="#ffffff">

    <title>The Best Escort Services In India | Pooja Mahajan</title>
    <meta name="description" content="If you are looking for a call girl who can give you a satisfying service, Pooja Mahajan is one of the top escort platforms that can provide you with many call girls." />
    <meta name="robots" content=" index, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />

    <link rel="canonical" href="https://poojamahajan.com/" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="The Best Escort Services In India | Pooja Mahajan" />
    <meta property="og:description" content="If you are looking for a call girl who can give you a satisfying service, Pooja Mahajan is one of the top escort platforms that can provide you with many call girls." />
    <meta property="og:url" content="https://poojamahajan.com/" />
    <meta property="og:site_name" content="Escort" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="The Best Escort Services In India | Pooja Mahajan" />
    <meta name="twitter:description" content="If you are looking for a call girl who can give you a satisfying service, Pooja Mahajan is one of the top escort platforms that can provide you with many call girls." />
    <meta name="google-site-verification" content="P46c2_y0XxT5hj7E7btNolCjHlwZRtbH12YS_wy_2pc">
    <style>
        .container {
            width: 75%;
            margin: auto;
        }

        .search-filter {
            margin-top: 2%;
            width: 100%;
            border-top: 4px solid #9f21e3;
            height: 150px;
            background-color: rgb(241, 241, 241);
        }

        .search-filter {
            padding: 2% 3%;
        }

        .search-filter form {
            width: 100%;
            height: 100%;
            display: grid;
            align-items: center;
        }

        .form-group {
            display: flex;
        }

        .search-filter .form-group select,
        .search-filter .form-group input {
            height: 40px;
            border-radius: 5px;
            border: 1px solid lightgrey;
            margin: auto 8px;
            outline: 0;
            width: 220px;
        }

        input[type=number] {
            cursor: auto;
        }

        .search-city-inner-div {
            width: 80%;
            position: absolute;
            display: none;
        }

        .serach-city-input {
            width: 10px;
        }

        .search-city-inner-div input {
            width: 20px;
        }

        .search-filter .form-group button {
            height: 40px;
            width: 100px;
            border-radius: 5px;
            border: 1px solid lightgrey;
            margin: auto 8px;
            color: white;
            font-weight: bold;
            cursor: pointer;
            background-color: #9f21e3;
        }

        .page-detail-and-information {
            width: 100%;
            padding-top: 3%;
        }

        .page-detail-and-information h1 {
            font-size: 1.2rem;
            font-weight: 500;
        }

        .page-detail-and-information a {
            color: gray;
        }

        .search-the-city {
            width: 100%;
            padding: 2%;
            background-color: rgb(241, 241, 241);
            border-top: 4px solid #9f21e3;
        }

        .search-the-city input {
            width: 100%;
            border: 1px solid lightgray;
            height: 40px;
            padding: 2%;
        }

        .city-name-list {
            border-top: 4px solid #9f21e3;
            margin-top: 2%;
            width: 100%;
            padding: 1.5% 3.2%;
            background-color: rgb(241, 241, 241);
        }

        .city-name-list h2 {
            font-size: 1.3rem;
            font-weight: 500;
            padding: 0;
            margin: 0;
        }

        .list-of-cities-row {
            padding: 1%;
            width: 100%;
            display: flex;
        }

        .crumb {
            color: black;
            font-weight: bold;
        }

        .city-name-list-item {
            flex: 1;
        }

        .city-name-list-item ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .city-name-list ul li {
            font-weight: bold;
            margin: 0 0 15px 0;
        }

        .city-name-list ul li a {
            color: #9f21e3
        }

        .city-name-list ul li:first-child {
            font-weight: bold;
            margin-top: 0;
        }

        .main-content {
            padding: 0 2% 3% 2%;
            border-top: 4px solid #9f21e3;
            background-color: rgb(241, 241, 241);
            margin-top: 2%;
        }

        .main-content h2 {
            font-size: 2rem;
        }

        .main-content p {
            font-size: 1.2rem;
            line-height: 25px;
        }

        .sticky-bottom-contact-information {
            width: 97%;
            height: 90px;
            border-radius: 10px;
            margin: 2% auto;
            border: 1px solid black;
            background-color: white;
            position: sticky;
            bottom: 0;
        }

        .sticky-bottom-contact-information-inner {
            width: 80%;
            height: 100%;
            margin: auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .sticky-bottom-contact-information .box {
            width: 50px;
            height: 50px;
            background-color: grey;
            border-radius: 5px;
        }

        .sticky-bottom-contact-information-inner p {
            font-size: 1.7rem;
        }

        footer {
            width: 100%;
            background-color: #9f21e3;
            color: white;
        }

        .follow-up {
            margin: 3% 0;
        }

        .follow-up i {
            font-size: xx-large;
        }

        .only-18 {
            width: 300px;
        }

        .footer-row {
            width: 90%;
            margin: auto;
            height: 100%;
            display: flex;
            gap: 5%;
            justify-content: center;
        }

        .footer-col:first-child {
            width: 35%;
        }

        .footer-col h3 {
            font-size: 1.8rem;
        }

        .footer-col-ul {
            list-style: none;
            padding: 0;
        }

        .footer-p {
            font-size: 1.3rem;
        }

        .footer-col-ul li a {
            color: white;
            font-weight: bold;
        }


        .main-content h3 {
            font-size: 1.7rem;
        }

        .main-content a {
            color: blue;
            font-weight: bold;
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

        .main-content a {
            font-weight: bolder;
        }
    </style>

    <link rel="stylesheet" href="<?= get_url() ?>dashboard/assets/css/navbar.css" async>

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "WebSite",
            "name": "Poojamahajan - Post Free Adult Classifieds Ads",
            "url": "https://poojamahajan.com/",
            "potentialAction": {
                "@type": "SearchAction",
                "target": "https://poojamahajan.com/search?={search_term_string}",
                "query-input": "required name=search_term_string"
            }
        }
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
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "Poojamahajan",
            "url": "https://poojamahajan.com",
            "logo": "https://poojamahajan.com/dashboard/assets/images/POOJA.webp.png"
        }
    </script>


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
                </ol>
            </div>
            <h1 style="font-size: 1.2rem;font-weight: 500;">Genuine Escort Service and Call Girls Real Images and Whatsapp Numbers</h1>
        </div>
        <div class="search-the-city">
            <input type="text" name="" id="search-for-cities-in-row" placeholder="Search For Cities or Areas..">
        </div>

        <div class="city-name-list">
            <h2>Indian Call Girls(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls';
";
                                    $res = mysqli_query($con, $sql);
                                    $row = mysqli_fetch_array($res);
                                    echo $row['a'] ?>)</h2>
            <div class="list-of-cities-row" id="list-of-cities-row">
                <div class="city-name-list-item">
                    <ul>
                        <li><a href="<?= get_url() ?>call-girls/delhi/">Delhi(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'delhi';
";
                                                                                $res = mysqli_query($con, $sql);
                                                                                $row = mysqli_fetch_array($res);
                                                                                echo $row['a'] ?>)</a></li>
                        <li><a href="<?= get_url() ?>call-girls/agra/">Agra(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'agra';
";
                                                                            $res = mysqli_query($con, $sql);
                                                                            $row = mysqli_fetch_array($res);
                                                                            echo $row['a'] ?>)</a></li>
                        <li><a href="<?= get_url() ?>call-girls/jaipur/">Jaipur(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'jaipur';
";
                                                                                $res = mysqli_query($con, $sql);
                                                                                $row = mysqli_fetch_array($res);
                                                                                echo $row['a'] ?>)</a></li>
                        <li><a href="<?= get_url() ?>call-girls/lucknow/">Lucknow(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'lucknow';
";
                                                                                    $res = mysqli_query($con, $sql);
                                                                                    $row = mysqli_fetch_array($res);
                                                                                    echo $row['a'] ?>)</a></li>
                        <li><a href="<?= get_url() ?>call-girls/guwahati/">Guwahati(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'guwahati';
";
                                                                                    $res = mysqli_query($con, $sql);
                                                                                    $row = mysqli_fetch_array($res);
                                                                                    echo $row['a'] ?>)</a></li>
                        <li><a href="<?= get_url() ?>call-girls/rishikesh/">Rishikesh(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'rishikesh';
";
                                                                                        $res = mysqli_query($con, $sql);
                                                                                        $row = mysqli_fetch_array($res);
                                                                                        echo $row['a'] ?>)</a></li>
                    </ul>
                </div>
                <div class="city-name-list-item">
                    <ul>
                        <li><a href="<?= get_url() ?>call-girls/goa/">Goa(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'goa';
";
                                                                            $res = mysqli_query($con, $sql);
                                                                            $row = mysqli_fetch_array($res);
                                                                            echo $row['a'] ?>)</a></li>
                        <li><a href="<?= get_url() ?>call-girls/ghaziabad/">Ghaziabad(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'ghaziabad';
";
                                                                                        $res = mysqli_query($con, $sql);
                                                                                        $row = mysqli_fetch_array($res);
                                                                                        echo $row['a'] ?>)</a></li>
                        <li><a href="<?= get_url() ?>call-girls/kota/">Kota(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'kota';
";
                                                                            $res = mysqli_query($con, $sql);
                                                                            $row = mysqli_fetch_array($res);
                                                                            echo $row['a'] ?>)</a></li>
                        <li><a href="<?= get_url() ?>call-girls/ahmedabad/">Ahmedabad(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'ahmedabad';
";
                                                                                        $res = mysqli_query($con, $sql);
                                                                                        $row = mysqli_fetch_array($res);
                                                                                        echo $row['a'] ?>)</a></li>
                        <!-- <li><a href="<?= get_url() ?>call-girls/arunachal-pradesh/">Arunachal-Pradesh(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'arunachal-pradesh';
    ";
                                                                                                            $res = mysqli_query($con, $sql);
                                                                                                            $row = mysqli_fetch_array($res);
                                                                                                            echo $row['a'] ?>)</a></li> -->
                        <li><a href="<?= get_url() ?>call-girls/kanpur/">Kanpur(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'kanpur';
";
                                                                                $res = mysqli_query($con, $sql);
                                                                                $row = mysqli_fetch_array($res);
                                                                                echo $row['a'] ?>)</a></li>
                        <li><a href="<?= get_url() ?>call-girls/bhopal/">Bhopal(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'bhopal';
";
                                                                                $res = mysqli_query($con, $sql);
                                                                                $row = mysqli_fetch_array($res);
                                                                                echo $row['a'] ?>)</a></li>
                    </ul>
                </div>
                <div class="city-name-list-item">
                    <ul>
                        <li><a href="<?= get_url() ?>call-girls/gurugram/">Gurugram(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'gurugram';
";
                                                                                    $res = mysqli_query($con, $sql);
                                                                                    $row = mysqli_fetch_array($res);
                                                                                    echo $row['a'] ?>)</a></li>
                        <li><a href="<?= get_url() ?>call-girls/faridabad/">Faridabad(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'faridabad';
";
                                                                                        $res = mysqli_query($con, $sql);
                                                                                        $row = mysqli_fetch_array($res);
                                                                                        echo $row['a'] ?>)</a></li>
                        <li><a href="<?= get_url() ?>call-girls/mumbai/">Mumbai(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'mumbai';
";
                                                                                $res = mysqli_query($con, $sql);
                                                                                $row = mysqli_fetch_array($res);
                                                                                echo $row['a'] ?>)</a></li>
                        <li><a href="<?= get_url() ?>call-girls/ajmer/">Ajmer(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'ajmer';
";
                                                                                $res = mysqli_query($con, $sql);
                                                                                $row = mysqli_fetch_array($res);
                                                                                echo $row['a'] ?>)</a></li>
                        <li><a href="<?= get_url() ?>call-girls/varanasi/">Varanasi(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'varanasi';
";
                                                                                    $res = mysqli_query($con, $sql);
                                                                                    $row = mysqli_fetch_array($res);
                                                                                    echo $row['a'] ?>)</a></li>
                        <li><a href="<?= get_url() ?>call-girls/dehradun/">Dehradun(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'dehradun';
";
                                                                                    $res = mysqli_query($con, $sql);
                                                                                    $row = mysqli_fetch_array($res);
                                                                                    echo $row['a'] ?>)</a></li>
                    </ul>
                </div>
                <div class="city-name-list-item">
                    <ul>
                        <li><a href="<?= get_url() ?>call-girls/udaipur/">Udaipur(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'udaipur';
";
                                                                                    $res = mysqli_query($con, $sql);
                                                                                    $row = mysqli_fetch_array($res);
                                                                                    echo $row['a'] ?>)</a></li>
                        <li><a href="<?= get_url() ?>call-girls/indore/">Indore(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'indore';
";
                                                                                $res = mysqli_query($con, $sql);
                                                                                $row = mysqli_fetch_array($res);
                                                                                echo $row['a'] ?>)</a></li>
                        <li><a href="<?= get_url() ?>call-girls/noida/">Noida(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'noida';
";
                                                                                $res = mysqli_query($con, $sql);
                                                                                $row = mysqli_fetch_array($res);
                                                                                echo $row['a'] ?>)</a></li>
                        <li><a href="<?= get_url() ?>call-girls/patna/">Patna(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'patna';
";
                                                                                $res = mysqli_query($con, $sql);
                                                                                $row = mysqli_fetch_array($res);
                                                                                echo $row['a'] ?>)</a></li>
                        <li><a href="<?= get_url() ?>call-girls/visakhapatnam/">Visakhapatnam(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'visakhapatnam';
";
                                                                                                $res = mysqli_query($con, $sql);
                                                                                                $row = mysqli_fetch_array($res);
                                                                                                echo $row['a'] ?>)</a></li>
                        <li><a href="<?= get_url() ?>call-girls/manali/">Manali(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'manali';
";
                                                                                $res = mysqli_query($con, $sql);
                                                                                $row = mysqli_fetch_array($res);
                                                                                echo $row['a'] ?>)</a></li>
                    </ul>
                </div>
            </div>
            <div class="list-of-cities-row" id="list-of-cities-row">
                <div class="city-name-list-item">
                    <ul>

                        <li><a href="<?= get_url() ?>call-girls/jabalpur/">Jabalpur(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'jabalpur';
";
                                                                                    $res = mysqli_query($con, $sql);
                                                                                    $row = mysqli_fetch_array($res);
                                                                                    echo $row['a'] ?>)</a></li>
                        <li><a href="<?= get_url() ?>call-girls/bangalore/">Bangalore(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'bangalore';
";
                                                                                        $res = mysqli_query($con, $sql);
                                                                                        $row = mysqli_fetch_array($res);
                                                                                        echo $row['a'] ?>)</a></li>
                        <li><a href="<?= get_url() ?>call-girls/zirakpur/">Zirakpur(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'zirakpur';
";
                                                                                    $res = mysqli_query($con, $sql);
                                                                                    $row = mysqli_fetch_array($res);
                                                                                    echo $row['a'] ?>)</a></li>
                        <li><a href="<?= get_url() ?>call-girls/coimbatore/">Coimbatore(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'coimbatore';
";
                                                                                        $res = mysqli_query($con, $sql);
                                                                                        $row = mysqli_fetch_array($res);
                                                                                        echo $row['a'] ?>)</a></li>
                        <li><a href="<?= get_url() ?>call-girls/hyderabad/">Hyderabad(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'hyderabad';
";
                                                                                        $res = mysqli_query($con, $sql);
                                                                                        $row = mysqli_fetch_array($res);
                                                                                        echo $row['a'] ?>)</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="city-name-list">
            <h2>Maharathra</h2>
            <div class="list-of-cities-row" id="list-of-cities-row">
                <div class="city-name-list-item">
                    <ul>
                        <li><a href="<?= get_url() ?>call-girls/thane/">Thane(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'thane';
";
                                                                                $res = mysqli_query($con, $sql);
                                                                                $row = mysqli_fetch_array($res);
                                                                                echo $row['a'] ?>)</a></li>
                        <li><a href="<?= get_url() ?>call-girls/mumbai/">Mumbai(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'mumbai';
";
                                                                                $res = mysqli_query($con, $sql);
                                                                                $row = mysqli_fetch_array($res);
                                                                                echo $row['a'] ?>)</a></li>
                        <li><a href="<?= get_url() ?>call-girls/pune/">Pune(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'pune';
";
                                                                            $res = mysqli_query($con, $sql);
                                                                            $row = mysqli_fetch_array($res);
                                                                            echo $row['a'] ?>)</a></li>
                        <li><a href="<?= get_url() ?>call-girls/kolhapur/">Kolhapur(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'kolhapur';
";
                                                                                    $res = mysqli_query($con, $sql);
                                                                                    $row = mysqli_fetch_array($res);
                                                                                    echo $row['a'] ?>)</a></li>
                        <li><a href="<?= get_url() ?>call-girls/chakan/">Chakan(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'chakan';
";
                                                                                $res = mysqli_query($con, $sql);
                                                                                $row = mysqli_fetch_array($res);
                                                                                echo $row['a'] ?>)</a></li>
                        <li><a href="<?= get_url() ?>call-girls/koregaon/">Koregaon(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'koregaon';
";
                                                                                    $res = mysqli_query($con, $sql);
                                                                                    $row = mysqli_fetch_array($res);
                                                                                    echo $row['a'] ?>)</a></li>

                    </ul>
                </div>
                <div class="city-name-list-item">
                    <ul>
                        <li><a href="<?= get_url() ?>call-girls/panvel/">Panvel(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'panvel';
";
                                                                                $res = mysqli_query($con, $sql);
                                                                                $row = mysqli_fetch_array($res);
                                                                                echo $row['a'] ?>)</a></li>
                        <li><a href="<?= get_url() ?>call-girls/nashik/">Nashik(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'nashik';
";
                                                                                $res = mysqli_query($con, $sql);
                                                                                $row = mysqli_fetch_array($res);
                                                                                echo $row['a'] ?>)</a></li>
                        <li><a href="<?= get_url() ?>call-girls/aurangabad/">Aurangabad(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'aurangabad';
";
                                                                                        $res = mysqli_query($con, $sql);
                                                                                        $row = mysqli_fetch_array($res);
                                                                                        echo $row['a'] ?>)</a></li>
                        <li><a href="<?= get_url() ?>call-girls/hiranandani-gardens/">Hiranandani Gardens(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'hiranandani-gardens';
";
                                                                                                            $res = mysqli_query($con, $sql);
                                                                                                            $row = mysqli_fetch_array($res);
                                                                                                            echo $row['a'] ?>)</a></li>
                        <li><a href="<?= get_url() ?>call-girls/khandala/">Khandala(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'khandala';
";
                                                                                    $res = mysqli_query($con, $sql);
                                                                                    $row = mysqli_fetch_array($res);
                                                                                    echo $row['a'] ?>)</a></li>
                        <li><a href="<?= get_url() ?>call-girls/thergaon/">Thergaon(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'thergaon';
";
                                                                                    $res = mysqli_query($con, $sql);
                                                                                    $row = mysqli_fetch_array($res);
                                                                                    echo $row['a'] ?>)</a></li>
                    </ul>
                </div>
                <div class="city-name-list-item">
                    <ul>
                        <li><a href="<?= get_url() ?>call-girls/pimpri/">Pimpri(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'pimpri';
";
                                                                                $res = mysqli_query($con, $sql);
                                                                                $row = mysqli_fetch_array($res);
                                                                                echo $row['a'] ?>)</a></li>
                        <li><a href="<?= get_url() ?>call-girls/magarpatta/">Magarpatta(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'magarpatta';
";
                                                                                        $res = mysqli_query($con, $sql);
                                                                                        $row = mysqli_fetch_array($res);
                                                                                        echo $row['a'] ?>)</a></li>
                        <li><a href="<?= get_url() ?>call-girls/koregaon-park/">Koregaon Park(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'koregaon-park';
";
                                                                                                $res = mysqli_query($con, $sql);
                                                                                                $row = mysqli_fetch_array($res);
                                                                                                echo $row['a'] ?>)</a></li>
                        <li><a href="<?= get_url() ?>call-girls/ambegaon/">Ambegaon(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'ambegaon';
";
                                                                                    $res = mysqli_query($con, $sql);
                                                                                    $row = mysqli_fetch_array($res);
                                                                                    echo $row['a'] ?>)</a></li>
                        <li><a href="<?= get_url() ?>call-girls/wanowarie/">Wanowarie(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'wanowarie';
";
                                                                                        $res = mysqli_query($con, $sql);
                                                                                        $row = mysqli_fetch_array($res);
                                                                                        echo $row['a'] ?>)</a></li>
                        <li><a href="<?= get_url() ?>call-girls/dhayari/">Dhayari(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'dhayari';
";
                                                                                    $res = mysqli_query($con, $sql);
                                                                                    $row = mysqli_fetch_array($res);
                                                                                    echo $row['a'] ?>)</a></li>
                    </ul>
                </div>
                <div class="city-name-list-item">
                    <ul>
                        <li><a href="<?= get_url() ?>call-girls/karvenagar/">Karvenagar(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'karvenagar';
";
                                                                                        $res = mysqli_query($con, $sql);
                                                                                        $row = mysqli_fetch_array($res);
                                                                                        echo $row['a'] ?>)</a></li>
                        <li><a href="<?= get_url() ?>call-girls/pashan/">Pashan(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'pashan';
";
                                                                                $res = mysqli_query($con, $sql);
                                                                                $row = mysqli_fetch_array($res);
                                                                                echo $row['a'] ?>)</a></li>
                        <li><a href="<?= get_url() ?>call-girls/warje/">Warje(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'warje';
";
                                                                                $res = mysqli_query($con, $sql);
                                                                                $row = mysqli_fetch_array($res);
                                                                                echo $row['a'] ?>)</a></li>
                        <li><a href="<?= get_url() ?>call-girls/katraj/">Katraj(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'katraj';
";
                                                                                $res = mysqli_query($con, $sql);
                                                                                $row = mysqli_fetch_array($res);
                                                                                echo $row['a'] ?>)</a></li>
                        <li><a href="<?= get_url() ?>call-girls/ambegaon-budruk/">Ambegaon Budruk(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'ambegaon-budruk';
";
                                                                                                    $res = mysqli_query($con, $sql);
                                                                                                    $row = mysqli_fetch_array($res);
                                                                                                    echo $row['a'] ?>)</a></li>
                        <li><a href="<?= get_url() ?>call-girls/rahatani/">Rahatani(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'rahatani';
";
                                                                                    $res = mysqli_query($con, $sql);
                                                                                    $row = mysqli_fetch_array($res);
                                                                                    echo $row['a'] ?>)</a></li>
                    </ul>
                </div>
            </div>
            <div class="list-of-cities-row" id="list-of-cities-row">
                <div class="city-name-list-item">
                    <ul>
                        <li><a href="<?= get_url() ?>call-girls/lohegaon/">Lohegaon(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'lohegaon';
";
                                                                                    $res = mysqli_query($con, $sql);
                                                                                    $row = mysqli_fetch_array($res);
                                                                                    echo $row['a'] ?>)</a></li>
                        <li><a href="<?= get_url() ?>call-girls/nagpur/">Nagpur(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'nagpur';
";
                                                                                $res = mysqli_query($con, $sql);
                                                                                $row = mysqli_fetch_array($res);
                                                                                echo $row['a'] ?>)</a></li>
                        <li><a href="<?= get_url() ?>call-girls/sus-road-pashan/">Sus Road Pashan(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'sus-road-pashan';
";
                                                                                                    $res = mysqli_query($con, $sql);
                                                                                                    $row = mysqli_fetch_array($res);
                                                                                                    echo $row['a'] ?>)</a></li>
                        <!-- <li><a href="<?= get_url() ?>call-girls/jabalpur/">Jabalpur(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'jabalpur';
";
                                                                                            $res = mysqli_query($con, $sql);
                                                                                            $row = mysqli_fetch_array($res);
                                                                                            echo $row['a'] ?>)</a></li> -->
                        <!--<li><a href="<?= get_url() ?>call-girls/dhanori/">Dhanori(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'dhanori';
";
                                                                                        $res = mysqli_query($con, $sql);
                                                                                        $row = mysqli_fetch_array($res);
                                                                                        echo $row['a'] ?>)</a></li>
                        --<li><a href="<?= get_url() ?>call-girls/pimpri-chinchwad/">Pimpri Chinchwad(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'pimpri-chinchwad';
";
                                                                                                        $res = mysqli_query($con, $sql);
                                                                                                        $row = mysqli_fetch_array($res);
                                                                                                        echo $row['a'] ?>)</a></li> -->
                    </ul>
                </div>
                <!-- <div class="city-name-list-item">
                    <ul>
                        <li><a href="<?= get_url() ?>call-girls/vishrant-wadi/">Vishrant Wadi(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'vishrant-wadi';
";
                                                                                                $res = mysqli_query($con, $sql);
                                                                                                $row = mysqli_fetch_array($res);
                                                                                                echo $row['a'] ?>)</a></li>
                        <li><a href="<?= get_url() ?>call-girls/wadgaon-sheri/">Wadgaon Sheri(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'wadgaon-sheri';
";
                                                                                                $res = mysqli_query($con, $sql);
                                                                                                $row = mysqli_fetch_array($res);
                                                                                                echo $row['a'] ?>)</a></li>
                        --<li><a href="<?= get_url() ?>call-girls/talegaon/">Talegaon(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'talegaon';
";
                                                                                        $res = mysqli_query($con, $sql);
                                                                                        $row = mysqli_fetch_array($res);
                                                                                        echo $row['a'] ?>)</a></li>
                        <li><a href="<?= get_url() ?>call-girls/balewadi/">Balewadi(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'balewadi';
";
                                                                                    $res = mysqli_query($con, $sql);
                                                                                    $row = mysqli_fetch_array($res);
                                                                                    echo $row['a'] ?>)</a></li>
                        <li><a href="<?= get_url() ?>call-girls/bavdhan/">Bavdhan(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'bavdhan';
";
                                                                                    $res = mysqli_query($con, $sql);
                                                                                    $row = mysqli_fetch_array($res);
                                                                                    echo $row['a'] ?>)</a></li>
                        <li><a href="<?= get_url() ?>call-girls/kondhwa/">Kondhwa(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'kondhwa';
";
                                                                                    $res = mysqli_query($con, $sql);
                                                                                    $row = mysqli_fetch_array($res);
                                                                                    echo $row['a'] ?>)</a></li>
                    </ul>
                </div>
                <div class="city-name-list-item">
                    <ul>
                        <li><a href="<?= get_url() ?>call-girls/chinchwad/">Chinchwad(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'chinchwad';
";
                                                                                        $res = mysqli_query($con, $sql);
                                                                                        $row = mysqli_fetch_array($res);
                                                                                        echo $row['a'] ?>)</a></li>
                        <li><a href="<?= get_url() ?>call-girls/aundh/">Aundh(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'aundh';
";
                                                                                $res = mysqli_query($con, $sql);
                                                                                $row = mysqli_fetch_array($res);
                                                                                echo $row['a'] ?>)</a></li>
                        <li><a href="<?= get_url() ?>call-girls/kothrud/">Kothrud(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'kothrud';
";
                                                                                    $res = mysqli_query($con, $sql);
                                                                                    $row = mysqli_fetch_array($res);
                                                                                    echo $row['a'] ?>)</a></li>
                        <li><a href="<?= get_url() ?>call-girls/viman-nagar/">Viman Nagar(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'viman-nagar';
";
                                                                                            $res = mysqli_query($con, $sql);
                                                                                            $row = mysqli_fetch_array($res);
                                                                                            echo $row['a'] ?>)</a></li>
                        <li><a href="<?= get_url() ?>call-girls/wagholi/">Wagholi(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'wagholi';
";
                                                                                    $res = mysqli_query($con, $sql);
                                                                                    $row = mysqli_fetch_array($res);
                                                                                    echo $row['a'] ?>)</a></li>
                        <li><a href="<?= get_url() ?>call-girls/baner/">Baner(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'baner';
";
                                                                                $res = mysqli_query($con, $sql);
                                                                                $row = mysqli_fetch_array($res);
                                                                                echo $row['a'] ?>)</a></li>
                    </ul>
                </div>
                <div class="city-name-list-item">
                    <ul>
                        <li><a href="<?= get_url() ?>call-girls/hadapsar/">Hadapsar(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'hadapsar';
";
                                                                                    $res = mysqli_query($con, $sql);
                                                                                    $row = mysqli_fetch_array($res);
                                                                                    echo $row['a'] ?>)</a></li>
                        <li><a href="<?= get_url() ?>call-girls/wakad/">Wakad(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'wakad';
";
                                                                                $res = mysqli_query($con, $sql);
                                                                                $row = mysqli_fetch_array($res);
                                                                                echo $row['a'] ?>)</a></li>
                        <li><a href="<?= get_url() ?>call-girls/daund/">Daund(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'daund';
";
                                                                                $res = mysqli_query($con, $sql);
                                                                                $row = mysqli_fetch_array($res);
                                                                                echo $row['a'] ?>)</a></li>
                        <li><a href="<?= get_url() ?>call-girls/saswad/">Saswad(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'saswad';
";
                                                                                $res = mysqli_query($con, $sql);
                                                                                $row = mysqli_fetch_array($res);
                                                                                echo $row['a'] ?>)</a></li>
                        <li><a href="<?= get_url() ?>call-girls/lonavala/">Lonavala(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'lonavala';
";
                                                                                    $res = mysqli_query($con, $sql);
                                                                                    $row = mysqli_fetch_array($res);
                                                                                    echo $row['a'] ?>)</a></li>
                        <li><a href="<?= get_url() ?>call-girls/bhor/">Bhor(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'bhor';
";
                                                                            $res = mysqli_query($con, $sql);
                                                                            $row = mysqli_fetch_array($res);
                                                                            echo $row['a'] ?>)</a></li>
                    </ul>
                </div>
            </div>
            <div class="list-of-cities-row" id="list-of-cities-row">
                <div class="city-name-list-item">
                    <ul>
                        <li><a href="<?= get_url() ?>call-girls/indapur/">Indapur(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'indapur';
";
                                                                                    $res = mysqli_query($con, $sql);
                                                                                    $row = mysqli_fetch_array($res);
                                                                                    echo $row['a'] ?>)</a></li>
                        <li><a href="<?= get_url() ?>call-girls/nanded/">Nanded(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'nanded';
";
                                                                                $res = mysqli_query($con, $sql);
                                                                                $row = mysqli_fetch_array($res);
                                                                                echo $row['a'] ?>)</a></li>
                        <li><a href="<?= get_url() ?>call-girls/dehu-road/">Dehu Road(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'dehu-road';
";
                                                                                        $res = mysqli_query($con, $sql);
                                                                                        $row = mysqli_fetch_array($res);
                                                                                        echo $row['a'] ?>)</a></li>
                        <li><a href="<?= get_url() ?>call-girls/shivane/">Shivane(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'shivane';
";
                                                                                    $res = mysqli_query($con, $sql);
                                                                                    $row = mysqli_fetch_array($res);
                                                                                    echo $row['a'] ?>)</a></li>
                        <li><a href="<?= get_url() ?>call-girls/vishrantwadi/">Vishrantwadi(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'vishrantwadi';
";
                                                                                            $res = mysqli_query($con, $sql);
                                                                                            $row = mysqli_fetch_array($res);
                                                                                            echo $row['a'] ?>)</a></li>
                        <li><a href="<?= get_url() ?>call-girls/yerwada/">Yerwada(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'yerwada';
";
                                                                                    $res = mysqli_query($con, $sql);
                                                                                    $row = mysqli_fetch_array($res);
                                                                                    echo $row['a'] ?>)</a></li>
                    </ul>
                </div>
                <div class="city-name-list-item">
                    <ul>
                        <li><a href="<?= get_url() ?>call-girls/nigdi/">Nigdi(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'nigdi';
";
                                                                                $res = mysqli_query($con, $sql);
                                                                                $row = mysqli_fetch_array($res);
                                                                                echo $row['a'] ?>)</a></li>
                        <li><a href="<?= get_url() ?>call-girls/sunarwadi/">Sunarwadi(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'sunarwadi';
";
                                                                                        $res = mysqli_query($con, $sql);
                                                                                        $row = mysqli_fetch_array($res);
                                                                                        echo $row['a'] ?>)</a></li>
                        <li><a href="<?= get_url() ?>call-girls/aakurdi/">Aakurdi(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'aakurdi';
";
                                                                                    $res = mysqli_query($con, $sql);
                                                                                    $row = mysqli_fetch_array($res);
                                                                                    echo $row['a'] ?>)</a></li>
                        <li><a href="<?= get_url() ?>call-girls/deccan/">Deccan(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'deccan';
";
                                                                                $res = mysqli_query($con, $sql);
                                                                                $row = mysqli_fetch_array($res);
                                                                                echo $row['a'] ?>)</a></li>
                        <li><a href="<?= get_url() ?>call-girls/apte-road/">Apte Road(<?php $sql = "SELECT COUNT(*) as a FROM profiles WHERE catigory = 'call-girls' && state = 'apte-road';
";
                                                                                        $res = mysqli_query($con, $sql);
                                                                                        $row = mysqli_fetch_array($res);
                                                                                        echo $row['a'] ?>)</a></li>

                    </ul>
                </div>
                <div class="city-name-list-item"></div>
                <div class="city-name-list-item"></div>-->
            </div>
        </div>

        <div class="main-content">
            <h2>Genuine Escort Service and call girls real images and Whatsapp numbers</h2>
            <p><a href="https://poojamahajan.com/">Poojamahajan.com</a> provide contact information forIndependent call girls, who post
                their contact numbers or WhatsApp number via our advertisement. Our visitors can go through the profiles
                of all our listed independent escorts and their services. Anybody who lives or visits India can visit our website.
                Poojamahajan.com feature<strong> local call girls, college girls, desi bhabhi, Russian
                    escorts, Punjabi girls,</strong> etc on our platform. Our escorts are the most loved and demanding call girls
                in India. Our website list only genuine profiles through many verification layers.</p>
            <h3>Independent Escort and independent call girls in India</h3>
            <p><a href="https://poojamahajan.com/">Poojamahajan.com</a> allows only independent call
                girls to post ads on our website. We highly restrict pimps, agents, or brokers to list their
                numbers/ads on our portal. We have support emails to rectify gimps, brokers, agents, or agencies’ false
                images or descriptions from our website.</p>
            <p><span style="color: #000000;">Anyone can contact our support channels if they find any image or content
                    misleading or false.</span> <a href="https://en.wikipedia.org/wiki/Prostitution" target="_blank">Prostitution</a> should be by choice not by force. Many independent girls or
                ladies want to earn or enjoy their service and earn some extra income.</p>
            <p>Personal service can be an alternative source of income. We also have channels to promote ads of male
                escorts, LGBTQA, and gigolos. Anyone can join our website and promote legitimate content/photos/contact
                details. Every sex has equal importance.</p>

            <h2>Girls for friendship using the Facebook name or WhatsApp number</h2>
            <p>Finding girls near you can be very difficult as there are many fake apps in the market. Sometimes it
                becomes very awful to find a genuine girl or lady near for friendship. Here our website comes into the
                role. Thousands of call girls and escorts have
                posted their profiles on our website with their photos and contact details.</p>
            <p>While posting these details we encourage our users to post genuine and legitimate details Like a Facebook or Instagram profile
                name, real images, genuine descriptions, and correct contact details. We also let our users put their
                service details along with profiles. We encourage our users to contact profiles with respect and in a
                decent manner.</p>
            <p>These listed girls, escorts, bhabhies, and ladies are more active on social media. So our visitors can
                contact us directly through those social channels. Our visitors can find their soul mates or girls for
                one night stand. <span style="color: #0000ff;"><strong>We request our visitors not to pay any amount in
                        advance without any physical contact.</strong></span></p>

            <h3>Versatile services provided by different escorts our client wants</h3>
            <p>On <a href="https://poojamahajan.com/">poojamahajan.com</a>, we understand that our visitors trust us and
                our profiles. It’s our primary responsibility to have a wide range of escorts to provide
                versatile services. With different Indian or foreign profiles, you can select different services and
                fulfil your fantasies.</p>
            <p>No matter what fantasy or desire you are looking for-&nbsp;<strong style="font-style: inherit;">Girlfriend-like experience-</strong><span style="font-style: inherit; font-weight: inherit;"> Prostitutes or Casual Sex partners are not as
                    good as one’s girlfriend because no one can provide such passion or love. We or nobody can provide
                    you with such pleasure bound with love and passion. </span></p>
            <p>

                But we can help you get in contact with some genuine mature ladies or young girls so you can have a
                friendship or casual sex. You both can go ahead from this short meeting to girlfriend/boyfriend
                relations. You can have passionate nights however you both likes.</p>
            <h2>Payment guidelines in Red light area</h2>
            <p>You can visit any red light area of you city or famous red light areas of India like Sonagachi in
                Kolkata, Kamathipura near <a href="<?= get_url() ?>call-girls/mumbai/" target="_blank">Mumbai</a>, GB Road in <a href="<?= get_url() ?>call-girls/delhi/" target="_blank">Delhi</a>, Meergunj in Prayagraj, Budhwar peth near Pune,
                Chaturbhujsthan near Muzaffarpur, Itwari in Nagpur, Shivdapur in <a href="<?= get_url() ?>call-girls/varanasi/" target="_blank">Varanasi</a>, Kalyanpur in Kanpur, etc.</p>
            <p>But visiting these places may be awful or sometimes quite risky. So our website play the great role here.
                We work as a communication channel between clients and independent escort through
                advertisement. As per Indian Law, our advertisement is not show in public places but only available for
                those who look for such personal services.</p>
            <p>Secondly, we are not broker or Pimp because carrying prostitution in group or combined business is also
                illegal. So we only encourage independent escort or call on our website.</p>
            <p>

                We also encourage having a fair deal in cash but not in advance. So there is no way to cheat on the sake
                of false service. Poojamahajan.com cannot guarantee for any satisfaction or any payment issue after your
                physical meeting. But we ensure that we will remove advertisement of any publisher if proven wrong.</p>
            <p>We will try to manage such issue only through website support channel or contact details. Red light areas
                are full of robbery, fraud, and other issue. So please be safe and stay healthy. Try our gorgeous and trustworthy
                independent call girls with versatile payment options. For any such issue, clients can mail or
                visit <a href="<?= get_url() ?>contact-us/">contact us</a>.</p>
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
    <!-- <div class="sticky-bottom-contact-information">
        <div class="sticky-bottom-contact-information-inner">
            <div class="box"></div>
            <span>
                <p><b>1234567890</b></p>
            </span>
            <div class="box"></div>
        </div>
    </div> -->
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

</body>

</html>
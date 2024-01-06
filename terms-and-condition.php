<?php include './init.php';
$fullURL = "http" . (isset($_SERVER['HTTPS']) ? "s" : "") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.6.0/remixicon.min.css" integrity="sha512-pI8MMQ9fC050RkbUOr8cJ75T5bYJpT1PAiML/7QZM6Fr74Ef6csO2/Cl92q+Qpxidm7WonXr6f+DbyxNHPGH8g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= get_url() ?>dashboard/assets/css/index.css">
    <link rel="stylesheet" href="<?= get_url() ?>dashboard/assets/css/navbar.css">
    <link rel="stylesheet" href="<?= get_url() ?>dashboard/assets/css/footer.css" defer>
    <title>Terms & Conditions</title>
    <meta name="robots" content=" noindex, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />

    <link rel="canonical" href="<?= $fullURL ?>/" />


    <link rel="icon" type="image/png" sizes="32x32" href="<?= get_url() ?>dashboard/assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= get_url() ?>dashboard/assets/images/favicon-16x16.png">
    <meta name="theme-color" content="#ffffff">

    <style>
        .contact-form-row {
            width: 100%;
            height: auto;
            display: flex;
            justify-content: center;
            gap: 2%;
        }

        .contact-form-group {
            width: 100%;
            height: auto;
            padding: 1%;
            /* margin: .5% 0; */
        }

        .contact-form-group label {
            font-weight: bold;
        }

        .contact-form-group input {
            width: 100%;
            height: 40px;
            outline: 0;
            padding: 1%;
        }

        .contact-form-group textarea {
            width: 100%;
            padding: 1%;
            outline: 0;
        }

        .contact-form-group input:focus {
            border: 1px solid dodgerblue
        }

        .contact-form-group textarea:focus {
            border: 1px solid dodgerblue
        }

        .contact-form-group button {
            width: 150px;
            height: 40px;
            background-color: #9f21e3;
            color: white;
            border: 0;
            cursor: pointer;
            border-radius: 1px;
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
            <div style="width: 20%;align-self:end"><a href="<?= get_url() ?>login/" style="float: right;">Post Ad</a></div>
            <span class="search-option" id="search-filter-menu"><i class="ri-search-2-line"></i></span>
            <span class="menu-option" id="menu-option"><i class="ri-menu-line"></i></span>
        </nav>
    </header>
    <div class="container">
        <!-- <div class="search-filter" id="search-filter">
            <?php // include './navbar.php' 
            ?>
        </div> -->
        <div class="page-detail-and-information">
            <ol style="display: flex;align-items:center;gap:.5%;list-style:none;padding:0" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                <li itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem"><a itemtype="http://schema.org/Thing" itemprop="item" title="Genuine Call girls &amp; escorts Service: Photos, Phone number | dreamgal" class="crumb" href="<?= get_url() ?>"><span itemprop="name">Home</span></a>
                    <meta itemprop="position" content="1">
                </li>
                <li><b><i class="ri-arrow-right-s-line"></i></b></li>
                <li itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem"><a itemtype="http://schema.org/Thing" itemprop="item" class="crumb" href="<?= get_url() ?>terms-and-conditions/" title="Contact Poojamahajan For Any Query"><span itemprop="name">Terms & Conditions</span></a>
                    <meta itemprop="position" content="2">
                </li>
            </ol>
            <h1 style="font-size: 2.5rem;font-weight:bold">Terms & Conditions</h1>
            <h2>Disclaimer for poojamahajan Escort Service</h2>
            <p>If you require any more information or have any questions about our site’s disclaimer, please feel free to contact us.</p>
            <h2>Disclaimers for poojamahajan</h2>
            <p>All the information on this website – poojamahajan.com – is published in good faith and for general information purpose only. poojamahajan does not make any warranties about the completeness, reliability and accuracy of this information. Any action you take upon the information you find on this website (poojamahajan), is strictly at your own risk. poojamahajan will not be liable for any losses and/or damages in connection with the use of our website. We are not reliable for any kind of financial lose with the person you contact on our website. We suggest not to engage in any kind of advance payment and online payment services. The pictures we have on our website are free to use stock images and nobody can claim or copyright for our content and images</p>
            <p>
                From our website, you can visit other websites by following hyperlinks to such external sites. While we strive to provide only quality links to useful and ethical websites, we have no control over the content and nature of these sites. These links to other websites do not imply a recommendation for all the content found on these sites. Site owners and content may change without notice and may occur before we have the opportunity to remove a link which may have gone ‘bad’.</p>
            <p>
                Please be also aware that when you leave our website, other sites may have different privacy policies and terms which are beyond our control. Please be sure to check the Privacy Policies of these sites as well as their “Terms of Service” before engaging in any business or uploading any information.
            </p>

            <h2>Consent</h2>
            <p>By using our website, you hereby consent to our disclaimer and agree to its terms.</p>

            <h2>Update</h2>
            <p>Should we update, amend or make any changes to this document, those changes will be prominently posted here.</p>

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
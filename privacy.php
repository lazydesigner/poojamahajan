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
    <title>Disclaimer</title>
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
                <li><a href="<?= get_url() ?>sign-up/">Sign up</a></li>
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
                <li itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem"><a itemtype="http://schema.org/Thing" itemprop="item" class="crumb" href="<?= get_url() ?>privacy-policy/" title="Contact Poojamahajan For Any Query"><span itemprop="name">Privacy Policy</span></a>
                    <meta itemprop="position" content="2">
                </li>
            </ol>
            <strong>Last updated: January 3, 2024</strong>
            <h1 style="font-size: 2.5rem;font-weight:bold">Interpretation and Definitions</h1>
            <h2>Interpretation</h2>
            <p>The words of which the initial letter is capitalized have meanings defined under the following conditions. The following definitions shall have the same meaning regardless of whether they appear in singular or in plural.</p>
            <h2>Definitions</h2>
            <p>For the purposes of this Disclaimer:</p>
            <ul>
                <li>Company (referred to as either the Company, We, Us or Our in this Disclaimer) refers to poojamahajan.com.</li>
                <li>Service refers to the Website.</li>
                <li>You means the individual accessing the Service, or the company, or other legal entity on behalf of which such individual is accessing or using the Service, as applicable.</li>
                <li>Website refers to poojamahajan.com, accessible from https://poojamahajan.com/</li>
            </ul>
            <h2>Disclaimer</h2>
            <p>The information contained on the Service is for general information purposes only. The Company assumes no responsibility for errors or omissions in the contents of the Service. In no event shall the Company be liable for any special, direct, indirect, consequential, or incidental damages or any damages whatsoever, whether in an action of contract, negligence or other tort, arising out of or in connection with the use of the Service or the contents of the Service. The Company reserves the right to make additions, deletions, or modifications to the contents on the Service at any time without prior notice. The Company does not warrant that the Service is free of viruses or other harmful components.</p>
            <h2>External Links Disclaimer</h2>
            <p>The Service may contain links to external websites that are not provided or maintained by or in any way affiliated with the Company. Please note that the Company does not guarantee the accuracy, relevance, timeliness, or completeness of any information on these external websites.
            </p>

            <h2>Errors and Omissions Disclaimer</h2>
            <p>The information given by the Service is for general guidance on matters of interest only. Even if the Company takes every precaution to insure that the content of the Service is both current and accurate, errors can occur. Plus, given the changing nature of laws, rules and regulations, there may be delays, omissions or inaccuracies in the information contained on the Service. The Company is not responsible for any errors or omissions, or for the results obtained from the use of this information.</p>

            <h2>Fair Use Disclaimer</h2>
<p>The Company may use copyrighted material which has not always been specifically authorized by the copyright owner. The Company is making such material available for criticism, comment, news reporting, teaching, scholarship, or research. The Company believes this constitutes a fair use of any such copyrighted material as provided for in section 107 of the United States Copyright law. If You wish to use copyrighted material from the Service for your own purposes that go beyond fair use, You must obtain permission from the copyright owner.</p>

<h2>Views Expressed </h2>
<p>The Service may contain views and opinions which are those of the authors and do not necessarily reflect the official policy or position of any other author, agency, organization, employer or company, including the Company. Comments published by users are their sole responsibility and the users will take full responsibility, liability and blame for any libel or litigation that results from something written in or as a direct result of something written in a comment. The Company is not liable for any comment published by users and reserves the right to delete any comment for any reason whatsoever.</p>

<h2>No Responsibility Disclaimer</h2>
<p>The information on the Service is provided with the understanding that the Company is not herein engaged in rendering legal, accounting, tax, or other professional advice and services. As such, it should not be used as a substitute for consultation with professional accounting, tax, legal or other competent advisers. In no event shall the Company or its suppliers be liable for any special, incidental, indirect, or consequential damages whatsoever arising out of or in connection with your access or use or inability to access or use the Service.</p>

<h2>Use at Your Own Risk Disclaimer</h2>
<p>All information in the Service is provided as is, with no guarantee of completeness, accuracy, timeliness or of the results obtained from the use of this information, and without warranty of any kind, express or implied, including, but not limited to warranties of performance, merchantability and fitness for a particular purpose. The Company will not be liable to You or anyone else for any decision made or action taken in reliance on the information given by the Service or for any consequential, special or similar damages, even if advised of the possibility of such damages.</p>

<h2>Contact Us</h2>
<p>If you have any questions about this Disclaimer, You can contact Us: By email: poojamahajan.com@gmail.com</p>

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
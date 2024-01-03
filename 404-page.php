<?php include './init.php'; ?>
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

    <link rel="canonical" href="https://poojamahajan.com/404" />
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
        .contact-form-row{
            width: 100%;
            height: auto;
            display: flex;
            justify-content: center;
            gap: 2%;
        }
        .contact-form-group{
            width: 100%;
            height: auto;
            padding: 1%;
            /* margin: .5% 0; */
        }
        .contact-form-group label{font-weight: bold;}
        .contact-form-group input{
            width:100% ;
            height: 40px;
            outline: 0;
            padding: 1%;
        }
        .contact-form-group textarea{
            width:100% ;
            padding: 1%;
            outline: 0;
        }
        .contact-form-group input:focus{border: 1px solid dodgerblue}
        .contact-form-group textarea:focus{border: 1px solid dodgerblue}
        .contact-form-group button{width: 150px;height: 40px;background-color: #9f21e3;color: white;border: 0;cursor: pointer;border-radius: 1px;}
    </style>


   
</head>

<body>

    <header>
        <nav class="navbar">
            <span class="brand-name"><a href="<?=get_url() ?>">Poojamahajan</a></span>
            <ul class="nav-ul" id="nav-ul">
            <li><a href="<?=get_url() ?>">Home</a></li>
                <li><a href="<?=get_url() ?>contact-us/">Contact Us</a></li>
                <li><a href="<?=get_url() ?>login/">Login</a></li>
                <li><a href="<?=get_url() ?>sign-up/">Sign up</a></li>
            </ul>
            <div style="width: 20%;align-self:end"><a href="" style="float: right;">Post-Ad</a></div>
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
                <li itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem"><a itemtype="http://schema.org/Thing" itemprop="item" class="crumb"  title="Contact Poojamahajan For Any Query"><span itemprop="name">404 - Page Not Found</span></a>
                    <meta itemprop="position" content="2">
                </li>
            </ol>
            <h1>404 - Page Not Found</h1>
        </div>
        <div style="width: 100%;
        height:200px;text-align:center">
<h2>404 - Error</h2>
<p>404 - Page your looking for is no longer exists.</p>
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

        document.getElementById('menu-option').addEventListener('click',()=>{
            document.getElementById('nav-ul').classList.toggle('nav-ul-active')
        })
        document.getElementById('search-filter-menu').addEventListener('click',()=>{
            document.getElementById('search-filter').classList.toggle('search-filter-active')
        })
    </script>

</body>
</html>

<?php
include './init.php';
$cate = 'call-girls';
$fullURL = "http" . (isset($_SERVER['HTTPS']) ? "s" : "") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.6.0/remixicon.min.css" integrity="sha512-pI8MMQ9fC050RkbUOr8cJ75T5bYJpT1PAiML/7QZM6Fr74Ef6csO2/Cl92q+Qpxidm7WonXr6f+DbyxNHPGH8g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css" integrity="sha512-rd0qOHVMOcez6pLWPVFIv7EfSdGKLt+eafXh4RO/12Fgr41hDQxfGvoi1Vy55QIVcQEujUE1LQrATCLl2Fs+ag==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= get_url() ?>dashboard/assets/css/list-of-profile.css?v=1">
    <link rel="stylesheet" href="<?= get_url() ?>dashboard/assets/css/navbar.css">
    <link rel="stylesheet" href="<?= get_url() ?>dashboard/assets/css/faq.css?v=1" defer>
    <link rel="stylesheet" href="<?= get_url() ?>dashboard/assets/css/footer.css" defer>
    <meta name="robots" content=" noindex, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />
    <title>poojamahajan  - FAQ</title>
    <link rel="canonical" href="<?=$fullURL ?>" />

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
            <span class="brand-name"><a href="<?=get_url() ?>">Poojamahajan</a></span>
            <ul class="nav-ul" id="nav-ul">
            <li><a href="<?=get_url() ?>">Home</a></li>
                <li><a href="<?=get_url() ?>contact-us/">Contact Us</a></li>
                <li><a href="<?=get_url() ?>login/">Login</a></li>
                <li><a href="<?=get_url() ?>sign-up/">Sign up</a></li>
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
            <ol style="display: flex;align-items:center;gap:.5%;list-style:none;padding:0" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                <li itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem"><a itemtype="http://schema.org/Thing" itemprop="item" title="Genuine Call girls &amp; escorts Service: Photos, Phone number | dreamgal" class="crumb" href="<?= get_url() ?>"><span itemprop="name">Home</span></a>
                    <meta itemprop="position" content="1">
                </li>
                <li><b><i class="ri-arrow-right-s-line"></i></b></li>
                <li itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem"><a itemtype="http://schema.org/Thing" itemprop="item" class="crumb" href="<?= get_url() ?>faq" title="Poojahajan FAQ"><span itemprop="name">faq</span></a>
                    <meta itemprop="position" content="2">
                </li>
            </ol>
            <h1>How to Book call girls using poojamahajan.com</h1>
        </div>

        <div class="list-of-profile" style="background-color: lightgrey;">
           <ol>
            <li>First, you need to open poojamahajan.com, then, using our filter section, find an appropriate call girl in the desired city.</li>
            <li>Click on the WhatsApp button.</li>
            <li>Confirm model image, price, and time from our independent models.</li>
            <li>Send you the hotel name or location for booking confirmation.</li>
            <li>We sent or you received a call from a girl as per the desired time.</li>
            <li>Now you need to pay us cash or via UPI</li>
            <li>7. After the service, please call or WhatsApp us for pickup and for your precious feedback.
</li>
           </ol>
        </div>
        <div class="list-of-profile" style="margin: 3% 0;">
            <!-- <h1>FAQ</h1> -->
            <!-- <div class="faq-body">
                <div class="faq-que" id="faq-body"><strong>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</strong><span class="arrow-down"><i class="ri-arrow-down-s-fill"></i></span><div class="q"></div></div>
                <div class="faq-ans"><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt ut consequatur, ab accusantium nesciunt doloribus quod dignissimos perspiciatis maiores quia excepturi dolor modi delectus quos. Illo incidunt obcaecati nulla quasi.</p></div>
            </div>
            <div class="faq-body">
                <div class="faq-que" id="faq-body"><strong>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</strong><span class="arrow-down"><i class="ri-arrow-down-s-fill"></i></span></div>
                <div class="faq-ans"><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt ut consequatur, ab accusantium nesciunt doloribus quod dignissimos perspiciatis maiores quia excepturi dolor modi delectus quos. Illo incidunt obcaecati nulla quasi.</p></div>
            </div> -->
            <div class="faq-container">
    <div class="faq-item">
        <div class="faq-question"><span>What is the price of call girls?</span><span class="arrow-down"><i class="ri-arrow-down-s-fill"></i></span></div>
        <div class="faq-answer">The price of call girls differs from model to model. Generally, the price starts at Rs. 2000 per shot and Rs. 10,000 per night. Contact the provided number for more details.</div>
    </div>
    <div class="faq-item">
        <div class="faq-question"><span>How do I reserve a call girl?</span><span class="arrow-down"><i class="ri-arrow-down-s-fill"></i></span></div>
        <div class="faq-answer">Anyone can book a call girls by visiting our official website and contacting us at the provided number. As we used to update numbers timely, only contact live numbers on our website.</div>
    </div>
    <div class="faq-item">
        <div class="faq-question"><span>Is there any refund policy?</span><span class="arrow-down"><i class="ri-arrow-down-s-fill"></i></span></div>
        <div class="faq-answer">If you make an advance booking, we are unable to refund money after 9 p.m. because we have cancelled other bookings for you. Yes, we provide a refund if you are not satisfied on the basis of cooperation and denial of service from our call girl side. </div>
    </div>
    <div class="faq-item">
        <div class="faq-question"><span>What kind of services do these call girls provide?</span><span class="arrow-down"><i class="ri-arrow-down-s-fill"></i></span></div>
        <div class="faq-answer">Our call girls provide various services like body kissing, licking, sex, foreplay, 69, etc. But we don't guarantee anal sex or lip kissing.  </div>
    </div>
    <div class="faq-item">
        <div class="faq-question"><span>Is it safe to hire a call girl?</span><span class="arrow-down"><i class="ri-arrow-down-s-fill"></i></span></div>
        <div class="faq-answer">Yes, our service is 100% safe in terms of privacy, handling, and safety. Apart from this, we don't encourage any advance payments, so our services are 100 percent safe.</div>
    </div>
    <div class="faq-item">
        <div class="faq-question"><span>Do you have any refund policies?</span><span class="arrow-down"><i class="ri-arrow-down-s-fill"></i></span></div>
        <div class="faq-answer">We are unable to reimburse the payment once you have confirmed the girl in your room or place.until or unless our escort causes any significant problems.</div>
    </div>
    <div class="faq-item">
        <div class="faq-question"><span>Is it safe to book a call from poojamahajan.com?</span><span class="arrow-down"><i class="ri-arrow-down-s-fill"></i></span></div>
        <div class="faq-answer">Yes, it is 100% safe and secure to get a call girl from the Poojamahajan escort service in terms of safety, reliability, and privacy.</div>
    </div>
    <div class="faq-item">
        <div class="faq-question"><span>Do you take advance payments for bookings?</span><span class="arrow-down"><i class="ri-arrow-down-s-fill"></i></span></div>
        <div class="faq-answer">No, we don't encourage any kind of advance payment for local bookings. But for specific demands like VIP model bookings, party bookings, and travel bookings, we need some advance payment for confirmation.</div>
    </div>
    <div class="faq-item">
        <div class="faq-question"><span>What if I find the call girl different from the one I have booked?</span><span class="arrow-down"><i class="ri-arrow-down-s-fill"></i></span></div>
        <div class="faq-answer">Firstly, you need to pay only after getting a call girl in front of you. After confirmation, you can pay us. This kind of mistake does happen sometimes, so please pay only if you like the present staff. </div>
    </div>
    <div class="faq-item">
        <div class="faq-question"><span>Do you guys provide cheap call girls?</span><span class="arrow-down"><i class="ri-arrow-down-s-fill"></i></span></div>
        <div class="faq-answer">No, we don't have any escorts cheaper than Rs. 2000 per shot. Otherwise, we have several options. </div>
    </div>
    <div class="faq-item">
        <div class="faq-question"><span>How do I contact you in case of any fraud or mischievous activity?
</span><span class="arrow-down"><i class="ri-arrow-down-s-fill"></i></span></div>
        <div class="faq-answer">You can simply email us at poojamahajan.com@gmail.com with all the proofs. We can’t help you in the case of an advance payment made to any independent escort before any physical meeting. </div>
    </div>
    <div class="faq-item">
        <div class="faq-question"><span>How is Poojamahajan responsible for services?</span><span class="arrow-down"><i class="ri-arrow-down-s-fill"></i></span></div>
        <div class="faq-answer">We are responsible only for phone numbers live on our website. If you contact any number that is no longer on our website, we are not responsible for any deals outside our website. As Poojamahajan is just a platform to connect independent call girls and clients, we are not responsible for any kind of deal in terms of service or payment. So do the deal wisely. </div>
    </div>
    <div class="faq-item">
        <div class="faq-question"><span>How do I remove any content or images from poojamahajan.com?</span><span class="arrow-down"><i class="ri-arrow-down-s-fill"></i></span></div>
        <div class="faq-answer">If you want any content or image removed from our website,. Then you need to email us at poojamahajan.com@gmail.com with recurried proof and a URL where the content is live.</div>
    </div>
    <!-- Add more FAQ items as needed -->
</div>

        </div>

        <div class="list-of-profile" style="margin: 3% 0;background-color: lightgrey;">
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
        })

        function Area_Locality() {
            const citys = new FormData()
            citys.append('status', 'city_id')
            citys.append('cate', '<?=$cate ?>')

            fetch('<?= get_url() ?>dashboard/fetch_data.php', {
                    method: 'POST',
                    body: citys
                }).then(res => res.json())
                .then(d => {
                    document.getElementById('area-locality').innerHTML = d['output']
                    document.getElementById('area-near').innerHTML += d['area']
                })
        }

        document.getElementById('area-locality').addEventListener('change', () => {
            // window.location.href = '<?= get_url() ?>call-girls//' + document.getElementById('area-locality').value + ''
        })
        document.getElementById('menu-option').addEventListener('click',()=>{
            document.getElementById('nav-ul').classList.toggle('nav-ul-active')
        })
        document.getElementById('search-filter-menu').addEventListener('click',()=>{
            document.getElementById('search-filter').classList.toggle('search-filter-active')
        })
    </script>

<script>

        document.addEventListener('DOMContentLoaded', function () {
        const faqQuestions = document.querySelectorAll('.faq-question');

        faqQuestions.forEach(function (question) {
            question.addEventListener('click', function () {
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
        "@context": "http://schema.org/",
            "@type": "Organization",
            "name": "Poojamahajan",
            "url": "https://poojamahajan.com",
            "logo": "https://poojamahajan.com/dashboard/assets/images/POOJA.webp.png"
        </script>
        <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [{
    "@type": "Question",
    "name": "What is the price of call girls?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "The price of call girls differs from model to model. Generally, the price starts at Rs. 2000 per shot and Rs. 10,000 per night. Contact the provided number for more details."
    }
  },{
    "@type": "Question",
    "name": "How do I reserve a call girl?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Anyone can book a call girls by visiting our official website and contacting us at the provided number. As we used to update numbers timely, only contact live numbers on our website."
    }
  },{
    "@type": "Question",
    "name": "What kind of services do these call girls provide?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Our call girls provide various services like body kissing, licking, sex, foreplay, 69, etc. But we don't guarantee anal sex or lip kissing."
    }
  },{
    "@type": "Question",
    "name": "How do I contact you in case of any fraud or mischievous activity?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "You can simply email us at poojamahajan.com@gmail.com with all the proofs. We can’t help you in the case of an advance payment made to any independent escort before any physical meeting."
    }
  },{
    "@type": "Question",
    "name": "How is Poojamahajan responsible for services?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "We are responsible only for phone numbers live on our website. If you contact any number that is no longer on our website, we are not responsible for any deals outside our website. As Poojamahajan is just a platform to connect independent call girls and clients, we are not responsible for any kind of deal in terms of service or payment. So do the deal wisely."
    }
  },{
    "@type": "Question",
    "name": "How do I remove any content or images from poojamahajan.com?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "If you want any content or image removed from our website,. Then you need to email us at poojamahajan.com@gmail.com with recurried proof and a URL where the content is live."
    }
  }]
}
</script>
</body>

</html>
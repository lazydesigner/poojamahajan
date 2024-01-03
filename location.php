<?php
include './init.php';

$city = $_GET['state'];
$cate = 'call-girls';

$sql = "SELECT * FROM profiles WHERE `state` = '$city' ";
$sql2 = "SELECT * FROM city WHERE `city` = '$city' ";

$result2 = mysqli_query($con, $sql2);
if (mysqli_num_rows($result2) > 0) {
    $data2 = mysqli_fetch_assoc($result2);
} else {
    die("404 Page Found");
}

$res = mysqli_query($con, $sql);
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    $data = mysqli_fetch_assoc($result);
}

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
    <link rel="stylesheet" href="<?= get_url() ?>dashboard/assets/css/faq.css?v=1" defer>
    <title>Call Girls in Hazratganj - Rs.3500- Hazratganj Escorts</title>

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
        .confirm-18{
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0,.5);
            display: none;
            
            position: fixed;
            top: 0;
            left: 0;
        }
        .confirm-18 p{font-size:1rem;margin: 0;padding: 0;}
        .confirm-18-body{
            width: 50%;
            /* height: 50%; */
            transform: translate(50%, 10%);
            background-color: white;
            padding: 2%;
        }
        .btn1{
            width: 100px;
            height: 40px;
            border: 0;
            font-weight: bold;
            cursor: pointer;
            background-color: #9f21e3;border-radius: 2px;color: white;
        }
        .btn2{
            width: 100px;
            height: 40px;
            border: 1px solid tomato;
            font-weight: bold;
            cursor: pointer;
            background-color: transparent;border-radius: 2px;color: tomato;
        }
    </style>
    <script>
        	function setCookie(cname,cvalue,exdays){
                const d = new Date();
                d.setTime(d.getTime() + (exdays*24*60*60*1000));
                let expires = "expires=" + d.toGMTString();
                document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
                let user = getCookie("agree");
                if(user != ""){
                    var remove_agree_terms = document.getElementById("confirm-18");
                    remove_agree_terms.style.display = 'none';
                }
            }
            function getCookie(cname){
                let name = cname + "=";
                let decodedCookie = decodeURIComponent(document.cookie);
                let ca = decodedCookie.split(';');
                for(let i = 0; i < ca.length; i++){
                    let c = ca[i];
                    while(c.charAt(0) == ' '){
                        c = c.substring(1);
                    }
                    if(c.indexOf(name) == 0){
                        return c.substring(name.length, c.length);
                    }
                }
                return "";
            }
            function checkCookie(){
                let user = getCookie("agree");
                if(user != ""){
                    var remove_agree_terms = document.getElementById("confirm-18");
                    remove_agree_terms.style.display = 'none';
                }else{
                    var remove_agree_terms = document.getElementById("confirm-18");
                    remove_agree_terms.style.display = 'block';
                }
            }
    </script>

</head>

<body onload="checkCookie()">
    <header>
        <nav class="navbar">
            <span class="brand-name"><a href="<?=get_url() ?>">Poojamahajan</a></span>
            <ul class="nav-ul" id="nav-ul">
                <li><a href="">Home</a></li>
                <li><a href="">Contact Us</a></li>
                <li><a href="">Login</a></li>
                <li><a href="">Sign Up</a></li>
            </ul>
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
                <li itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem"><a itemtype="http://schema.org/Thing" itemprop="item" class="crumb" href="" title="Call girls in <?= $city ?> cash Payment Service"><span itemprop="name"><?= $city ?></span></a>
                    <meta itemprop="position" content="2">
                </li>
            </ol>
            <h1><?= $data2['page_h1'] ?></h1>
        </div>

        <div class="list-of-profile" style="background-color: lightgrey;">
            <?= $data2['top_content'] ?>
        </div>

        <?php while ($row = mysqli_fetch_assoc($res)) {
            $ax = json_decode($row['profile_images'], true);
        ?>
            <div class="profile-section-box">
                <div class="profile-section-box-image">
                    <a href="http://localhost/poojamahajan.com/<?= $row['page_url'] ?>"><img src="<?= $ax[0] ?>" width="100%" height="100%" style="object-fit: cover;object-position:top" alt=""></a>
                </div>
                <div class="profile-section-box-detail">
                    <h3><a href="http://localhost/poojamahajan.com/<?= $row['page_url'] ?>"><?= $row['page_h1'] ?></a></h3>
                    <div class="multiline-ellipsis" style="margin-bottom: 2%;"><?= $row['content'] ?></div>
                    <div class="profile-section-button-detail">
                        <button><i class="ri-whatsapp-fill"></i> WhatsApp</button>
                        <button><i class="ri-phone-fill"></i> Contact</button>
                    </div>
                </div>
            </div>
        <?php } ?>

        <div class="list-of-profile" style="background-color: lightgrey;">
            <?= $data2['bottom_content'] ?>
        </div>
        <div class="list-of-profile" style="margin: 3% 0;">
            <h1>FAQ</h1>
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
        <div class="faq-question"><span>What is the price of call girls in <?=$city ?>?</span><span class="arrow-down"><i class="ri-arrow-down-s-fill"></i></span></div>
        <div class="faq-answer">The price of call girls differs from model to model. Generally, the price starts at Rs. 2000 per shot and Rs. 10,000 per night. Contact the provided number for more details.</div>
    </div>
    <div class="faq-item">
        <div class="faq-question"><span>How do I reserve a call girl in <?=$city ?>?</span><span class="arrow-down"><i class="ri-arrow-down-s-fill"></i></span></div>
        <div class="faq-answer">Anyone can book a call girls by visiting our official website and contacting us at the provided number. As we used to update numbers timely, only contact live numbers on our website.</div>
    </div>
    <div class="faq-item">
        <div class="faq-question"><span>Is there any refund policy?</span><span class="arrow-down"><i class="ri-arrow-down-s-fill"></i></span></div>
        <div class="faq-answer">If you make an advance booking, we are unable to refund money after 9 p.m. because we have cancelled other bookings for you. Yes, we provide a refund if you are not satisfied on the basis of cooperation and denial of service from our call girl side. </div>
    </div>
    <div class="faq-item">
        <div class="faq-question"><span>What kind of services do these call girls provide in <?=$city ?>?</span><span class="arrow-down"><i class="ri-arrow-down-s-fill"></i></span></div>
        <div class="faq-answer">Our call girls provide various services like body kissing, licking, sex, foreplay, 69, etc. But we don't guarantee anal sex or lip kissing.  </div>
    </div>
    <div class="faq-item">
        <div class="faq-question"><span>Is it safe to hire a call girl in <?=$city ?>?</span><span class="arrow-down"><i class="ri-arrow-down-s-fill"></i></span></div>
        <div class="faq-answer">Yes, our service is 100% safe in terms of privacy, handling, and safety. Apart from this, we don't encourage any advance payments, so our services are 100 percent safe.</div>
    </div>
    <!-- Add more FAQ items as needed -->
</div>

        </div>

        <div class="list-of-profile" style="margin: 3% 0;background-color: lightgrey;">
            <h3>Top Cities of India</h3>
            <div class="top-cities-of-india">
                <a href="<?= get_url() ?><?=$cate ?>/delhi/"><button>Delhi</button></a>
                <a href="<?= get_url() ?><?=$cate ?>/dehradun/"><button>Dehradun</button></a>
                <a href="<?= get_url() ?><?=$cate ?>/bhopal/"><button>Bhopal</button></a>
                <a href="<?= get_url() ?><?=$cate ?>/ahmedabad/"><button>Ahmedabad</button></a>
                <a href="<?= get_url() ?><?=$cate ?>/lucknow/"><button>Lucknow</button></a>
                <a href="<?= get_url() ?><?=$cate ?>/noida/"><button>Noida</button></a>
                <a href="<?= get_url() ?><?=$cate ?>/goa/"><button>Goa</button></a>
                <a href="<?= get_url() ?><?=$cate ?>/jaipur/"><button>Jaipur</button></a>
                <a href="<?= get_url() ?><?=$cate ?>/agra/"><button>Agra</button></a>
                <a href="<?= get_url() ?><?=$cate ?>/faridabad/"><button>Faridabad</button></a>
            </div>
            
            <h3>Areas of <span style="text-transform: capitalize;"><?= $city ?></span></h3>
            <div class="top-cities-of-india" id="area-near">
            </div>

        </div>
    </div>


    <footer>
        <div class="footer-row">
            <div class="footer-col">
                <p class="footer-p">This website may contain content of an adult nature. If you are easily offended or
                    are under the age of 18, please exit now. The posts and pages within are intended for adults only
                    and may include scenes of sexual content, suggestive pictures, or graphic violence. Reader
                    discretion is advised.</p>
                <div class="follow-up">
                    <i class="ri-facebook-box-fill"></i>
                    <i class="ri-facebook-box-fill"></i>
                    <i class="ri-facebook-box-fill"></i>
                    <i class="ri-facebook-box-fill"></i>
                    <i class="ri-facebook-box-fill"></i>
                    <i class="ri-facebook-box-fill"></i>
                    <i class="ri-facebook-box-fill"></i>
                    <i class="ri-facebook-box-fill"></i>
                    <i class="ri-facebook-box-fill"></i>
                </div>
                <div class="dmca-logo">
                    <img src="<?= get_url() ?>dashboard/assets/images/dmca_protected_16_120.png" alt="">
                </div>
            </div>
            <div class="footer-col">
                <div class="only-18">
                    <img src="<?= get_url() ?>dashboard/assets/images/18-1.png.webp" width="100%" height="100%" alt="">
                </div>
            </div>
            <div class="footer-col">
                <h3>Quick Links</h3>
                <ul class="footer-col-ul">
                    <li><a href="">Post Ad</a></li>

                    <li><a href="">Review</a></li>
                    <li><a href="">Price List</a></li>
                    <li><a href="">Contact Us</a></li>
                    <li><a href="">Terms & Conditions</a></li>
                </ul>
                <div class="dmca-logo">
                    <img src="<?= get_url() ?>dashboard/assets/images/dmca-compliant-grayscale.png" alt="">
                </div>
            </div>
        </div>
    </footer>

    <div class="confirm-18" id="confirm-18">
        <div class="confirm-18-body" style="text-align: center;">
            <p style="font-size: x-large;font-weight:bolder;margin-bottom:2%"><strong>Important Notice: Please Review Before Proceeding</strong></p>
            <p><b>I hereby confirm that I am 18 years of age or older.</b></p><p>

The display of any advertisements claiming to provide sexual services in exchange for money is strictly prohibited.</p><p>

Furthermore, the publication of explicit material featuring genital organs is not allowed.</p><p>

Any such advertisements will be promptly reported to the appropriate authorities, and the responsible party will be held accountable for any legal consequences.
</p><p>
By submitting an advertisement on Poojamahajan, advertisers assert that they possess full rights to the content and acknowledge that they are aged 18 years or older. They also affirm that the advertised content is approved for publication on Poojamahajan.</p><p>

By clicking the <b>"Accept"</b> button, users certify that they are over 18 years old and release the service providers, owners, and creators of Poojamahajan.com from any responsibility regarding the content and use of this service.</p>
<div style="margin-top: 2%;"><button class="btn1" onclick="setCookie('agree', 'accepted', 30)">Confirm</button>
<a href="<?= get_url() ?>"><button class="btn2">Reject</button></a></div>
        </div>
    </div>
    



    <!-- JAVASCRIPT -->

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
            window.location.href = '<?= get_url() ?>call-girls/<?= $city ?>/' + document.getElementById('area-locality').value + ''
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

</body>

</html>
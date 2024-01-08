<?php
include '../routes.php';
include './connection.php'; 
$fullURL = "http" . (isset($_SERVER['HTTPS']) ? "s" : "") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.6.0/remixicon.min.css" integrity="sha512-pI8MMQ9fC050RkbUOr8cJ75T5bYJpT1PAiML/7QZM6Fr74Ef6csO2/Cl92q+Qpxidm7WonXr6f+DbyxNHPGH8g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css" integrity="sha512-rd0qOHVMOcez6pLWPVFIv7EfSdGKLt+eafXh4RO/12Fgr41hDQxfGvoi1Vy55QIVcQEujUE1LQrATCLl2Fs+ag==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="<?= get_url() ?>dashboard/assets/css/navbar.css">
    <link rel="stylesheet" href="<?= get_url() ?>dashboard/assets/css/footer.css" defer>    
    <title>Book Premium call girls in Telibagh | Poojamahajan</title>
    <meta name="description" content="Genuine Call girls in Telibagh at your place without any advance payment. Call or WhatsApp us to book Telibagh Escorts with room." />
    <meta name="robots" content="noindex, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />
    <link rel="canonical" href="<?=$fullURL ?>" />

    <link rel="icon" type="image/png" sizes="32x32" href="<?= get_url() ?>dashboard/assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= get_url() ?>dashboard/assets/images/favicon-16x16.png">
    <meta name="theme-color" content="#ffffff">

    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Book Premium call girls in Telibagh | Poojamahajan" />
    <meta property="og:description" content="Genuine Call girls in Telibagh at your place without any advance payment. Call or WhatsApp us to book Telibagh Escorts with room." />
    <meta property="og:url" content="https://poojamahajan.com/auth-log/" />
    <meta property="og:site_name" content="Escort" />

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
            <span class="search-option" id="search-filter-menu"><i class="ri-search-2-line"></i></span>
            <span class="menu-option" id="menu-option"><i class="ri-menu-line"></i></span>
        </nav>
    </header>
    <div class="container">
    <div class="flex flex-col items-center justify-center h-screen">
  <div class="w-full max-w-md bg-white rounded-lg shadow-md p-6">
    <h2 class="text-2xl font-bold text-gray-900 mb-4">Login</h2>
    <form action="<?=get_url() ?>auth/" method="post" class="flex flex-col">
      <input type="email" class="bg-gray-100 text-gray-900 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150" name="email" placeholder="Email address" required>
      <input type="password" class="bg-gray-100 text-gray-900 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150" name="pass" placeholder="Password" required>
      <div class="flex items-center justify-between flex-wrap">
        <label for="remember-me" class="text-sm text-gray-900 cursor-pointer">
          <!-- <input type="checkbox" id="remember-me" class="mr-2">
          Remember me -->
        </label>
      </div>
      <button type="submit" class="bg-gradient-to-r from-indigo-500 to-blue-500 text-white font-bold py-2 px-4 rounded-md mt-4 hover:bg-indigo-600 hover:to-blue-600 transition ease-in-out duration-150">Login</button>
    </form>
  </div>
</div>

    </div>

    <?php include './footer2.php' ?>
    
</body>

</html>
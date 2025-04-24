<?php
require_once __DIR__ . '/navigation.php';
require_once __DIR__ . '/../constans/constans.php';
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A Méhek Ereje</title>
    <link rel="icon" type="image/x-icon" href="../favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Dekko&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/styles/style-for-mobile-first.css">
    <link rel="stylesheet" href="./assets/styles/style-for-mobile-first.css">
    <link rel="stylesheet" href="./assets/styles/style-for-600-768.css">
    <link rel="stylesheet" href="./assets/styles/style-for-768-992.css">
    <link rel="stylesheet" href="./assets/styles/style-for-992-1200.css">
    <link rel="stylesheet" href="./assets/styles/style-for-up-to-1200.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <nav>
            <!-- Normál menü -->
            <div class="navbar">
                <ul class="main-menu">
                    <li>
                        <a href="#world-of-bees">A Méhek Világa</a>
                        <ul class="sub-menu">
                            <li><a href="#">Méhpopulációk és Veszélyek</a></li>
                            <li><a href="#">Méhmentés és Megőrzés</a></li>
                            <li><a href="#">Beporzás és Ökoszisztéma</a></li>
                            <li><a href="#">Méhek és Mezőgazdaság</a></li>
                        </ul>
                    </li>
                    <li><a href="#urban-beekeeping">Városi Méhészet</a></li>
                    <li><a href="#education">Oktatás és Tudatosság</a></li>
                    <li><a href="./forum.html" >Fórum</a></li>
                </ul>
            </div>
            <!-- Mobil menü -->
            <div class="hamburger">
                <button href="#" class="toggle-btn">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>
            <ul class="dropdown-menu">
                <li class="has-submenu">
                    <a href="#world-of-bees" class="dropdown-toggle">A Méhek Világa<i class="fa-solid fa-angle-right"></i></a>
                    <ul class="dropdown-sub-menu">
                        <li><a href="#">Méhpopulációk és Veszélyek</a></li>
                        <li><a href="#">Méhmentés és Megőrzés</a></li>
                        <li><a href="#">Beporzás és Ökoszisztéma</a></li>
                        <li><a href="#">Méhek és Mezőgazdaság</a></li>
                    </ul>
                </li>
                <li><a href="#urban-beekeeping">Városi Méhészet</a></li>
                <li><a href="#education">Oktatás és Tudatosság</a></li>
                <li><a href="./forum.html" >Fórum</a></li>
            </ul>
        </nav>
        <div class="title">
            <h1>To Bee or not to Bee</h1>
            <p>A Méhek Ereje</p>
        </div>
    </header>

    <main>
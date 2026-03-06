<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="AlphaDent: clínica dental en Alajuela y Heredia. Odontología general, estética, ortodoncia, implantes y urgencias. Agende su cita por WhatsApp.">
    <meta name="keywords"
        content="clínica dental Costa Rica, dentista Alajuela, dentista Heredia, AlphaDent, odontología, limpieza dental, ortodoncia, implantes, blanqueamiento, urgencia dental">
    <meta name="author" content="AlphaDent">
    <!-- Page Title -->
    <title>AlphaDent | Clínica Dental en Alajuela y Heredia</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="/images/logof.png">
    <!-- Google Fonts Css-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Bootstrap Css -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
    <!-- SlickNav Css -->
    <link href="{{ asset('css/slicknav.min.css') }}" rel="stylesheet">
    <!-- Swiper Css -->
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
    <!-- Font Awesome Icon Css-->
    <link href="{{ asset('css/all.css') }}" rel="stylesheet" media="screen">
    <!-- Animated Css -->
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <!-- Magnific Popup Core Css File -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <!-- Mouse Cursor Css File -->
    <link rel="stylesheet" href="{{ asset('css/mousecursor.css') }}">
    <!-- Main Custom Css -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" media="screen">
</head>

<body>

    <!-- Header Start -->
    <header class="main-header">
        <div class="header-sticky">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <!-- Logo Start -->
                    <a class="navbar-brand" href="./">
                        <img src="{{ asset('images/logo.png') }}" alt="AlphaDent">
                    </a>
                    <!-- Logo End -->

                    <!-- Main Menu Start -->
                    <div class="collapse navbar-collapse main-menu">
                        <div class="nav-menu-wrapper">
                            <ul class="navbar-nav mr-auto" id="menu">
                                <li class="nav-item"><a class="nav-link" href="{{ route('landing.home') }}">Inicio</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('landing.about') }}">Nosotros</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('landing.services') }}">Servicios</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('landing.gallery') }}">Galería</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('landing.recursos') }}">Blog</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('landing.contact') }}">Contacto</a></li>
                                <li class="nav-item highlighted-menu">
                                    <a class="nav-link"
                                       href="https://lnk.bio/alphadent">
                                        Agendar
                                        cita
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- Let’s Start Button Start -->
                        <div class="header-btn d-inline-flex">
                            <a href="https://lnk.bio/alphadent"
                                class="btn-default">Agendar cita</a>
                        </div>
                        <!-- Let’s Start Button End -->
                    </div>
                    <!-- Main Menu End -->
                    <div class="navbar-toggle"></div>
                </div>
            </nav>
            <div class="responsive-menu"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Galería</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./">Inicio</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Galería</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Photo Gallery Section Start -->
    <div class="our-gallery-page">
        <div class="container">

            <!-- Selector -->
            <div class="gallery-topbar">
                <div class="gallery-select-wrap">
                    <span class="gallery-select-label">Álbum</span>
                    <select id="galleryAlbumSelect" class="gallery-select">
                        <option value="alphadent">AlphaDent</option>
                        <option value="alphakids">AlphaKids</option>
                        <option value="boletines">Información adicional</option>
                    </select>
                </div>
            </div>

            <!-- Grid -->
            <div class="row gallery-items" id="galleryGrid"></div>

        </div>
    </div>
    <!-- Photo Gallery Section End -->

    <!-- Footer Start -->
    <footer class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="about-footer">
                        <div class="footer-logo">
                            <img src="{{ asset('images/logo.png') }}" alt="">
                        </div>

                        <div class="about-footer-content">
                            <p>AlphaDent es una clínica dental en Costa Rica con sedes en Alajuela y Heredia. Brindamos
                                atención profesional y humana, enfocada en prevención, estética y tratamientos
                                integrales.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="footer-links footer-quick-links">
                        <h3>Enlaces</h3>
                        <ul>
                            <li><a href="./">Inicio</a></li>
                            <li><a href="about">Nosotros</a></li>
                            <li><a href="service">Servicios</a></li>
                            <li><a href="contact">Contacto</a></li>

                            <li><a
                                    href="https://lnk.bio/alphadent">Agendar
                                    cita</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="footer-links footer-social-links">
                        <h3>Redes</h3>
                        <ul>
                            <li><a href="https://www.facebook.com/alphadentcr?locale=es_LA">Facebook</a></li>
                            <li><a href="https://www.instagram.com/alphadentcr">Instagram</a></li>
                            <li><a href="https://www.tiktok.com/@alphadentcr">TikTok</a></li>

                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4">
                    <div class="footer-links footer-contact-links">
                        <h3>Contacto</h3>
                        <ul>
                            <li><a href="mailto:info@alphadentcr.com">info@alphadentcr.com</a></li>
                            <li><a href="tel:+50689304243">+506 8930 4243</a></li>
                            <li><a href="tel:+50686925000">+506 8692 5000</a></li>

                        </ul>
                    </div>
                </div>
            </div>

            <div class="footer-copyright">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copyright-text">
                            <p>
                                Copyright © 2026 AlphaDent. Todos los derechos reservados. |
                                Hecho por Josué B
                                <a href="https://wa.me/50670035845" target="_blank" style="margin-left:10px;">
                                    <i class="fa fa-phone"></i> WhatsApp
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <script src="{{ asset('js/gallery-loader.js') }}"></script>

    <!-- Jquery Library File -->
    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
    <!-- Bootstrap js file -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Validator js file -->
    <script src="{{ asset('js/validator.min.js') }}"></script>
    <!-- SlickNav js file -->
    <script src="{{ asset('js/jquery.slicknav.js') }}"></script>
    <!-- Swiper js file -->
    <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
    <!-- Counter js file -->
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <!-- Magnific js file -->
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <!-- SmoothScroll -->
    <script src="{{ asset('js/SmoothScroll.js') }}"></script>
    <!-- Parallax js -->
    <script src="{{ asset('js/parallaxie.js') }}"></script>
    <!-- MagicCursor js file -->
    <script src="{{ asset('js/gsap.min.js') }}"></script>
    <script src="{{ asset('js/magiccursor.js') }}"></script>
    <!-- Text Effect js file -->
    <script src="{{ asset('js/SplitText.js') }}"></script>
    <script src="{{ asset('js/ScrollTrigger.min.js') }}"></script>
    <!-- YTPlayer js File -->
    <script src="{{ asset('js/jquery.mb.YTPlayer.min.js') }}"></script>
    <!-- Wow js file -->
    <script src="{{ asset('js/wow.js') }}"></script>
    <!-- Main Custom js file -->
    <script src="{{ asset('js/function.js') }}"></script>

</body>

</html>

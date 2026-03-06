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
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- SlickNav Css -->
    <link href="css/slicknav.min.css" rel="stylesheet">
    <!-- Swiper Css -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <!-- Font Awesome Icon Css-->
    <link href="css/all.css" rel="stylesheet" media="screen">
    <!-- Animated Css -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Magnific Popup Core Css File -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Mouse Cursor Css File -->
    <link rel="stylesheet" href="css/mousecursor.css">
    <!-- Main Custom Css -->
    <link href="css/custom.css" rel="stylesheet" media="screen">
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
                            <a href="https://lnk.bio/alphadent" class="btn-default">Agendar cita</a>
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
                        <h1 class="text-anime-style-2" data-cursor="-opaque"><span>Nuestros</span> Servicios</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./">Inicio</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Nuestros Servicios</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- Page Services Start -->
    <div class="page-services">
        <div class="container">
            <div class="row">

                <!-- 1 -->
                <div class="col-lg-3 col-md-6">
                    <div class="service-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="icon-box">
                            <div class="img">
                                <img src="{{ asset('images/Odontología General.png') }}" alt="Odontología General">
                            </div>
                        </div>
                        <div class="service-body">
                            <h3>Odontología General</h3>
                            <p>Revisiones, limpiezas y tratamientos básicos para mantener tu salud oral.</p>
                        </div>
                    </div>
                </div>

                <!-- 2 -->
                <div class="col-lg-3 col-md-6">
                    <div class="service-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="icon-box">
                            <div class="img">
                                <img src="{{ asset('images/Prostodoncia.png') }}" alt="Prostodoncia">
                            </div>
                        </div>
                        <div class="service-body">
                            <h3>Prostodoncia</h3>
                            <p>Rehabilitación oral y estética dental: prótesis, coronas, carillas, diseños de sonrisa, restauraciones.</p>
                        </div>
                    </div>
                </div>

                <!-- 3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="service-item wow fadeInUp" data-wow-delay="0.6s">
                        <div class="icon-box">
                            <div class="img">
                                <img src="{{ asset('images/Implantología.png') }}" alt="Implantología">
                            </div>
                        </div>
                        <div class="service-body">
                            <h3>Implantología</h3>
                            <p>Implantes dentales para reemplazar piezas perdidas con seguridad y precisión.</p>
                        </div>
                    </div>
                </div>

                <!-- 4 -->
                <div class="col-lg-3 col-md-6">
                    <div class="service-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="icon-box">
                            <div class="img">
                                <img src="{{ asset('images/Periodoncia.png') }}" alt="Periodoncia">
                            </div>
                        </div>
                        <div class="service-body">
                            <h3>Periodoncia</h3>
                            <p>Tratamientos de encías para prevenir sangrado, inflamación y pérdida dental.</p>
                        </div>
                    </div>
                </div>

                <!-- 5 -->
                <div class="col-lg-3 col-md-6">
                    <div class="service-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="icon-box">
                            <div class="img">
                                <img src="{{ asset('images/Endodoncia.png') }}" alt="Endodoncia">
                            </div>
                        </div>
                        <div class="service-body">
                            <h3>Endodoncia</h3>
                            <p>Tratamientos de nervio para aliviar dolor y conservar la pieza dental.</p>
                        </div>
                    </div>
                </div>

                <!-- 6 -->
                <div class="col-lg-3 col-md-6">
                    <div class="service-item wow fadeInUp" data-wow-delay="0.6s">
                        <div class="icon-box">
                            <div class="img">
                                <img src="{{ asset('images/Ortodoncia.png') }}" alt="Ortodoncia">
                            </div>
                        </div>
                        <div class="service-body">
                            <h3>Ortodoncia</h3>
                            <p>Corrección y alineación dental con frenillos y/o alineadores dentales para mejorar mordida, estética y salud oral.</p>
                        </div>
                    </div>
                </div>

                <!-- 7 -->
                <div class="col-lg-3 col-md-6">
                    <div class="service-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="icon-box">
                            <div class="img">
                                <img src="{{ asset('images/Ortopedia Funcional.png') }}" alt="Ortopedia Funcional">
                            </div>
                        </div>
                        <div class="service-body">
                            <h3>Ortopedia Funcional</h3>
                            <p>Aparatos que ayudan a guiar el crecimiento de los huesos y dientes en desarrollo, asegurando una correcta alineación y función, evitando complicaciones en la adultez.</p>
                        </div>
                    </div>
                </div>

                <!-- 8 -->
                <div class="col-lg-3 col-md-6">
                    <div class="service-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="icon-box">
                            <div class="img">
                                <img src="{{ asset('images/Odontopediatría.png') }}" alt="Odontopediatría">
                            </div>
                        </div>
                        <div class="service-body">
                            <h3>Odontopediatría</h3>
                            <p>Atención dental especializada para niños de 0 a 12 años, con un enfoque personalizado.</p>
                        </div>
                    </div>
                </div>

                <!-- 9 -->
                <div class="col-lg-3 col-md-6">
                    <div class="service-item wow fadeInUp" data-wow-delay="0.6s">
                        <div class="icon-box">
                            <div class="img">
                                <img src="{{ asset('images/Cirugía Oral.png') }}" alt="Cirugía Oral y Maxilofacial">
                            </div>
                        </div>
                        <div class="service-body">
                            <h3>Cirugía Oral y Maxilofacial</h3>
                            <p>Extracciones complejas y cirugía oral con protocolos seguros.</p>
                        </div>
                    </div>
                </div>

                <!-- 10 -->
                <div class="col-lg-3 col-md-6">
                    <div class="service-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="icon-box">
                            <div class="img">
                                <img src="{{ asset('images/Patología Oral.png') }}" alt="Patología y Medicina Oral">
                            </div>
                        </div>
                        <div class="service-body">
                            <h3>Patología y Medicina Oral</h3>
                            <p>Evaluación y diagnóstico de lesiones orales para tratamiento oportuno.</p>
                        </div>
                    </div>
                </div>

                <!-- 11 -->
                <div class="col-lg-3 col-md-6">
                    <div class="service-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="icon-box">
                            <div class="img">
                                <img src="{{ asset('images/Imagenes Radiologicas.png') }}" alt="Imágenes Radiológicas">
                            </div>
                        </div>
                        <div class="service-body">
                            <h3>Imágenes Radiológicas</h3>
                            <p>Radiografías y tomografías dentales de alta precisión para un diagnóstico seguro y un tratamiento adecuado.</p>
                        </div>
                    </div>
                </div>

                <!-- 12 -->
                <div class="col-lg-3 col-md-6">
                    <div class="service-item wow fadeInUp" data-wow-delay="0.6s">
                        <div class="icon-box">
                            <div class="img">
                                <img src="{{ asset('images/Radiología DentoMaxilofacial.png') }}" alt="Radiología DentoMaxilofacial">
                            </div>
                        </div>
                        <div class="service-body">
                            <h3>Radiología DentoMaxilofacial</h3>
                            <p>Reportes radiológicos de radiografías y tomografías dentales para un diagnóstico dental preciso.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Page Services End -->
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
                            <p>
                                AlphaDent es una clínica dental en Costa Rica con sedes en Alajuela y Heredia. Brindamos
                                atención profesional y humana, enfocada en prevención, estética y tratamientos
                                integrales.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="footer-links footer-quick-links">
                        <h3>Enlaces</h3>
                        <ul>
                            <li><a href="./">Inicio</a></li>
                            <li><a href="about.html">Nosotros</a></li>
                            <li><a href="service.html">Servicios</a></li>
                            <li><a href="contact.html">Contacto</a></li>

                            <li>
                                <a href="https://lnk.bio/alphadent">
                                    Agendar
                                    cita
                                </a>
                            </li>
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

    <!-- Jquery Library File -->
    <script src="js/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap js file -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Validator js file -->
    <script src="js/validator.min.js"></script>
    <!-- SlickNav js file -->
    <script src="js/jquery.slicknav.js"></script>
    <!-- Swiper js file -->
    <script src="js/swiper-bundle.min.js"></script>
    <!-- Counter js file -->
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <!-- Magnific js file -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!-- SmoothScroll -->
    <script src="js/SmoothScroll.js"></script>
    <!-- Parallax js -->
    <script src="js/parallaxie.js"></script>
    <!-- MagicCursor js file -->
    <script src="js/gsap.min.js"></script>
    <script src="js/magiccursor.js"></script>
    <!-- Text Effect js file -->
    <script src="js/SplitText.js"></script>
    <script src="js/ScrollTrigger.min.js"></script>
    <!-- YTPlayer js File -->
    <script src="js/jquery.mb.YTPlayer.min.js"></script>
    <!-- Wow js file -->
    <script src="js/wow.js"></script>
    <!-- Main Custom js file -->
    <script src="js/function.js"></script>
    <script src="https://demo.awaikenthemes.com/assets/js/theme-panel.js"></script>

</body>

</html>

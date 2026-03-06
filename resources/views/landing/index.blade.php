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
    <link href="http://127.0.0.1:8000/css/blog-details.css" rel="stylesheet" media="screen">

</head>

<body>

    <!-- Header Start -->
    <header class="main-header">
        <div class="header-sticky">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <!-- Logo Start -->
                    <a class="navbar-brand" href="{{ route('landing.home') }}">
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
    <!-- Hero Section Start -->
    <div class="hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Hero Content Start -->
                    <div class="hero-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h1 class="text-anime-style-2" data-cursor="-opaque">
                                Sonrisas sanas con <span>
                                    atención
                                    profesional
                                </span> y humana
                            </h1>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">
                                En AlphaDent le atendemos con un enfoque
                                cálido, seguro y personalizado. Contamos con sedes en Alajuela y Heredia para que pueda
                                agendar su cita de forma rápida y cómoda.
                            </p>
                        </div>
                        <!-- Section Title End -->
                        <!-- Hero Content Body Start -->
                        <div class="hero-content-body wow fadeInUp" data-wow-delay="0.5s">
                            <a href="https://lnk.bio/alphadent"
                               class="btn-default">Agendar cita</a>
                        </div>
                        <!-- Hero Content Body End -->
                        <!-- Google Rating Start -->
                        <div class="google-rating wow fadeInUp" data-wow-delay="0.75s">
                            <ul>
                                <li>Calificación <span>5.0</span></li>
                                <li>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </li>
                                <li>Basado en opiniones de pacientes</li>
                            </ul>
                        </div>
                        <!-- Google Rating End -->
                    </div>
                    <!-- Hero Content End -->
                </div>

                <div class="col-lg-6">
                    <!-- Hero Image Start -->
                    <div class="hero-image">
                        <!-- Hero Img Start -->
                        <div class="hero-img">
                            <figure>
                                <img src="{{ asset('images/hero-img.png') }}" alt="Clínica dental AlphaDent">
                            </figure>
                        </div>
                        <!-- Hero Img End -->
                        <!-- Hero Image Tag Start -->
                        <div class="export-dantist-box">
                            <div class="icon-box">
                                <figure class="image-anime">
                                    <img src="{{ asset('images/logo.png') }}" alt="Especialista AlphaDent">
                                </figure>
                            </div>
                        </div>
                        <!-- Hero Image Tag End -->
                        <!-- Hero Icon List Start -->
                        <div class="hero-icon-list">
                            <div class="hero-icon-box-1">
                                <img src="{{ asset('images/icon-hero-theeth-1.svg') }}" alt="">
                            </div>

                            <div class="hero-icon-box-2">
                                <img src="{{ asset('images/icon-hero-theeth-2.svg') }}" alt="">
                            </div>

                            <div class="hero-icon-box-3">
                                <img src="{{ asset('images/icon-hero-theeth-3.svg') }}" alt="">
                            </div>
                        </div>
                        <!-- Hero Icon List End -->
                        <!-- Icon Start Image Start -->
                        <div class="icon-star-image">
                            <img src="{{ asset('images/icon-star.svg') }}" alt="">
                        </div>
                        <!-- Icon Start Image End -->
                    </div>
                    <!-- Hero Image End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Section End -->
    <!-- Call To Action Start -->
    <div class="cta-box">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Cta Box Item Start -->
                    <div class="cta-box-item wow fadeInUp">
                        <div class="icon-box">
                            <img src="{{ asset('images/icon-cta-phone.svg') }}" alt="">
                        </div>
                        <div class="cta-box-content">
                            <h3>¿Necesita atención dental?</h3>
                            <p>Llámenos o escríbanos: <br/>+506 8930 4243 / +506 8692 5000</p>
                        </div>
                    </div>
                </div>
                <!-- Cta Box Item End -->
                <!-- Cta Box Item Start -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="cta-box-item wow fadeInUp" data-wow-delay="0.25s">
                        <div class="icon-box">
                            <img src="{{ asset('images/icon-cta-time.svg') }}" alt="">
                        </div>
                        <div class="cta-box-content">
                            <h3>Horario de atención</h3>
                            <p>Consulte disponibilidad y agenda por WhatsApp</p>
                        </div>
                    </div>
                </div>
                <!-- Cta Box Item End -->

                <div class="col-lg-4 col-md-12 col-12">
                    <!-- Cta Box Btn Start -->
                    <div class="cta-box-btn wow fadeInUp" data-wow-delay="0.5s">
                        <a href="https://lnk.bio/alphadent"
                           class="btn-default btn-highlighted">Agendar cita</a>
                    </div>
                    <!-- Cta Box Btn End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Call To Action End -->
    <!-- About Us Section Start -->
    <div class="about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- About Image Start -->
                    <div class="about-image">
                        <div class="about-img-1">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('images/about2.jpeg') }}" alt="">
                            </figure>
                        </div>

                        <div class="about-img-2">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('images/about1.jpeg') }}" alt="">
                            </figure>
                        </div>

                        <!-- About Experience Circle Start -->
                        <div class="about-experience">
                            <figure>
                                <img src="{{ asset('images/about-experience-circle.png') }}" alt="">
                            </figure>
                        </div>
                        <!-- About Experience Circle End -->
                    </div>
                    <!-- About Image End -->
                </div>

                <div class="col-lg-6">
                    <!-- About Content Start -->
                    <div class="about-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Sobre nosotros</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">
                                <span>Su sonrisa</span> en manos
                                confiables
                            </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">
                                En AlphaDent trabajamos con un enfoque
                                integral: prevención, diagnóstico y tratamientos que priorizan su comodidad. Nuestro
                                objetivo es que se sienta seguro(a) desde el primer momento.
                            </p>
                        </div>
                        <!-- Section Title End -->
                        <!-- About Us Body Start -->
                        <div class="about-us-body wow fadeInUp" data-wow-delay="0.5s">
                            <ul>
                                <li>Atención cálida y profesional</li>
                                <li>Tratamientos integrales</li>
                                <li>Enfoque en prevención y estética</li>
                                <li>Atención de urgencias según disponibilidad</li>
                            </ul>
                        </div>
                        <!-- About Us Body End -->
                        <!-- About Us Footer Start -->
                        <div class="about-us-footer wow fadeInUp" data-wow-delay="0.75s">
                            <a href="{{ route('landing.about') }}" class="btn-default">Conocer más</a>
                        </div>
                        <!-- About Us Footer End -->
                    </div>
                    <!-- About Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Section End -->
    <!-- Our Serviceds Section Start -->
    <div class="our-services">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Servicios</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">
                            <span>Atención dental</span> para toda la
                            familia
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">
                            Evaluamos su caso y le proponemos un plan claro,
                            con acompañamiento en cada etapa.
                        </p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="row">
                    <!-- 1 -->
                    <div class="col-lg-4 col-md-6">
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
                    <div class="col-lg-4 col-md-6">
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
                    <div class="col-lg-4 col-md-6">
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

                    <div class="col-lg-12">
                        <!-- Service Box Footer Start -->
                        <div class="services-box-footer wow fadeInUp" data-wow-delay="1s">
                            <p>¿Busca una atención personalizada? Escríbanos y le orientamos con gusto.</p>
                            <a href="{{ route('landing.services') }}" class="btn-default">Ver todos los servicios</a>
                        </div>
                        <!-- Service Box Footer End -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Our Counter Section Start -->
        <div class="our-counter">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <!-- Counter Item Start -->
                        <div class="counter-item">
                            <!-- Counter Title Start -->
                            <div class="counter-title">
                                <h2><span class="counter">02</span></h2>
                                <h3>Sedes</h3>
                            </div>
                            <!-- Counter Title End -->
                            <!-- Counter Content Start -->
                            <div class="counter-content">
                                <p>Atendemos en Alajuela y Heredia para mayor comodidad.</p>
                            </div>
                            <!-- Counter Content End -->
                        </div>
                        <!-- Counter Item End -->
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <!-- Counter Item Start -->
                        <div class="counter-item">
                            <!-- Counter Title Start -->
                            <div class="counter-title">
                                <h2><span class="counter">100</span>%</h2>
                                <h3>Enfoque en confianza</h3>
                            </div>
                            <!-- Counter Title End -->
                            <!-- Counter Content Start -->
                            <div class="counter-content">
                                <p>Explicamos su plan de tratamiento de forma clara y transparente.</p>
                            </div>
                            <!-- Counter Content End -->
                        </div>
                        <!-- Counter Item End -->
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <!-- Counter Item Start -->
                        <div class="counter-item">
                            <!-- Counter Title Start -->
                            <div class="counter-title">
                                <h2><span class="counter">24</span>/7</h2>
                                <h3>Contacto</h3>
                            </div>
                            <!-- Counter Title End -->
                            <!-- Counter Content Start -->
                            <div class="counter-content">
                                <p>Escríbanos por WhatsApp para agendar o consultar disponibilidad.</p>
                            </div>
                            <!-- Counter Content End -->
                        </div>
                        <!-- Counter Item End -->
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <!-- Counter Item Start -->
                        <div class="counter-item">
                            <!-- Counter Title Start -->
                            <div class="counter-title">
                                <h2><span class="counter">01</span></h2>
                                <h3>Equipo comprometido</h3>
                            </div>
                            <!-- Counter Title End -->
                            <!-- Counter Content Start -->
                            <div class="counter-content">
                                <p>Atención profesional, humana y enfocada en su bienestar.</p>
                            </div>
                            <!-- Counter Content End -->
                        </div>
                        <!-- Counter Item End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Counter Section End -->
        <!-- Icon Start Image Start -->
        <div class="icon-star-image">
            <img src="{{ asset('images/icon-star.svg') }}" alt="">
        </div>
        <!-- Icon Start Image End -->
    </div>
    <!-- Our Serviceds Section End -->
    <!-- Why Choose Us Section Start -->
    <div class="why-choose-us">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">¿Por qué elegirnos?</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">
                            <span>Diagnóstico claro</span> y
                            tratamientos confiables
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">
                            Priorizamos su comodidad, explicamos cada paso y
                            cuidamos cada detalle.
                        </p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 order-1">
                    <!-- Why Choose Box Start -->
                    <div class="why-choose-box-1">
                        <!-- Why Choose Item Start -->
                        <div class="why-choose-item wow fadeInUp">
                            <!-- Icon Box Start -->
                            <div class="icon-box">
                                <img src="{{ asset('images/icon-why-us-1.svg') }}" alt="">
                            </div>
                            <!-- Icon Box End -->
                            <!-- Why Choose Content Start -->
                            <div class="why-choose-content">
                                <h3>Atención profesional</h3>
                                <p>Tratamientos con enfoque humano y comunicación clara.</p>
                            </div>
                            <!-- Why Choose Content End -->
                        </div>
                        <!-- Why Choose Item End -->
                        <!-- Why Choose Item Start -->
                        <div class="why-choose-item wow fadeInUp" data-wow-delay="0.25s">
                            <!-- Icon Box Start -->
                            <div class="icon-box">
                                <img src="{{ asset('images/icon-why-us-2.svg') }}" alt="">
                            </div>
                            <!-- Icon Box End -->
                            <!-- Why Choose Content Start -->
                            <div class="why-choose-content">
                                <h3>Atención personalizada</h3>
                                <p>Cada paciente es distinto: ajustamos el plan a su necesidad.</p>
                            </div>
                            <!-- Why Choose Content End -->
                        </div>
                        <!-- Why Choose Item End -->
                        <!-- Why Choose Item Start -->
                        <div class="why-choose-item wow fadeInUp" data-wow-delay="0.5s">
                            <!-- Icon Box Start -->
                            <div class="icon-box">
                                <img src="{{ asset('images/icon-why-us-3.svg') }}" alt="">
                            </div>
                            <!-- Icon Box End -->
                            <!-- Why Choose Content Start -->
                            <div class="why-choose-content">
                                <h3>Facilidades de pago</h3>
                                <p>Opciones pensadas para que pueda atenderse con tranquilidad.</p>
                            </div>
                            <!-- Why Choose Content End -->
                        </div>
                        <!-- Why Choose Item End -->
                    </div>
                    <!-- Why Choose Box Start -->
                </div>

                <div class="col-lg-4 order-lg-1 order-md-2 order-1">
                    <!-- Why Choose Image Start -->
                    <div class="why-choose-image wow fadeInUp">
                        <figure>
                            <img src="{{ asset('images/why-choose-us-img.png') }}" alt="">
                        </figure>
                    </div>
                    <!-- Why Choose Image End -->
                </div>

                <div class="col-lg-4 col-md-6 order-lg-2 order-md-1 order-2">
                    <!-- Why Choose Box Start -->
                    <div class="why-choose-box-2">
                        <!-- Why Choose Item Start -->
                        <div class="why-choose-item wow fadeInUp">
                            <!-- Icon Box Start -->
                            <div class="icon-box">
                                <img src="{{ asset('images/icon-why-us-4.svg') }}" alt="">
                            </div>
                            <!-- Icon Box End -->
                            <!-- Why Choose Content Start -->
                            <div class="why-choose-content">
                                <h3>Urgencias dentales</h3>
                                <p>Si tiene dolor o una situación urgente, contáctenos por WhatsApp.</p>
                            </div>
                            <!-- Why Choose Content End -->
                        </div>
                        <!-- Why Choose Item End -->
                        <!-- Why Choose Item Start -->
                        <div class="why-choose-item wow fadeInUp" data-wow-delay="0.25s">
                            <!-- Icon Box Start -->
                            <div class="icon-box">
                                <img src="{{ asset('images/icon-why-us-5.svg') }}" alt="">
                            </div>
                            <!-- Icon Box End -->
                            <!-- Why Choose Content Start -->
                            <div class="why-choose-content">
                                <h3>Opiniones de pacientes</h3>
                                <p>La confianza se construye con resultados y buena atención.</p>
                            </div>
                            <!-- Why Choose Content End -->
                        </div>
                        <!-- Why Choose Item End -->
                        <!-- Why Choose Item Start -->
                        <div class="why-choose-item wow fadeInUp" data-wow-delay="0.5s">
                            <!-- Icon Box Start -->
                            <div class="icon-box">
                                <img src="{{ asset('images/icon-why-us-6.svg') }}" alt="">
                            </div>
                            <!-- Icon Box End -->
                            <!-- Why Choose Content Start -->
                            <div class="why-choose-content">
                                <h3>Tecnología y protocolos</h3>
                                <p>Procesos enfocados en seguridad, higiene y calidad clínica.</p>
                            </div>
                            <!-- Why Choose Content End -->
                        </div>
                        <!-- Why Choose Item End -->
                    </div>
                    <!-- Why Choose Box Start -->
                </div>
            </div>
        </div>
        <!-- Icon Start Image Start -->
        <div class="icon-star-image">
            <img src="{{ asset('images/icon-star.svg') }}" alt="">
        </div>
        <!-- Icon Start Image End -->
    </div>
    <!-- Why Choose Us Section End -->
    <!-- How It Work Start -->
    <div class="how-it-work">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- How It Work Image Start -->
                    <div class="how-it-work-img">
                        <figure class="reveal image-anime">
                            <img src="{{ asset('images/why.jpeg') }}" alt="">
                        </figure>
                    </div>
                    <!-- How It Work Image End -->
                </div>

                <div class="col-lg-6">
                    <div class="how-it-work-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Cómo funciona</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">
                                <span>Un proceso</span> simple y claro
                            </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">
                                Agendar es fácil: nos escribe, coordinamos la
                                cita y le atendemos con puntualidad y cuidado.
                            </p>
                        </div>
                        <!-- Section Title End -->
                        <!-- FAQ Accordion Start -->
                        <div class="faq-accordion how-work-accordion" id="accordion">
                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp">
                                <div class="icon-box">
                                    <img src="{{ asset('images/icon-how-it-work-1.svg') }}" alt="">
                                </div>
                                <h2 class="accordion-header" id="heading1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                        Agende su cita
                                    </button>
                                </h2>
                                <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1"
                                     data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>
                                            Puede agendar cita por WhatsApp o Vía telefónica. Le confirmamos sede, fecha y hora, además del profesional y/o servicio solicitado.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->
                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.25s">
                                <div class="icon-box">
                                    <img src="{{ asset('images/icon-how-it-work-2.svg') }}" alt="">
                                </div>
                                <h2 class="accordion-header" id="heading2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                        Valoración y diagnóstico
                                    </button>
                                </h2>
                                <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2"
                                     data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>
                                            Revisamos su caso, le explicamos su situación actual y definimos un plan de tratamiento.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->
                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
                                <div class="icon-box">
                                    <img src="{{ asset('images/icon-how-it-work-3.svg') }}" alt="">
                                </div>
                                <h2 class="accordion-header" id="heading3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                        Tratamiento y seguimiento
                                    </button>
                                </h2>
                                <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3"
                                     data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>
                                            Realizamos los procedimientos siendo mínimamente invasivos, con los más altos estándares de calidad, dando un seguimiento adecuado.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->
                        </div>
                        <!-- FAQ Accordion End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- How It Work End -->
      <!-- Our Team Start -->
    <div class="our-team">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Equipo</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">
                            <span>Profesionales</span> comprometidos
                            con su sonrisa
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">
                            Atención profesional, cercana y enfocada en
                            resultados.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Fila dinámica — se muestra desde la base de datos -->
            <div class="row" id="team-grid">
                @forelse($staff as $member)
                    <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="team-item">
                            <div class="team-image">
                                <figure class="image-anime">
                                    @if($member->photo_path)
                                        <img src="{{ asset('storage/' . $member->photo_path) }}" alt="{{ $member->photo_alt ?? $member->name }}">
                                    @elseif($member->photo_url)
                                        <img src="{{ $member->photo_url }}" alt="{{ $member->photo_alt ?? $member->name }}">
                                    @else
                                        <img src="{{ asset('images/default-staff.png') }}" alt="{{ $member->name }}">
                                    @endif
                                </figure>
                            </div>
                            <div class="team-content">
                                <h3>{{ $member->name }}</h3>
                                <p>{{ $member->role }}</p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center py-4">
                        <p style="color:#888;font-family:'Poppins',sans-serif">No hay miembros del equipo disponibles</p>
                    </div>
                @endforelse
            </div>

        </div>

        <div class="icon-star-image">
            <img src="{{ asset('images/icon-star.svg') }}" alt="">
        </div>

    </div>
     <!-- Our Team End -->
    <!-- Our Testiminial Start -->
    <div class="our-testimonials">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Testimonios</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">
                            <span>Lo que dicen</span> nuestros
                            pacientes
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">
                            Experiencias reales de atención, confianza y
                            resultados.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="testimonial-image">
                        <div class="testimonial-img">
                            <figure class="reveal image-anime">
                                <img src="{{ asset('images/testimonials.jpeg') }}" alt="">
                            </figure>
                        </div>

                        <div class="testimonial-rating-box">
                            <div class="rating-counter-item">
                                <div class="rating-counter-number">
                                    <h3><span class="counter">5.0</span>/5</h3>
                                </div>

                                <div class="rating-counter-content">
                                    <p>Calificación promedio basada en opiniones de pacientes.</p>
                                </div>
                            </div>

                            <div class="service-rating">
                                <ul>
                                    <li>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </li>
                                    <li>Por atención y resultados</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="testimonial-slider">
                        <div class="swiper">
                            <div class="swiper-wrapper" data-cursor-text="Drag">
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-header">
                                            <div class="testimonial-quote-image">
                                                <img src="{{ asset('images/icon-testimonial-quote.svg') }}" alt="">
                                            </div>
                                            <div class="testimonial-content">
                                                <p>
                                                    "Excelente atención al público. Es súper profesional y se la recomiendo sin reservas
                                                    para cualquier tratamiento, consulta y/o revisión dental. Alta calidad."
                                                </p>
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="{{ asset('images/user-icon.svg') }}" alt="">
                                                </figure>
                                            </div>
                                            <div class="author-content">
                                                <h3>Isaiah McCoy</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-header">
                                            <div class="testimonial-quote-image">
                                                <img src="{{ asset('images/icon-testimonial-quote.svg') }}" alt="">
                                            </div>
                                            <div class="testimonial-content">
                                                <p>
                                                    "Una excelente atención; quedé muy complacida de ver la dedicación que prestan al paciente.
                                                    La doctora Stephany Ramírez Salas es una excelente profesional"
                                                </p>
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="{{ asset('images/user-icon.svg') }}" alt="">
                                                </figure>
                                            </div>
                                            <div class="author-content">
                                                <h3>Andrea Jiménez</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-header">
                                            <div class="testimonial-quote-image">
                                                <img src="{{ asset('images/icon-testimonial-quote.svg') }}" alt="">
                                            </div>
                                            <div class="testimonial-content">
                                                <p>
                                                    "Trato maravilloso y trabajo impecable. Estamos felices con los resultados y la calidad humana del equipo. El área para niños es hermosa y los tratan con mucho amor.
                                                    Definitivamente, la mejor opción para toda la familia."
                                                </p>
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="{{ asset('images/user-icon.svg') }}" alt="">
                                                </figure>
                                            </div>
                                            <div class="author-content">
                                                <h3>Veronica D</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-btn">
                                <div class="testimonial-button-prev"></div>
                                <div class="testimonial-button-next"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Testiminial End -->
        <!-- Our blog Section start -->
    <div class="our-blog">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">RECURSOS</h3>
                        <h2 class="text-anime-style-3">Artículos contables y fiscales en Costa Rica</h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-6">
                    <!-- Section Title Content Start -->
                    <div class="section-title-content wow fadeInUp" data-wow-delay="0.25s">
                        <p>Consejos y guías sobre contabilidad, Hacienda, IVA y facturación electrónica.</p>
                    </div>
                    <!-- Section Title Content End -->
                </div>
            </div>

            <div class="row">
                @php use Illuminate\Support\Str; @endphp
                @forelse($articles ?? collect() as $article)
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-item wow fadeInUp" data-wow-delay="{{ 0.25 + $loop->index * 0.25 }}s">
                            <div class="post-featured-image">
                                <figure class="image-anime">
                                    <a href="{{ url('/blog/' . $article->slug . '/') }}">
                                        <img src="{{ $article->getFinalCoverImageUrl() ?: asset('assets/post-1.jpg') }}"
                                            alt="{{ $article->cover_image_alt ?: '' }}">
                                    </a>
                                </figure>
                            </div>

                            <div class="post-item-body">
                                <h2><a href="{{ url('/blog/' . $article->slug . '/') }}">{{ $article->title }}</a></h2>
                                <p>{{ $article->excerpt ?? Str::limit(strip_tags($article->content), 100) }}</p>
                            </div>

                            <div class="post-item-footer">
                                <a href="{{ url('/blog/' . $article->slug . '/') }}" class="btn-default">Leer más</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <p>No hay artículos disponibles.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
    <!-- Our blog Section End -->
    <!-- Footer Contact Us Start -->
    <div class="contact-now">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6">
                    <div class="google-map-double-alt">
                        <div class="google-map-iframe-alt">
                            <iframe src="https://www.google.com/maps?q=Hospital+Clínica+Alpha,+Alajuela,+Costa+Rica&output=embed" allowfullscreen="" loading="lazy">
                            </iframe>
                        </div>

                        <div class="google-map-iframe-alt">
                            <iframe src="https://www.google.com/maps?q=Torre+Medica+Naos+Plaza,+Heredia,+Costa+Rica&output=embed" allowfullscreen="" loading="lazy">
                            </iframe>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="contact-now-content">
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Contáctenos</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Agende</span> su cita hoy</h2>
                        </div>

                        <div class="contact-now-info">
                            <div class="contact-info-list wow fadeInUp" data-wow-delay="0.2s">
                                <div class="icon-box">
                                    <img src="{{ asset('images/icon-location.svg') }}" alt="">
                                </div>
                                <div class="contact-info-content">
                                    <p>
                                        <strong>SEDE ALAJUELA.</strong> Hospital Clínica Alpha, Barrio San Luis, contiguo
                                        al Hospital San Rafael de Alajuela, atrás de la estación del tren, Piso 3.
                                    </p>
                                    <p>
                                        <strong>SEDE HEREDIA.</strong> Torre Médica Naos Plaza, frente al Hospital de
                                        Heredia, Piso 2, Consultorio C5.
                                    </p>
                                </div>
                            </div>

                            <div class="contact-info-list wow fadeInUp" data-wow-delay="0.4s">
                                <div class="icon-box">
                                    <img src="{{ asset('images/icon-phone.svg') }}" alt="">
                                </div>
                                <div class="contact-info-content">
                                    <p><strong>SEDE ALAJUELA.</strong> +506 8930 4243</p>
                                </div>
                                <div class="contact-info-content">
                                    <p><strong>SEDE HEREDIA.</strong> +506 8692-5000</p>
                                </div>
                            </div>

                            <div class="contact-info-list wow fadeInUp" data-wow-delay="0.6s">
                                <div class="icon-box">
                                    <img src="{{ asset('images/icon-mail.svg') }}" alt="">
                                </div>
                                <div class="contact-info-content">
                                    <p>info@alphadentcr.com</p>
                                </div>
                            </div>

                            <div class="contact-info-list wow fadeInUp" data-wow-delay="0.8s">
                                <div class="icon-box">
                                    <img src="{{ asset('images/icon-clock.svg') }}" alt="">
                                </div>
                                <div class="contact-info-content">
                                    <p id="estadoClinica">Cargando estado...</p>
                                </div>
                            </div>
                        </div>

                        <div class="contact-appointment-btn wow fadeInUp" data-wow-delay="1s">
                            <a href="https://wa.me/50689304243" class="btn-default">Agendar cita</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Footer Contact Us End -->

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
                            <li><a href="/">Inicio</a></li>
                            <li><a href="about">Nosotros</a></li>
                            <li><a href="service">Servicios</a></li>
                            <li><a href="contact">Contacto</a></li>

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

    <script src="{{ asset('js/horario.js') }}"></script>

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

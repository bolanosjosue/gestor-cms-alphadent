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
    <title>{{ $article->title }} | AlphaDent</title>
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
                        <!-- Let's Start Button Start -->
                        <div class="header-btn d-inline-flex">
                            <a href="https://lnk.bio/alphadent"
                                class="btn-default">Agendar cita</a>
                        </div>
                        <!-- Let's Start Button End -->
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
                        <h1 class="text-anime-style-2" data-cursor="-opaque">{{ $article->title }}</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('landing.home') }}">Inicio</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('landing.recursos') }}">Blog</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $article->title }}</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Blog Single Start -->
    <div class="page-blog-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Blog Single Item Start -->
                    <div class="blog-single-item">
                        <!-- Blog Image Start -->
                        <div class="blog-image">
                            @if($article->cover_image_path)
                                <img src="{{ asset('storage/' . $article->cover_image_path) }}" alt="{{ $article->cover_image_alt ?? $article->title }}">
                            @elseif($article->cover_image_url)
                                <img src="{{ $article->cover_image_url }}" alt="{{ $article->cover_image_alt ?? $article->title }}">
                            @else
                                <img src="{{ asset('images/default-article.png') }}" alt="{{ $article->title }}">
                            @endif
                        </div>
                        <!-- Blog Image End -->

                        <!-- Blog Content Start -->
                        <div class="blog-content">
                            <!-- Blog Meta Start -->
                            <div class="blog-meta">
                                <ul>
                                    <li><span><i class="fa-solid fa-calendar"></i> {{ $article->published_at->format('d/m/Y') }}</span></li>
                                    @if($article->tags && count($article->tags) > 0)
                                        <li>
                                            <span>
                                                <i class="fa-solid fa-tags"></i>
                                                @foreach($article->tags as $tag)
                                                    {{ $tag }}@if(!$loop->last), @endif
                                                @endforeach
                                            </span>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                            <!-- Blog Meta End -->

                            <!-- Blog Text Start -->
                            <div class="blog-text">
                                <h2>{{ $article->title }}</h2>
                                <div class="article-content">
                                    {!! nl2br($article->content) !!}
                                </div>
                            </div>
                            <!-- Blog Text End -->
                        </div>
                        <!-- Blog Content End -->
                    </div>
                    <!-- Blog Single Item End -->

                    <!-- Related Articles Start -->
                    @if($article->recommended_article_ids && count($article->recommended_article_ids) > 0)
                        <div class="related-blog">
                            <h3>Artículos Relacionados</h3>
                            <div class="row">
                                @php
                                    $relatedArticles = Article::query()
                                        ->whereIn('id', $article->recommended_article_ids)
                                        ->where('status', 'published')
                                        ->get();
                                @endphp
                                @forelse($relatedArticles as $relatedArticle)
                                    <div class="col-lg-6 col-md-6">
                                        <div class="blog-item">
                                            <div class="blog-image">
                                                <a href="{{ route('landing.blog.show', $relatedArticle->slug) }}">
                                                    @if($relatedArticle->cover_image_path)
                                                        <img src="{{ asset('storage/' . $relatedArticle->cover_image_path) }}" alt="{{ $relatedArticle->cover_image_alt ?? $relatedArticle->title }}">
                                                    @elseif($relatedArticle->cover_image_url)
                                                        <img src="{{ $relatedArticle->cover_image_url }}" alt="{{ $relatedArticle->cover_image_alt ?? $relatedArticle->title }}">
                                                    @else
                                                        <img src="{{ asset('images/default-article.png') }}" alt="{{ $relatedArticle->title }}">
                                                    @endif
                                                </a>
                                            </div>
                                            <div class="blog-content">
                                                <div class="blog-meta">
                                                    <ul>
                                                        <li><a href="#">{{ $relatedArticle->published_at->format('d/m/Y') }}</a></li>
                                                    </ul>
                                                </div>
                                                <h3><a href="{{ route('landing.blog.show', $relatedArticle->slug) }}">{{ $relatedArticle->title }}</a></h3>
                                                <p>{{ $relatedArticle->excerpt ?? Str::limit($relatedArticle->content, 100) }}</p>
                                                <a href="{{ route('landing.blog.show', $relatedArticle->slug) }}" class="link-default">Leer más <i class="fa-solid fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                @endforelse
                            </div>
                        </div>
                    @endif
                    <!-- Related Articles End -->
                </div>

                <!-- Sidebar Start -->
                <div class="col-lg-4">
                    <!-- Blog Sidebar Widget Start -->
                    <div class="blog-sidebar">
                        <!-- Recent Articles Widget Start -->
                        <div class="blog-widget">
                            <h4 class="widget-title">Artículos Recientes</h4>
                            <ul>
                                @php
                                    $recentArticles = Article::query()
                                        ->where('status', 'published')
                                        ->where('id', '!=', $article->id)
                                        ->orderByDesc('published_at')
                                        ->take(5)
                                        ->get();
                                @endphp
                                @forelse($recentArticles as $recentArticle)
                                    <li>
                                        <a href="{{ route('landing.blog.show', $recentArticle->slug) }}">
                                            {{ $recentArticle->title }}
                                        </a>
                                        <span>{{ $recentArticle->published_at->format('d/m/Y') }}</span>
                                    </li>
                                @empty
                                @endforelse
                            </ul>
                        </div>
                        <!-- Recent Articles Widget End -->
                    </div>
                    <!-- Blog Sidebar Widget End -->
                </div>
                <!-- Sidebar End -->
            </div>
        </div>
    </div>
    <!-- Page Blog Single End -->

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

                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="footer-widget">
                        <h4 class="footer-menu-title">Enlaces Rápidos</h4>
                        <ul class="footer-menu">
                            <li><a href="{{ route('landing.home') }}">Inicio</a></li>
                            <li><a href="{{ route('landing.about') }}">Nosotros</a></li>
                            <li><a href="{{ route('landing.services') }}">Servicios</a></li>
                            <li><a href="{{ route('landing.recursos') }}">Blog</a></li>
                            <li><a href="{{ route('landing.contact') }}">Contacto</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="footer-widget">
                        <h4 class="footer-menu-title">Información</h4>
                        <ul class="footer-menu">
                            <li><a href="#">Política de Privacidad</a></li>
                            <li><a href="#">Términos de Servicio</a></li>
                            <li><a href="https://lnk.bio/alphadent">Agendar Cita</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="footer-widget footer-widget-contact">
                        <h4 class="footer-menu-title">Contáctenos</h4>
                        <ul class="footer-contact-info">
                            <li>
                                <a href="https://wa.me/50689304243">
                                    <i class="fa-brands fa-whatsapp"></i> +506 8930 4243
                                </a>
                            </li>
                            <li>
                                <a href="mailto:info@alphadentcr.com">
                                    <i class="fa-solid fa-envelope"></i> info@alphadentcr.com
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-bottom">
                        <p>&copy; 2026 AlphaDent. Todos los derechos reservados.</p>
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

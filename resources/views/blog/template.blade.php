<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AlphaDent | Clínica Dental en Alajuela y Heredia</title>
    <!-- favicons Icons -->

    <link rel="shortcut icon" type="image/x-icon" href="/images/logof.png">

    <meta name="description" content="Tanspot HTML 5 Template " />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">

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
    <link href="{{ asset('css/blog-details.css') }}" rel="stylesheet" media="screen">

    @php
    use Illuminate\Support\Str;

    $appUrl = rtrim($appUrl ?? config('app.url'), '/');
    $canonical = $appUrl . '/blog/' . $article->slug . '/';
    $description = $metaDescription ?? '';

    // Use relative path for locally uploaded images, absolute URL for external images
    $imageUrl = null;
    if ($article->cover_image_path) {
        $imageUrl = '/storage/' . ltrim($article->cover_image_path, '/');
    } elseif ($article->cover_image_url) {
        $imageUrl = $article->cover_image_url;
    }

    $robots = $article->isPublished() ? 'index,follow' : 'noindex,nofollow';
    $published = optional($article->published_at)->toIso8601String();
    $modified = optional($article->updated_at)->toIso8601String();
    @endphp

    <meta name="description" content="{{ $description }}">
    <link rel="canonical" href="{{ $canonical }}">

    <meta name="robots" content="{{ $robots }}">

    <meta property="og:type" content="article">
    <meta property="og:title" content="{{ $article->title }}">
    <meta property="og:description" content="{{ $description }}">
    <meta property="og:url" content="{{ $canonical }}">
    @if ($imageUrl)
        <meta property="og:image" content="{{ $imageUrl }}">
    @endif

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $article->title }}">
    <meta name="twitter:description" content="{{ $description }}">
    @if ($imageUrl)
        <meta name="twitter:image" content="{{ $imageUrl }}">
    @endif

    <script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Article',
    'headline' => $article->title,
    'description' => $description,
    'image' => $imageUrl ?: null,
    'datePublished' => $published,
    'dateModified' => $modified,
    'author' => [
        '@type' => 'Person',
        'name' => config('app.name'),
    ],
    'mainEntityOfPage' => [
        '@type' => 'WebPage',
        '@id' => $canonical,
    ],
], JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT) !!}
    </script>


</head>

<body @class(['custom-cursor'])>

    <div @class(['page-wrapper'])>
        <!-- Header Start -->
        <header @class(['main-header'])>
            <div @class(['header-sticky'])>
                <nav @class(['navbar', 'navbar-expand-lg'])>
                    <div @class(['container'])>
                        <!-- Logo Start -->
                        <a @class(['navbar-brand']) href="{{ route('landing.home') }}">
                            <img src="{{ asset('images/logo.png') }}" alt="AlphaDent">
                        </a>
                        <!-- Logo End -->
                        <!-- Main Menu Start -->
                        <div @class(['collapse', 'navbar-collapse', 'main-menu'])>
                            <div @class(['nav-menu-wrapper'])>
                                <ul @class(['navbar-nav', 'mr-auto']) id="menu">
                                    <li @class(['nav-item'])><a @class(['nav-link']) href="{{ route('landing.home') }}">Inicio</a></li>
                                    <li @class(['nav-item'])><a @class(['nav-link']) href="{{ route('landing.about') }}">Nosotros</a></li>
                                    <li @class(['nav-item'])><a @class(['nav-link']) href="{{ route('landing.services') }}">Servicios</a>
                                    </li>
                                    <li @class(['nav-item'])><a @class(['nav-link']) href="{{ route('landing.gallery') }}">Galería</a></li>
                                    <li @class(['nav-item'])><a @class(['nav-link']) href="{{ route('landing.recursos') }}">Blog</a></li>
                                    <li @class(['nav-item'])><a @class(['nav-link']) href="{{ route('landing.contact') }}">Contacto</a></li>
                                    <li @class(['nav-item', 'highlighted-menu'])>
                                        <a @class(['nav-link']) href="https://lnk.bio/alphadent">
                                            Agendar
                                            cita
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Let’s Start Button Start -->
                            <div @class(['header-btn', 'd-inline-flex'])>
                                <a href="https://lnk.bio/alphadent" @class(['btn-default'])>Agendar cita</a>
                            </div>
                            <!-- Let’s Start Button End -->
                        </div>
                        <!-- Main Menu End -->
                        <div @class(['navbar-toggle'])></div>
                    </div>
                </nav>
                <div @class(['responsive-menu'])></div>
            </div>
        </header>

        <div @class(['stricky-header', 'stricked-menu', 'main-menu'])>
            <div @class(['sticky-header__content'])></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!-- Page Header Start (PORTADA como la que me pasaste primero) -->
        <div @class(['page-header'])>
            <div @class(['container'])>
                <div @class(['row'])>
                    <div @class(['col-lg-12'])>
                        <div @class(['page-header-box'])>
                            <h1 @class(['text-anime-style-2']) data-cursor="-opaque">{{$article->title}}</h1>
                            <nav @class(['wow', 'fadeInUp'])>
                                <ol @class(['breadcrumb'])>
                                    <li @class(['breadcrumb-item'])><a href="{{ route('landing.home') }}">Inicio</a></li>
                                    <li @class(['breadcrumb-item'])><a href="{{ route('landing.recursos') }}">Blog</a></li>
                                    <li @class(['breadcrumb-item', 'active']) aria-current="page">{{$article->title}}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->

    <!--Blog Details Start -->
    <section class="blog-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="blog-details__left">
                        <div class="blog-details__img">
                            @if ($imageUrl)
                                <img src="{{ $imageUrl }}" alt="">
                            @endif
                            <div class="blog-details__date">
                                <p>{{ optional($article->published_at)->format('d') }}<br>{{ optional($article->published_at)->format('M') }}
                                </p>
                            </div>
                        </div>
                        <div class="blog-details__content">
                            <div class="blog-details__user-and-meta">
                                <div class="blog-details__user">
                                    <p>Admin</p>
                                </div>
                            </div>
                            <h3 class="blog-details__title">{!! $article->title !!}</h3>
                            <div class="blog-details__text-1">
                                {!! Str::markdown($article->excerpt ?? '') !!}
                            </div>
                            <div class="blog-details__text-2 content">
                                {!! $article->content !!}
                            </div>

                            <div class="blog-details__author-box">
                                <h4 class="blog-details__author-text">“{{ $description }}”</h4>
                                <p class="blog-details__author-name">Admin</p>
                            </div>
                            <div class="blog-details__tag-and-share">
                                @if (is_array($article->tags) && count($article->tags))
                                    <div class="blog-details__tag">
                                        <h3 class="blog-details__tag-title">Tags :</h3>
                                        <ul class="blog-details__tag-list list-unstyled">
                                            @foreach ($article->tags as $t)
                                                <li><a href="#">#{{ $t }}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <!--Start Sidebar-->
                <div class="col-xl-4 col-lg-5">
                    <div class="sidebar">
                        <!--Start Sidebar Single-->
                        @php
                            $recommendedIds = $article->recommended_article_ids ?? [];
                            if (!is_array($recommendedIds)) {
                                $recommendedIds = json_decode($recommendedIds, true) ?: [];
                            }
                            $recommendedIds = array_values(
                                array_filter($recommendedIds, fn($id) => $id && (int) $id !== (int) $article->id),
                            );
                            $recommended = [];
                            if (count($recommendedIds)) {
                                $found = \App\Models\Article::whereIn('id', $recommendedIds)
                                    ->where('status', 'published')
                                    ->get()
                                    ->keyBy('id');

                                // preserve order from IDs
                                foreach ($recommendedIds as $id) {
                                    if (isset($found[$id])) {
                                        $recommended[] = $found[$id];
                                    }
                                }
                            }
                        @endphp

                        @if (count($recommended))
                            <div class="sidebar__single sidebar__post wow fadeInUp" data-wow-delay=".1s">
                                <h3 class="sidebar__title">Artículos recomendados</h3>
                                <div class="sidebar__post-box">
                                    @foreach ($recommended as $r)
                                        <div class="sidebar__post-single">
                                            <div class="sidebar-post__img">
                                                <img src="{{ $r->getFinalCoverImageUrl() ?: asset('assets/post-1.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="sidebar__post-content-box">
                                                <h3><a
                                                        href="{{ url('/blog/' . $r->slug . '/') }}">{{ $r->title }}</a>
                                                </h3>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                        <!--End Sidebar Single-->

                        <!--Start Sidebar Single-->
                        <div class="sidebar__single sidebar__tags wow fadeInUp" data-wow-delay=".1s">
                            <h3 class="sidebar__title">Tags Cloud</h3>
                            <ul class="sidebar__tags-list clearfix list-unstyled">
                                @foreach ($article->tags ?? [] as $t)
                                    <li><a href="#">{{ $t }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <!--End Sidebar Single-->

                    </div>
                </div>
                <!--End Sidebar-->
            </div>
        </div>
    </section>
    <!--Blog Details End-->


    <!-- Footer Start -->
    <footer @class(['main-footer'])>
        <div @class(['container'])>
            <div @class(['row'])>
                <div @class(['col-lg-4'])>
                    <div @class(['about-footer'])>
                        <div @class(['footer-logo'])>
                            <img src="{{ asset('images/logo.png') }}" alt="">
                        </div>

                        <div @class(['about-footer-content'])>
                            <p>
                                AlphaDent es una clínica dental en Costa Rica con sedes en Alajuela y Heredia.
                                Brindamos
                                atención profesional y humana, enfocada en prevención, estética y tratamientos
                                integrales.
                            </p>
                        </div>
                    </div>
                </div>
                <div @class(['col-lg-3', 'col-md-4'])>
                    <div @class(['footer-links', 'footer-quick-links'])>
                        <h3>Enlaces</h3>
                        <ul>
                            <li><a href="{{ route('landing.home') }}">Inicio</a></li>
                            <li><a href="{{ route('landing.about') }}">Nosotros</a></li>
                            <li><a href="{{ route('landing.services') }}">Servicios</a></li>
                            <li><a href="{{ route('landing.contact') }}">Contacto</a></li>

                            <li>
                                <a href="https://lnk.bio/alphadent">
                                    Agendar
                                    cita
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div @class(['col-lg-3', 'col-md-4'])>
                    <div @class(['footer-links', 'footer-social-links'])>
                        <h3>Redes</h3>
                        <ul>
                            <li><a href="https://www.facebook.com/alphadentcr?locale=es_LA">Facebook</a></li>
                            <li><a href="https://www.instagram.com/alphadentcr">Instagram</a></li>
                            <li><a href="https://www.tiktok.com/@alphadentcr">TikTok</a></li>

                        </ul>
                    </div>
                </div>

                <div @class(['col-lg-2', 'col-md-4'])>
                    <div @class(['footer-links', 'footer-contact-links'])>
                        <h3>Contacto</h3>
                        <ul>
                            <li><a href="mailto:info@alphadentcr.com">info@alphadentcr.com</a></li>
                            <li><a href="tel:+50689304243">+506 8930 4243</a></li>
                            <li><a href="tel:+50686925000">+506 8692 5000</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div @class(['footer-copyright'])>
                <div @class(['row'])>
                    <div @class(['col-lg-12'])>
                        <div @class(['footer-copyright-text'])>
                            <p>
                                Copyright © 2026 AlphaDent. Todos los derechos reservados. |
                                Hecho por Josué B
                                <a href="https://wa.me/50670035845" target="_blank" style="margin-left:10px;">
                                    <i @class(['fa', 'fa-phone'])></i> WhatsApp
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    </div> <!-- /.page-wrapper -->

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
    <!-- MagicCursor js file -->
    <script src="{{ asset('js/gsap.min.js') }}"></script>
    <script src="{{ asset('js/magiccursor.js') }}"></script>
    <!-- Text Effect js file -->
    <script src="{{ asset('js/SplitText.js') }}"></script>
    <script src="{{ asset('js/ScrollTrigger.min.js') }}"></script>
    <!-- Wow js file -->
    <script src="{{ asset('js/wow.js') }}"></script>
    <!-- Main Custom js file -->
    <script src="{{ asset('js/function.js') }}"></script>
    <script src="https://demo.awaikenthemes.com/assets/js/theme-panel.js"></script>
</body>

</html>

@extends('components.layout.main')

@section('title', 'Wave Tech Team - Crafting Innovative Digital')

@section('content')
    <!-- Start Banner
                                                                                                                                                            ============================================= -->
    <div class="banner-style-one" style="background-image: url(assets/img/shape/1.png);">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-8 banner-one-item">
                    <h4>Wave Tech Team</h4>
                    <h2>Crafting Innovative <strong>Digital</strong></h2>
                </div>
                <div class="col-lg-3 offset-lg-1 banner-one-item text-center">
                    <div class="curve-text">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 150 150" version="1.1">
                            <path id="textPath" d="M 0,75 a 75,75 0 1,1 0,1 z"></path>
                            <text>
                                <textPath href="#textPath">En savoir plus Wave Tech</textPath>
                            </text>
                        </svg>
                        <a href="#"><i style="rotate: 25deg;" class="fas fa-phone"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Start Background Move
                                                                                                                                                            ============================================= -->
    <div class="banner-animation-zoom">
        <div class="animation-zoom-banner" id="js-hero"
            style="background-image: url(assets/img/future-visions-business-technology-concept.jpg);">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6">
                    <div class="experience-box">
                        <div class="inner-content">
                            <h2><strong>10+</strong> Années d'expérience</h2>
                            <p>
                                Ces cas sont parfaitement simples et faciles à distinguer. Dans une heure libre, quand
                                notre pouvoir
                                Le choix est une structure de données sans entraves.

                            </p>
                            <a class="btn-animation" href="{{ url('/services') }}"><i class="fas fa-arrow-right"></i>
                                <span>Nos Services</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Background Move -->

    <!-- Start Services
                                                                                                                                                                                                                                    ============================================= -->
    <div class="creative-services-area overflow-hidden default-padding">

        <div class="bg-static">
            <img class="bg-move" src="assets/img/shape/5.png" alt="Image Not Found">
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="site-heading">
                        <h4 class="sub-title">Services que nous offrons</h4>
                        <h2 class="title">Tourner les informations <br> Vers des informations exploitables</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="service-hover-items">
                        <ul>
                            @foreach ($services as $key => $service)
                                <li>
                                    <a href="{{ url('/services', $service->slug) }}" class="service-hover-item">
                                        <div class="service-hover-content">
                                            <div class="icon">
                                                <i class="fas fa-vector-square"></i>
                                            </div>
                                            <div class="item-title">
                                                <h2>{{ $service->title }}</h2>
                                                <span>0{{ $key + 1 }}</span>
                                            </div>
                                            <div class="details">
                                                <p>
                                                    {{ $service->excerpt }}
                                                </p>
                                            </div>
                                            <div class="arrow">
                                                <strong class="btn-animation"><i class="fas fa-arrow-right"></i>
                                                    <span>Voir
                                                        plus</span></strong>
                                            </div>
                                        </div>
                                        <div class="service-hover-wrapper">
                                            <img class="service-hover-placeholder" src="storage/{{ $service->image }}"
                                                alt="Image Not Found">
                                        </div>
                                    </a>

                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Services -->

    <!-- Start About
                                                                                                                                                ============================================= -->
    <div class="about-area
            default-padding-bottom relative">
        <div class="blur-bg-theme"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-6">
                    <div class="about-style-one-thumb animate" data-animate="fadeInUp">
                        <img src="assets/img/business-team-working-reports.jpg" alt="Image Not Found">
                        <div class="fun-fact text-light animate" data-animate="fadeInDown" data-duration="1s">
                            <div class="counter">
                                <div class="timer" data-to="38" data-speed="2000">38</div>
                                {{-- <div class="operator">K</div> --}}
                            </div>
                            <span class="medium">Projets terminés</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 pl-80 pl-md-15 pl-xs-15">
                    <div class="about-style-one">
                        <h2 class="title mb-30">Processus créatif dans notre agence</h2>
                        <p>
                            Chez Wave Tech Team, nous allons au-delà des solutions digitales traditionnelles pour offrir
                            des expériences numériques innovantes. De la création de sites web à la gestion créative des
                            applications mobiles, en passant par des stratégies de référencement et des campagnes
                            percutantes, nous ne sommes pas simplement un prestataire, nous sommes un partenaire
                            stratégique. Nous sommes fiers de collaborer avec certaines des entreprises les plus
                            ambitieuses et des marques internationales. Découvrez ce qui nous distingue.
                        </p>
                        <ul class="list-simple">
                            <li>Communication étonnante.</li>
                            <li>Meilleure expérience de conception tendance.
                            </li>
                        </ul>
                        <a href="{{ url('/about-us') }}" class="arrow-btn"><i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->

    <!-- Start Portfolio
                                                                                                                                                            ============================================= -->
    {{-- <div class="portfolio-style-one-area default-padding bg-gray">

        <div class="container">
            <div class="heading-left">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="content-left">
                            <h4 class="sub-title">Popular Projects</h4>
                            <h2 class="title">Featured Works</h2>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <p>
                            Continue indulged speaking the was out horrible for domestic position. Seeing rather her you
                            not esteem men settle genius excuse. Deal say over you age from. Comparison new ham
                            melancholy themselves.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row mt--50 mt-md-3-0 mt-xs--30">
                <!-- Single Item -->
                <div class="col-lg-6 item-center">
                    <div class="portfolio-style-one animate" data-animate="fadeInUp">
                        <div class="thumb-zoom">
                            <img src="assets/img/800x800.png" alt="Image Not Found">
                        </div>
                        <div class="pf-item-info">
                            <div class="content-info">
                                <span>Marketing</span>
                                <h2><a href="project-details.html">Photo shooting and editing</a></h2>
                            </div>
                            <div class="button">
                                <a href="project-details.html" class="pf-btn"><i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-lg-6 item-center">
                    <div class="portfolio-style-one animate" data-animate="fadeInDown" data-duration="1.5s">
                        <div class="thumb-zoom">
                            <img src="assets/img/800x600.png" alt="Image Not Found">
                        </div>
                        <div class="pf-item-info">
                            <div class="content-info">
                                <span>Creative</span>
                                <h2><a href="project-details.html">Quality in industrial design</a></h2>
                            </div>
                            <div class="button">
                                <a href="project-details.html" class="pf-btn"><i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-lg-6 item-center">
                    <div class="portfolio-style-one animate" data-animate="fadeInUp" data-duration="2s">
                        <div class="thumb-zoom">
                            <img src="assets/img/800x600.png" alt="Image Not Found">
                        </div>
                        <div class="pf-item-info">
                            <div class="content-info">
                                <span>Design</span>
                                <h2><a href="project-details.html">Blue business mockup cards</a></h2>
                            </div>
                            <div class="button">
                                <a href="project-details.html" class="pf-btn"><i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-lg-6 item-center">
                    <div class="portfolio-style-one animate" data-animate="fadeInDown" data-duration="2.5s">
                        <div class="thumb-zoom">
                            <img src="assets/img/800x800.png" alt="Image Not Found">
                        </div>
                        <div class="pf-item-info">
                            <div class="content-info">
                                <span>Business</span>
                                <h2><a href="project-details.html">Simple black & white design </a></h2>
                            </div>
                            <div class="button">
                                <a href="project-details.html" class="pf-btn"><i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
            </div>
        </div>
    </div> --}}
    <!-- End Portfolio -->

    <!-- Start Fun Factor
                                                                                                                                                            ============================================= -->
    <div class="fun-factor-circle-area default-padding bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="fun-fact-circle-lists">
                        <!-- Single item -->
                        <div class="fun-fact animate" data-animate="fadeInDown">
                            <div class="counter">
                                <div class="timer" data-to="30" data-speed="3000">30</div>
                                {{-- <div class="operator">K</div> --}}
                            </div>
                            <span class="medium">Client mondial</span>
                        </div>
                        <!-- End Single item -->
                        <!-- Single item -->
                        <div class="fun-fact animate" data-animate="fadeInUp" data-duration="0.5s">
                            <div class="counter">
                                <div class="timer" data-to="98" data-speed="3000">98</div>
                                <div class="operator">%</div>
                            </div>
                            <span class="medium">Note positive</span>
                        </div>
                        <!-- End Single item -->
                        <!-- Single item -->
                        <div class="fun-fact animate" data-animate="fadeInDown">
                            <div class="counter">
                                <div class="timer" data-to="50" data-speed="3000">50</div>
                                <div class="operator">+</div>
                            </div>
                            <span class="medium">Total Branche</span>
                        </div>
                        <!-- End Single item -->
                        <!-- Single item -->
                        <div class="fun-fact animate" data-animate="fadeInUp" data-duration="0.5s">
                            <div class="counter">
                                <div class="timer" data-to="10" data-speed="1000">10</div>
                            </div>
                            <span class="medium">Années d'expérience</span>
                        </div>
                        <!-- End Single item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Fun Factor -->

    <!-- Start Brand Area
                                                                                                                                                            ============================================= -->
    <div class="brand-area relative overflow-hidden bg-gradient text-light">
        <div class="brand-style-one">
            <div class="container-fill">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="brand-items">
                            <div class="brand-conetnt">
                                <div class="item">
                                    <h2>Web</h2>
                                </div>
                                <div class="item">
                                    <h2>Mobile</h2>
                                </div>
                                <div class="item">
                                    <h2>Redaction</h2>
                                </div>
                                <div class="item">
                                    <h2>Referencement</h2>
                                </div>
                            </div>
                            <div class="brand-conetnt">
                                <div class="item">
                                    <h2>Web</h2>
                                </div>
                                <div class="item">
                                    <h2>Mobile</h2>
                                </div>
                                <div class="item">
                                    <h2>Redaction</h2>
                                </div>
                                <div class="item">
                                    <h2>Referencement</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradn Area -->

    <!-- Start Why Choose Us
                                                                                                                                                            ============================================= -->
    <div class="choose-us-style-one-area default-padding bg-gray">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-6">
                    <div class="choose-us-style-one-thumb">
                        <img src="assets/img/femme-sourit-point-interrogation_1134-484.avif" alt="Image Not Found">
                        {{-- <a href="https://www.youtube.com/watch?v=ipUuoMCEbDQ" class="popup-youtube video-play-button">
                            <i class="fas fa-play"></i>
                            <div class="effect"></div>
                        </a> --}}
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="choose-us-style-one d-flex-between">
                        <div class="top-info">
                            <h4 class="sub-title">Pourquoi Wave tech team?</h4>
                            <h2 class="title">Libérez la croissance des revenus de votre entreprise</h2>
                        </div>
                        <div class="bottom-info">
                            <ul class="list-item">
                                <li>Développement rapide
                                    <strong>01</strong>
                                </li>
                                <li>Flexibilité totale <strong>02</strong></li>
                                <li>Conception moderne <strong>03</strong></li>
                                <li>Maintenance Simple <strong>04</strong></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Why Choose Us -->

    <!-- Start Testimonial Area
                                                                                                                                                            ============================================= -->
    {{-- <div class="testimonial-style-one-area default-padding-top">

        <div class="container">
            <div class="heading-left">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="content-left">
                            <h4 class="sub-title">Témoignages</h4>
                            <h2 class="title">Ce que disent les gens
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">

                <div class="testimonial-one-carousel-box">
                    <div class="testimonial-style-one-carousel swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Single item -->
                            <div class="swiper-slide">
                                <div class="testimonial-style-one">
                                    <div class="provider">
                                        <div class="thumb">
                                            <img src="assets/img/800x800.png" alt="Image Not Found">
                                            <div class="quote">
                                                <img src="assets/img/shape/quote-big.png" alt="Image Not Found">
                                            </div>
                                        </div>
                                        <div class="info">
                                            <h4>Matthew J. Wyman</h4>
                                            <span>Consultant Senior</span>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <p>
                                            Targeting consultation discover apartments. ndulgence off under folly death
                                            wrote cause her way spite. Plan upon yet way get cold spot its week. Almost
                                            do am or limits hearts. Resolve parties but why she shewing. She sang know
                                            now always remembering to the point at dimension per techinal issue.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single item -->
                            <!-- Single item -->
                            <div class="swiper-slide">
                                <div class="testimonial-style-one">
                                    <div class="provider">
                                        <div class="thumb">
                                            <img src="assets/img/800x800.png" alt="Image Not Found">
                                            <div class="quote">
                                                <img src="assets/img/shape/quote-big.png" alt="Image Not Found">
                                            </div>
                                        </div>
                                        <div class="info">
                                            <h4>Anthom Bu Spar</h4>
                                            <span>Marketing Manager</span>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <p>
                                            Targeting consultation discover apartments. ndulgence off under folly death
                                            wrote cause her way spite. Plan upon yet way get cold spot its week. Almost
                                            do am or limits hearts. Resolve parties but why she shewing. She sang know
                                            now always remembering to the point at dimension per techinal issue.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single item -->
                            <!-- Single item -->
                            <div class="swiper-slide">
                                <div class="testimonial-style-one">
                                    <div class="provider">
                                        <div class="thumb">
                                            <img src="assets/img/800x800.png" alt="Image Not Found">
                                            <div class="quote">
                                                <img src="assets/img/shape/quote-big.png" alt="Image Not Found">
                                            </div>
                                        </div>
                                        <div class="info">
                                            <h4>Metho k. Partho</h4>
                                            <span>Senior Developer</span>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <p>
                                            Targeting consultation discover apartments. ndulgence off under folly death
                                            wrote cause her way spite. Plan upon yet way get cold spot its week. Almost
                                            do am or limits hearts. Resolve parties but why she shewing. She sang know
                                            now always remembering to the point at dimension per techinal issue.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single item -->
                        </div>

                    </div>

                    <!-- Navigation -->
                    <div class="testimonial-one-swiper-nav">

                        <!-- Pagination -->
                        <div class="testimonial-one-pagination"></div>

                        <div class="testimonial-one-button-prev"></div>
                        <div class="testimonial-one-button-next"></div>

                    </div>

                </div>
            </div>
        </div>

    </div> --}}
    <!-- End Testimonial Area -->

    <!-- Start Slide Section
                                                                                                                                                            ============================================= -->
    <div class="multi-section overflow-hidden bg-dark-secondary text-light">
        <div class="bg-shape-top">
            <img src="assets/img/shape/bg-shape-1.png" alt="Image Not Found">
        </div>

        <div class="thecontainer">

            <!-- Single Section -->
            <div class="panel overflow-hidden">
                <div class="container overflow-hidden">
                    <div class="row align-center">
                        <div class="col-lg-4">
                            <div class="site-title">
                                <h4 class="sub-title">Téchnologie
                                </h4>
                                <h2 class="title">Nos solutions technologiques
                                </h2>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            {{-- <div class="achivement-items">
                                <div class="achivement-grid">
                                    <div class="achivement-item">
                                        <i class="fab fa-behance"></i>
                                        <h4>Behance Awards </h4>
                                    </div>
                                    <div class="achivement-item">
                                        <i class="fas fa-layer-group"></i>
                                        <h4>Design Awards</h4>
                                    </div>
                                </div>
                                <div class="achivement-grid">
                                    <div class="achivement-item">
                                        <i class="fab fa-laravel"></i>
                                        <h4>Programming Awards</h4>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="relative max-w-4xl mx-auto px-5 sm:px-0 md:px-5 lg:px-0">
                                <div class="space-y-4">
                                    <div class="d-flex h-28">
                                        <div class="grow w-14 h-14 width-50percentence">
                                            <p class="mb-6 text-base text-neutral-900 dark:text-neutral-400">
                                                Développement Front-End</p>
                                            <div class="flex-tech d-flex flex-wrap items-center gap-2"> <a
                                                    href="https://react.dev/" target="_blank"
                                                    class="w-fit px-3 py-2 group rounded border d-flex gap-2 items-center border-neutral-200 dark:border-neutral-700 hover:bg-neutral-100 hover:dark:bg-neutral-800 blend">
                                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/30/React_Logo_SVG.svg/langfr-1024px-React_Logo_SVG.svg.png"
                                                        alt="" width="20" height="{20}"> <span
                                                        class="text-sm text-neutral-500 dark:text-neutral-400">
                                                        React.js </span> </a><a href="https://vuejs.org/" target="_blank"
                                                    class="w-fit px-3 py-2 group rounded border d-flex gap-2 items-center border-neutral-200 dark:border-neutral-700 hover:bg-neutral-100 hover:dark:bg-neutral-800 blend">
                                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Vue.js_Logo_2.svg/640px-Vue.js_Logo_2.svg.png"
                                                        alt="" width="20" height="{20}"> <span
                                                        class="text-sm text-neutral-500 dark:text-neutral-400"> Vue.js
                                                    </span> </a><a href="https://www.typescriptlang.org/" target="_blank"
                                                    class="w-fit px-3 py-2 group rounded border d-flex gap-2 items-center border-neutral-200 dark:border-neutral-700 hover:bg-neutral-100 hover:dark:bg-neutral-800 blend">
                                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4c/Typescript_logo_2020.svg/1200px-Typescript_logo_2020.svg.png"
                                                        alt="" width="20" height="{20}"> <span
                                                        class="text-sm text-neutral-500 dark:text-neutral-400">
                                                        TypeScript </span> </a><a href="https://angular.dev/"
                                                    target="_blank"
                                                    class="w-fit px-3 py-2 group rounded border d-flex gap-2 items-center border-neutral-200 dark:border-neutral-700 hover:bg-neutral-100 hover:dark:bg-neutral-800 blend">
                                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f7/Angular_gradient.png/1200px-Angular_gradient.png"
                                                        alt="" width="20" height="{20}"> <span
                                                        class="text-sm text-neutral-500 dark:text-neutral-400"> Angular
                                                    </span> </a> </div>
                                        </div>
                                        <div class="p-6"></div>
                                        <div class="grow w-14 h-14 width-50percentence">
                                            <p class="mb-6 text-base text-neutral-900 dark:text-neutral-400">
                                                Développement Back-End</p>
                                            <div class="flex-tech d-flex flex-wrap items-center gap-2"> <a
                                                    href="https://nodejs.org" target="_blank"
                                                    class="w-fit px-3 py-2 group rounded border d-flex gap-2 items-center border-neutral-200 dark:border-neutral-700 hover:bg-neutral-100 hover:dark:bg-neutral-800 blend">
                                                    <img src="https://seeklogo.com/images/N/node-js-logo-F4F55CD2D0-seeklogo.com.png"
                                                        alt="" width="20" height="{20}"> <span
                                                        class="text-sm text-neutral-500 dark:text-neutral-400"> Node.js
                                                    </span> </a><a href="https://laravel.com/" target="_blank"
                                                    class="w-fit px-3 py-2 group rounded border d-flex gap-2 items-center border-neutral-200 dark:border-neutral-700 hover:bg-neutral-100 hover:dark:bg-neutral-800 blend">
                                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png"
                                                        alt="" width="20" height="{20}"> <span
                                                        class="text-sm text-neutral-500 dark:text-neutral-400"> Laravel
                                                    </span> </a><a href="https://symfony.com/" target="_blank"
                                                    class="w-fit px-3 py-2 group rounded border d-flex gap-2 items-center border-neutral-200 dark:border-neutral-700 hover:bg-neutral-100 hover:dark:bg-neutral-800 blend">
                                                    <img src="https://avatars.githubusercontent.com/u/143937?s=280&amp;v=4"
                                                        alt="" width="20" height="{20}"> <span
                                                        class="text-sm text-neutral-500 dark:text-neutral-400"> Symfony
                                                    </span> </a><a href="https://dotnet.microsoft.com" target="_blank"
                                                    class="w-fit px-3 py-2 group rounded border d-flex gap-2 items-center border-neutral-200 dark:border-neutral-700 hover:bg-neutral-100 hover:dark:bg-neutral-800 blend">
                                                    <img src="https://upload.wikimedia.org/wikipedia/commons/7/7d/Microsoft_.NET_logo.svg"
                                                        alt="" width="20" height="{20}"> <span
                                                        class="text-sm text-neutral-500 dark:text-neutral-400"> Dot Net
                                                    </span> </a><a href="https://www.djangoproject.com/" target="_blank"
                                                    class="w-fit px-3 py-2 group rounded border d-flex gap-2 items-center border-neutral-200 dark:border-neutral-700 hover:bg-neutral-100 hover:dark:bg-neutral-800 blend">
                                                    <img src="https://miro.medium.com/v2/resize:fit:400/0*v8Ot7LRl6TSDXtBR.png"
                                                        alt="" width="20" height="{20}"> <span
                                                        class="text-sm text-neutral-500 dark:text-neutral-400"> Django
                                                    </span> </a><a href="https://spring.io/" target="_blank"
                                                    class="w-fit px-3 py-2 group rounded border d-flex gap-2 items-center border-neutral-200 dark:border-neutral-700 hover:bg-neutral-100 hover:dark:bg-neutral-800 blend">
                                                    <img src="https://upload.wikimedia.org/wikipedia/commons/7/79/Spring_Boot.svg"
                                                        alt="" width="20" height="{20}"> <span
                                                        class="text-sm text-neutral-500 dark:text-neutral-400"> Spring
                                                        boot </span> </a> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="space-y-4 pt-52 sm:pt-0 md:pt-0 lg:pt-0">
                                    <div class="d-flex py-12 pb-14">
                                        <div class="grow w-14 h-14 width-50percentence">
                                            <p class="mb-6 text-base text-neutral-900 dark:text-neutral-400">
                                                Développement Mobile</p>
                                            <div class="flex-tech d-flex flex-wrap items-center gap-2"> <a
                                                    href="https://reactnative.dev/" target="_blank"
                                                    class="w-fit px-3 py-2 group rounded border d-flex gap-2 items-center border-neutral-200 dark:border-neutral-700 hover:bg-neutral-100 hover:dark:bg-neutral-800 blend">
                                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/30/React_Logo_SVG.svg/langfr-1024px-React_Logo_SVG.svg.png"
                                                        alt="" width="20" height="{20}"> <span
                                                        class="text-sm text-neutral-500 dark:text-neutral-400"> React
                                                        Native </span> </a><a href="https://flutter.dev/" target="_blank"
                                                    class="w-fit px-3 py-2 group rounded border d-flex gap-2 items-center border-neutral-200 dark:border-neutral-700 hover:bg-neutral-100 hover:dark:bg-neutral-800 blend">
                                                    <img src="https://cdn-images-1.medium.com/v2/resize:fit:1200/1*5-aoK8IBmXve5whBQM90GA.png"
                                                        alt="" width="20" height="{20}"> <span
                                                        class="text-sm text-neutral-500 dark:text-neutral-400"> Flutter
                                                    </span> </a><a href="https://www.swift.org/" target="_blank"
                                                    class="w-fit px-3 py-2 group rounded border d-flex gap-2 items-center border-neutral-200 dark:border-neutral-700 hover:bg-neutral-100 hover:dark:bg-neutral-800 blend">
                                                    <img src="https://developer.apple.com/swift/images/swift-og.png"
                                                        alt="" width="20" height="{20}"> <span
                                                        class="text-sm text-neutral-500 dark:text-neutral-400"> Swift
                                                    </span> </a><a href="https://kotlinlang.org/" target="_blank"
                                                    class="w-fit px-3 py-2 group rounded border d-flex gap-2 items-center border-neutral-200 dark:border-neutral-700 hover:bg-neutral-100 hover:dark:bg-neutral-800 blend">
                                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/06/Kotlin_Icon.svg/512px-Kotlin_Icon.svg.png"
                                                        alt="" width="20" height="{20}"> <span
                                                        class="text-sm text-neutral-500 dark:text-neutral-400"> Kotlin
                                                    </span> </a> </div>
                                        </div>
                                        <div class="p-6"></div>
                                        <div class="grow w-14 h-14 width-50percentence">
                                            <p class="mb-6 text-base text-neutral-900 dark:text-neutral-400">UI/UX
                                                Design</p>
                                            <div class="flex-tech d-flex flex-wrap items-center gap-2"> <a
                                                    href="https://www.figma.com/" target="_blank"
                                                    class="w-fit px-3 py-2 group rounded border d-flex gap-2 items-center border-neutral-200 dark:border-neutral-700 hover:bg-neutral-100 hover:dark:bg-neutral-800 blend">
                                                    <img src="https://cdn4.iconfinder.com/data/icons/logos-brands-in-colors/3000/figma-logo-512.png"
                                                        alt="" width="20" height="{20}"> <span
                                                        class="text-sm text-neutral-500 dark:text-neutral-400"> Figma
                                                    </span> </a><a href="https://helpx.adobe.com/support/xd.html"
                                                    target="_blank"
                                                    class="w-fit px-3 py-2 group rounded border d-flex gap-2 items-center border-neutral-200 dark:border-neutral-700 hover:bg-neutral-100 hover:dark:bg-neutral-800 blend">
                                                    <img src="https://w7.pngwing.com/pngs/658/828/png-transparent-adobe-xd-hd-logo-thumbnail.png"
                                                        alt="" width="20" height="{20}"> <span
                                                        class="text-sm text-neutral-500 dark:text-neutral-400"> Adobe
                                                        XD </span> </a><a href="https://www.sketch.com/" target="_blank"
                                                    class="w-fit px-3 py-2 group rounded border d-flex gap-2 items-center border-neutral-200 dark:border-neutral-700 hover:bg-neutral-100 hover:dark:bg-neutral-800 blend">
                                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/59/Sketch_Logo.svg/1133px-Sketch_Logo.svg.png"
                                                        alt="" width="20" height="{20}"> <span
                                                        class="text-sm text-neutral-500 dark:text-neutral-400"> Sketch
                                                    </span> </a> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="space-y-4 pt-36 pb-20 sm:pt-0 md:pt-5 lg:pt-0 sm:pb-0 md:pb-0 lg:pb-0">
                                    <div class="d-flex py-4 pb-14">
                                        <div class="grow w-14 h-14 width-50percentence">
                                            <p class="mb-6 text-base text-neutral-900 dark:text-neutral-400">Base de
                                                données</p>
                                            <div class="flex-tech d-flex flex-wrap items-center gap-2"> <a
                                                    href="https://www.mysql.com/" target="_blank"
                                                    class="w-fit px-3 py-2 group rounded border d-flex gap-2 items-center border-neutral-200 dark:border-neutral-700 hover:bg-neutral-100 hover:dark:bg-neutral-800 blend">
                                                    <img src="https://pipedream.com/s.v0/app_1YMhwo/logo/orig"
                                                        alt="" width="20" height="{20}"> <span
                                                        class="text-sm text-neutral-500 dark:text-neutral-400"> MySQL
                                                    </span> </a><a href="https://www.postgresql.org/" target="_blank"
                                                    class="w-fit px-3 py-2 group rounded border d-flex gap-2 items-center border-neutral-200 dark:border-neutral-700 hover:bg-neutral-100 hover:dark:bg-neutral-800 blend">
                                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/29/Postgresql_elephant.svg/640px-Postgresql_elephant.svg.png"
                                                        alt="" width="20" height="{20}"> <span
                                                        class="text-sm text-neutral-500 dark:text-neutral-400">
                                                        PostgreSQL </span> </a><a href="https://www.mongodb.com/"
                                                    target="_blank"
                                                    class="w-fit px-3 py-2 group rounded border d-flex gap-2 items-center border-neutral-200 dark:border-neutral-700 hover:bg-neutral-100 hover:dark:bg-neutral-800 blend">
                                                    <img src="https://miro.medium.com/v2/resize:fit:512/1*doAg1_fMQKWFoub-6gwUiQ.png"
                                                        alt="" width="20" height="{20}"> <span
                                                        class="text-sm text-neutral-500 dark:text-neutral-400"> MongoDB
                                                    </span> </a><a href="https://redis.io/" target="_blank"
                                                    class="w-fit px-3 py-2 group rounded border d-flex gap-2 items-center border-neutral-200 dark:border-neutral-700 hover:bg-neutral-100 hover:dark:bg-neutral-800 blend">
                                                    <img src="https://grafikart.fr/uploads/icons/redis.svg" alt=""
                                                        width="20" height="{20}"> <span
                                                        class="text-sm text-neutral-500 dark:text-neutral-400"> Redis
                                                    </span> </a> </div>
                                        </div>
                                        <div class="p-6"></div>
                                        <div class="grow w-14 h-14 width-50percentence">
                                            <p class="mb-6 text-base text-neutral-900 dark:text-neutral-400">DevOps
                                                &amp; Cloud</p>
                                            <div class="flex-tech d-flex flex-wrap items-center gap-2"> <a
                                                    href="https://azure.microsoft.com/" target="_blank"
                                                    class="w-fit px-3 py-2 group rounded border d-flex gap-2 items-center border-neutral-200 dark:border-neutral-700 hover:bg-neutral-100 hover:dark:bg-neutral-800 blend">
                                                    <img src="https://upload.wikimedia.org/wikipedia/fr/b/b6/Microsoft-Azure.png"
                                                        alt="" width="20" height="{20}"> <span
                                                        class="text-sm text-neutral-500 dark:text-neutral-400"> Azure
                                                    </span> </a><a href="https://aws.amazon.com/" target="_blank"
                                                    class="w-fit px-3 py-2 group rounded border d-flex gap-2 items-center border-neutral-200 dark:border-neutral-700 hover:bg-neutral-100 hover:dark:bg-neutral-800 blend">
                                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/93/Amazon_Web_Services_Logo.svg/2560px-Amazon_Web_Services_Logo.svg.png"
                                                        alt="" width="20" height="{20}"> <span
                                                        class="text-sm text-neutral-500 dark:text-neutral-400"> AWS
                                                    </span> </a><a href="https://www.docker.com/" target="_blank"
                                                    class="w-fit px-3 py-2 group rounded border d-flex gap-2 items-center border-neutral-200 dark:border-neutral-700 hover:bg-neutral-100 hover:dark:bg-neutral-800 blend">
                                                    <img src="https://cdn4.iconfinder.com/data/icons/logos-and-brands/512/97_Docker_logo_logos-512.png"
                                                        alt="" width="20" height="{20}"> <span
                                                        class="text-sm text-neutral-500 dark:text-neutral-400"> Docker
                                                    </span> </a><a href="https://kubernetes.io/" target="_blank"
                                                    class="w-fit px-3 py-2 group rounded border d-flex gap-2 items-center border-neutral-200 dark:border-neutral-700 hover:bg-neutral-100 hover:dark:bg-neutral-800 blend">
                                                    <img src="https://static-00.iconduck.com/assets.00/kubernetes-icon-2048x1995-r1q3f8n7.png"
                                                        alt="" width="20" height="{20}"> <span
                                                        class="text-sm text-neutral-500 dark:text-neutral-400">
                                                        Kubernetes </span> </a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Section -->

            <!-- Single Section -->
            <div class="panel overflow-hidden bg-gradient">
                <div class="container overflow-hidden">
                    <div class="expertise-area text-center">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="site-title">
                                    <h4 class="sub-title">Notre expertise </h4>
                                    <h2 class="title">Meilleur fournisseur de solutions</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="achivement-skill-items">
                                    <!-- Progress Bar Start -->
                                    <div class="progress-box">
                                        <h5>Langage de programmation</h5>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" data-width="79">
                                                <span>79%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-box">
                                        <h5>Développement back-end</h5>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" data-width="95">
                                                <span>95%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-box">
                                        <h5>Product Design</h5>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" data-width="80">
                                                <span>80%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Progressbar -->
                                    <div class="progress-box">
                                        <h5>UI/UX</h5>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" data-width="95">
                                                <span>95%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Progressbar -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Section -->

            <!-- Single Section -->
            <div class="panel contact-panel overflow-hidden">
                <div class="contact-panel-bg"
                    style="background-image: url(assets/img/employee-working-marketing-setting.jpg);"></div>
                <div class="container overflow-hidden">
                    <div class="row">
                        <div class="col-lg-6">
                            <h4 class="sub-title">Avez-vous un projet en tête ?
                            </h4>
                            <h2 class="title">Pour une assistance instantanée, veuillez nous contacter</h2>
                            <a class="btn-round-animation dark mt-40" href="{{ url('/contact') }}">Envoyer un mail <i
                                    class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Section -->

        </div>
    </div>
    <!-- End Slide Section -->

    <!-- Start Blog
                                                                                                                                                            ============================================= -->
    <div class="blog-area home-blog default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4 class="sub-title">Actualités & événements</h4>
                        <h2 class="title">Derniers articles du blog
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($posts as $post)
                    <!-- Single Item -->
                    <div class="col-xl-6 col-md-6 mb-30">
                        <div class="home-blog-style-one">
                            <div class="thumb">
                                <a href="{{ url('/blogs', $post->slug) }}"><img src="storage/{{ $post->image }}"
                                        alt="Image Not Found"></a>
                            </div>
                            <div class="info">
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <a href="#">Admin</a>
                                        </li>
                                        <li>
                                            {{ $post->created_at->locale('fr')->format('d M Y') }}
                                        </li>
                                    </ul>
                                </div>
                                <h4 class="post-title"><a
                                        href="{{ url('/blogs', $post->slug) }}">{{ $post->title }}</a></h4>
                                <a href="{{ url('/blogs', $post->slug) }}" class="button-regular">
                                    Continuer la lecture <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                @endforeach
            </div>
        </div>
    </div>
    <!-- End Blog -->
@endsection

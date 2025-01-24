@extends('components.layout.main')

@section('title', 'Wave Tech Team - Crafting Innovative Digital')

@section('content')


    <div class="breadcrumb-area bg-gray">
        <div class="container">
            <div class="breadcrumb-item pb-120">
                <div class="breadcrum-shape">
                    <img src="assets/img/shape/bg-shape-3.png" alt="shape">
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li><a href="#"><i class="fas fa-home"></i> Accueil</a></li>
                                <li class="active">Services</li>
                            </ol>
                        </nav>
                        <h1>Services populaires</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

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

    <div class="services-style-three-area bg-dark-secondary text-light overflow-hidden default-padding">

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
                                                <strong class="btn-animation"><i class="fas fa-arrow-right"></i> <span>Voir
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

    <!-- Start Award
                                                                                                                                                                                                    ============================================= -->
    <div class="award-area default-padding overflow-hidden bg-dark">
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
                    <div class="relative max-w-4xl mx-auto px-5 sm:px-0 md:px-5 lg:px-0 text-light">
                        <div class="space-y-4">
                            <div class="d-flex h-28">
                                <div class="grow w-14 h-14 width-50percentence">
                                    <p class="mb-6 text-base text-neutral-900 dark:text-neutral-400">
                                        Développement Front-End</p>
                                    <div class="flex-tech d-flex flex-wrap items-center gap-2"> <a href="https://react.dev/"
                                            target="_blank"
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
                                                TypeScript </span> </a><a href="https://angular.dev/" target="_blank"
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
                                            </span> </a><a href="https://helpx.adobe.com/support/xd.html" target="_blank"
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
                                            <img src="https://pipedream.com/s.v0/app_1YMhwo/logo/orig" alt=""
                                                width="20" height="{20}"> <span
                                                class="text-sm text-neutral-500 dark:text-neutral-400"> MySQL
                                            </span> </a><a href="https://www.postgresql.org/" target="_blank"
                                            class="w-fit px-3 py-2 group rounded border d-flex gap-2 items-center border-neutral-200 dark:border-neutral-700 hover:bg-neutral-100 hover:dark:bg-neutral-800 blend">
                                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/29/Postgresql_elephant.svg/640px-Postgresql_elephant.svg.png"
                                                alt="" width="20" height="{20}"> <span
                                                class="text-sm text-neutral-500 dark:text-neutral-400">
                                                PostgreSQL </span> </a><a href="https://www.mongodb.com/" target="_blank"
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

    <!-- Start Testimonial Area
                                                                                                                                                                                                    ============================================= -->
    {{-- <div class="testimonial-style-one-area default-padding-top">

        <div class="container">
            <div class="heading-left">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="content-left">
                            <h4 class="sub-title">Testimonials</h4>
                            <h2 class="title">What people say</h2>
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
                                            <span>Senior Consultant</span>
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
                                            wrote cause her way spite. Plan upon yet way get cold spot its week. Almost do
                                            am or limits hearts. Resolve parties but why she shewing. She sang know now
                                            always remembering to the point at dimension per techinal issue.
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
                                            wrote cause her way spite. Plan upon yet way get cold spot its week. Almost do
                                            am or limits hearts. Resolve parties but why she shewing. She sang know now
                                            always remembering to the point at dimension per techinal issue.
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
                                            wrote cause her way spite. Plan upon yet way get cold spot its week. Almost do
                                            am or limits hearts. Resolve parties but why she shewing. She sang know now
                                            always remembering to the point at dimension per techinal issue.
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

@endsection

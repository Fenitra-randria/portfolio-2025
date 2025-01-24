@extends('components.layout.main')

@section('title', 'Wave Tech Team - Crafting Innovative Digital')

@section('content')


    <!-- Start Breadcrumb
                                                                                                                                                                                        ============================================= -->
    <div class="breadcrumb-area bg-gray bg-cover">
        <div class="container">
            <div class="breadcrumb-item">
                <div class="breadcrum-shape">
                    <img src="assets/img/shape/bg-shape-3.png" alt="shape">
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li><a href="#"><i class="fas fa-home"></i> Accueil</a></li>
                                <li class="active">A propos</li>
                            </ol>
                        </nav>
                        <h1>A propos</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start About
                                                                                                                                                                                        ============================================= -->
    <div class="about-area default-padding relative">
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

    <!-- Start Clients Area
                                                                                                                                                                                        ============================================= -->
    {{-- <div class="clietns-area default-padding-bottom bg-dark-secondary text-light">
        <div class="container">
            <div class="client-items">
                <div class="row align-center">
                    <div class="col-lg-5">
                        <h5>Rejoignez plus de 40 000 entreprises dans le monde.</h5>
                        <h2 class="title">Fonctionne parfaitement avec les meilleures plateformes</h2>
                        <a class="btn mt-25 btn-gradient btn-sm" href="{{ url('/contact') }}">Rejoignez-nous</a>
                    </div>
                    <div class="col-lg-7">
                        <div class="client-item-box">
                            <div class="partner-box">
                                <div class="item">
                                    <img src="assets/img/icon/atlassian.png" alt="Image Not Found">
                                </div>
                                <div class="item">
                                    <img src="assets/img/icon/figma.png" alt="Image Not Found">
                                </div>
                                <div class="item">
                                    <img src="assets/img/icon/react.png" alt="Image Not Found">
                                </div>
                                <div class="item">
                                    <img src="assets/img/icon/wordpress.png" alt="Image Not Found">
                                </div>
                            </div>
                            <div class="partner-box">
                                <div class="item">
                                    <i class="fab fa-digital-ocean"></i>
                                </div>
                                <div class="item">
                                    <i class="fab fa-reddit"></i>
                                </div>
                                <div class="item">
                                    <i class="fab fa-dropbox"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- End Clients Area -->

    <!-- Start Team Members
                                                                                                                                                                                        ============================================= -->
    <div class="team-style-one-area bg-cover default-padding bottom-less"
        style="background-image: url(assets/img/shape/10.png);">

        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4 class="sub-title">Membres de l'équipe</h4>
                        <h2 class="title">Rencontrez nos experts</h2>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <!-- Single Item -->
                <div class="col-xl-3 col-md-6 mb-30 wow fadeInUp">
                    <div class="team-style-one">
                        <div class="thumb">
                            <img src="assets/img/teams/fenitra.png" alt="Image Not Found">
                            <ul class="social">
                                {{-- <li class="facebook">
                                    <a href="https://www.facebook.com/people/Wave-Tech-Team/61554723864028/">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li> --}}
                                <li class="linkedin">
                                    <a
                                        href="https://www.linkedin.com/in/aro-fenitra-randriamihajanirina-developpeur-angular-reactjs-vuejs/">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="content">
                            <a href="#"><i class="fas fa-comment-alt-lines"></i></a>
                            <div class="info">
                                <h4><a href="#">Aro Fenitra</a></h4>
                                <span>Développeur Fullstack Senior</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-xl-3 col-md-6 mb-30 wow fadeInUp" data-wow-delay="300ms">
                    <div class="team-style-one">
                        <div class="thumb">
                            <img src="assets/img/teams/mahefa.jpeg" alt="Image Not Found">
                            <ul class="social">
                                {{-- <li class="facebook">
                                    <a href="https://www.facebook.com/people/Wave-Tech-Team/61554723864028/">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li> --}}
                                <li class="linkedin">
                                    <a href="https://www.linkedin.com/in/mahefa-andriamihaja-b19319211/">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="content">
                            <a href="#"><i class="fas fa-comment-alt-lines"></i></a>
                            <div class="info">
                                <h4><a href="#">Mahefa Martinot</a></h4>
                                <span>Designer UI/UX & Développeur Front-end</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-xl-3 col-md-6 mb-30 wow fadeInUp" data-wow-delay="500ms">
                    <div class="team-style-one">
                        <div class="thumb">
                            <img src="assets/img/teams/nirilanto.jpeg" alt="Image Not Found">
                            <ul class="social">
                                {{-- <li class="facebook">
                                    <a href="https://www.facebook.com/people/Wave-Tech-Team/61554723864028/">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li> --}}
                                <li class="linkedin">
                                    <a href="https://www.linkedin.com/in/venerand-nirilanto-36294a15b">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="content">
                            <a href="#"><i class="fas fa-comment-alt-lines"></i></a>
                            <div class="info">
                                <h4><a href="#">Nirilanto Venerand</a></h4>
                                <span>Développeur Fullstack Senior</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-xl-3 col-md-6 mb-30 wow fadeInLeft" data-wow-delay="700ms">
                    <div class="team-style-one">
                        <div class="thumb">
                            <img src="assets/img/teams/sanda.jpeg" alt="Image Not Found">
                            <ul class="social">
                                {{-- <li class="facebook">
                                    <a href="https://www.facebook.com/people/Wave-Tech-Team/61554723864028/">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li> --}}
                                <li class="linkedin">
                                    <a href="https://mg.linkedin.com/in/sanda-lalaina-antsanombana-a1aa25299">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="content">
                            <a href="#"><i class="fas fa-comment-alt-lines"></i></a>
                            <div class="info">
                                <h4><a href="#">Sanda Lalaina</a></h4>
                                <span>Marketing Digital</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
            </div>
        </div>
    </div>
    <!-- End Team Members -->

@endsection

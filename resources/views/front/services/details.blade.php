@extends('components.layout.main')

@section('title', 'Wave Tech Team - Crafting Innovative Digital')

@section('content')


    <!-- Start Breadcrumb
                                            ============================================= -->
    <div class="breadcrumb-area bg-gray">
        <div class="container">
            <div class="breadcrumb-item">
                <div class="breadcrum-shape">
                    <img src="{{ asset('assets/img/shape/bg-shape-3.png') }}" alt="shape">
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                                <li class="active">Service</li>
                            </ol>
                        </nav>
                        <h1>Turn Information <br> Into Actionable Insights</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Star Services Details Area
                                            ============================================= -->
    <div class="services-details-area default-padding">
        <div class="container">
            <div class="services-details-items">
                <div class="row">

                    <div class="col-xl-8 col-lg-7 pr-45 pr-md-15 pr-xs-15 services-single-content">
                        <div class="service-single-thumb">
                            <img src="{{ asset('assets/img/1500x800.png') }}" alt="Thumb">
                        </div>
                        <h2>Best influencer marketing services</h2>
                        <p>
                            We denounce with righteous indige nation and dislike men who are so beguiled and demo realized
                            by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain
                            and trouble that are bound to ensue cannot foresee. These cases are perfectly simple and easy to
                            distinguish. In a free hour, when our power of choice is untrammelled data structures manages
                            data in technology.
                        </p>
                        <div class="features mt-40 mt-xs-30 mb-30 mb-xs-20">
                            <div class="row">
                                <div class="col-lg-5 col-md-6">
                                    <div class="content">
                                        <h3>Included Services</h3>
                                        <ul class="feature-list-item">
                                            <li>Monthly SEO Task</li>
                                            <li>24/7 Alltime Supporting</li>
                                            <li>Turbo Boosting</li>
                                            <li>Expert Team Members</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-6 mt-xs-30">
                                    <div class="content">
                                        <h3>The Challange</h3>
                                        <p>
                                            Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus
                                            saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.
                                            Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
                                            voluptatibus maiores alias. consequatur aut perferendis doloribus.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3>What we do?</h3>
                        <p>
                            Nam libero tempore, cum soluta nobis est elig endi optio cumque nihil impedit quo minus id quod
                            maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repelle ndus.
                            Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et
                            voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a
                            sapiente delectus, ut aut reiciendis voluptatibus maiores alias. consequatur aut perferendis
                            doloribus asperiores repellat. The wise man therefore always holds in these matters to this
                            principle of selection: he rejects pleasures to secure other greater pleasures, or else he
                            endures pains to avoid worse pains. pleasures have to be repudiated and annoyances accepted.
                        </p>


                        <div class="faq-style-one faq-style-two mt-40">
                            <h2 class="mb-30">Any Questions find here.</h2>
                            <div class="accordion" id="faqAccordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Business Innovation
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            <p>
                                                Bennings appetite disposed me an at subjects an. To no indulgence diminution
                                                so discovered mr apartments. Are off under folly death wrote cause her way
                                                spite. Plan upon yet way.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Search Engine Optimization
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            <p>
                                                Cennings appetite disposed me an at subjects an. To no indulgence diminution
                                                so discovered mr apartments. Are off under folly death wrote cause her way
                                                spite. Plan upon yet way.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            Thinking Differently
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            <p>
                                                Tennings appetite disposed me an at subjects an. To no indulgence diminution
                                                so discovered mr apartments. Are off under folly death wrote cause her way
                                                spite. Plan upon yet way.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-5 mt-md-50 mt-xs-50 pl-30 pl-md-15 pl-xs-15 services-sidebar">
                        <!-- Single Widget -->
                        <div class="single-widget services-list-widget">
                            <h4 class="widget-title">Services</h4>
                            <ul class="text-light">
                                <li><a href="{{ url('services/xyz') }}"> Brand Creation <i
                                            class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="current-item"><a href="{{ url('services/xyz') }}"> Web Campaigns <i
                                            class="fas fa-arrow-right"></i></a></li>
                                <li><a href="{{ url('services/xyz') }}">Creative Strategy <i
                                            class="fas fa-arrow-right"></i></a>
                                </li>
                                <li><a href="{{ url('services/xyz') }}">Brand strategy <i
                                            class="fas fa-arrow-right"></i></a>
                                </li>
                                <li><a href="{{ url('services/xyz') }}">Components developing <i
                                            class="fas fa-arrow-right"></i></a></li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                        <div class="single-widget quick-contact-widget bg-gradient text-light">
                            <div class="content">
                                <h3>Need Help?</h3>
                                <p>
                                    Speak with a human to filling out a form? call corporate office and we will connect.
                                </p>
                                <h2>+(012) 6679545</h2>
                                <h4><a href="mailto:info@digital.com">info@digital.com</a></h4>
                                <a class="btn mt-30 btn-sm circle btn-light effect" href="{{ url('/contact') }}">Contact
                                    Now</a>
                            </div>
                        </div>
                        <!-- Single Widget -->
                        <div class="single-widget widget-brochure">
                            <h4 class="widget-title">Brochure</h4>
                            <ul>
                                <li><a href="#"><i class="fas fa-file-pdf"></i> Download Brochure </a></li>
                                {{-- <li><a href="#"><i class="fas fa-file-pdf"></i> Company Details </a></li> --}}
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Services Details Area -->

    <!-- Start Pricing
                                                                                                                                                    ============================================= -->
    <div class="pricing-style-one-area default-padding">
        <div class="shape-left-top">
            <img src="{{ asset('assets/img/shape/11.png') }}" alt="Image Not Found">
        </div>
        <div class="container">
            <div class="pricing-items">
                <div class="row align-center">
                    <div class="col-xl-5 col-lg-4">
                        <h4 class="sub-title">Meilleur prix
                        </h4>
                        <h2 class="title">Prix ​​abordable. <br> - commander maintenant</h2>
                        <p>
                            Chez Wave Tech Team, nous offrons des solutions digitales de qualité supérieure à des tarifs
                            compétitifs. Profitez de nos services web et mobiles adaptés à votre budget sans compromettre
                            l'excellence.
                        </p>
                        <h5>Commandez maintenant et transformez vos <strong>idées</strong> en <strong>réalité</strong> !
                        </h5>
                    </div>
                    <div class="col-xl-6 offset-xl-1 col-lg-7 offset-lg-1">
                        <div class="pricing-style-one">
                            <div class="left">
                                <h4>Vitrine</h4>
                                <span>Un site vitrine à partie de</span>
                                <a class="btn mt-25 btn-sm circle btn-border light" href="{{ url('/contact') }}">Commander
                                </a>
                            </div>
                            <div class="right">
                                {{-- <ul>
                                    <li>Nombre de liens entrants
                                    </li>
                                    <li>Vitesse du site</li>
                                    <li>Utilisation des mots clés
                                    </li>
                                </ul> --}}
                                <h2><sup>$</sup>150</h2>
                            </div>
                        </div>
                        <div class="pricing-style-one active">
                            <div class="left">
                                <h4>E-commerce</h4>
                                <span>Une boutique en ligne avec plus de 6 pages, seulement à partie de

                                </span>
                                <a class="btn mt-25 btn-sm circle btn-border light"
                                    href="{{ url('/contact') }}">Commander
                                </a>
                            </div>
                            <div class="right">
                                {{-- <ul>
                                    <li>Nombre de liens entrants
                                    </li>
                                    <li>Vitesse du site</li>
                                    <li>Utilisation des mots clés
                                    </li>
                                </ul> --}}
                                <h2><sup>$</sup>580</h2>
                            </div>
                        </div>
                        <div class="pricing-style-one">
                            <div class="left">
                                <h4>Sur mesure</h4>
                                <span>Un site sur mesure seulement à partie de</span>
                                <a class="btn mt-25 btn-sm circle btn-border light"
                                    href="{{ url('/contact') }}">Commander
                                </a>
                            </div>
                            <div class="right">
                                {{-- <ul>
                                    <li>Nombre de liens entrants
                                    </li>
                                    <li>Vitesse du site</li>
                                    <li>Utilisation des mots clés
                                    </li>
                                </ul> --}}
                                <h2><sup>$</sup>860</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Pricing -->

@endsection

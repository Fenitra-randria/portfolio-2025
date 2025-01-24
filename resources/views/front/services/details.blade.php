@extends('components.layout.main')

@section('title', $service->seo_title ? $service->seo_title : 'Wave Tech Team - Crafting Innovative Digital')

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
                        <h1>{{ $service->title }}</h1>
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
                            <img src="/storage/{{ $service->image }}" alt="Thumb">
                        </div>
                        {!! $service->body !!}


                        {{-- <div class="faq-style-one faq-style-two mt-40">
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
                        </div> --}}
                    </div>

                    <div class="col-xl-4 col-lg-5 mt-md-50 mt-xs-50 pl-30 pl-md-15 pl-xs-15 services-sidebar">
                        <!-- Single Widget -->
                        @if (!$recentServices->isEmpty())
                            <div class="single-widget services-list-widget">
                                <h4 class="widget-title">Services</h4>
                                <ul class="text-light">
                                    @foreach ($recentServices as $service)
                                        <li>
                                            <div class="thumb">
                                                <a href="{{ url('/services', $service->slug) }}">
                                                    <img src="/storage/{{ $service->image }}" alt="Thumb">
                                                </a>
                                            </div>
                                            <div class="info">
                                                <div class="meta-title">
                                                    <span
                                                        class="service-date">{{ $service->created_at->locale('fr')->format('d M Y') }}</span>
                                                </div>
                                                <a href="{{ url('/services', $service->slug) }}"
                                                    class="text-light">{{ $service->title }}</a>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <!-- End Single Widget -->
                        <div class="single-widget quick-contact-widget bg-gradient text-light">
                            <div class="content">
                                <h3>Besoin d'aide ?
                                </h3>
                                <p>
                                    Parler à un humain pour remplir un formulaire ? appelez le siège social et nous nous
                                    connecterons.
                                </p>
                                <h2>+261 34 00 000 00</h2>
                                <h4><a href="mailto:info@wavetechteam.com">info@wavetechteam.com</a></h4>
                                <a class="btn mt-30 btn-sm circle btn-light effect" href="{{ url('/contact') }}">Contacter
                                    maintenant</a>
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
    <div class="pricing-style-one-area default-padding-bottom">
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
                                <h2><sup>$</sup>580</h2>
                            </div>
                        </div>
                        <div class="pricing-style-one">
                            <div class="left">
                                <h4>Sur mesure</h4>
                                <span>Un site sur mesure seulement à partie de</span>
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

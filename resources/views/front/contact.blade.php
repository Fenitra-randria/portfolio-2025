@extends('components.layout.main')

@section('title', 'Wave Tech Team - Crafting Innovative Digital')

@section('content')


    <!-- Start Breadcrumb
                ============================================= -->
    <div class="breadcrumb-area bg-gray">
        <div class="container">
            <div class="breadcrumb-item">
                <div class="breadcrum-shape">
                    <img src="assets/img/shape/bg-shape-3.png" alt="shape">
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li><a href="#"><i class="fas fa-home"></i> Acueil</a></li>
                                <li class="active">Contact</li>
                            </ol>
                        </nav>
                        <h1>Contactez-nous</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Contact Us
                ============================================= -->
    <div class="contact-area contact-page overflow-hidden default-padding">
        <div class="container">
            <div class="row">


                <div class="col-tact-stye-one col-lg-5 pr-50 pr-md-15 pr-xs-15">
                    <div class="contact-style-one-info">
                        <ul class="contact-address bg-dark text-light"
                            style="background-image: url(assets/img/shape/globe.png);">
                            <li>
                                <a class="phone-link" href="tel:+4733378901">+261 34 00 000 00</a>
                            </li>
                            <li>
                                <div class="info">
                                    <h4>Location</h4>
                                    <p>
                                        2G 22 CA <br> Ambatomaro, Madagascar
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <h4>E-mail officiel</h4>
                                    <a href="mailto:info@digital.com.com">info@wavetechteam.com</a>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <ul class="social-link">
                                        <li>
                                            <a class="facebook" href="#" target="_blank"><i
                                                    class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a class="twitter" href="#" target="_blank"><i
                                                    class="fab fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a class="linkedin" href="#" target="_blank"><i
                                                    class="fab fa-linkedin-in"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-tact-stye-one col-lg-7 pl-60 pl-md-15 pl-xs-15 mt-md-50 mt-xs-50">
                    <div class="contact-form-style-one">
                        <h4 class="sub-title">Vous avez des questions ?</h4>
                        <h2 class="title">Envoyez-nous un massage</h2>
                        <form action="assets/mail/contact.php" method="POST" class="contact-form contact-form mt-30">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="name" placeholder="Nom"
                                            type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email*"
                                            type="email">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="phone" placeholder="Télephone"
                                            type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group comments">
                                        <textarea class="form-control" id="comments" name="comments" placeholder="Parlez-nous du projet *"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="submit" name="submit" id="submit">
                                        <i class="fa fa-paper-plane"></i> Entrer en contact
                                    </button>
                                </div>
                            </div>
                            <!-- Alert Message -->
                            <div class="col-lg-12 alert-notification">
                                <div id="message" class="alert-msg"></div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Contact -->

@endsection

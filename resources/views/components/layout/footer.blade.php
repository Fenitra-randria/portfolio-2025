<footer>
    <div class="footer-box">
        <div class="container">
            <div class="f-items default-padding-bottom pt-70 pt-xs-0">
                <div class="row">
                    <!-- Singel Item -->
                    <div class="col-lg-3 col-md-6 footer-item mt-50">
                        <div class="f-item about pr-50 pr-xs-0 pr-md-0">
                            <img class="logo" src="{{ asset('assets/img/logo-light.png') }}" alt="Logo">
                            <p>
                                Wave Tech Team crée des solutions digitales innovantes en développement web, mobile,
                                référencement et rédaction, pour accompagner les entreprises dans leur
                                transformation numérique.
                            </p>
                            <div class="footer-social mt-30">
                                <ul>
                                    <li><a href="https://www.facebook.com/people/Wave-Tech-Team/61554723864028/"><i
                                                class="fab fa-facebook-f"></i></a></li>
                                    {{-- <li><a href="#"><i class="fab fa-twitter"></i></a></li> --}}
                                    <li><a href="https://www.linkedin.com/company/wave-tech-team"><i
                                                class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Singel Item -->

                    <!-- Singel Item -->
                    <div class="col-lg-3 col-md-6 mt-50 footer-item pl-50 pl-md-15 pl-xs-15">
                        <div class="f-item link">
                            <h4 class="widget-title">Entreprise</h4>
                            <ul>
                                <li>
                                    <a href="{{ url('/about-us') }}">Profil de l'entreprise</a>
                                </li>
                                <li>
                                    <a href="{{ url('/contact') }}">Centre d'aide</a>
                                </li>
                                <li>
                                    <a href="{{ url('/contact') }}">Carrière</a>
                                </li>
                                <li>
                                    <a href="{{ url('/contact') }}">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Singel Item -->

                    <!-- Singel Item -->
                    <div class="col-lg-3 col-md-6 footer-item  mt-50">
                        <div class="f-item contact">
                            <h4 class="widget-title">Coordonnées</h4>
                            <ul>
                                <li>
                                    <div class="content">
                                        <strong>Adresse:</strong>
                                        2G 22 CA Ambatomaro, Madagascar
                                    </div>
                                </li>
                                <li>
                                    <div class="content">
                                        <strong>Email:</strong>
                                        <a href="mailto:info@validtheme.com">support@wavetechteam.com</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="content">
                                        <strong>Phone:</strong>
                                        <a href="tel:2151234567">+261 00 000 00</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Singel Item -->

                    <!-- Singel Item -->
                    <div class="col-lg-3 col-md-6 footer-item mt-50">
                        <div class="f-item newsletter">
                            <h4 class="widget-title">Newsletter</h4>
                            <p>
                                Rejoignez notre liste d'abonnés pour recevoir instantanément les dernières nouvelles
                                et offres spéciales.
                            </p>
                            <form action="#">
                                <input type="email" placeholder="Votre mail" class="form-control" name="email">
                                <button type="submit"><i class="fas fa-arrow-right"></i></button>
                            </form>
                        </div>
                    </div>
                    <!-- End Singel Item -->


                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom bg-dark text-light text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 offset-lg-3">
                        <p>
                            Copyright &copy; {{ date('Y') }} Wave Tech Team. All Rights Reserved
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </div>
</footer>

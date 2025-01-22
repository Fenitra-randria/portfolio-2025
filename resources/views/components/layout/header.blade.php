<!-- Header
    ============================================= -->
<header>
    <!-- Start Navigation -->
    <nav class="navbar mobile-sidenav navbar-sticky navbar-default validnavs navbar-fixed no-background">


        <div class="container d-flex justify-content-between align-items-center">


            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('assets/img/logo-light.png') }}" class="logo" alt="Logo">
                </a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">

                <img src="{{ asset('assets/img/logo-light.png') }}" alt="Logo">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-times"></i>
                </button>

                <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
                    <li>
                        <a href="{{ url('/') }}" class="active">Accueil</a>
                    </li>
                    <li>
                        <a href="{{ url('/about-us') }}">A propos</a>
                    </li>
                    {{-- <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Notre agence</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('/about-us') }}">A propos</a></li>
                            <li><a href="team.html">Stratégie</a></li>
                            <li><a href="team-details.html">Engagement</a></li>
                        </ul>
                    </li> --}}
                    <li>
                        <a href="{{ url('/services') }}">Services</a>
                    </li>
                    <li>
                        <a href="{{ url('/blogs') }}">Blogs</a>
                    </li>
                    <li><a href="{{ url('/contact') }}">contact</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->

            <div class="attr-right">
                <!-- Start Atribute Navigation -->
                <div class="attr-nav flex">
                    <ul>
                        <li class="side-menu">
                            <a href="#">
                                <span class="bar-1"></span>
                                <span class="bar-2"></span>
                                <span class="bar-3"></span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->


                <!-- Start Side Menu -->
                <div class="side">
                    <a href="#" class="close-side"><i class="fas fa-times"></i></a>
                    <div class="widget">
                        <div class="logo">
                            <img src="{{ asset('assets/img/logo-light.png') }}" alt="Logo">
                        </div>
                    </div>
                    <div class="widget">
                        <p>

                            Wave Tech Team est une entreprise innovante spécialisée dans la création de solutions
                            numériques sur mesure. Nous concevons des logiciels, des applications web et mobiles,
                            offrant des expériences digitales intuitives et performantes. Notre objectif est de
                            transformer vos idées en produits numériques qui soutiennent la croissance et
                            l'innovation.
                        </p>
                    </div>
                    <div class="widget address">
                        <div>
                            <ul>
                                <li>
                                    <div class="content">
                                        <p>Address</p>
                                        <strong>2G 22 CA Ambatomaro, Madagascar</strong>
                                    </div>
                                </li>
                                <li>
                                    <div class="content">
                                        <p>Email</p>
                                        <strong>support@wavetechteam.com</strong>
                                    </div>
                                </li>
                                <li>
                                    <div class="content">
                                        <p>Contact</p>
                                        <strong>+261-34-00-000-00</strong>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="widget newsletter">
                        <h4 class="title">Abonnez-vous !</h4>
                        <form action="#">
                            <div class="input-group stylish-input-group">
                                <input type="email" placeholder="Entrer votre mail" class="form-control"
                                    name="email">
                                <span class="input-group-addon">
                                    <button type="submit">
                                        <i class="fas fa-arrow-right"></i>
                                    </button>
                                </span>
                            </div>
                        </form>
                    </div>
                    <div class="widget social">
                        <ul class="link">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-behance"></i></a></li>
                        </ul>
                    </div>

                </div>
                <!-- End Side Menu -->

            </div>
            <!-- Main Nav -->

        </div>
        <!-- Overlay screen for menu -->
        <div class="overlay-screen"></div>
        <!-- End Overlay screen for menu -->
    </nav>
    <!-- End Navigation -->
</header>
<!-- End Header -->

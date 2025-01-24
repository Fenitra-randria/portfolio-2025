@extends('components.layout.main')

@section('title', $post->seo_title ? $post->seo_title : 'Wave Tech Team - Crafting Innovative Digital')

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
                                <li><a href="#">Blogs</a></li>
                                <li class="active">{{ $post->title }}</li>
                            </ol>
                        </nav>
                        <h1>{{ $post->title }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog
                                                                                                                                                                                                                                                                                                            ============================================= -->
    <div class="blog-area single full-blog right-sidebar full-blog default-padding">
        <div class="container">
            <div class="blog-items">
                <div class="row">
                    <div class="blog-content col-xl-8 col-lg-7 col-md-12 pr-35 pr-md-15 pl-md-15 pr-xs-15 pl-xs-15">
                        <div class="blog-style-one item">

                            <div class="blog-item-box">

                                <div class="thumb">
                                    <a href="{{ url('/blogs', $post->slug) }}"><img src="/storage/{{ $post->image }}"
                                            alt="Thumb"></a>
                                </div>
                                <div class="info">
                                    <div class="meta">
                                        <ul>
                                            <li>
                                                <i class="fas fa-user"></i> <a href="#">Admin</a>
                                            </li>
                                            <li>
                                                <i class="fas fa-calendar-alt"></i>
                                                {{ $post->created_at->locale('fr')->format('d M Y') }}
                                            </li>
                                        </ul>
                                    </div>
                                    {!! $post->body !!}
                                </div>
                            </div>
                        </div>

                        <!-- Post Author -->
                        {{-- <div class="post-author">
                            <div class="thumb">
                                <img src="{{ asset('assets/img/800x800.png') }}" alt="Thumb">
                            </div>
                            <div class="info">
                                <h4>Admin</h4>
                                <p>
                                    Grursus mal suada faci lisis Lorem ipsum dolarorit more ametion consectetur elit. Vesti
                                    at bulum nec at odio aea the dumm ipsumm ipsum that dolocons rsus mal suada and
                                    fadolorit to the consectetur elit. All the Lorem Ipsum generators on the Internet tend.
                                </p>
                            </div>
                        </div> --}}
                        <!-- Post Author -->

                        <!-- Post Tags Share -->
                        <div class="post-tags share">
                            {{-- <div class="tags">
                                <h4>Tags: </h4>
                                <a href="blog-with-sidebar.html">Algorithm</a>
                                <a href="blog-with-sidebar.html">Data science</a>
                            </div> --}}
                            <div></div>

                            <div class="social">
                                <h4>Partagé:</h4>
                                <ul>
                                    <li>
                                        <a class="facebook"
                                            href="https://www.facebook.com/people/Wave-Tech-Team/61554723864028/"
                                            target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    {{-- <li>
                                        <a class="twitter" href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a class="pinterest" href="#" target="_blank"><i
                                                class="fab fa-pinterest-p"></i></a>
                                    </li> --}}
                                    <li>
                                        <a class="linkedin" href="https://www.linkedin.com/company/wave-tech-team"
                                            target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                </ul><!-- End Social Share -->
                            </div>
                        </div>
                        <!-- Post Tags Share -->

                        <!-- Start Post Pagination -->
                        {{-- <div class="post-pagi-area">
                            <div class="post-previous">
                                <a href="{{ url('/blogs', $post->slug) }}">
                                    <div class="icon"><i class="fas fa-angle-double-left"></i></div>
                                    <div class="nav-title"> Previus Post <h5>Discovery incommode</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="post-next">
                                <a href="{{ url('/blogs', $post->slug) }}">
                                    <div class="nav-title">Next Post <h5>Discovery incommode</h5>
                                    </div>
                                    <div class="icon"><i class="fas fa-angle-double-right"></i></div>
                                </a>
                            </div>
                        </div> --}}
                        <!-- End Post Pagination -->

                        <!-- Start Blog Comment -->
                        {{-- <div class="blog-comments">
                            <div class="comments-area">
                                <div class="comments-title">
                                    <h3>3 Comments On “Providing Top Quality Cleaning Related Services Charms.”</h3>
                                    <div class="comments-list">
                                        <div class="comment-item">
                                            <div class="avatar">
                                                <img src="{{ asset('assets/img/800x800.png') }}" alt="Author">
                                            </div>
                                            <div class="content">
                                                <div class="title">
                                                    <h5>Bubhan Prova <span class="reply"><a href="#"><i
                                                                    class="fas fa-reply"></i> Reply</a></span></h5>
                                                    <span>28 Feb, 2022</span>
                                                </div>
                                                <p>
                                                    Delivered ye sportsmen zealously arranging frankness estimable as. Nay
                                                    any article enabled musical shyness yet sixteen yet blushes. Entire its
                                                    the did figure wonder off. sportsmen zealously arranging to the main
                                                    pint. Discourse unwilling am no described dejection incommode no
                                                    listening of. Before nature his parish boy.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="comment-item reply">
                                            <div class="avatar">
                                                <img src="{{ asset('assets/img/800x800.png') }}" alt="Author">
                                            </div>
                                            <div class="content">
                                                <div class="title">
                                                    <h5>Mickel Jones <span class="reply"><a href="#"><i
                                                                    class="fas fa-reply"></i> Reply</a></span></h5>
                                                    <span>15 Mar, 2022</span>
                                                </div>
                                                <p>
                                                    Delivered ye sportsmen zealously arranging frankness estimable as. Nay
                                                    any article enabled musical shyness yet sixteen yet blushes. Entire its
                                                    the did figure wonder off. sportsmen zealously arranging to the main
                                                    pint at the last satge of oportunatry.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="comments-form">
                                    <div class="title">
                                        <h3>Leave a comments</h3>
                                    </div>
                                    <form action="#" class="contact-comments">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <!-- Name -->
                                                    <input name="name" class="form-control" placeholder="Name *"
                                                        type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <!-- Email -->
                                                    <input name="email" class="form-control" placeholder="Email *"
                                                        type="email">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group comments">
                                                    <!-- Comment -->
                                                    <textarea class="form-control" placeholder="Comment"></textarea>
                                                </div>
                                                <div class="form-group full-width submit">
                                                    <button class="btn dark border" type="submit">Post Comment</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div> --}}
                        <!-- End Comments Form -->
                    </div>

                    <!-- Start Sidebar -->
                    <div class="sidebar col-xl-4 col-lg-5 col-md-12 mt-md-50 mt-xs-50">
                        <aside>
                            <div class="sidebar-item recent-post">
                                <h4 class="title">Message récent</h4>
                                <ul>
                                    @foreach ($recentPosts as $post)
                                        <li>
                                            <div class="thumb">
                                                <a href="{{ url('/blogs', $post->slug) }}">
                                                    <img src="/storage/{{ $post->image }}" alt="Thumb">
                                                </a>
                                            </div>
                                            <div class="info">
                                                <div class="meta-title">
                                                    <span
                                                        class="post-date">{{ $post->created_at->locale('fr')->format('d M Y') }}</span>
                                                </div>
                                                <a href="{{ url('/blogs', $post->slug) }}"
                                                    class="text-light">{{ $post->title }}</a>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="sidebar-item social-sidebar">
                                <h4 class="title">Suivez-nous</h4>
                                <div class="sidebar-info">
                                    <ul>
                                        <li class="facebook">
                                            <a href="https://www.facebook.com/people/Wave-Tech-Team/61554723864028/">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        {{-- <li class="twitter">
                                            <a href="#">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="pinterest">
                                            <a href="#">
                                                <i class="fab fa-pinterest"></i>
                                            </a>
                                        </li> --}}
                                        <li class="linkedin">
                                            <a href="https://www.linkedin.com/company/wave-tech-team">
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-item tags">
                                <h4 class="title">tags</h4>
                                <div class="sidebar-info">
                                    <ul>
                                        @foreach ($tags as $tag)
                                            <li><a href="{{ url('/blogs?tag=' . $tag->id) }}">{{ $tag->name }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <!-- End Start Sidebar -->

                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->

@endsection

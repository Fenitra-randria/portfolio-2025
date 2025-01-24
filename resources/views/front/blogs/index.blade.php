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
                                <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                                <li class="active">Blogs</li>
                            </ol>
                        </nav>
                        <h1>Actualités & événements</h1>
                        @if (request()->has('tag'))
                            <a href="{{ url('/blogs') }}" class="btn" style="margin-top: 25px;
">Réinitialiser les
                                filtres</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog
                                                                                                                                                                                                                ============================================= -->
    <div class="blog-area blog-grid-colum default-padding">
        <div class="container">
            <div class="row">
                @foreach ($posts as $post)
                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6 mb-50">
                        <div class="blog-style-one">
                            <div class="thumb">
                                <a href="{{ url('/blogs', $post->slug) }}"><img src="storage/{{ $post->image }}"
                                        alt="Image post"></a>
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
                                <h3 class="post-title"><a href="{{ url('/blogs', $post->slug) }}">{{ $post->title }}</a>
                                </h3>
                                <a href="{{ url('/blogs', $post->slug) }}" class="button-regular text-light">
                                    Continuer la lecture <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                @endforeach
                @if ($posts->isEmpty())
                    <p style="text-align: center;" class="text-light">Aucun post trouvé.</p>
                @endif
            </div>
            <!-- Pagination -->
            <div class="row">
                <div class="col-md-12 pagi-area text-center">
                    <nav aria-label="pagination">
                        <ul class="pagination">
                            <!-- Pagination Links -->
                            {{ $posts->links() }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->

@endsection

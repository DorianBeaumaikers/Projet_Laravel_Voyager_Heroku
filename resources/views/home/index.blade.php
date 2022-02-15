@extends('template.index')

@section('title')
    Home
@endsection

@section('main')
    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active" style="background-image: url({{ asset('assets/img/slides/1.jpg') }})">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content centered">
                                    <h2 class="animation animated-item-1">Welcome to BASICA! A Bootstrap3 Template</h2>
                                    <p class="animation animated-item-2">Sed mattis enim in nulla blandit tincidunt.
                                        Phasellus vel sem convallis, mattis est id, interdum augue. Integer luctus massa in
                                        arcu euismod venenatis. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.item-->
                <div class="item" style="background-image: url({{ asset('assets/img/slides/2.jpg') }})">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content center centered">
                                    <h2 class="animation animated-item-1">Powerful and Responsive HTML Template</h2>
                                    <p class="animation animated-item-2">Phasellus adipiscing felis a dictum dictum. Lorem
                                        ipsum dolor sit amet, consectetur adipiscing elit. Donec at ligula risus. </p>
                                    <br>
                                    <a class="btn btn-md animation animated-item-3" href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.item-->
                <div class="item" style="background-image: url({{ asset('assets/img/slides/3.jpg') }})">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content centered">
                                    <h2 class="animation animated-item-1">Works Seamlessly Well on All Devices</h2>
                                    <p class="animation animated-item-2">Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit. Fusce vitae euismod lacus. Maecenas in tempor lectus. Nam mattis, odio ut
                                        dapibus ornare, libero. </p>
                                    <br>
                                    <a class="btn btn-md animation animated-item-3" href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.item-->
            </div>
            <!--/.carousel-inner-->
        </div>
        <!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="icon-angle-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="icon-angle-right"></i>
        </a>
    </section>
    <!--/#main-slider-->

    <!-- Our Portfolio -->

    <div class="section section-white">
        <div class="container">
            <div class="row">

                <div class="section-title">
                    <h1>Our Recent Works</h1>
                </div>


                <ul class="grid cs-style-3">
                    @foreach ($works as $work)
                        <div class="col-md-4 col-sm-6">
                            <figure>
                                <img src="{{ asset('storage/' . $work->image) }}">
                                <figcaption>
                                    <h3>{{ $work->title }}</h3>
                                    <span>{{ $work->client->name }}</span>
                                    <a href="works/{{ $work->id }}/{{ Str::slug($work->title, '-') }}">Take a look</a>
                                </figcaption>
                            </figure>
                        </div>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <!-- Our Portfolio -->

    <hr>

    <!-- Our Articles -->
    <div class="section">
        <div class="container">
            <div class="row">
                <!-- Featured News -->
                <div class="col-sm-6 featured-news">
                    <h2>Latest Blog Posts</h2>
                    @foreach ($posts as $post)
                        <div class="row">
                            <div class="col-xs-4"><a href="blog-post.html"><img src="{{ asset('assets/img/blog/'. rand(1,4) .'.jpg') }}"
                                        alt="Post Title"></a>
                            </div>
                            <div class="col-xs-8">
                                <div class="caption"><a href="blog-post.html">{{ $post->title }}</a></div>
                                <div class="date">{{ $post->created_at->format('d F Y') }}</div>
                                <div class="intro">{{ Str::words(strip_tags($post->content), 10, ' ...') }} <a href="posts/{{ $post->id }}/{{ Str::slug($post->title, '-') }}">Read more...</a></div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- End Featured News -->


                <!-- Latest News FB -->
                <div class="col-sm-6 latest-news">
                    <h2>Lastest FaceBook/Twitter News</h2>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="caption"><a href="#">Donec elementum mi vitae enim fermentum
                                    lobortis.</a></div>
                            <div class="date">16 May 2013 </div>
                            <div class="intro">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                eiusmod tempor incididunt ut labore et. <a href="#">Read more...</a></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="caption"><a href="#">In hac habitasse platea dictumst.</a>
                            </div>
                            <div class="date">14 May 2013 </div>
                            <div class="intro">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                nisi ut aliquip ex ea commodo consequat. <a href="#">Read more...</a></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="caption"><a href="#"> Nam condimentum laoreet sagittis.</a>
                            </div>
                            <div class="date">14 May 2013 </div>
                            <div class="intro">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                nisi ut aliquip ex ea commodo consequat. <a href="#">Read more...</a></div>
                        </div>
                    </div>
                </div>
                <!-- End Featured News -->
            </div>
        </div>
    </div>
@endsection
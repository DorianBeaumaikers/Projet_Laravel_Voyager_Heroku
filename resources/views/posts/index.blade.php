@extends('template.index')

@section('title')
    Blog
@endsection

@section('main')
    <!-- Page Title -->
    <div class="section section-breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Our Blog</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                @foreach ($posts as $post)
                    <!-- Blog Post Excerpt -->
                    <div class="col-sm-6">
                        <div class="blog-post blog-single-post">
                            <div class="single-post-title">
                                <h2>{{$post->title}}</h2>
                            </div>

                            <div class="single-post-image">
                                <img src="{{ asset('assets/img/blog/1.jpg') }}">
                            </div>

                            <div class="single-post-info">
                                <i class="glyphicon glyphicon-time"></i>{{$post->created_at->format("d M, Y")}}
                            </div>

                            <div class="single-post-content">
                                <p>
                                    {{$post->content}}
                                </p>
                                <a href="../../posts/{{ $post->id }}/{{ Str::slug($post->title, '-') }}" class="btn">Read more</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Blog Post Excerpt -->
                @endforeach

                <!-- Pagination -->
                <div class="pagination-wrapper ">
                    <ul class="pagination pagination-sm">
                        <li class="disabled"><a href="#">Previous</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">Next</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
@endsection

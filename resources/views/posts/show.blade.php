@extends('template.index')

@section('title')
    {{ $post->title }}
@endsection

@section('main')
    <!-- Page Title -->
    <div class="section section-breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Blog Post</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                <!-- Blog Post -->
                <div class="col-sm-8">
                    <div class="blog-post blog-single-post">
                        <div class="single-post-title">
                            <h2>{{ $post->title }}</h2>
                        </div>

                        <div class="single-post-image">
                            <img src="{{ asset('assets/img/blog/'. rand(1,4) .'.jpg') }}">
                        </div>
                        <div class="single-post-info">
                            <i class="glyphicon glyphicon-time"></i>{{$post->created_at->format("d M, Y")}}
                        </div>
                        <div class="single-post-content">
                            <h3>{{ $post->title }}</h3>
                            <p>
                                {{ strip_tags($post->content) }}
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End Blog Post -->
                <!-- Sidebar -->
                <div class="col-sm-4 blog-sidebar">

                    <h4>Recent Posts</h4>
                    <ul class="recent-posts">
                        @foreach ($posts as $post)
                            <li><a href="../../posts/{{ $post->id }}/{{ Str::slug($post->title, '-') }}">{{$post->title}}</a></li>
                        @endforeach
                    </ul>
                    <h4>Categories</h4>
                    <ul class="blog-categories">
                        @foreach ($categories as $category)
                            <li><a href="../../posts/category/{{ $category->id }}/{{ Str::slug($category->name, '-') }}">{{$category->name}}</a></li>
                        @endforeach
                    </ul>

                </div>
                <!-- End Sidebar -->
            </div>
        </div>
    </div>
@endsection

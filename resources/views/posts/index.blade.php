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
                                <img src="{{ asset('assets/img/blog/'. rand(1,4) .'.jpg') }}">
                            </div>

                            <div class="single-post-info">
                                <i class="glyphicon glyphicon-time"></i>{{$post->created_at->format("d M, Y")}}
                            </div>

                            <div class="single-post-content">
                                <p>
                                    {{strip_tags($post->content)}}
                                </p>
                                <a href="../../../../posts/{{ $post->id }}/{{ Str::slug($post->title, '-') }}" class="btn">Read more</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Blog Post Excerpt -->
                @endforeach

                <!-- Pagination -->

                <div class="pagination-wrapper ">
                    {{ $posts->links('vendor.pagination.custom') }}
                </div>
            </div>
        </div>
    </div>
@endsection

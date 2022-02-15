@extends('template.index')

@section('title')
    {{ $work->title }}
@endsection

@section('main')
    <!-- Page Title -->
    <div class="section section-breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Product Details</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                <!-- Product Image & Available Colors -->
                <div class="col-sm-6">
                    <div class="product-image-large">
                        <img src="{{ asset('storage/works/' . $work->image) }}">
                    </div>
                    <div class="colors">
                        <span class="color-white"></span>
                        <span class="color-black"></span>
                        <span class="color-blue"></span>
                        <span class="color-orange"></span>
                        <span class="color-green"></span>
                    </div>
                </div>
                <!-- End Product Image & Available Colors -->
                <!-- Product Summary & Options -->
                <div class="col-sm-6 product-details">
                    <h2>{{ $work->title }}</h2>
                    <h3>Quick Overview</h3>
                    <p>
                        {{ $work->content }}
                    </p>
                    <h3>Project Details</h3>
                    <p><strong>Client: </strong>{{ $work->client->name }}</p>
                    <p><strong>Date: </strong>{{ $work->created_at->format('F d, Y') }}</p>
                    <p><strong>Tags: </strong>
                        @foreach ($work->tags as $tag)
                            @if (!$loop->last)
                                {{ $tag->name }},
                            @else
                                {{ $tag->name }}
                            @endif
                        @endforeach
                    </p>
                </div>
                <!-- End Product Summary & Options -->

            </div>
        </div>
    </div>

    <hr>

    <div class="section">
        <div class="container">
            <div class="row">

                <div class="section-title">
                    <h1>Similar Works</h1>
                </div>

                <ul class="grid cs-style-2">
                    @foreach ($similarWorks as $simWork)
                        <div class="col-md-3 col-sm-6">
                            <figure>
                                <img src="{{ asset('storage/works/' . $simWork->image) }}">
                                <figcaption>
                                    <h3>{{$simWork->title}}</h3>
                                    <span>{{$simWork->client->name}}</span>
                                    <a href="../../works/{{ $simWork->id }}/{{ Str::slug($simWork->title, '-') }}">Take a look</a>
                                </figcaption>
                            </figure>
                        </div>
                    @endforeach
                </ul>


            </div>
        </div>
    </div>
@endsection

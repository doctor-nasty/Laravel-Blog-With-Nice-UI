@extends('layouts.master', ['title' => 'FiscalBulletin'])

@section('meta_keywords','Financial Tips')
@section('meta_description', 'fiscalbulletin.com')



@section("content")
{{-- @push('head')
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6234311818661757"
     crossorigin="anonymous"></script>
@endpush --}}
        <!--=       Breadcrumb Area Start       =-->
        <!--=====================================-->
        <div class="breadcrum-area breadcrumb-banner single-breadcrumb">
            {{-- <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="section-heading heading-left" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="300">
                            <div class="breadcrumb">
                                <ul class="list-unstyled">
                                    <li><a href="/">Home</a></li>
                                    <li class="active">Blog</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div> --}}
            <ul class="shape-group-8 list-unstyled">
                <li class="shape shape-1" data-sal="slide-right" data-sal-duration="500" data-sal-delay="100">
                    <img src="{{ asset('assets/media/others/bubble-9.png') }}" alt="Bubble">
                </li>
                <li class="shape shape-2" data-sal="slide-left" data-sal-duration="500" data-sal-delay="200">
                    <img src="{{ asset('assets/media/others/bubble-20.png') }}" alt="Bubble">
                </li>
                <li class="shape shape-3" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300">
                    <img src="{{ asset('assets/media/others/line-4.png') }}" alt="Line">
                </li>
            </ul>
        </div>


<section class="section">
    <div class="container">
        <div class="row row-40">
            <div class="col-lg-8">
                @forelse($posts as $post)
                <div class="contact-form-box shadow-box mb--30">
                <div class="blog-grid">
                    <h3 class="title"><a href="{{ route('pages.blog', $post->slug) }}" title="{{ ucfirst($post->title) }}">{{ ucfirst($post->title) }}</a></h3>
                    <div class="author">
                        <div class="author-thumb">
                            <img height="80" width="80" src="{{ asset('assets/media/blog/'.$post->user->avatar) }}" alt="{{ $post->user->name }}">
                        </div>
                        <div class="info">
                            <h6 class="author-name">{{ $post->user->name }}</h6>
                            <ul class="blog-meta list-unstyled">
                                <li>{{ ucfirst($post->created_at) }}</li>
                                <li>{{ $post->category ? $post->category->name : 'Uncategorized' }}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="post-thumbnail">
                        <a href="{{ route('pages.blog', $post->slug) }}"><img src="{{ asset('images/'.$post->image) }}" alt="{{ ucfirst($post->title) }}"></a>
                    </div>
                    {{-- <p>{!! \Illuminate\Support\Str::limit($post->body,100) !!}</p> --}}
                    <p>{!! (\Illuminate\Support\Str::limit(strip_tags($post->body), 200)) !!}</p>

                    <a href="{{ route('pages.blog', $post->slug) }}" class="axil-btn btn-borderd btn-large">Read More</a>
                </div>
            </div>
                @empty
                <p class="text-warning">No blog Posts available</p>
                @endforelse


                <div class="pagination">

                        {{$posts->links("pagination::default")}}

                </div>
            </div>
            <div class="col-lg-4">
                <div class="axil-sidebar">
                    @if (Auth::check())
                    <div class="widget">
                        <a href="/create/post" class="btn btn-outline-primary">Create Post</a>
                    </div>
                    @else
                    @endif

                    <div class="contact-form-box shadow-box mb--30">
                    <div class="widget widget-search">
                        <h4 class="widget-title">Search</h4>
                        <form action="{{ route('search') }}" method="GET" class="blog-search">
                            <input name="search" type="text" placeholder="Search…" required>
                            <button class="search-button" type="submit"><i class="fal fa-search"></i></button>
                        </form>
                    </div>
                    </div>
                    <div class="contact-form-box shadow-box mb--30">
                    <div class="widget widget-categories">
                        <h4 class="widget-title">Categories</h4>
                        <ul class="category-list list-unstyled">
                            <li><a href="/">All</a></li>
                            @foreach ($categories as $category)
                            <li><a href="/categories/{{ $category->name }}">{{ $category->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    </div>
                    {{-- <div class="widget widget-banner-ad">
                        <a href="#">
                            <img src="{{ asset('assets/media/banner/widget-banner.png') }}" alt="banner">
                        </a>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

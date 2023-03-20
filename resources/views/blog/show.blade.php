@extends('layouts.master', ['title' => $title])

@section('meta_keywords', $title)
@section('meta_description', $metabody)
@section('meta_image', $metaimage)


@section("content")
@push('head')
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6234311818661757"
     crossorigin="anonymous"></script>
@endpush
        <!--=====================================-->
        <!--=       Breadcrumb Area Start       =-->
        <!--=====================================-->
        <div class="breadcrum-area">
            <div class="container">
                <div class="breadcrumb">
                    <ul class="list-unstyled">
                        <li><a href="/">Home</a></li>
                        <li class="active">{{ ucfirst($post->title) }}</li>
                    </ul>
                    <h1 class="title h3">{{ ucfirst($post->title) }}</h1>
                </div>
            </div>
            <ul class="shape-group-8 list-unstyled">
                <li class="shape shape-1" data-sal="slide-right" data-sal-duration="500" data-sal-delay="100"><img src="{{ asset('assets/media/others/bubble-9.png') }}" alt="Bubble"></li>
                <li class="shape shape-2" data-sal="slide-left" data-sal-duration="500" data-sal-delay="200"><img src="{{ asset('assets/media/others/bubble-11.png') }}" alt="Bubble"></li>
                <li class="shape shape-3" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300"><img src="{{ asset('assets/media/others/line-4.png') }}" alt="Line"></li>
            </ul>
        </div>
        <!--=====================================-->
        <!--=        Blog Area Start       	    =-->
        <!--=====================================-->
        <section class="section">
            <div class="container">
                <div class="row row-40">
                    <div class="col-lg-8">
                        <div class="contact-form-box shadow-box mb--30">

                        <div class="single-blog">
                            <div class="single-blog-content blog-grid">
                                <div class="post-thumbnail">
                                    <img src="{{ asset('images/'.$post->image) }}" alt="{{ ucfirst($post->title) }}">
                                </div>
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
                                <p>{!! $post->body !!}</p>
                                {{-- <div class="row">
                                    <div class="col-6">
                                        <div class="featured-img">
                                            <img src="{{ asset('assets/media/blog/blog-8.png') }}" alt="Blog">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="featured-img">
                                            <img src="{{ asset('assets/media/blog/blog-9.png') }}" alt="Blog">
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="blog-author">
                                <div class="author">
                                    <div class="author-thumb">
                                        <img src="{{ asset('assets/media/blog/'.$post->user->avatar) }}" alt="{{ $post->user->name }}">
                                    </div>
                                    <div class="info">
                                        <h5 class="title">{{ $post->user->name }}</h5>
                                        <p></p>
                                        {{-- <ul class="social-share list-unstyled">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                                            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                            <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                        </ul> --}}
                                    </div>
                                </div>
                            </div>
                            @include('partials.commentsDisplay', ['comments' => $post->comments, 'post_id' => $post->id])
                            <div class="blog-comment-form">
                                <h3 class="title">Leave a comment:</h3>
                                <form method="post" action="{{ route('comments.store') }}">
                                    @csrf
                                    <div class="form-group">
                                    <input type="text" class="form-control"  aria-describedby="user_id" placeholder="Enter Username" name="user_id" required>
                                    </div>
                                    <div class="form-group">
                                        <textarea placeholder="Enter Message" class="form-control" name="body"></textarea>
                                        <input type="hidden" name="id" value="{{ $post->id }}" />
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary" value="Add Comment" />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="col-lg-4">
                        <div class="axil-sidebar">
                            @if (Auth::check())

                            <div class="widget">
                                <a href="/{{ $post->slug }}/edit" class="btn btn-outline-primary">Edit Post</a>

                                <form id="delete-frm" class="" action="" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button onclick="return confirm('Are you sure you want to delete this post?');" class="btn btn-danger">Delete Post</button>
                                </form>
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
                            <div class="widget widget-recent-post">
                                <h4 class="widget-title">Recent post</h4>
                                <div class="post-list-wrap">
                                    @foreach ($posts as $post)
                                    <div class="single-post">
                                        <div class="post-thumbnail">
                                            <a href="{{ route('pages.blog', $post->slug) }}" title="{{ ucfirst($post->title) }}"><img width="80" height="100" src="{{ asset('images/'.$post->image) }}" alt="{{ ucfirst($post->title) }}"></a>
                                        </div>
                                        <div class="post-content">
                                            <h6 class="title"><a href="{{ route('pages.blog', $post->slug) }}">{{ ucfirst($post->title) }}</a></h6>
                                            <ul class="blog-meta list-unstyled">
                                                <li>{{ ucfirst($post->created_at) }}</li>
                                                <li>{{ $post->category ? $post->category->name : 'Uncategorized' }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                    @endforeach
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
        <!--=====================================-->
        <!--=       Recent Post Area Start      =-->
        <!--=====================================-->
        {{-- <section class="section section-padding-equal pt-0 related-blog-area">
            <div class="container">
                <div class="section-heading heading-left">
                    <h3 class="title">Related Post</h3>
                </div>
                <div class="slick-slider recent-post-slide" data-slick='{"infinite": true, "autoplay": true, "arrows": false, "dots": false, "slidesToShow": 2,
        "responsive": [
            {
                "breakpoint": 1199,
                "settings": {
                    "slidesToShow": 1
                }
            }
        ]
        }'>
                    <div class="slick-slide">
                        <div class="blog-list">
                            <div class="post-thumbnail">
                                <a href="single-blog.html"><img src="{{ asset('assets/media/blog/blog-1.png') }}" alt="Blog Post"></a>
                            </div>
                            <div class="post-content">
                                <h5 class="title"><a href="single-blog-2.html">How To Use a Remarketing Strategy To Get More</a></h5>
                                <p>Demand generation is a constant struggle for any business. Each marketing strategy you employ has...</p>
                                <a href="single-blog-2.html" class="more-btn">Learn more<i class="far fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section> --}}
@endsection

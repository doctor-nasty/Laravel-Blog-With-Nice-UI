@extends('layouts.master', ['title' => $title])



@section("content")
<section class="section-padding-equal">
    <div class="container">
        <div class="row row-40">
            <div class="col-lg-8">
                @forelse($posts as $post)
                <div class="blog-grid">
                    <h3 class="title"><a href="{{ route('pages.blog', $post->slug) }}">{{ ucfirst($post->title) }}</a></h3>
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
                        <a href="{{ route('pages.blog', $post->slug) }}"><img height="850" width="450" src="{{ asset('images/'.$post->image) }}" alt="{{ ucfirst($post->title) }}"></a>
                    </div>
                    <p>{!! (\Illuminate\Support\Str::limit(strip_tags($post->body), 100)) !!}</p>
                    <a href="{{ route('pages.blog', $post->slug) }}" class="axil-btn btn-borderd btn-large">Read More</a>
                </div>
                @empty
                <p class="text-warning">No blog Posts available</p>
                @endforelse


                <div class="pagination">

                        {{-- {{$posts->links("pagination::default")}} --}}

                </div>
            </div>
            <div class="col-lg-4">
                <div class="axil-sidebar">
                    <div class="widget widget-search">
                        <h4 class="widget-title">Search</h4>
                        <form action="{{ route('search') }}" method="GET" class="blog-search">
                            <input name="search" type="text" placeholder="Search…" required>
                            <button class="search-button" type="submit"><i class="fal fa-search"></i></button>
                        </form>
                    </div>
                    <div class="widget widget-categories">
                        <h4 class="widget-title">Categories</h4>
                        <ul class="category-list list-unstyled">
                            <li><a href="/">All</a></li>
                            @foreach ($categories as $category)
                            <li><a href="/categories/{{ $category->name }}">{{ $category->name }}</a></li>
                            @endforeach
                        </ul>
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

@extends('layouts.master', ['title' => 'Search'])

@section('meta_keywords','search')
@section('meta_description', 'Search Financial Tips')


@section("content")
    <section class="section">
        <div class="container">
            <div class="row row-40">

                <div class="col-lg-8">
                    @forelse ($posts as $post)
                    <div class="contact-form-box shadow-box mb--30">

                    <div class="blog-grid">
                        <h3 class="title"><a href="{{ route('pages.blog', $post->slug) }}">{{ ucfirst($post->title) }}</a></h3>
                        <div class="author">
                            <div class="author-thumb">
                                <img height="80" width="80" src="{{ asset('assets/media/blog/'.$post->user->avatar) }}" alt="Blog Author">
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
</div>

                    @empty
                <p class="text-warning">No Posts Found</p>
                @endforelse
        </div>
        <div class="col-lg-4">
                <div class="axil-sidebar">

                    <div class="contact-form-box shadow-box mb--30">
                    <div class="widget widget-search">
                        <h4 class="widget-title">Search</h4>
                        <form action="{{ route('search') }}" method="GET" class="blog-search">
                            <input name="search" type="text" value="{{Request::input('search')}}" required>
                            <button class="search-button" type="submit"><i class="fal fa-search"></i></button>
                        </form>
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
    </section>

@endsection

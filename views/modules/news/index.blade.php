@extends('layouts.master')

@section('content')
    <section id="hero" class="side-left-small">
        <div class="owl-slider hero-slider" data-autoplay="true" data-loop="true" data-dots="false">
            @foreach(News::latest(3) as $post)
                <div class="slider-item text-light">
                    <div class="bg-img" style="background-image:url('{{ $post->present()->firstImage(1680,1100,'fit',80) }}');"></div>
                    <a href="{{ $post->url }}" class="sr-button style-3 button-small read-more">{!! trans('global.buttons.read more') !!}</a>
                    <div class="owl-slider-caption">
                        <h5 class="title-alt">{{ $post->category->name }}</h5>
                        <div class="spacer-small"></div>
                        <h2 style="font-size:2rem; line-height: 2.5rem;"><strong>{{ $post->title }}</strong></h2>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section id="page-body">

        <div class="spacer-small"></div>

        <div class="wrapper">
            <div id="blog-grid" class="isotope-grid style-column-2 isotope-spaced-big">
                @foreach($posts as $post)
                    <div class="blog-item isotope-item">
                        <div class="blog-item-inner item-inner do-anim">
                            <div class="blog-media">
                                <a href="{{ $post->url }}" class="thumb-hover scale">
                                    <img src="{{ $post->present()->firstImage(600,400,'fit',80) }}" alt="{{ $post->title }}" />
                                </a>
                            </div>
                            <div class="blog-info">
                                <div class="post-meta clearfix">
                                    <span class="post-date">{{ $post->created_at->formatLocalized('%d %B %Y') }}</span>
                                    <span class="post-cat"><a href="{{ $post->category->url }}">{{ $post->category->name }}</a></span>
                                </div>
                                <h3 class="post-name" style="font-size:1.25rem;line-height: 1.50rem;"><a href="{{ $post->url }}">{{ $post->title }}</a></h3>
                                <p>{!! strip_tags($post->intro) !!}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {!! $posts->render('news::pagination.default') !!}
        </div>

    </section>
@endsection

@push('styles')
{!! Theme::style('css/owl.carousel.css') !!}
{!! Theme::style('css/mqueries.css') !!}
@endpush

@push('scripts')
{!! Theme::script('js/jquery.owl.carousel.min.js') !!}
{!! Theme::script('js/jquery.sticky-kit.min.js') !!}
@endpush
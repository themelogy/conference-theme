@extends('layouts.master')

@section('content')


    <section id="hero" class="side-left-small" style="background: url({{ $post->present()->firstImage(1680,1100,'fit',80) }}); background-position: center center; background-size: cover;">
    </section>

    <section id="page-body">
        <div id="page-title" class="wrapper align-center p-top-50 p-bot-30">
            <div class="post-name"><h1 style="font-size:3rem; letter-spacing: -0.1rem; line-height: 3rem;">{{ $post->title }}</h1></div>
            <div class="post-meta">
                <span class="post-cat"><a href="{{ $post->category->url }}">{{ $post->category->name }}</a></span>
                <span class="post-date">{{ $post->created_at->formatLocalized('%d %B %Y') }}</span>
            </div>
        </div> <!-- END #page-title -->

        <div id="blog-single">
            <div class="blog-content wrapper-small p-bot-50">
                {!! $post->content !!}
            </div>
        </div>

    </section>


@endsection


@push('scripts')
{!! Theme::script('js/jquery.owl.carousel.min.js') !!}
@endpush
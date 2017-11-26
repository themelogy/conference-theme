@extends('layouts.master')

@section('content')
    @include('partials.sections.slider')
    <section id="page-body">

        @include('partials.sections.home.slogan')

        @if(isset($home))

            @include('partials.sections.home.portfolio-grid')

            @include('partials.sections.home.slogan-with-logos')

            @include('partials.sections.home.embed-video')

            @include('partials.sections.home.start-project')
        @endif
            @include('partials.sections.home.last-news')
    </section>
@endsection
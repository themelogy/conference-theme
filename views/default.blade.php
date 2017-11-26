@extends('layouts.master')

@if(isset($page->settings->show_logo))
    @if($page->settings->show_logo)
        @section('logo')
            <img id="dark-logo" src="{{ $page->present()->firstImage(null,150,'resize',100) }}"
                 alt="{{ $page->title }}">
            <img id="light-logo" src="{{ $page->present()->firstImage(null,150,'resize',100) }}"
                 alt="{{ $page->title }}">
        @endsection
    @endif
@endif

@section('content')

    @component('partials.components.page-title', ['breadcrumb'=>'page'])
    @php $cover = $page->present()->coverImage(1200,320,'fit', 80) @endphp
    @if($cover)
        @slot('cover')
        {{ $cover }}
        @endslot
    @endif
    {{ $page->title }}
    @endcomponent

    <section id="page-body">
        <div class="container">
            <div class="row">
                <div class="col-md-12 m-top-bot-50">
                    {!! $page->body !!}
                </div>
            </div>
        </div>
    </section>
@stop

@if(isset($page->settings->title_color) && isset($page->settings->title_bg_color))
    @push('css-stack')
    <style>
        #page-title h1 {
            color: {{ $page->settings->title_color }}  !important;
            background-color: {{ $page->settings->title_bg_color }}  !important;
        }
    </style>
    @endpush
@endif
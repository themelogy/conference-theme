@extends('layouts.master')

@section('content')

    @component('partials.components.page-title', ['breadcrumb'=>'contact'])
        {{ trans('themes::contact.title') }}
    @endcomponent

    <section id="page-body">

        <div class="container">
            <div class="row m-top-bot-50">
                <div class="col-md-5">
                    <h3 style="font-size: 2rem; line-height: 2rem;">{{ setting('theme::company-name') }}</h3>
                    <p>
                        {!! setting('theme::address') !!}<br>
                        <b>T</b>: {!! setting('theme::phone') !!}<br>
                        @if(setting('theme::fax'))
                        <b>F</b>: {!! setting('theme::fax') !!}<br>
                        @endif
                        <b>E</b>: {!! Html::email(setting('theme::email')) !!}
                    </p>

                    @if(isset($footer_social))
                        @include('partials.components.socials', ['class'=>'social list-inline','icon'=>true, 'attr'=>'display:inline;list-style-type:none;'])
                    @endif

                </div>
                <div class="col-md-7">
                    @include('contact::form')
                </div>
            </div>
        </div>

        <div class="google-map" style="height:400px;">
            @gmap('300px', '16', 'img/favicon.png')
        </div>

    </section>

@endsection
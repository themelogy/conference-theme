<!doctype html>
<html class="no-js" lang="{!! locale() !!}">
<head>
    @include('partials.metadata')
</head>
<body>

@include('partials.components.preloader')

<div id="page-content">

    @include('partials.header')

    <div id="hero-and-body">
        @yield('content')
    </div>

    @include('partials.footer')

</div>

@include('partials.scripts')

</body>
</html>
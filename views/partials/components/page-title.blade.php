<section id="hero"
         class="hero-xsmall"
         style="background: url({{ $cover ?? Theme::url('img/slider/slider-2.jpg') }}); background-size: cover; background-position: center center;">

    <div id="page-title" class="wrapper">
        <h1 class="h2 white-text">{{ $slot }}</h1>
        @if(isset($breadcrumb))
            {!! Breadcrumbs::renderIfExists($breadcrumb) !!}
        @endif
    </div>
    <div class="overlay"></div>
</section>
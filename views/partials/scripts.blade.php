@stack('css-stack')

<script type="text/javascript"> WebFontConfig = {
        google: {
            families: [
                'Poppins:300,400,500:latin-ext'
            ]
        }
    };
    (function () {
        var wf = document.createElement('script');
        wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js';
        wf.type = 'text/javascript';
        wf.async = 'true';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wf, s);
    })();
</script>

{!! Theme::script('js/jquery-1.12.4.min.js') !!}
{!! Theme::script('js/plugins.js') !!}
{!! Theme::script('js/jquery.imagesloaded.min.js') !!}
{!! Theme::script('js/jquery.isotope.min.js') !!}
@stack('scripts')
{!! Theme::script('js/script.js') !!}
@stack('js-stack')

@include('partials.analytics')
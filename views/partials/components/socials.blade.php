<ul class="{{ isset($class) ? $class : '' }}">
    @if(setting('theme::facebook'))
        <li>
            <a target="_blank" href="{{ setting('theme::facebook') }}">
                @if(isset($icon))<i class="fa fa-facebook"></i>@endif
                {!! isset($title) ? ' Facebook' : '' !!}
            </a>
        </li>
    @endif
    @if(setting('theme::twitter'))
        <li>
            <a target="_blank" href="{{ setting('theme::twitter') }}">
                @if(isset($icon))<i class="fa fa-twitter"></i>@endif
                {!! isset($title) ? ' Twitter' : '' !!}
            </a>
        </li>
    @endif
    @if(setting('theme::google'))
        <li>
            <a target="_blank" href="{{ setting('theme::google') }}">
                @if(isset($icon))<i class="fa fa-google-plus"></i>@endif
                {!! isset($title) ? ' Google+' : '' !!}
            </a>
        </li>
    @endif
    @if(setting('theme::linkedin'))
        <li>
            <a target="_blank" href="{{ setting('theme::linkedin') }}">
                @if(isset($icon))<i class="fa fa-linkedin"></i>@endif
                {!! isset($title) ? ' LinkedIn' : '' !!}
            </a>
        </li>
    @endif
    @if(setting('theme::pinterest'))
        <li>
            <a target="_blank" href="{{ setting('theme::pinterest') }}">
                @if(isset($icon))<i class="fa fa-pinterest"></i>@endif
                {!! isset($title) ? ' Pinterest' : '' !!}
            </a>
        </li>
    @endif
    @if(setting('theme::instagram'))
        <li>
            <a target="_blank" href="{{ setting('theme::instagram') }}">
                @if(isset($icon))<i class="fa fa-instagram"></i>@endif
                {!! isset($title) ? ' Instagram' : '' !!}
            </a>
        </li>
    @endif
    @if(setting('theme::youtube'))
        <li>
            <a target="_blank" href="{{ setting('theme::youtube') }}">
                @if(isset($icon))<i class="fa fa-youtube"></i>@endif
                {!! isset($title) ? ' Youtube' : '' !!}
            </a>
        </li>
    @endif
    @if(setting('theme::rss'))
        <li>
            <a target="_blank" href="{{ setting('theme::rss') }}">
                @if(isset($icon))<i class="fa fa-rss"></i>@endif
                {!! isset($title) ? ' RSS' : '' !!}
            </a>
        </li>
    @endif
</ul>

@push('css-stack')
<style>
    footer .social.list-inline {
        display: inline !important;
    }
    footer .social.list-inline li, footer .social.list-inline li a {
        display: inline !important;
        margin-right: 5px;
    }
</style>
@endpush
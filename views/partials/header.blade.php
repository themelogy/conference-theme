<header id="header" class="header-left">
    <div class="header-inner clearfix">

        <div id="logo" class="logo-left text-light">
            <a href="{!! url(locale()) !!}">
                @if(View::hasSection('logo'))
                    @yield('logo')
                @else
                <img id="dark-logo" src="{{ Theme::url('img/logos/iz_logo.svg') }}" alt="{{ setting('theme::company-name') }}">
                <img id="light-logo" src="{{ Theme::url('img/logos/iz_logo.svg') }}" alt="{{ setting('theme::company-name') }}">
                @endif
            </a>
        </div>

        <div id="menu" class="clearfix">

            <div class="menu-actions">
                <div class="menu-toggle"><span class="hamburger"></span></div>
            </div>

            <div id="menu-inner">
                <nav id="main-nav">
                    {!! Menu::render('header', \Themes\Conference\Presenter\HeaderMenuPresenter::class) !!}
                </nav>
            </div>
        </div>

        <div id="header-actions">
            <div class="header-search">
                <a href="#" class="search-open action-search open-action" data-action="search-overlay">
                    <svg class="search" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 43.9 43.9">
                        <path d="M43.1,39.6L29.9,26.4c2-2.7,3.2-6.1,3.2-9.8C33.2,7.4,25.7,0,16.6,0S0,7.4,0,16.6c0,9.2,7.4,16.6,16.6,16.6 c3.7,0,7.1-1.2,9.8-3.2l13.2,13.2c1,1,2.6,1,3.5,0C44.1,42.2,44.1,40.6,43.1,39.6z M4.7,16.6C4.7,10,10,4.7,16.6,4.7 S28.5,10,28.5,16.6c0,6.6-5.3,11.9-11.9,11.9S4.7,23.1,4.7,16.6z"/>
                    </svg>
                </a>
            </div>

            <div class="header-totop">
                <a class="totop" href="#">
                    <svg class="arrow arrow-top" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 35.35"><path d="M0,16.88a3,3,0,0,0,.16.94,1.51,1.51,0,0,0,.63.78l15,15a2.14,2.14,0,0,0,3.52.08,2.14,2.14,0,0,0-.08-3.52L8.59,19.38H57.5a2.5,2.5,0,1,0,0-5H8.59L19.22,3.59A2.14,2.14,0,0,0,19.3.08a2.14,2.14,0,0,0-3.52.08l-15,15a1.51,1.51,0,0,0-.62.78A3,3,0,0,0,0,16.88Z"></path></svg>
                </a>
            </div>
        </div>

        <div id="header-actions-overlay">
            <a href="" class="action-close header-close"></a>
            <div class="action-overlay search-overlay">
                <form role="search" method="get" id="header-searchform" class="searchform" action="#">
                    <input type="text" value="" name="s" id="s" placeholder="{{ trans('themes::theme.header.search input') }}" />
                    <input type="submit" id="searchsubmit" value="Search" />
                </form>
                <h6 class="widget-title">{{ trans('themes::theme.header.search enter') }}</h6>
            </div>
        </div>

        <div id="header-widget" class="social">
            @include('partials.components.socials', ['class'=>'socialmedia-widget', 'icon'=>true])
        </div>

    </div>
    <span class="pseudo-close header-close"></span>
</header>
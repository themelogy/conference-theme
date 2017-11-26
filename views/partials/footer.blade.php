<footer id="footer">
    <div class="container">
        <div class="row m-top-bot-50">
            <div class="col-md-4">
                <div class="widget">
                    <img class="logo" src="{{ Theme::url('img/logos/iz_logo_yatay.svg') }}" alt="{{ setting('themes::company-name') }}" />
                    <div class="spacer-small"></div>
                    <p class="line-height-16 font-size-13">{!! setting('theme::address') !!}</p>
                    <p class="line-height-16 font-size-12">
                        <b>T</b>: {!! setting('theme::phone') !!}<br>
                        <b>F</b>: {!! setting('theme::fax') !!}<br>
                        <b>E</b>: {!! Html::email(setting('theme::email')) !!}
                    </p>
                    @if(isset($footer_social))
                        @include('partials.components.socials', ['class'=>'social list-inline','icon'=>true, 'attr'=>'display:inline;list-style-type:none;'])
                    @endif
                </div>
            </div>
            <div class="col-md-8">
                <div class="row">
                    @php $menu = app(\Modules\Menu\Repositories\MenuRepository::class)->all() @endphp
                    <div class="col-md-4">
                        @include('partials.footer.widget-menu', ['name'=>'birimlerimiz'])
                    </div>
                    <div class="col-md-4">
                        @include('partials.footer.widget-menu', ['name'=>'kurumsal'])
                    </div>
                    <div class="col-md-4">
                        @include('partials.footer.widget-menu', ['name'=>'hizmetlerimiz'])
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<section class="partners p-top-bot-20">
    <div class="row">
        <div class="col-md-12">
            <ul class="partners align-center">
                <li class="m-rgt-10"><a href="#"><img src="{{ Theme::url('img/logos/izevent.svg') }}" alt="İZ Event"/></a></li>
                <li class="m-rgt-10"><a href="#"><img src="{{ Theme::url('img/logos/izvip.svg') }}" alt="İZ Vip"/></a></li>
                <li class="m-rgt-10"><a href="#"><img src="{{ Theme::url('img/logos/iztasarim.svg') }}" alt="İZ Tasarım"/></a></li>
                <li class="m-rgt-10"><a href="#"><img src="{{ Theme::url('img/logos/izteknik.svg') }}" alt="İZ Teknik"/></a></li>
                <li class="m-rgt-10"><a href="#"><img src="{{ Theme::url('img/logos/iztransfer.svg') }}" alt="İZ Transfer"/></a></li>
            </ul>

            <p class="align-center font-size-10">Tüm hakları saklıdır. 2016 &copy; {{ setting('theme::company-name') }} </p>
        </div>
    </div>
</section>
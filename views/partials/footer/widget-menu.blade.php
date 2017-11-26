@if(isset($name))
    @if($menu = $menu->where('name', $name)->first())
        <div class="widget">
            <h5 class="widget-title title-alt xs-m-top-20"><strong>{{ $menu->title }}</strong></h5>
            {!! Menu::render($menu->name, \Themes\Conference\Presenter\FooterMenuLinksPresenter::class) !!}
        </div>
    @endif
@endif
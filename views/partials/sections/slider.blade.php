@if($group = Slide::findBySlug('anasayfa'))
    @php
        $sliders = $group->sliders()->published()->beetweendates()->get();
    @endphp
    @if(count($sliders)>0)
        <section id="hero" class="hero-auto">

            <div class="revolution-slider-wrapper">
                <div id="revolutionslider1" class="revolution-slider" data-version="5.0">
                    <ul>
                        @foreach($sliders as $slide)
                            <li class="text-light" data-transition="fade" data-masterspeed="default"
                                data-dottedoverlay="twoxtwo" data-delay="{{ $slide->settings->delay*1000 ?? '4000' }}">

                                <img src="{{ $slide->present()->firstImage(1680,1100,'fit',70) }}"
                                     alt="{{ $slide->sub_title }}">

                                @if(!empty($slide->video))
                                <div class="rs-background-video-layer"
                                     data-forcerewind="on"
                                     data-volume="{{ $slide->settings->video_sound ?? 'mute' }}"
                                     data-{{ $slide->settings->video_type }}="{{ $slide->video }}"
                                     @if($slide->settings->video_type=='ytid')
                                     data-videoattributes="version=3&enablejsapi=1&html5=1&hd=0&wmode=opaque&showinfo=0&rel=0&ref=0;origin={{ env('APP_URL') }};"
                                     @else
                                     data-videoattributes="background=1&title=0&byline=0&portrait=0&api=1"
                                     @endif
                                     data-videorate="1.0"
                                     data-videowidth="100%"
                                     data-videoheight="100%"
                                     data-videocontrols="none"
                                     data-videostartat="{{ $slide->settings->video_startat ?? '00:0' }}"
                                     data-videoendat="{{ $slide->settings->video_endat ?? '00:10' }}"
                                     data-videoloop="{{ $slide->settings->video_loop ?? 'loopandnoslidestop' }}"
                                     data-forceCover="1"
                                     data-dottedoverlay="twoxtwo"
                                     data-aspectratio="16:9"
                                     data-autoplay="true"
                                     data-autoplayonlyfirsttime="{{ $slide->settings->video_firsttime ?? 'false' }}"
                                     data-nextslideatend="true"
                                ></div>
                                @endif

                                @if(!empty($slide->sub_title))
                                <div class="tp-caption noha-caption align-center"
                                     data-color="{{ $slide->settings->title_color ?? '#ffffff' }}"
                                     data-textalign="{{ $slide->settings->title_align ?? 'left' }}"
                                     data-x="{{ $slide->settings->title_position_h ?? 'left' }}" data-hoffset="{!! $slide->present()->settings('range', 'title_position_x', '', json_encode([0,0,0,0]), true) !!}"
                                     data-y="{{ $slide->settings->title_position_v ?? 'center' }}" data-voffset="{!! $slide->present()->settings('range', 'title_position_y', '', json_encode([0,0,0,0]), true) !!}"
                                     data-basealign="slide"
                                     data-fontsize="{!! $slide->present()->settings('range', 'title_font_size', 'title_font_responsive', json_encode([74,66,46,36]), true) !!}"
                                     data-lineheight="{!! $slide->present()->settings('range', 'title_line_height', 'title_font_responsive', json_encode([74,66,46,36]), true) !!}"
                                     data-width="{!! $slide->present()->settings('range', 'title_width', 'title_height', json_encode([0,0,0,0]), true) !!}"
                                     data-height="auto"
                                     data-whitespace="['normal','normal','normal','normal']"

                                     data-frames='[{"delay":300,"speed":800,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power2.easeOut"},{"delay":"wait","speed":400,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

                                     data-start="1000"
                                     data-responsive_offset="on">
                                    {{ $slide->sub_title }}
                                </div>
                                @endif

                                @if(!empty($slide->content))
                                    <div class="tp-caption noha-caption"
                                         data-color="{{ $slide->settings->content_color ?? '#ffffff' }}"
                                         data-textalign="{{ $slide->settings->content_align ?? 'left' }}"
                                         data-x="{{ $slide->settings->content_position_h ?? 'left' }}" data-hoffset="{!! $slide->present()->settings('range', 'content_position_x', '', json_encode([0,0,0,0]), true) !!}"
                                         data-y="{{ $slide->settings->content_position_v ?? 'center' }}" data-voffset="{!! $slide->present()->settings('range', 'content_position_y', '', json_encode([0,0,0,0]), true) !!}"
                                         data-basealign="slide"
                                         data-fontsize="{!! $slide->present()->settings('range', 'content_font_size', 'content_font_responsive', json_encode([74,66,46,36]), true) !!}"
                                         data-lineheight="{!! $slide->present()->settings('range', 'content_line_height', 'content_font_responsive', json_encode([74,66,46,36]), true) !!}"
                                         data-width="{!! $slide->present()->settings('range', 'content_width', 'content_height', json_encode([0,0,0,0]), true) !!}"
                                         data-height="auto"
                                         data-whitespace="['normal','normal','normal','normal']"

                                         data-frames='[{"delay":300,"speed":800,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power2.easeOut"},{"delay":"wait","speed":400,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

                                         data-start="1000"
                                         data-responsive_offset="on">
                                        {{ $slide->content }}
                                    </div>
                                @endif

                                @if($slide->link_type != 'none')
                                    <div class="tp-caption align-center"
                                         data-x="{{ $slide->settings->link_position_h ?? 'left' }}" data-hoffset="{!! $slide->present()->settings('range', 'link_position_x', '', json_encode([50,40,30,20]), true) !!}"
                                         data-y="{{ $slide->settings->link_position_v ?? 'center' }}" data-voffset="{!! $slide->present()->settings('range', 'link_position_y', '', json_encode([200,140,110,90]), true) !!}"
                                         data-basealign="slide"
                                         data-width="auto"
                                         data-height="auto"
                                         data-whitespace="nowrap"
                                         data-transform_idle="o:1;sX:1;sY:1"
                                         data-transform_in="o:0;s:600;sX:0.9;sY:0.9;e:Power3.easeInOut;"
                                         data-transform_out="o:0;s:300;sX:0.9;sY:0.9;"
                                         data-start="700"
                                         data-responsive_offset="on">
                                        <a href="{{ $slide->link->url }}" target="{{ $slide->link->target }}"
                                           class="sr-button style-3 button-small"
                                           @if(isset($slide->settings->link_color))
                                           style="color: {!! $slide->settings->link_color !!} !important; border-color: {!! $slide->settings->link_color !!} !important;"
                                                @endif>{{ $slide->link->title }}</a>
                                    </div>
                                @endif
                            </li>
                        @endforeach
                    </ul>

                </div>
            </div>

            <a href="#" id="scrolldown" class="left text-light">
                <svg class="arrow arrow-bottom" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 35.35">
                    <title>back-arrow</title>
                    <path d="M0,16.88a3,3,0,0,0,.16.94,1.51,1.51,0,0,0,.63.78l15,15a2.14,2.14,0,0,0,3.52.08,2.14,2.14,0,0,0-.08-3.52L8.59,19.38H57.5a2.5,2.5,0,1,0,0-5H8.59L19.22,3.59A2.14,2.14,0,0,0,19.3.08a2.14,2.14,0,0,0-3.52.08l-15,15a1.51,1.51,0,0,0-.62.78A3,3,0,0,0,0,16.88Z"></path>
                </svg>
                <span class="text">{!! trans('themes::theme.home.scroll down') !!}</span>
            </a>

        </section>
        @push('css-stack')
        {!! Theme::style('css/revolution/css/revolution.css') !!}
        @endpush

        @push('js-stack')
        {!! Theme::script('js/jquery.revolution.min.js') !!}
        @endpush
    @endif
@endif
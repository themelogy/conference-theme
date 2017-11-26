@if($latestNews = News::latest(3))
<div class="container">
    <div class="row m-top-bot-100 xs-m-top-bot-20">
        <div class="col-md-12">
            <h3 class="align-center m-bot-20">{{ trans('themes::news.recent posts') }}</h3>
            <div id="blog-grid" class="row">
                @foreach($latestNews as $post)
                <div class="col-md-4">
                    <div class="blog-item-inner item-inner">
                        <div class="blog-media do-anim-modern">
                            <a href="{{ $post->url }}" class="thumb-hover scale">
                                <img src="{{ $post->present()->firstImage(370,250,'fit',70) }}" alt="{{ $post->title }}"/>
                            </a>
                        </div>
                        <div class="blog-info">
                            <div class="post-meta clearfix">
                                <span class="post-date">{{ $post->created_at->formatLocalized('%d %B %Y') }}</span>
                                <span class="post-cat"><a href="{{ $post->category->url }}">{{ $post->category->name }}</a></span>
                            </div>
                            <h3 class="post-name font-size-20 line-height-22"><a href="{{ $post->url }}">{{ $post->title }}</a></h3>
                            <p>{{ $post->intro }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endif
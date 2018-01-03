@extends('layouts.master')

@section('content')
    <section id="hero" class="side-left-small">
        <div class="owl-slider hero-slider" data-autoplay="true" data-loop="true" data-dots="false">
            <div class="slider-item text-light">
                <div class="bg-img" style="background-image:url('{{ Theme::url('img/uploads/1680x1100-dark.jpg') }}');"></div>
                <a href="blog-single-split1.html" class="sr-button style-3 button-small read-more">Read More</a>
                <div class="owl-slider-caption">
                    <h5 class="title-alt">Fashion</h5>
                    <div class="spacer-small"></div>
                    <h2><strong>Winter Campaign by David Oliver</strong></h2>
                </div>
            </div>

            <div class="slider-item text-light">
                <div class="bg-img" style="background-image:url('{{ Theme::url('img/uploads/1680x1100-dark.jpg') }}');"></div>
                <a href="blog-single-split2.html" class="sr-button style-3 button-small read-more">Read More</a>
                <div class="owl-slider-caption">
                    <h5 class="title-alt">Food</h5>
                    <div class="spacer-small"></div>
                    <h2><strong>Start your day with a new recipe</strong></h2>
                </div>
            </div>

            <div class="slider-item text-light">
                <div class="bg-img" style="background-image:url('{{ Theme::url('img/uploads/1680x1100-dark.jpg') }}');"></div>
                <a href="blog-single-classic.html" class="sr-button style-3 button-small read-more">Read More</a>
                <div class="owl-slider-caption">
                    <h5 class="title-alt">Travel</h5>
                    <div class="spacer-small"></div>
                    <h2><strong>Intervie with Jhon Malcomich</strong></h2>
                </div>
            </div>
        </div> <!-- END .owl-slider -->
    </section>

    <section id="page-body">

        <div class="spacer-small"></div>

        <div class="wrapper">
            <div id="blog-grid" class="isotope-grid style-column-2 isotope-spaced-big">

                <div class="blog-item isotope-item">
                    <div class="blog-item-inner item-inner do-anim">
                        <div class="blog-media">
                            <a href="blog-single-split1.html" class="thumb-hover scale">
                                <img src="{{ Theme::url('img/uploads/600x800-light.jpg') }}" alt="SEO" />
                            </a>
                        </div>

                        <div class="blog-info">
                            <div class="post-meta clearfix">
                                <span class="post-date">May 8, 2017</span>
                                <span class="post-cat"><a href="#">Fashion</a></span>
                            </div>
                            <h3 class="post-name"><a href="blog-single-split1.html">The Modern Man</a></h3>
                            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone ...</p>
                        </div>
                    </div>
                </div>

                <div class="blog-item isotope-item">
                    <div class="blog-item-inner item-inner do-anim">
                        <div class="blog-media">
                            <a href="blog-single-split2.html" class="thumb-hover scale">
                                <img src="{{ Theme::url('img/uploads/600x400-light.jpg') }}" alt="SEO" />
                            </a>
                        </div>

                        <div class="blog-info">
                            <div class="post-meta clearfix">
                                <span class="post-date">May 6, 2017</span>
                                <span class="post-cat"><a href="#">Food</a></span>
                            </div>
                            <h3 class="post-name"><a href="blog-single-split1.html">What should I eat for Breakfast</a></h3>
                            <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back ...</p>
                        </div>
                    </div>
                </div>

                <div class="blog-item isotope-item">
                    <div class="blog-item-inner item-inner do-anim">
                        <div class="blog-media">
                            <a href="blog-single-classic.html" class="thumb-hover scale">
                                <img src="{{ Theme::url('img/uploads/600x800-light.jpg') }}" alt="SEO" />
                            </a>
                        </div>

                        <div class="blog-info">
                            <div class="post-meta clearfix">
                                <span class="post-date">May 1, 2017</span>
                                <span class="post-cat"><a href="#">Fashion</a></span>
                            </div>
                            <h3 class="post-name"><a href="blog-single-split1.html">Paris Fashion Week 2017</a></h3>
                            <p>It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that ...</p>
                        </div>
                    </div>
                </div>

                <div class="blog-item isotope-item">
                    <div class="blog-item-inner item-inner do-anim">
                        <div class="blog-media">
                            <a href="blog-single-split1.html" class="thumb-hover scale">
                                <img src="{{ Theme::url('img/uploads/600x500-light.jpg') }}" alt="SEO" />
                            </a>
                        </div>

                        <div class="blog-info">
                            <div class="post-meta clearfix">
                                <span class="post-date">May 1, 2017</span>
                                <span class="post-cat"><a href="#">Fashion</a></span>
                            </div>
                            <h3 class="post-name"><a href="blog-single-split1.html">Nature Collection by Thomas Day</a></h3>
                            <p>And that’s already freaky enough. Now, Eventide the folks you know probably for their classic ...</p>
                        </div>
                    </div>
                </div>

                <div class="blog-item isotope-item">
                    <div class="blog-item-inner item-inner do-anim">
                        <div class="blog-media">
                            <a href="blog-single-split2.html" class="thumb-hover scale">
                                <img src="{{ Theme::url('img/uploads/600x400-light.jpg') }}" alt="SEO" />
                            </a>
                        </div>

                        <div class="blog-info">
                            <div class="post-meta clearfix">
                                <span class="post-date">April 27, 2017</span>
                                <span class="post-cat"><a href="#">Travel</a></span>
                            </div>
                            <h3 class="post-name"><a href="blog-single-split1.html">Fachwerkhaus</a></h3>
                            <p>A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung ...</p>
                        </div>
                    </div>
                </div>

                <div class="blog-item isotope-item">
                    <div class="blog-item-inner item-inner do-anim">
                        <div class="blog-media">
                            <a href="blog-single-classic.html" class="thumb-hover scale">
                                <img src="{{ Theme::url('img/uploads/600x340-light.jpg') }}" alt="SEO" />
                            </a>
                        </div>

                        <div class="blog-info">
                            <div class="post-meta clearfix">
                                <span class="post-date">April 26, 2017</span>
                                <span class="post-cat"><a href="#">Nature</a></span>
                            </div>
                            <h3 class="post-name"><a href="blog-single-split1.html">Blue Waves Ocean Crash</a></h3>
                            <p>The bedding was hardly able to cover it and seemed ready to slide off any moment.</p>
                        </div>
                    </div>
                </div>

            </div> <!-- END grid -->

            <div id="page-pagination">
                <ul class="pagination">
                    <li class="prev inactive"><a href="#"><span class="text">Previous Page</span>
                            <svg class="arrow arrow-left" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 35.35"><path d="M0,16.88a3,3,0,0,0,.16.94,1.51,1.51,0,0,0,.63.78l15,15a2.14,2.14,0,0,0,3.52.08,2.14,2.14,0,0,0-.08-3.52L8.59,19.38H57.5a2.5,2.5,0,1,0,0-5H8.59L19.22,3.59A2.14,2.14,0,0,0,19.3.08a2.14,2.14,0,0,0-3.52.08l-15,15a1.51,1.51,0,0,0-.62.78A3,3,0,0,0,0,16.88Z"></path></svg>
                        </a>
                    </li>
                    <li class="page"><span class="current">1</span></li>
                    <li class="page"><a href="#">2</a></li>
                    <li class="page"><a href="#">3</a></li>

                    <li class="next "><a href="#"><span class="text">Next Page</span>
                            <svg class="arrow arrow-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 35.35"><path d="M0,16.88a3,3,0,0,0,.16.94,1.51,1.51,0,0,0,.63.78l15,15a2.14,2.14,0,0,0,3.52.08,2.14,2.14,0,0,0-.08-3.52L8.59,19.38H57.5a2.5,2.5,0,1,0,0-5H8.59L19.22,3.59A2.14,2.14,0,0,0,19.3.08a2.14,2.14,0,0,0-3.52.08l-15,15a1.51,1.51,0,0,0-.62.78A3,3,0,0,0,0,16.88Z"></path></svg>
                        </a>
                    </li>
                </ul>
            </div>

        </div> <!-- END .wrapper -->

    </section>
@endsection

@push('styles')
{!! Theme::style('css/owl.carousel.css') !!}
{!! Theme::style('css/mqueries.css') !!}
@endpush

@push('scripts')
{!! Theme::script('js/jquery.owl.carousel.min.js') !!}
{!! Theme::script('js/jquery.sticky-kit.min.js') !!}
@endpush
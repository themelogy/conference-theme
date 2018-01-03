@if ($paginator->hasPages())
    <div id="page-pagination">
        <ul class="pagination">
            @if ($paginator->onFirstPage())
                <li class="disabled hide">&laquo;</li>
            @else
                <li class="prev inactive"><a href="{{ $paginator->previousPageUrl() }}"><span class="text">Geri</span>
                        <svg class="arrow arrow-left" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 35.35">
                            <path d="M0,16.88a3,3,0,0,0,.16.94,1.51,1.51,0,0,0,.63.78l15,15a2.14,2.14,0,0,0,3.52.08,2.14,2.14,0,0,0-.08-3.52L8.59,19.38H57.5a2.5,2.5,0,1,0,0-5H8.59L19.22,3.59A2.14,2.14,0,0,0,19.3.08a2.14,2.14,0,0,0-3.52.08l-15,15a1.51,1.51,0,0,0-.62.78A3,3,0,0,0,0,16.88Z"></path>
                        </svg>
                    </a>
                </li>
            @endif

        <!-- Pagination Elements -->
            @foreach ($elements as $element)
            <!-- "Three Dots" Separator -->
                @if (is_string($element))
                    <li class="disabled">{{ $element }}</li>
                @endif

            <!-- Array Of Links -->
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page"><span class="current">{{ $page }}</span></li>
                        @else
                            <li class="page"><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            @if ($paginator->hasMorePages())
                <li class="next "><a href="#"><span class="text">İleri</span>
                        <svg class="arrow arrow-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 35.35">
                            <path d="M0,16.88a3,3,0,0,0,.16.94,1.51,1.51,0,0,0,.63.78l15,15a2.14,2.14,0,0,0,3.52.08,2.14,2.14,0,0,0-.08-3.52L8.59,19.38H57.5a2.5,2.5,0,1,0,0-5H8.59L19.22,3.59A2.14,2.14,0,0,0,19.3.08a2.14,2.14,0,0,0-3.52.08l-15,15a1.51,1.51,0,0,0-.62.78A3,3,0,0,0,0,16.88Z"></path>
                        </svg>
                    </a>
                </li>
            @else
                <li class="disabled hide">&raquo;</li>
            @endif
        </ul>
    </div>
@endif
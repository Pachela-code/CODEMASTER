@if ($paginator->hasPages())
    <nav class="paginator">
        <ul class="d-flex justify-content-evenly align-items-center flex-grow-1 w-25 list-unstyled mx-auto">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span aria-hidden="true">
                        <img src="{{ url('/assets/images/setaesquerda1.svg') }}" alt="">
                    </span>
                </li>
            @else
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')"> <img
                            src="{{ url('/assets/images/setaesquerda1.svg') }}" alt="">
                    </a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li aria-current="page"><span
                                    class="text-decoration-none lato fs-4 gold">{{ $page }}</span></li>
                        @else
                            <li><a class="text-decoration-none lato fs-4"
                                    href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="text-decoration-none lato fs-4"
                        aria-label="@lang('pagination.next')">
                        <img src="{{ url('/assets/images/setadireita1.svg') }}" alt="">
                    </a>
                </li>
            @else
                <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span aria-hidden="true"><img src="{{ url('/assets/images/setadireita1.svg') }}"
                            alt=""></span>
                </li>
            @endif
        </ul>
    </nav>
@endif

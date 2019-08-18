@if ($paginator->hasPages())
<div class="column">

        <nav class="pagination is-centered" role="navigation" aria-label="pagination">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                <a class="pagination-previous" disabled>Previous</a>
                @else 
                <a class="pagination-previous" href="{{ $paginator->previousPageUrl() }}" rel="prev">Previous</a>
                @endif
                
                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                <a class="pagination-next" href="{{ $paginator->nextPageUrl() }}" rel="next">Next page</a>
                @else
                <a class="pagination-next" disabled>Next page</a>
                @endif
                
                
                <ul class="pagination-list">
                {{-- Pagination Elements --}}
                @foreach ($elements as $element)

                {{-- Array Of Links --}}
                    @if (is_array($element))


                        {{-- "Three Dots" Separator --}}
                            @if (is_string($element))
                            <li><span class="pagination-ellipsis">&hellip;</span></li>
                            @endif

                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())                            
                                <li><a class="pagination-link is-current" aria-label="{{$page}}" aria-current="page">{{$page}}</a></li>                         
                                @else                                    
                                <li><a class="pagination-link" href="{{$url}}" aria-label="{{$url}}">{{$page}}</a></li>
                                @endif
                            @endforeach
                            
                            @if (is_string($element))
                                <li><span class="pagination-ellipsis">&hellip;</span></li>
                            @endif
                            
                    @endif
                @endforeach
                </ul>
              </nav>
              
</div>

@endif

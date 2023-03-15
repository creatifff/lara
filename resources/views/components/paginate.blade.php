@if ($paginator->hasPages())
    <div class="pagination">
        <a href="{{ $paginator->previousPageUrl() }}" class="button large previous">Previous Page</a>
        <a href="{{ $paginator->nextPageUrl() }}" class="button large next">Next Page</a>
    </div>
@endif

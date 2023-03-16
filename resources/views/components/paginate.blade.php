@if ($paginator->hasPages())
    <div class="pagination">
        <a href="{{ $paginator->previousPageUrl() }}" class="button large previous">Назад</a>
        <a href="{{ $paginator->nextPageUrl() }}" class="button large next">Вперед</a>
    </div>
@endif

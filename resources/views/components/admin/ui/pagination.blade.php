@props(['paginator'=>null])
@if($paginator)<div>{{ $paginator->links() }}</div>@endif
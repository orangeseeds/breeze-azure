@if ($result->count() == 0)
  <x-search-no-results/>
@else
  @foreach ($result as $consultancy)
    <x-search-card :consultancy="$consultancy"/>
  @endforeach
  {!! $result->links('pagination::bootstrap-4-ajax') !!}
@endif

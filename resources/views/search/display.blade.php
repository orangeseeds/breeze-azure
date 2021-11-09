{{-- <div class="h-40 lg:h-20 text-lg text-gray-700 pt-10 lg:pt-2 lg:w-4/5 bg-white px-6 lg:mx-4 mb-6 rounded shadow">
  <p class="text-gray-800">
    <span class="text-4xl lg:text-2xl font-medium">Filtered Consultancies</span> --}}
    {{-- <br> --}}
    {{-- <span class="text-4xl lg:text-lg font-bold ">{{$result->total()}}</span>
    <span class="text-3xl lg:text-base"> result/s found</span> --}}
  {{-- </p>
</div>
<div id="wait" class="loadingspinner">
  <img src='{!! asset('/pic/spinner.gif') !!}' class=" w-24 h-24" />
  <br>
  <span class="text-xl font-semibold text-gray-500 mx-auto">
    Loading..
  </span>
</div>
@if (!is_null($result->first()))
@foreach ($result as $consultancy)
<div id="search_result" class="relative lg:w-4/5 mb-6 lg:mx-4 px-6 border bg-white text-gray-700 py-6 lg:pt-4 hover:shadow-lg rounded search-result">
  <button type="button" name="button" class="absolute mt-4 mr-6 top-0 right-0 border px-4 py-2 rounded hover:bg-gray-300 hover:shadow-lg">
    <a href="{!! route('compare') !!}">
      Compare
    </a>
  </button>
  <div class="border-b-4 ">
    <span class="text-5xl lg:text-2xl hover:underline">
      <a href="{!! route('consultancy.show',$consultancy) !!}">
        {{$consultancy->name}}
      </a>
    </span>
    <br>
    <span class="text-2xl lg:text-xs">{{$consultancy->location}}</span>
  </div>
  <div class="py-6 lg:py-2 text-3xl lg:text-base">
    {{substr($consultancy->description, 0, 150).'...  '}}
    <a class="hover:underline font-bold text-blue-500" href="{!! route('consultancy.show',$consultancy) !!}">read more</a>
  </div>
  <div class="text-3xl lg:text-sm">
        Courses:
      <span class="text-4xl lg:text-base font-bold">{{$consultancy->courses->count()}}</span>

      Countries:
    <span class="text-4xl lg:text-base font-bold">{{$consultancy->countries->count()}}</span>
  </div>
  <div class="flex space-x-1 pb-10 lg:pb-0">
    @include('comps.stars',['rating'=>$consultancy->rating, 'size'=>5])
    <div class="text-3xl lg:text-xs text-gray-600 py-1">
      <a href="#">
        {{$consultancy->reviews->count()}} <a href="" class="underline hover:font-bold">review/s</a>
      </div>
  </div>
</div>

@endforeach
@else
<div id="search_result" class="my-2 mx-auto py-1 lg:w-4/5">
  <div class="rounded-lg overflow-hidden mb-3">
    <div class="px-6 pt-4 relative font-bold text-gray-600 ">
      <p class="text-4xl">No results found</p>
      <p>There werent any matches for your search</p>
    </div>
  </div>
</div>
@endif --}}
{{-- <div class="lg:w-4/5 mb-6 lg:mx-4">
{{$result->appends($_GET)->links()}}
</div> --}}


@if ($result->count() == 0)
  <x-search-no-results/>
@else
  @foreach ($result as $consultancy)
    <x-search-card :consultancy="$consultancy"/>
  @endforeach
@endif

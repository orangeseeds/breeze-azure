{{-- @extends('comps.app')

@section('content')


<div class="mr-32 invisible pr-40 flex justify-end mt-4 text-gray-600">
  sortby:
  <select class="appearance-none block bg-white pl-2 pr-8 text-gray-600 text-base">
    <option value="v1">op1</option>
    <option value="v0">op2</option>
  </select>
</div>

<div class="absolute top-0 w-full text-gray-600 h-auto bg-white border mt-16 pl-10 lg:pl-32 pt-32 lg:pt-12 pb-4 text-left shadow-md">
  <p class="text-3xl lg:text-base w-4/6 pt-2 pb-6 lg:pl-24">
  <span class="text-6xl lg:text-3xl text-gray-700 font-bold">
    Find The Best Consultancy for You
  </span>
  <br>
    Use these filter to scan for consultancies that fit your specific needs, be it a specific course, a specific country, even the size of classes, and average scores of the students that study there.
  </p>

  <button id="filter-open" type="button" class="filter-button px-24 py-4 text-3xl border rounded text-white font-semibold shadow-sm bg-purple-600"> Filter</button>
</div>

<div class="flex mt-64 pt-64 lg:mt-40 lg:pt-0 lg:mx-24">

@include('comps.filter')


<div id="search-index-section" class="mt-2 w-full">

@include('search.display', ['result' => $result])
</div>
</div>
@endsection --}}

<x-app-layout>

<div class="container mt-5 py-5">
  <div class="row">
    <div class="col-md-1" style="width:4%;">
    </div>

    <x-filter-card/>

    <div class="col-md-8 px-0 pe-4">
      <div class="card px-2 py-2">
        <div class="card-body">
          <h5 class="card-title fs-5 fw-bold py-1">Find The Best Consultancy for You </h5>
          <p class="card-text py-1">Use these filter to scan for consultancies that fit your specific needs, be it a specific course, a specific country, even the size of classes, and average scores of the students that study there. </p>
        </div>
      </div>

      <div id="searchResult">
        @foreach ($result as $consultancy)
          <x-search-card :consultancy="$consultancy"/>
        @endforeach
      </div>

    </div>
  </div>
  </div>

</x-app-layout>

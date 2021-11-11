{{-- @props(['active'])

@php
$classes = ($active ?? false)
            ? 'block pl-3 pr-4 py-2 border-l-4 border-indigo-400 text-base font-medium text-indigo-700 bg-indigo-50 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a> --}}
<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav nav-pill mb-2 mb-lg-0 ms-auto" style="margin-right: 8vw;">
    <li class="nav-item">
      <button id="navSearchButton" class="nav-link active" aria-current="page" onclick="slideSearchBar(); document.getElementById('navSearchInput').focus();">
        Search
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
          <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
        </svg>
      </button>
    </li>

    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="{{route('consultancy.index')}}">
        Consultancies
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="{{route('compare')}}">
        Compare
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="{{route('contactUs.form')}}">
        Contact Us
      </a>
    </li>
</div>

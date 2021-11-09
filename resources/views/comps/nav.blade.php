<div id="nav-bar" class="flex border-b border-gray-200 sticky top-0 inset-x-0 z-40 h-32 lg:h-16 items-center shadow-md" style="background-color:#6C3FB3;">
  <div class="w-full max-w-screen-xl relative mx-auto px-6">
    <div class="flex flex-row items-center -mx-6">
      <div class="ml-6 w-1/3 font-bold text-4xl lg:text-2xl text-white">
        <a class="" href="{{route('landing')}}">
        <img src="{{url('pic/breeze-v2.svg')}}" class="w-32 h-16 lg:w-24 lg:h-12" alt="">
        {{-- Breeze --}}
      </a>
      </div>


      <div class="py-1 w-1/3 h-16 lg:h-auto rounded">
        {{-- @if(Request::url() == route('landing') || Request::url() == route('compare')) --}}
      {{-- @else --}}
        {{-- <form class="h-full w-full invisible" action="{{route('search.name')}}" method="GET">
          @method("GET")
            @include('search.field')
        </form> --}}
      {{-- @endif --}}
      </div>

      <div class="mr-6 w-1/4 text-white text-right font-bold text-3xl lg:text-base space-x-5">
        <button id="search_icon" class="h-auto" type="button" onclick="display_search_nav()">
          <img class="w-12 h-12 lg:w-6 lg:h-6" src="{{url('/pic/search.svg')}}" alt="" style="outline:none;">
          {{-- <span class="text-right text-white font-bold text-2xl lg:text-base">Search</span> --}}
        </button>
        <a href="{{route('compare')}}">
          Compare
        </a>
      </div>
    </div>
  </div>
</div>

<div id="slider-nav-bar" class="flex border-b border-gray-200 absolute top-0 w-full z-50 h-0 lg:h-16 bg-white hidden" style="background-color:#6C3FB3;">
    {{-- <img src="{{url('pic/breeze-v2.svg')}}" class="absolute top-5 right-40 w-24 h-24" alt=""> --}}
  <form class="h-10 w-1/3 mx-auto my-auto rounded bg-white py-auto" action="{{route('search.name')}}" method="GET">
    @method("GET")
      @include('search.field')
  </form>
  <button id="nav-search-close" type="button" onclick="close_search_nav()" class="mr-16 font-bold text-white">Close</button>
</div>

{{-- <nav class="fixed z-50 w-full bg-white top-0 flex flex-wrap items-center justify-between px-2 py-3 navbar-expand-lg shadow-lg">
  <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
    <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start">
      <a class="text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-no-wrap uppercase text-gray-800" href="/learning-lab/tailwind-starter-kit/presentation">Breeze</a>
      <button class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none" type="button">
        <i class="fas fa-bars"></i>
      </button>
    </div>
    <div class="lg:flex flex-grow items-center hidden" id="example-navbar-danger">
      <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
        <li class="nav-item">
          <a href="{{route('compare')}}" class="px-3 py-2 flex items-center text-xs uppercase font-bold text-gray-800 hover:text-gray-600" target="_blank">
            <span class="ml-2">Compare</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav> --}}

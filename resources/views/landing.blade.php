{{-- @extends('comps.app')

@section('content') --}}

  {{-- <div class="" style="background-color:#C4C9E4;">
  <div class="bg-no-repeat bg-bottom h-screen border-b border-white landing-background">

    <header class="text-gray-800">
      <div class="flex px-16 lg:px-40 text-lg  pt-10 pb-4">
      <div class="text-4xl lg:text-2xl w-1/3 mr-64 pr-64 font-bold">
        <a class="" href="{{route('landing')}}">
          <img src="{{url('pic/breeze-v2.svg')}}" class="w-24 h-12" alt="">
        </a>
      </div>
      <div class="w-2/12 pt-1 text-gray-700 hover:text-gray-800 ml-16 lg:ml-96">
        <a href="{{route('consultancy.index')}}">
          <button type="button" class="h-full border-opacity-0 text-2xl lg:text-lg hover:border-opacity-100 border-b-2 border-white">
            Consultancies
          </button>
        </a>
      </div>
      <div class="w-2/12 pt-1 text-gray-700 hover:text-gray-800 ml-10">
        <a href="{{route('compare')}}">
          <button type="button" class="h-full border-opacity-0 text-2xl lg:text-lg ml-0 lg:ml-6 hover:border-opacity-100 border-b-2 border-white">
            Compare
          </button>
      </a>
      </div>
      </div>
    </header>

    <main class="relative">
      <div class="mx-auto w-4/6 mt-72 lg:mt-20 text-center">
        <div class="text-center text-6xl lg:text-6xl mt-8 pt-6 text-gray-800 font-bold font-cabin">
          Find Your Consultancy.
        </div>
        <span class="text-4xl lg:text-2xl">Discover the consultancy that is right for you.</span>
        <div class="w-full lg:w-3/5 h-20 lg:h-auto mx-auto flex flex-row mt-20 lg:px-10">
          <div class="w-4/5 h-full text-gray-500">
            <form class="text-gray-600 border rounded-xl text-3xl lg:text-base h-full border-gray-300 text-2xl lg:text-lg hover:shadow-md focus:shadow-xl w-full lg:text-md py-5 lg:py-2 bg-white z-40 w-full h-full" action="{{route('search.name')}}" method="GET">
              @method("GET")
              @include('search.field')
            </form>
          </div>
          <div class="text-gray-500 ml-1">
            <select id="search_by" class="h-full rounded-xl appearance-none block text-white text-base mr-auto hover:font-bold px-4" name="search_by" style="background-color:#6C3FB3;">
              <option class="text-white">By Course</option>
              @foreach ($courses as $course)
                <option id="searchby_course" class="bg-white text-gray-600" name="course" value="{{$course->id}}">{{$course->name}}</option>
              @endforeach
            </select>
          </div>
        </div>
      </div>
    </main>
</div>
</div>
<div class="lg:flex bg-white text-center py-16 px-5 lg:px-0 space-y-32 lg:space-y-0">
  <div class="w-full lg:w-1/3">
    <span class="text-5xl lg:text-2xl text-gray-600 font-bold underline">Search</span>
    <div class="w-1/2 mx-auto border shadow-lg rounded-lg py-10 px-6 mt-2 text-gray-600 text-4xl lg:text-base">
      <img src="{{url('pic/search-draft.svg')}}" alt="Search">
      <p>
        Search from a list of many consultancies and find the best one that fits you.
      </p>
    </div>
  </div>

  <div class="w-full lg:w-1/3">
    <span class="text-5xl lg:text-2xl text-gray-600 font-bold underline">Review</span>
    <div class="w-1/2 mx-auto border shadow-lg rounded-lg mt-2 text-gray-600 text-4xl lg:text-base py-10 px-6">
      <img src="{{url('pic/review-final.svg')}}" alt="review">
      <p class="mt-8 pt-1">
        Read reviews from people who share their personal experiences.
      </p>
    </div>
  </div>

  <div class="w-full lg:w-1/3">
    <span class="text-5xl lg:text-2xl text-gray-600 font-bold underline">Compare</span>
    <div class="w-1/2 mx-auto border shadow-lg rounded-lg py-10 px-6 mt-2 text-gray-600 text-4xl lg:text-base">
      <img src="{{url('pic/compare-final.svg')}}" alt="Compare">
      <p class="mt-10 pt-1">
        Compare between multiple consultancies and choose the best one.
      </p>
    </div>
  </div>

</div> --}}
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script type="text/javascript" src="{{ asset('js/app.js') }}" defer></script>
  <script type="text/javascript" src="{{ asset('js/main.js') }}" defer></script>
  <link rel="stylesheet" href="{{asset('css/landing.css')}}">
  <link rel="stylesheet" href="{{asset('css/main.css')}}">
  </head>
  <body>
    <header>
      <nav class="navbar">
          <h3>
            <span style="color:white !important;">
              Breeze
              <x-application-logo color='white' size="60"/>
            </span>
          </h3>
        <ul>
          <li><button href="{{route('compare')}}" onclick="document.getElementById('consultancyName').focus()">Search</button></li>
          <li><a href="{{route('consultancy.index')}}">Consultancies</a></li>
          {{-- <li><a href="#">Search</a></li> --}}
          <li><a href="{{route('compare')}}">Compare</a></li>
          <li><a href="{{route('contactUs.form')}}">Contact Us</a></li>
      </ul>
      </nav>
    </header>

    <main>

      <div class="front-page">
        <div class="">
          <h2>
            Find Your Consultancy
          </h2>
          <p class="slogan-text">Discover the conusltancy that is right for you</p>
        </div>

        <div class="search-field">
          <form class="" action="{{route('search.name')}}" method="GET">
            @method("GET")
            <input id="consultancyName" type="text" name="consultancy_name" value="" class="" autocomplete="off">
          </form>
          {{-- <button type="button" name="button" class="search-button">Search By</button> --}}
          <select id="search_by" class="search-button" name="search_by" >
            <option class="text-white">By Course</option>
            @foreach ($courses as $course)
              <option id="searchby_course" class="bg-white text-gray-600" name="course" value="{{$course->id}}">{{$course->name}}</option>
            @endforeach
          </select>
        </div>
      </div>

      <div class="info-section">

        <div class="">
          Features we Provide
        </div>

        <div class="droplet">
          <h4>Search</h4>
          <p>Search from a list of many consultancies and find the best one that fits you.</p>
        </div>

        <div class="droplet">
          <h4>Review</h4>
          <p>Read reviews from people who share their personal experiences.</p>
        </div>

        <div class="droplet">
          <h4>Compare</h4>
          <p>Compare between multiple consultancies and choose the best one.</p>
        </div>

      </div>



    </main>

    <x-footer/>
  </body>

  </html>
{{-- @endsection --}}

{{-- <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Breeze</title>

    <link rel="stylesheet" href="{{asset('css/landing.css')}}">
  </head>
  <body>
    <header>
      <nav class="navbar">
        <h3> Breeze </h3>
        <ul>
          <li><a href="#">Consultancies</a></li>
          <li><a href="#">Search</a></li>
          <li><a href="#">Compare</a></li>
      </ul>
      </nav>
    </header>

    <main>

      <div class="front-page">
        <div class="">
          <h2>
            Find Your Consultancy
          </h2>
          <p class="slogan-text">Discover the conusltancy that is right for you</p>
        </div>

        <div class="search-field">
          <input type="text" name="" value="" class="search-field">
          <button type="button" name="button" class="search-button">Search By</button>
        </div>
      </div>

      <div class="info-section">

        <div class="">
          Features we Provide
        </div>

        <div class="droplet">
          <h4>Search</h4>
          <p>Search from a list of many consultancies and find the best one that fits you.</p>
        </div>

        <div class="droplet">
          <h4>Review</h4>
          <p>Read reviews from people who share their personal experiences.</p>
        </div>

        <div class="droplet">
          <h4>Compare</h4>
          <p>Compare between multiple consultancies and choose the best one.</p>
        </div>

      </div>



    </main>

    <footer>
      <div class="sub-info">
        <h5>Breeze</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>

      <div class="banner-bottom">
        © 2021 ACSS | Breeze
      </div>
    </footer>
  </body>
</html> --}}

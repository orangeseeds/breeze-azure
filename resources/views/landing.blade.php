<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
  <link href="{{ asset('css/search.css') }}" rel="stylesheet">
  <link href="{{ asset('css/main.css') }}" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  </head>
  <body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container-fluid">
            <h3>
              <span style="color:white;">
                Breeze
                <x-application-logo color='#6c3fb3' size="60"/>
              </span>
            </h3>
            <div class="" id="navbarNav">
              <ul class="ms-auto me-5 navbar-nav">
                <li class="nav-item">
                  <button class="nav-link active" onclick="document.getElementById('consultancyName').focus()">Search</button>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="{{route('consultancy.index')}}">Consultancies</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="{{route('compare')}}">Compare</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="{{route('contactUs.form')}}">Contact Us</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
    </header>

    <main>

      <div class="front-page">
        <div class="search-select-container">
        <div class="title-section">
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
          <select id="search_by" class="search-button" style="max-width:200px;" name="search_by" >
              <option class="text-white">
                By Course
              </option>
              @foreach ($courses as $course)
                <option id="searchby_course" class="bg-white text-gray-600" name="course" value="{{$course->id}}">{{$course->name}}</option>
              @endforeach
          </select>
        </div>
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
<script type="text/javascript">
  $(document).ready(function(){
    let viewheight = $(window).height();
    let viewwidth = $(window).width();
    let viewport = document.querySelector("meta[name=viewport]");
    viewport.setAttribute("content", "height=" + viewheight + "px, width=" + viewwidth + "px, initial-scale=1.0");
    console.log(viewport.get);
  })

</script>
  </html>

<!DOCTYPE html>
<html lang="en" dir="ltr">
{{-- <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"> --}}
  <head>
    <meta charset="utf-8">
    <script src="https://demos.jquerymobile.com/1.4.2/js/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>


    <link rel="stylesheet" href="https://demos.jquerymobile.com/1.4.2/css/themes/default/jquery.mobile-1.4.2.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cabin&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js">
    </script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}" defer></script>
    <script type="text/javascript" src="{{ asset('js/main.js') }}" defer></script>

    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <link rel="stylesheet" href="{{ asset('css/main.css')}}">
    <title></title>
    </head>
    <body id="home">

      <div class="flex flex-col min-h-screen" style="background-color:#C4C9E4;">
        @if (Request::url() == route('landing'))
        @else
          <header>
            <!--nav-->
            @include('comps.nav')
          </header>
        @endif

        <main>
          {{-- Content --}}
          @yield('content')
        </main>
      </div>

        <footer>
        <!--footer-->
          @include('comps.footer')
        </footer>
    </body>
    <script type="text/javascript">
    $(document).ready(function(){
        @isset($consultancy)
        $('#scorecard').load("{{route('review.scorecard',$consultancy)}}");
        @endisset
      });
    </script>

</html>

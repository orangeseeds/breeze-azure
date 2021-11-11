<x-app-layout>

<div class="container mt-5 py-5">
  <div class="row filter-search-row">
    <div class="col-md-1 spacing-col" style="width:4%;">
    </div>

    <x-filter-card/>

    <div class="col-md-8 px-0 pe-4 content-col">
      <div class="card px-2 py-2">
        <div class="card-body">
          <h5 class="card-title fs-5 fw-bold py-1">Find The Best Consultancy for You </h5>
          <p class="card-text py-1">
            Here, you can filter out the consultancies based on your preferences. You can filter them on the basis of their rating, number of reviews, available courses, price, countries and class size.
            <br>
            <span class="fw-light">
              We hope this helps you find the right one for you.
            </span>
            <button id="filterToggleButton" onclick="slideFilterCard()" type="button" class="mt-4 btn btn-theme px-3 py-2" style="width: 40%;  border-radius:8px 30px 30px 30px;" name="button">
              Filters
            </button>
          </p>

          {{-- <p class="card-text py-1">Use these filter to scan for consultancies that fit your specific needs, be it a specific course, a specific country, even the size of classes, and average scores of the students that study there. </p> --}}
        </div>
      </div>

      <div id="searchResult">
        @if (request()->get('search_type') != "filter")
          @if ($result->count() == 0)
            <x-search-no-results/>
          @else
            @foreach ($result as $consultancy)
              <x-search-card :consultancy="$consultancy"/>
            @endforeach
            <center>
              {!! $result->links('pagination::bootstrap-4') !!}
            </center>
          @endif
        @endif

      </div>

    </div>
  </div>
  </div>

<style media="screen">
  #filterToggleButton{
    display: none;
  }

  .btn-filter-close{
    display: none;
  }

  .content-col{
    font-size: 14px;
  }
  @media screen and (max-width: 1200px) {
    .container{
      /* margin: auto 0px; */
      max-width:96vw;
      border-radius: 8px;
    }
    .spacing-col{
      display: none;
    }
    .filter-card{
      width:257px;

    }
    .fs-6{
      font-size: 14px !important;
    }
    .fw-bold{
      font-weight: 600 !important;
    }
    .content-col{
      width: 72%;
      padding-right: 0px !important;
    }
    .filter-col{
      padding-left: 0.3rem !important;
    }
  }
  @media screen and (max-width: 1024px) {
    .filter-search-row{
      justify-content: space-between;
    }
    .filter-col{
      padding-left: 0.3rem !important;
      margin-right: 0.5rem !important;
    }
    .container{
      /* margin: auto 0px; */
      max-width:98vw;
      border-radius: 8px;
      margin:0 !important;
      padding:0;
    }
    .spacing-col{
      display: none;
    }
    .content-col{
      width: calc(100% - 272px);
      padding-right: 0.5rem !important;
      line-height: 18px;
      color: #464646;
    }
    .search-card{
      margin-top: 0.7rem !important;
    }
  }
  @media screen and (max-width: 755px) {
    .filter-col{
      padding: 0 !important;
      margin-right: 0 !important;
    }
    .filter-card{
      width: 100% !important;
    }
    .container{
      max-width:100vw;
      overflow-x: hidden;
      padding-top: 0 !important;
      margin-top: 15px !important;
    }
    .content-col{
      width: 100%;
      padding-right: 0rem !important;
    }
    .filter-card.slider.no-padding{
      padding: 0px !important;
      margin: 0px !important;
      border: none;
    }

    .filter-card.slider {
    overflow-y: hidden;
    max-height: auto; /* approximate max height */

    transition-property: all;
    transition-duration: .5s;
    transition-timing-function: cubic-bezier(0, 0, 0.5, 0);
    }

    .filter-card.slider.closed {
      max-height: 0;
    }
    .filter-card.slider.overflow {
      overflow: visible !important;
    }
    .btn-filter-close{
      display: block;
    }
    #filterToggleButton{
      display: block;
    }

  }
</style>

  <script type="text/javascript">


    function slideFilterCard(e) {
      document.getElementById('filterCard').classList.toggle('closed');
      document.getElementById('filterCard').classList.toggle('no-padding');
      // document.getElementById('filterCard').classList.toggle('overflow');

    }

  </script>

</x-app-layout>

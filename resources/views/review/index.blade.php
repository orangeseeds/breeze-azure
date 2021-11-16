<x-app-layout>

  <x-slot name="pagetitle">
    {{$consultancy->name}} reviews - Breeze
  </x-slot>

    <div class="container mt-5 py-5">
      <div class="row">
        <div class="col spacing-col">
        </div>

        <x-consultancy-profile-card :consultancy="$consultancy" />

        <div class="col-md-7 content-col" data-spy="scroll" data-target="#EpicNavbars" data-offset="10">

          <div class="card px-2">
            <div class="card-body py-4">
              <h5 id="Reviews" class="card-title fs-5 fw-bold">Reviews</h5>
              <x-rating-stars rating="{{$consultancy->rating}}" /> <!--16-->
              <p class="fw-lighter fs-6 text-start text-muted">{{$consultancy->reviews->count()}} reviews</p>
              <x-review-scorecard :scorecard="$consultancy->scorecard()" />

              <div class="card py-4 mt-4 border-0 border-bottom border-top rounded-0">
                <!-- <div class="card-header text-white fw" style="opacity: 60%; background: red;">
                  Featured
                </div> -->
                <div class="card-body pl-3 rate">
                  <a style="text-decoration:none;" href="{{route('review.create', $consultancy)}}">
                    <h5 class="card-title fs-5 fw-bold mb-2" style="color:#444444;">How Would You Rate Your Experience with
                    <span class="fw-bold" >{{$consultancy->name}}?</span>
                    </h5>
                    <div class="" style="cursor:pointer;">
                    <x-rating-stars size="25" rating="3" /> <!--25-->
                    </div>
                  </a>
                </div>
              </div>

              @foreach ($reviews as $review)
                @if ($loop->last)
                  <x-review-card :review="$review" bottom="hide"/>
                  @break
                @endif
                <x-review-card :review="$review"/>
              @endforeach
      </div>


    </div>
    {!! $reviews->links('pagination::bootstrap-4') !!}
    </div>
    <div class="col spacing-col">
    </div>
    </div>
    </div>
    <style media="screen">
      .content-col{
        height: auto;
      }
      .consultancy-profile-card{
        min-width: 380px;
      }
      @media screen and (max-width: 1200px) {
        .container{
          max-width:96vw;
          border-radius: 8px;
        }
        .spacing-col{
          display: none;
        }
        .content-col{
          width: 665px;
        }
      }
      @media screen and (max-width: 1024px) {
        .content-col{
          /* width: calc(100vw - 10%);
          min-width: 770px; */
          width: 770px;
          padding-right: 0.5rem !important;
          margin:auto;
        }
      }
      @media screen and (max-width: 1090px) {
        .content-col{
          width: calc(100% - 380px);
        }
      }
      @media screen and (max-width: 1000px) {
        .container{
          margin-top: 2rem !important;
          padding-top: 0 !important;
        }
        .content-col{
          width: 770px;
          padding: 0rem !important;
        }
        .consultancy-profile-card{
          padding: 0rem !important;
          width: 770px;
        }
      }
      @media screen and (max-width: 500px) {
        .container{
          padding: 0px !important;
          overflow-x: hidden;
          margin: 0px auto !important;
          max-width: 99vw;
        }
        .consultancy-profile-card{
          min-width: 100%;
        }
      }
    </style>
</x-app-layout>

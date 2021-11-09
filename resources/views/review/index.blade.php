<x-app-layout>

    <div class="container mt-5 py-5">
      <div class="row">
        <div class="col">
        </div>

        <x-consultancy-profile-card :consultancy="$consultancy" />

        <div class="col-md-7" data-spy="scroll" data-target="#EpicNavbars" data-offset="10">

          <div class="card px-2">
            <div class="card-body py-4">
              <h5 id="Reviews" class="card-title fs-5 fw-bold">Reviews</h5>
              <x-rating-stars rating="{{$consultancy->rating}}" /> <!--16-->
              <p class="fw-lighter fs-6 text-start text-muted">{{$consultancy->reviews->count()}} reviews</p>
              <x-review-scorecard attribute="value" />

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

              @foreach ($consultancy->reviews as $review)
                @if ($loop->last)
                  <x-review-card :review="$review" bottom="hide"/>
                  @break
                @endif
                <x-review-card :review="$review"/>
              @endforeach
      </div>


    </div>
    </div>
    <div class="col">
    </div>
    </div>
    </div>

</x-app-layout>

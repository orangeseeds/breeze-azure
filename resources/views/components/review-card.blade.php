@props(['bottom'=>"show", 'review'=>"none"])

@if ($bottom == "hide")
  <div class="card-body mt-3 review">
    <h5 class="card-title">
      <x-rating-stars rating="{{$review->rating}}" /> <!--16-->
      </h5>
      <div class="text-muted" style="font-size:0.8rem;">
        {{$review->created_at->todatestring()}}
      </div>
      <p class="card-text py-3">{{$review->description}}</p>
    </div>
@else
  <div class="card-body border-bottom mt-3 review">
    <h5 class="card-title">
      <x-rating-stars rating="{{$review->rating}}" /> <!--16-->
      </h5>
      <div class="text-muted" style="font-size:0.8rem;">
        {{$review->created_at->todatestring()}}
      </div>
      <p class="card-text py-3">{{$review->description}}</p>
    </div>
@endif

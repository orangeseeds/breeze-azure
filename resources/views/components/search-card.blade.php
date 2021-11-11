<div class="card px-2 py-4 mt-3 search-result overflow-hidden card-body-hover search-card">
  <!-- <img src='https://i.pinimg.com/564x/fa/df/be/fadfbe0164fe6ed9b9439684c05cc9c5.jpg' alt=""> -->
  <button type="button" class="m-4 btn btn-theme position-absolute top-0 end-0 px-3 py-2" style="z-index:15; border-radius:8px 30px 30px 30px;" name="button">
    <a href="{!! route('compare') !!}?cons1={{$consultancy->slug}}" style="text-decoration:none; color:white;"
      onMouseOver="this.style.color='#444444'"
      onMouseOut="this.style.color='white'"
      >
      Compare
    </a>
   </button>

  <a href="{!! route('consultancy.show',$consultancy) !!}" style="text-decoration: none; color:inherit;">
  <div class="card-body py-1" style="z-index:10;">
    <h5 class="card-title fw-bold mb-0" style="color: #444444;">{{$consultancy->name}}</h5>
    <p class="fw-lighter fs-6 text-muted">{{$consultancy->location}}</p>

    <p class="card-text">

    {{ \Illuminate\Support\Str::limit($consultancy->description, 255, $end='...') }}
    <a href="{!! route('consultancy.show',$consultancy) !!}" class="text-primary">read more</a></p>


    <div class="">
      <span style="width:10%;">
        <b style="color: #444444;">
          Courses:
        </b>
        @foreach ($consultancy->courses->take(3) as $course)
          {{$course->name}}
        @endforeach
        ...
      </span>
      <br>

      <span style="width:10%;">
        <b style="color: #444444;">
          Countries:
        </b>
        @foreach ($consultancy->countries->take(3) as $country)
          {{$country->name}}
        @endforeach
        ...
      </span>
    </div>

    <div class="pt-1">
      <x-rating-stars rating="{{$consultancy->rating}}"/>

      <span class="fw-lighter text-muted ms-2" style="font-size:14px;"> {{ $consultancy->reviews->count() }}
        <a href="{!! route('review.index',$consultancy) !!}">
          review/s
        </a>
      </span>

    </div>

  </div>
</a>
</div>

<style media="screen">
  .card-body-hover:hover{
    /* background-color: #EAE4F4; */
    box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
  }
</style>

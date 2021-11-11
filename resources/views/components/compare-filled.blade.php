@php
  $total_students = 0;
@endphp
<div id="{{$consultancy->slug}}card">
      <div class="card px-2 pb-4 mt-3 search-result overflow-hidden">
        <div class="overflow-hidden" style="height: 200px;">
          <button id="comparecard" type="button" class="btn-close position-absolute top-0 end-0 m-2 bg-light" aria-label="Close"></button>
          <img class="" style="object-fit: cover;" src='{{ asset('/storage/'.$consultancy->cover_picture) }}' alt="">
        </div>
        <div class="card-body py-1 pt-4" style="z-index:10;">
          <a href="{!! route('consultancy.show',$consultancy->slug) !!}" style="text-decoration: none;">
            <h5 class="card-title fw-bold mb-0" style="color: #444444;">{{$consultancy->name}}</h5>
            <p class="fw-lighter fs-6 text-muted">{{$consultancy->location}}</p>
          </a>

          <div class="d-flex">
            <div class="d-flex mt-1">
              <x-rating-stars rating="{{$consultancy->rating}}" />
            </div>
            <div class="fw-lighter fs-6 text-muted ms-2">{{$consultancy->reviews_count}}
              <span class="text-primary">
                reviews
              </span>
            </div>
          </div>
          <div class="mt-4" style="height:173px; overflow:auto;">
            <h5 class="card-title fs-6 fw-bold" style="color:#444444;">Courses</h5>

            @foreach ($consultancy->courses as $course)
              <button id="coursesSection" class="ps-0 accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-1collapseOne{{$consultancy->slug}}{{$loop->iteration}}" aria-expanded="false" aria-controls="flush-1collapseOne{{$consultancy->slug}}{{$loop->iteration}}">
                {{$course->name}}
              </button>
              <div id="flush-1collapseOne{{$consultancy->slug}}{{$loop->iteration}}" class="accordion-collapse collapse" aria-labelledby="flush-headingOne{{$consultancy->slug}}{{$loop->iteration}}" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body p-0">
                  <div class="card-body p-0">
                    <div class="container border-bottom rounded-0 px-4 py-4 costs-card bg-white">
                        <div class="col-sm py-2 card-subtitle text-muted fs-6">
                          Cost
                          <span style="color: #444444;">
                            Rs. {{$course->pivot->price}}
                          </span>
                        </div>
                        <div class="col-sm py-2 card-subtitle text-muted fs-6">
                          Avg. Score
                          <span style="color: #444444;">
                            {{$course->pivot->average_score}}
                          </span>
                        </div>
                        <div class="col-sm py-2 card-subtitle text-muted fs-6">
                          Duration
                          <span style="color: #444444;">
                            {{$course->pivot->course_duration}} months
                          </span>
                        </div>
                        <div class="col-sm-2">
                        </div>
                        <div class="col-sm py-2 card-subtitle text-muted fs-6">
                          Avg. Class Size
                          <span style="color: #444444;">
                            {{$course->pivot->class_size}}
                            @php
                              $total_students += $course->pivot->class_size;
                            @endphp
                          </span>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach

          </div>

          <div class="mt-4">
            <h5 class="card-title fs-6 fw-bold" style="color:#444444;">Countries</h5>
            <img data-bs-toggle="tooltip" data-bs-placement="bottom" title="Norway" class="flag-icon" src="https://image.flaticon.com/icons/png/512/197/197579.png" alt="" style="width: 30px;">
            <img class="flag-icon" data-bs-toggle="tooltip" data-bs-placement="bottom" title="England" class="flag-icon" src="https://image.flaticon.com/icons/png/512/197/197485.png" alt="" style="width: 30px;">

          </div>

          <div class="mt-4">
            <h5 class="card-title fs-6 fw-bold" style="color:#444444;">Total Students</h5>
            <p class="">{{$total_students}}</p>
          </div>


        </div>
      </div>
    </div>

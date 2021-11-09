<div class="relative w-full rounded text-gray-700 text-base bg-white">
  <button id="clear_btn" class="opacity-80 absolute right-0 top-0 p-1 m-2 border bg-gray-400 rounded-full w-10 h-10" type="button" name="view">
    <span class="font-bold">x</span>
  </button>
    <div class="h-72 lg:h-40 border-b-4 border-gray-800">
      <img class="object-cover h-full w-full rounded-t" src="{{ asset('/storage/'.$consultancy->cover_picture) }}" alt="">
    </div>
    <div class="px-4">
      <p class="text-5xl lg:text-2xl font-semibold hover:underline">
        <a href="{{route('consultancy.show',$consultancy->slug)}}">
          {{$consultancy->name}}
        </a>
      </p>
      <p class="text-3xl lg:text-base">{{$consultancy->location}} @include('comps.stars',['size'=>5,'rating'=>$consultancy->avg_rating])
        <span class="text-2xl lg:text-xs hover:underline">{{$consultancy->reviews_count}}
          <a href="{{route('review.index',$consultancy->slug)}}">reviews</a>
        </span>
      </p>
      <hr>
    </div>

  <div class="p-4 mt-4">
    <span class="text-gray-800 text-4xl lg:text-2xl">Courses</span>
    <div id="courses_scroll" class="h-72 lg:h-56 shadow-inner">
    <ul class="h-auto text-lg ">
      @php
      $total_students = 0;
      @endphp
      @foreach ($consultancy->courses as $key => $course)
        <li id="courses-compare" class="py-2">
          <span class="text-4xl lg:text-xl">{{$course->name}}</span>
          <br>
          <p class="inline text-3xl lg:text-base pt-3">
            Price <span class="text-3xl lg:text-xl pl-2">{{$course->pivot->price}}</span>
          </p>
          <p class="inline text-3xl lg:text-base lg:text-xs pt-3 text-right pl-16">
            Avg. score <span class="text-3xl lg:text-xl pl-2">{{$course->pivot->average_score}}</span>
          </p>
        </li>
        <hr>
        @php
        $total_students += intval($course->pivot->class_size);
        @endphp
      @endforeach
      <hr>
    </ul>
  </div>
  </div>

  {{-- <div class="px-4 ">
    <span class="text-gray-800 text-2xl">Yearly Enrollment</span><br>
    <span class="text-xl">

    </span>
  </div> --}}

  <div class="px-4 my-6 lg:my-0">
    <span class="text-gray-800 text-4xl lg:text-2xl">Countries</span>
    <div class="flex flex-wrap h-auto text-sm py-2">
      <div class="">
        <ul class="h-auto text-3xl lg:text-base">
          @foreach ($consultancy->countries as $country)
          <li class="inline mr-2">{{$country->name}}</li>
          @if ($loop->iteration%6==0)
            <br>
          @endif
          @endforeach
        </ul>

      </div>
    </div>
  </div>

  <div class="px-4 pt-4 pb-8 mt-10 lg:mt-0 mb-6">
    <span class="text-gray-800 text-4xl lg:text-2xl">Total Students</span><br>
    <span class="text-3xl lg:text-xl">{{$total_students}}</span>
  </div>

</div>
<button type="button" class="hidden border-2 border-white rounded bg-gray-600 text-gray-200 p-4 mt-4  w-full"type="button" name="review"><a href="/consultancy/{{$consultancy->slug}}/review/index">Read Reviews</a></button>

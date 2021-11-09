{{-- @extends('comps.app')

@section('content')
    @include('consultancy.head')

    <div class="lg:mx-40 lg:px-40 my-6 mx-8">

      @if (session('message'))
      <div class="w-full flex bg-white py-6 relative px-4 m-4 lg:px-6 lg:mx-auto border border-gray-400 rounded-md shadow-md">
        <img class="w-8 h-8" src="{{url('pic/tick.svg')}}" alt="">
        <p class="px-6">
          <span class="text-xl">Thank You!</span>
          <br>
          {{session('message')}}
        </p>
      </div>
      @endif

        <div class="bg-white overflow-hidden shadow-md sm:rounded-lg lg:w-full mx-auto pt-4 h-full">
          <a class="px-4 text-gray-700" href="{{route('consultancy.show',$consultancy)}}"><
            <span class="hover:text-blue-500 hover:underline text-lg lg:text-sm">Consultancy Page</span>
          </a>
            <div class="p-6 bg-white border-b border-gray-200">
              <div class="text-3xl lg:text-xl border-b border-gray-200 text-gray-700">
                Apply for
                <span class="text-5xl lg:text-xl font-bold">{{$consultancy->name}}</span>
              </div>
                <form method="POST" action="{{route('consultancy.apply.store',$consultancy)}}">
                    @csrf
                    @method("POST")

                    <div class="flex flex-wrap mb-6 pr-64 py-6">
                    <label class="block text-gray-700 text-4xl lg:text-lg font-semibold mb-2 text-left pt-3 text-lg">
                    {{ __('Course') }}:
                    </label>

                    <select name="course_id" id="course_id" class="form-input text-3xl hover:bg-gray-200 rounded border px-4 lg:text-base ml-4 @error('course_id') border-red-500 @enderror" required>
                    <option value="">None</option>
                    @foreach($consultancy->courses as $course)
                    <option value="{{ $course->id }}">{{ $course->name }}</option>
                    @endforeach
                    </select>
                    </div>

                    <input type="hidden" name="consultancy_id" value="{{$consultancy->id}}">

                    <div class="my-6">
                      <label class="block text-gray-700 text-4xl lg:text-lg font-semibold mb-2 text-left pt-3 text-xl">
                      {{ __('Name') }}:
                      </label>
                      <input class="text-4xl text-gray-600 lg:text-base placeholder-opacity-90 rounded border py-2 px-4 w-full outline-none focus:border-blue-500  @error('name') border-red-500 @enderror" type="text" name="name" value="" placeholder="Full Name" required>
                    </div>

                    <div class="my-6">
                      <label class="block text-gray-700 text-4xl lg:text-lg font-semibold mb-2 text-left pt-3 text-xl">
                        {{ __('Email') }}:
                      </label>
                      <input type="text"class="text-4xl text-gray-600 lg:text-base placeholder-opacity-90 rounded border py-2 px-4 w-full outline-none focus:border-blue-500  @error('email') border-red-500 @enderror" name="email" value="" placeholder=" email@example.com" required>
                      </div>

                    <div class="my-6">
                      <label class="block text-gray-700 text-4xl lg:text-lg font-semibold mb-2 text-left pt-3 text-xl">
                      {{ __('Phone Number') }}:
                      </label>
                      <input class="text-4xl text-gray-600 lg:text-base placeholder-opacity-90 rounded border py-2 px-4 w-full outline-none focus:border-blue-500  @error('phone_number') border-red-500 @enderror" type="number" name="phone_number" value="" required>
                    </div>

                    <div class="my-6">
                      <label class="block text-gray-700 text-4xl lg:text-lg font-semibold mb-2 text-left pt-3 text-xl">
                      {{ __('Request Call') }}:
                      </label>
                      <input type='hidden' value='0' name='requested_call'>
                      <input class="@error('requested_call') border-red-500 @enderror" type="checkbox" name="requested_call" value=1>
                    </div>

                    <div class="my-6">
                      <label class="block text-gray-700 text-4xl lg:text-lg font-semibold mb-2 text-left pt-3 text-xl">
                      {{ __('Demo Class') }}:
                      </label>
                      <input type='hidden' value='0' name='demo_class'>
                      <input class="@error('demo_class') border-red-500 @enderror" type="checkbox" name="demo_class" value=1>
                    </div>

                      <div class="flex flex-wrap items-center">
            <button type="submit" class="bg-themecolor-200 hover:bg-themecolor-100 text-gray-100 font-semibold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                {{ __('Submit') }}
            </button>
        </div>
                </form>
            </div>
        </div>
    </div>
  @endsection --}}

  <x-app-layout>

      <div class="container mt-5 py-5">
        <div class="row">
          <div class="col">
          </div>

          <x-consultancy-profile-card :consultancy="$consultancy" />

          <div class="col-md-7" data-spy="scroll" data-target="#EpicNavbars" data-offset="10">
            <div class="card px-2">
              <div class="card-body py-4">
                {{-- <h5 id="Reviews" class="card-title fs-5 fw-bold">Reviews</h5> --}}
                {{-- <div class="card py-4 mt-4 border-0 border-bottom border-top rounded-0"> --}}
                  <!-- <div class="card-header text-white fw" style="opacity: 60%; background: red;">
                    Featured
                  </div> -->
                  {{-- <div class="card-body pl-3 rate"> --}}
                    <h5 class="card-title fs-5 fw-bold mb-2" style="color:#444444;">Apply For
                      <span class="fw-bold" >{{$consultancy->name}}?</span>
                    </h5>

                    <form method="POST" action="{{route('consultancy.apply.store',$consultancy)}}">
                        @csrf
                        @method("POST")

                        <label class="block text-gray-700 text-4xl lg:text-lg font-bold mb-2 text-left pt-3 text-lg">
                        {{ __('Course') }}:
                        </label>

                        <select name="course_id" class="form-select" aria-label="Default select example" id="courseSelect">
                          <option selected value="0" disabled>All</option>
                          @foreach ($consultancy->courses as $course)
                            <option value="{{$course->id}}">{{$course->name}}</option>
                          @endforeach
                        </select>

                        <input type="hidden" name="consultancy_id" value="{{$consultancy->id}}">

                        <div class="my-6">
                          <label class="block text-gray-700 text-4xl lg:text-lg font-bold mb-2 text-left pt-3">
                          {{ __('Name') }}:
                          </label>
                          <input class="form-control" type="text" name="name" value="" placeholder="Full Name" required>
                        </div>

                        <div class="my-6">
                          <label class="block text-gray-700 text-4xl lg:text-lg font-bold mb-2 text-left pt-3">
                          {{ __('Email') }}:
                          </label>
                          <input type="text" class="form-control" name="email" value="" placeholder=" email@example.com" required>
                        </div>

                        <div class="my-6">
                          <label class="block text-gray-700 text-4xl lg:text-lg font-bold mb-2 text-left pt-3">
                          {{ __('Phone Number') }}:
                          </label>
                          <input type="number" class="form-control" name="phone_number" value="" placeholder="981203901" required>
                        </div>
                        @if($errors->any())
                            {!! implode('', $errors->all('<div>:message</div>')) !!}
                        @endif

                        <div class="form-check form-switch my-6 ps-0">
                          <label class="block text-gray-700 text-4xl lg:text-lg font-bold mb-1 text-left pt-3" style="width:100%;">
                          {{ __('Request Call') }}:
                          </label>
                          <br>
                          <input name="requested_call" class="form-check-input" style="margin-left:0px; height:25px; width:50px;" type="checkbox" id="requestedCall">
                        </div>

                        <div class="form-check form-switch my-6 ps-0">
                          <label class="block text-gray-700 text-4xl lg:text-lg font-bold mb-1 text-left pt-3" style="width:100%;">
                          {{ __('Demo Class') }}:
                          </label>
                          <br>
                          <input name="demo_class" class="form-check-input" style="margin-left:0px; height:25px; width:50px;" type="checkbox" id="demoClass">
                        </div>

                        <br>
                        <br>

                          <div class="block text-gray-700 text-4xl lg:text-lg font-bold mb-2 text-left pt-3">
                            <button type="submit" class="bg-themecolor-200 hover:bg-themecolor-100 text-gray-100 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                {{ __('Submit') }}
                            </button>
                          </div>
                    </form>
                  {{-- </div> --}}
                {{-- </div> --}}

        </div>


      </div>
          </div>
      <div class="col">
      </div>
      </div>
      </div>

      <script type="text/javascript">

      var handleStarsEnter = function(){
          var filled = 'M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z'
          var currElem = $(this)
          for (var i = 0; i < currElem.parent()[0].children.length; i=i+2) {
            currElem.parent()[0].children[i].children[0].children[0].setAttribute("d", filled)
            if (currElem.parent()[0].children[i] === currElem[0]) {
              break;
            }

          }
          $(document).on('mouseout', '#stars1Label, #stars2Label, #stars3Label, #stars4Label, #stars5Label', handleStarsLeave);
      }
      var handleStarsLeave = function(event){
        // console.log(event);
        var empty = 'M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z'
        var currElem = $(this)
        for (var i = 0; i < currElem.parent()[0].children.length; i=i+2) {
          currElem.parent()[0].children[i].children[0].children[0].setAttribute("d", empty)
        }
        $(this).children('svg')[0].children[0].setAttribute("d", empty)
      }

      $(document).on('mouseover', '#stars1Label, #stars2Label, #stars3Label, #stars4Label, #stars5Label', handleStarsEnter);

      $(document).on('mouseout', '#stars1Label, #stars2Label, #stars3Label, #stars4Label, #stars5Label', handleStarsLeave);

      $(document).on('click', '#stars1Label, #stars2Label, #stars3Label, #stars4Label, #stars5Label', function(event){

          // $(this).chech
          $(document).off('mouseout', '#stars1Label, #stars2Label, #stars3Label, #stars4Label, #stars5Label', handleStarsLeave);

      });

      </script>
  </x-app-layout>

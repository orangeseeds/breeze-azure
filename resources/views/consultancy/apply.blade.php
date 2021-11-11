  <x-app-layout>

      <div class="container mt-5 py-5">
        <div class="row">
          <div class="col">
          </div>

          <x-consultancy-profile-card :consultancy="$consultancy" />

          <div class="col-md-7" data-spy="scroll" data-target="#EpicNavbars" data-offset="10">
            <div class="card px-2">
              <div class="card-body py-4">

                    <h5 class="card-title fs-5 fw-bold mb-2" style="color:#444444;">Apply For
                      <span class="fw-bold" >{{$consultancy->name}}?</span>
                    </h5>

                    <form method="POST" action="{{route('consultancy.apply.store',$consultancy)}}">
                        @csrf
                        @method("POST")

                        <label class="block text-gray-700 text-4xl lg:text-lg font-bold mb-2 text-left pt-3 text-lg">
                        {{ __('Course') }}:
                        </label>

                        <select name="course_id" class="form-select @error('course_id')border border-danger @enderror" aria-label="Default select example" id="courseSelect">
                          <option selected value="0" disabled>All</option>
                          @foreach ($consultancy->courses as $course)
                            <option value="{{$course->id}}">{{$course->name}}</option>
                          @endforeach
                        </select>
                        @error ('course_id')
                          <x-form-validation-error>
                            {{ $errors->first('course_id') }}
                          </x-form-validation-error>
                        @enderror

                        <input type="hidden" name="consultancy_id" value="{{$consultancy->id}}">

                        <div class="my-6">
                          <label class="block text-gray-700 text-4xl lg:text-lg font-bold mb-2 text-left pt-3">
                          {{ __('Name') }}:
                          </label>
                          <input class="form-control @error('name')border border-danger @enderror" type="text" name="name" value="{{ old('name')}}" required placeholder="Full Name" >
                          @error ('name')
                            <x-form-validation-error>
                              {{ $errors->first('name') }}
                            </x-form-validation-error>

                          @enderror
                        </div>

                        <div class="my-6">
                          <label class="block text-gray-700 text-4xl lg:text-lg font-bold mb-2 text-left pt-3">
                          {{ __('Email') }}:
                          </label>
                          <input type="text" class="form-control @error('email')border border-danger @enderror" name="email" value="{{ old('email')}}" required placeholder=" email@example.com" >
                          @error ('email')
                            <x-form-validation-error>
                              {{ $errors->first('email') }}
                            </x-form-validation-error>
                          @enderror
                        </div>

                        <div class="my-6">
                          <label class="block text-gray-700 text-4xl lg:text-lg font-bold mb-2 text-left pt-3">
                          {{ __('Phone Number') }}:
                          </label>
                          <input type="number" class="form-control @error('phone_number')border border-danger @enderror" name="phone_number" value="{{ old('phone_number')}}" required placeholder="981203901" >
                          @error ('phone_number')
                            <x-form-validation-error>
                              {{ $errors->first('phone_number') }}
                            </x-form-validation-error>
                          @enderror
                        </div>

                        <div class="form-check form-switch my-6 ps-0">
                          <label class="block text-gray-700 text-4xl lg:text-lg font-bold mb-1 text-left pt-3" style="width:100%;">
                          {{ __('Request Call') }}:
                          </label>
                          <br>
                          <input name="requested_call" class="form-check-input" style="margin-left:0px; height:25px; width:50px;" type="checkbox" id="requestedCall">
                          @error ('requested_call')
                            <x-form-validation-error>
                              {{ $errors->first('requested_call') }}
                            </x-form-validation-error>
                          @enderror
                        </div>

                        <div class="form-check form-switch my-6 ps-0">
                          <label class="block text-gray-700 text-4xl lg:text-lg font-bold mb-1 text-left pt-3" style="width:100%;">
                          {{ __('Demo Class') }}:
                          </label>
                          <br>
                          <input name="demo_class" class="form-check-input" style="margin-left:0px; height:25px; width:50px;" type="checkbox" id="demoClass">
                          @error ('demo_class')
                            <x-form-validation-error>
                              {{ $errors->first('demo_class') }}
                            </x-form-validation-error>
                          @enderror
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

<x-app-layout>

  <x-slot name="pagetitle">
    Review {{$consultancy->name}} - Breeze
  </x-slot>

    <div class="container mt-5 py-5">
      <div class="row">
        <div class="col spacing-col">
        </div>

        <x-consultancy-profile-card :consultancy="$consultancy" />

        <div class="col-md-7 content-col" data-spy="scroll" data-target="#EpicNavbars" data-offset="10">
          <div class="card px-2">
            <div class="card-body py-4">
              {{-- <h5 id="Reviews" class="card-title fs-5 fw-bold">Reviews</h5> --}}
              {{-- <div class="card py-4 mt-4 border-0 border-bottom border-top rounded-0"> --}}
                <!-- <div class="card-header text-white fw" style="opacity: 60%; background: red;">
                  Featured
                </div> -->
                {{-- <div class="card-body pl-3 rate"> --}}
                  <h5 class="card-title fs-5 fw-bold mb-2" style="color:#444444;">How Would You Rate Your Experience with
                    <span class="fw-bold" >{{$consultancy->name}}?</span>
                  </h5>

                  <form method="POST" action="{{route('review.store',$consultancy)}}">
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
                        <input required class="form-control @error('writer_name')border border-danger @enderror" type="text" name="writer_name" value="{{ old('writer_name') }}" placeholder="Full Name" >
                        @error ('writer_name')
                          <x-form-validation-error>
                          {{ $errors->first('writer_name') }}
                        </x-form-validation-error>
                        @enderror
                      </div>

                      <div class="my-6">
                        <label class="block text-gray-700 text-4xl lg:text-lg font-bold mb-2 text-left pt-3">
                        {{ __('Email') }}:
                        </label>
                        <input required type="text" class="form-control @error('writer_email')border border-danger @enderror" name="writer_email" value="{{ old('writer_email') }}" placeholder=" email@example.com" >
                        @error ('writer_email')
                          <x-form-validation-error>
                          {{ $errors->first('writer_email') }}
                        </x-form-validation-error>
                        @enderror
                      </div>

                      <div class="flex mb-3">
                        <label class="block text-gray-700 text-4xl lg:text-lg font-bold mb-2 text-left pt-3">
                        {{ __('Joined Year') }}:
                        </label>
                        <select name="joined_at" class="form-select @error('joined_at')border border-danger @enderror" >
                        <option value="{{date('Y')}}">{{date('Y')}}</option>
                          @for ($i=1; $i < 40; $i++)
                            <option value="{{date('Y')-$i}}">{{date('Y')-$i}}</option>
                          @endfor
                        </select>
                        @error ('joined_at')
                          <x-form-validation-error>
                            {{ $errors->first('joined_at') }}
                          </x-form-validation-error>
                        @enderror
                      </div>

                      <span class="block text-gray-700 text-4xl lg:text-lg font-bold mb-2 text-left">
                        Rating
                      </span>
                      <div class="block text-gray-700 text-4xl lg:text-lg font-bold mb-2 text-left mt-1">
                        <label id="stars1Label" for="stars1">
                          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#444444" class="bi bi-star" viewBox="0 0 16 16">
                            <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                          </svg>
                        </label>
                        <input id="stars1" type="radio" name="rating" value="1" hidden>

                        <label id="stars2Label" for="stars2">
                          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#444444" class="bi bi-star" viewBox="0 0 16 16">
                            <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                          </svg>
                        </label>
                        <input id="stars2" type="radio" name="rating" value="2" hidden>

                        <label id="stars3Label" for="stars3">
                          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#444444" class="bi bi-star" viewBox="0 0 16 16">
                            <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                          </svg>
                        </label>
                        <input id="stars3" type="radio" name="rating" value="3" hidden>

                        <label id="stars4Label" for="stars4">
                          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#444444" class="bi bi-star" viewBox="0 0 16 16">
                            <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                          </svg>
                        </label>
                        <input id="stars4" type="radio" name="rating" value="4" hidden>

                        <label id="stars5Label" for="stars5">
                          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#444444" class="bi bi-star" viewBox="0 0 16 16">
                            <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                          </svg>
                        </label>
                        <input id="stars5" type="radio" name="rating" value="5" hidden>

                      </div>
                      @error ('rating')
                        <x-form-validation-error>
                          {{ $errors->first('rating') }}
                        </x-form-validation-error>
                      @enderror

                      <div class="">
                        <label class="block text-gray-700 text-4xl lg:text-lg font-bold mb-2 text-left pt-3">
                          {{ __('Review') }}:
                        </label>
                        <textarea required id="description" name="description" class="form-control @error('description')border border-danger @enderror" placeholder="Tell us about your experience in {{$consultancy->name}}."  style="min-height: 200px;">{{ old('description') }}</textarea>
                        @error ('description')
                          <x-form-validation-error>
                          {{ $errors->first('description') }}
                        </x-form-validation-error>
                        @enderror
                      </div>

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

{{-- @extends('comps.app')

@section('content')

  <form action="{{route('contactUs')}}" class="form bg-white py-6 my-10 relative lg:w-2/3 px-4 mx-4 lg:px-6 lg:mx-auto border border-gray-400 rounded shadow-md" method="post">
    @csrf
    @method('POST')
                <h3 class="text-2xl text-gray-900 font-semibold">Please Leave a message</h3>
                <input type="email" id="email" name="email" placeholder="Your Email" class="border p-2 w-full mt-3 rounded text-3xl lg:text-base" required>
                @error ('email')
                  <p class="text-sm text-red-600">{{ $errors->first('email')}}</p>
                @enderror
                <textarea name="message" id="message" cols="10" rows="3" placeholder="Tell us about desired property" class="h-64 border p-2 mt-3 w-full rounded text-3xl lg:text-base" required></textarea>
                <button type="submit" class="w-full mt-6 bg-purple-600 hover:bg-gray-400 text-white font-semibold p-3 rounded">
                  Submit Query
                </button>
    </form>

@if (session('message'))
    <div class="flex bg-white py-6 my-10 relative lg:w-2/3 px-4 mx-4 lg:px-6 lg:mx-auto border border-gray-400 rounded shadow-md">
      <img class="w-8 h-8" src="{{url('pic/tick.svg')}}" alt="">
      <p class="px-6">
        <span class="text-xl">Thank You!</span>
        <br>
        {{session('message')}}
      </p>
    </div>
  @endif


@endsection --}}

<x-app-layout>

    <div class="container mt-5 py-5">
      <div class="row">
        <div class="col">
        </div>


        <div class="col-md-7" data-spy="scroll" data-target="#EpicNavbars" data-offset="10">
          <div class="card px-2">
            <div class="card-body py-4">

                  <h5 class="card-title fs-5 fw-bold mb-2" style="color:#444444;">
                  Leave Us a Message.
                  </h5>

                  <form method="POST" action="">
                      @csrf
                      @method("POST")

                      <div class="my-6">
                        <label class="block text-gray-700 text-4xl lg:text-lg font-bold mb-2 text-left pt-3">
                        {{ __('Email') }}:
                        </label>
                        <input type="text" class="form-control" name="writer_email" value="" placeholder=" Your email" required>
                      </div>

                      <div class="">
                        <label class="block text-gray-700 text-4xl lg:text-lg font-bold mb-2 text-left pt-3">
                          {{ __('Message') }}:
                        </label>
                        <textarea id="description" name="description" class="form-control" placeholder="Tell us about your desired property" required style="min-height: 200px;"></textarea>
                      </div>

                        <div class="block text-gray-700 text-4xl lg:text-lg font-bold mb-2 text-left pt-3">
                          <button type="submit" class="bg-themecolor-200 hover:bg-themecolor-100 text-gray-100 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                              {{ __('Submit') }}
                          </button>
                        </div>
                  </form>

      </div>


    </div>
        </div>
    <div class="col">
    </div>
    </div>
    </div>
</x-app-layout>

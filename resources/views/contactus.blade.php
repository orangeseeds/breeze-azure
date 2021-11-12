<x-app-layout>
    @if (session()->has('success'))
      <x-notification time="3" id="1" style="position:absolute; top:62px; right:5%; z-index:10000;">
        {{session()->get('success')}}
      </x-notification>
    @endif
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

                  <form method="POST" action="{{route('contactUs')}}">
                      @csrf
                      @method("POST")

                      <div class="my-6">
                        <label class="block text-gray-700 text-4xl lg:text-lg font-bold mb-2 text-left pt-3">
                        {{ __('Email') }}:
                        </label>
                        <input type="email" class="form-control @error('email')border border-danger @enderror" name="email" value="" placeholder=" Your email" >
                          @error ('email')
                            <x-form-validation-error>
                              {{ $errors->first('email') }}
                            </x-form-validation-error>
                          @enderror
                      </div>

                      <div class="">
                        <label class="block text-gray-700 text-4xl lg:text-lg font-bold mb-2 text-left pt-3">
                          {{ __('Message') }}:
                        </label>
                        <textarea id="message" name="message" class="form-control @error('message')border border-danger @enderror" placeholder="Tell us about your desired property"  style="min-height: 200px;"></textarea>
                          @error ('message')
                            <x-form-validation-error>
                              {{ $errors->first('message') }}
                            </x-form-validation-error>
                          @enderror
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

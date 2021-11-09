<div id="head-consultancy" class="flex flex-col h-auto mt-0 my-28 mx-4 px-4 lg:mx-40 lg:px-40">
<div class="w-full bg-white overflow-hidden border-l border-r border-b shadow-md p-1 pt-0 rounded-b-lg">
  <div class="rounded-b-lg h-64 relative .-lg">
    {{-- Cover --}}
    <img class="rounded-b-lg object-cover h-full w-full" src="{{ asset('/storage/'.$consultancy->cover_picture) }}" alt="">
    <div class="rounded-full w-40 h-40 bg-gray-200 border-4 border-black absolute bottom-0 left-0 rounded ml-1 mb-1 .-md">
      {{-- Profile Pic --}}
      <img class="rounded-full w-full h-full" src="{{ asset('/storage/'.$consultancy->profile_picture) }}" alt="">
    </div>
  </div>
  <div class="flex relative">
    <a href="{!! route('consultancy.apply', $consultancy) !!}">
    <button class=" text-gray-700 font-medium absolute top-0 right-0 border px-4 py-2 mt-10 mr-6 rounded hover:bg-gray-300 hover:shadow-lg" type="button" name="button">
        Apply for Consultancy
    </button>
  </a>
    <div class="px-6 py-4">
      <p class="text-gray-700 text-4xl text-bold">
        {{ $consultancy->name }}<br>
      </p>
      <div class="text-gray-700 text-base">
        <a href="#">
          <img class="inline w-4 h-4" src="{{url('/pic/location.png')}}" alt="">
          <p class="inline">{{ $consultancy->location}}</p></a>
      </div>
    </div>
  </div>
</div>
</div>

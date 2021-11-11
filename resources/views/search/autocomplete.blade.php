{{-- <div class="absolute left-0 rounded-b-lg w-full bg-white border border-gray-200 border-t-0 text-left px-4 shadow-md">
  <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
  @foreach($data as $result)

     <p class="leading-none">{{$result->name}}
       <br>
       <span class="text-xs text-gray-500">{{$result->location}}</span>
     </p>
  @endforeach
  </div>
</div> --}}

@foreach($data as $result)
  <a href="{{route('consultancy.show',$result->slug)}}" style="text-decoration: none; color:inherit;">
    <button value="{{$result->slug}}" type="button" class="list-group-item text-start" style="padding:0.3rem 0.6rem;">
      {{$result->name}}
      <p class="fw-lighter text-muted" style="font-size: 14px; margin-bottom:0px;">{{$result->location}}</p>
  </a>

  </button>
@endforeach

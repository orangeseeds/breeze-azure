<div class="absolute left-0 rounded-b-lg w-full bg-white border border-gray-200 border-t-0 text-left px-4 shadow-md">
  <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
  @foreach($data as $result)

   <a href="/consultancy/{{$result->slug}}" class="block px-2 py-2 text-md text-gray-700 hover:bg-gray-100 hover:text-gray-900">
     <p class="leading-none">{{$result->name}}
       <br>
       <span class="text-xs text-gray-500">{{$result->location}}</span>
     </p>
   </a>
  @endforeach
  </div>
</div>

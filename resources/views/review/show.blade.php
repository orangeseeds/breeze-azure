
<div class="text-left text-gray-700 text-xl lg:text-base mb-6">
  @include('comps.stars',['rating'=>$review->rating])
<p class="py-2">
  {{$review->description}}
</p>
<span class="text-gray-500 text-lg lg:text-xs">{{$review->created_at}}</span>
<hr>
</div>

@props([
  'title'=>'',
  'body'=>'Performed action was successfully completed!'
])

<div id="hideMe" class="w-4/5 bg-green-100 border-l-4 border-green-500 text-green-700 px-4 pt-2 pb-1 fixed top-5" role="alert">
  @if($title != "")
    <p class="font-bold">{{$title}}</p>
  @endif
  {{-- <p></p> --}}
  @if($body != "")
    <p>{{$body}}</p>
  @endif

  {{$slot}}
</div>

<style media="screen">
#hideMe {
  -moz-animation: cssAnimation 0s ease-in 5s forwards;
  /* Firefox */
  -webkit-animation: cssAnimation 0s ease-in 5s forwards;
  /* Safari and Chrome */
  -o-animation: cssAnimation 0s ease-in 5s forwards;
  /* Opera */
  animation: cssAnimation 0s ease-in 5s forwards;
  -webkit-animation-fill-mode: forwards;
  animation-fill-mode: forwards;
  opacity: 90%;
}
@keyframes cssAnimation {
  to {
      width:0;
      height:0;
      overflow:hidden;
      opacity: 0;
      display: none;
  }
}
@-webkit-keyframes cssAnimation {
  to {
      width:0;
      height:0;
      opacity: 0;
      visibility:hidden;
      display: none;
  }
}
</style>

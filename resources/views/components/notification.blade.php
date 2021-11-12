{{-- @props([
  'title'=>'',
  'body'=>'Performed action was successfully completed!'
])

<div id="hideMe" class="w-4/5 bg-green-100 border-l-4 border-green-500 text-green-700 px-4 pt-2 pb-1 fixed top-5" role="alert">
  @if($title != "")
    <p class="font-bold">{{$title}}</p>
  @endif
  @if($body != "")
    <p>{{$body}}</p>
  @endif

  {{$slot}}
</div>

<style media="screen">
#hideMe {
  -moz-animation: cssAnimation 0s ease-in 5s forwards;
  -webkit-animation: cssAnimation 0s ease-in 5s forwards;
  -o-animation: cssAnimation 0s ease-in 5s forwards;
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
</style> --}}
{{-- <div id="hideMe" class="w-4/5 bg-green-100 border-l-4 border-green-500 text-green-700 px-4 pt-2 pb-1 fixed top-5" role="alert">
  @isset($title)
    <p class="font-bold">{{$title}}</p>
  @endisset
  @isset($body)
    <p>{{$body}}</p>
  @endisset

  {{$slot}}
</div> --}}

@props([
  'time' => 5,
  'id' => 1,
])

<div id="hideMe{{$id}}" class="toast align-items-center text-white bg-success border-0 ms-auto" role="alert" aria-live="assertive" aria-atomic="true" role="alert">
  <div class="d-flex">
    <div class="toast-body" style="color: white !important; font-size:12px !important;">
      {{$slot}}
    </div>
  </div>
</div>

<style media="screen">
#hideMe{{$id}} {
  -moz-animation: cssAnimation{{$id}} 0s ease-in {{$time}}s forwards;
  /* Firefox */
  -webkit-animation: cssAnimation{{$id}} 0s ease-in {{$time}}s forwards;
  /* Safari and Chrome */
  -o-animation: cssAnimation{{$id}} 0s ease-in {{$time}}s forwards;
  /* Opera */
  animation: cssAnimation{{$id}} 0s ease-in {{$time}}s forwards;
  -webkit-animation-fill-mode: forwards;
  animation-fill-mode: forwards;
  opacity: 90%;
}
@keyframes cssAnimation{{$id}} {
  to {
      width:0;
      height:0;
      overflow:hidden;
      opacity: 0;
      display: none;
  }
}
@-webkit-keyframes cssAnimation{{$id}} {
  to {
      width:0;
      height:0;
      opacity: 0;
      visibility:hidden;
      display: none;
  }
}
</style>

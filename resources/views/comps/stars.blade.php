@php
  if (!isset($size)){
    $size =3;
  };
@endphp

<div class="flex items-center py-1 w-auto">
  @foreach(range(1,5) as $i)
    <svg class="w-{{$size}} h-{{$size}} fill-current text-{{$i<=$rating?'yellow':'gray'}}-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
  @endforeach
</div>

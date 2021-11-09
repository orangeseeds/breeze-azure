
@php
  foreach ($ratings as $key => $value) {
    $percentage[$key] = ($value/$count)*100;
  }
@endphp

<div class="graph space-y-2 p-4 lg:p-3 pl-0 text-left text-sm mr-0">
  <div class="w-full" style="background-color:#F4F5FA;">
    <div class="bar-5 bg-green-500 h-8 lg:h-8 px-6 py-1 lg:py-1" style='width:{{$percentage["5.00"]}}%;'>
      <span class="inline-block align-middle">Excellent-{{$ratings["5.00"]}}</span>
    </div>
  </div>
  <div class="w-full" style="background-color:#F4F5FA;">
    <div class="bar-4 bg-green-400 h-8 lg:h-8 px-6 py-1 lg:py-1" style='width:{{$percentage["4.00"]}}%;'>
    <span class="inline-block align-middle">Verygood-{{$ratings["4.00"]}}</span>
  </div>
  </div>
  <div class="w-full" style="background-color:#F4F5FA;">
    <div class="bar-3 bg-yellow-300 h-8 lg:h-8 px-6 py-1 lg:py-1" style='width:{{$percentage["3.00"]}}%;'>
    <span class="inline-block align-middle">Average-{{$ratings["3.00"]}}</span>
  </div>
  </div>
  <div class="w-full" style="background-color:#F4F5FA;">
    <div class="bar-2 bg-yellow-500 h-8 lg:h-8 px-6 py-1 lg:py-1" style='width:{{$percentage["2.00"]}}%;'>
    <span class="inline-block align-middle">Poor-{{$ratings["2.00"]}}</span>
  </div>
  </div>
  <div class="w-full" style="background-color:#F4F5FA;">
    <div class="bar-1 bg-orange-400 h-8 lg:h-8 px-6 p-1 lg:py-1" style='width:{{$percentage["1.00"]}}%;'>
    <span class="inline-block align-middle">Terrible-{{$ratings["1.00"]}}</span>
  </div>
  </div>
</div>

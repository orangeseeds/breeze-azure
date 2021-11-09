
<div class="">
<div class=" text-4xl lg:text-2xl mb-4">
  <h1>{{$course->name}}</h1>
</div>
<div class="flex flex-row text-gray-700 text-base mb-3">
  <div class="flex flex-col space-y-4 w-1/4 text-2xl lg:text-base">
    <span class="">cost</span>
    <span class="">Duration</span>
  </div>
  <div class="flex flex-col font-bold space-y-4 w-1/4 text-2xl lg:text-base">
    <span class="">Rs {{$course->pivot->price}}</span>
    <span class="">{{$course->pivot->course_duration}} months</span>
  </div>
  <div class="flex flex-col space-y-4 w-1/4 text-2xl lg:text-base">
    <span class="">Average Score</span>
    <span class="">Avg Class Size</span>
  </div>
  <div class="flex flex-col font-bold space-y-4 w-1/4 text-2xl lg:text-base">
    <span class="">{{$course->pivot->average_score}}</span>
    <span class="">{{$course->pivot->class_size}}</span>
  </div>
</div>
</div>


<script type="text/javascript" src="{{ asset('js/filter.js') }}" defer></script>
<div id="filter-box" class="bg-white w-full h-full px-16 py-10 lg:w-72 h-auto lg:ml-32 text-gray-700 lg:px-6 lg:py-4 lg:my-2 lg:rounded z-0 filter">

<button id="filter-close" class="text-2xl absolute top-0 right-0 py-10 px-10 visible lg:invisible" type="button" name="button">Close</button>
<span class="font-semibold text-5xl lg:text-2xl mb-10 w-1/2">
  Filters
</span>
<span>
  <a href="{!! route('consultancy.index') !!}" class="hover:underline text-2xl lg:text-sm">Reset filters</a>
</span>

<div class="py-5 space-y-4">
<span class="text-4xl lg:text-base font-semibold">
  No of reviews
</span>
<br>
<form name="reviews_number" class="lg:space-y-4 text-3xl lg:text-base">
<input id="reviews-radio" class="filter-radio" type="radio" name="reviews" value="0" checked >
<label for="reviews">0+</label>
<br>
<input id="reviews-radio" class="filter-radio" type="radio" name="reviews" value="10">
<label for="reviews">10+</label>
<br>
<input id="reviews-radio" class="filter-radio" type="radio" name="reviews" value="25">
<label for="reviews">25+</label>
<br>
<input id="reviews-radio" class="filter-radio" type="radio" name="reviews" value="55">
<label for="reviews">55+</label>
<br>
<input id="reviews-radio" class="filter-radio" type="radio" name="reviews" value="115">
<label for="reviews">115+</label>
<br>
</form>
</div>

<div class="py-5">
  <div id="range-slider-rating">
<span class="text-4xl lg:text-base font-semibold">Rating</span>
    <p class="text-3xl lg:text-base py-3 lg:py-1">
      <input type="text" id="rating-range" readonly class="border-0">
    </p>
<div id="slider-range-rating"></div>
</div>
</div>

<div class="py-5 space-y-6 lg:space-y-0">
  <span class="text-4xl lg:text-base font-semibold">
    Available Courses
  </span>
  <select id="filter_course" class="border rounded px-4 py-6 lg:py-2 text-3xl lg:text-base w-full hover:bg-gray-200" name="filter_course">
    <option value="0">All</option>
    @foreach (App\Models\Course::all() as $course )
      <option id="filter_course_select" value="{{$course->id}}">{{$course->name}}</option>
    @endforeach
  </select>
</div>

<div class="py-5">
  <div id="range-slider-price">
<span class="text-4xl lg:text-base font-semibold">Price</span>
    <p class="text-3xl lg:text-base py-3 lg:py-1">
      Rs. <input type="text" id="price-range" readonly style="border:0;">
    </p>
<div id="slider-range-price"></div>
</div>
</div>

<div class="py-5 space-y-6 lg:space-y-0">
  <span class="text-4xl lg:text-base font-semibold">
    Country
  </span>
  <br>
  <select id="filter_country" class="border rounded px-4 py-6 lg:py-2 text-3xl lg:text-base w-full hover:bg-gray-200" name="filter_country">
    <option value="0">All</option>
    @foreach (App\Models\Country::all() as $country )
      <option id="filter_country_select" value="{{$country->id}}">{{$country->name}}</option>
    @endforeach
  </select>
</div>

<div class="py-5 space-y-6 lg:space-y-0">
  <span class="text-4xl lg:text-base font-semibold">
    Class Size
  </span>
  <div class="flex text-3xl lg:text-base space-x-2 w-full">
    <button id="class_size_filter" class="border py-6 px-24 lg:p-2 rounded shadow-xs bg-gray-100 hover:bg-gray-200" type="button" value="20">Small</button>
    <button id="class_size_filter" class="border py-6 px-24 lg:p-2 rounded shadow-xs bg-gray-100 hover:bg-gray-200" type="button" value="60">Medium</button>
    <button id="class_size_filter" class="border py-6 px-24 lg:p-2 rounded shadow-xs bg-gray-100 hover:bg-gray-200" type="button" value="100">Large</button>
  </div>
</div>

</div>

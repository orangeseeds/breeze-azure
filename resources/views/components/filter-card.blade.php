<div class="col-md-3 ps-3 mb-3 me-4">
  <div class="card px-3 overflow-hidden bg-white position-relative py-4" style="height:auto;">
    <div class="card-body">
      <h5 class="card-title fs-5 fw-bold" style="color:#444444;">Filters</h5>
      <h6 id="resetFilters" class="card-subtitle mb-2 text-muted">
        {{-- <button  type="button" name="button"> --}}
          Reset Filters
        {{-- </button> --}}
      </h6>

      <div class="mt-4">
        <h5 class="card-title fs-6 fw-bold" style="color:#444444;">No. of Reviews</h5>
        <div class="form-check">
          <input class="form-check-input" value="0" type="radio" name="review_count" id="zero" checked>
          <label class="form-check-label" for="zero">
           0+
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" value="50" type="radio" name="review_count" id="fifty">
          <label class="form-check-label" for="ten">
            50+
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" value="100" type="radio" name="review_count" id="hundred">
          <label class="form-check-label" for="twenty">
            100+
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" value="500" type="radio" name="review_count" id="fivehundred">
          <label class="form-check-label" for="fifty">
            500+
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" value="1000" type="radio" name="review_count" id="thousand">
          <label class="form-check-label" for="hundred">
            1000+
          </label>
        </div>
      </div>

      <div class="mt-4 range-wrap">
        <h5 class="card-title fs-6 fw-bold" style="color:#444444;">Rating</h5>
        <label id="ratingSliderlabel" for="ratingSlider" class="form-label">Stars </label>
        <output class="badge bg-secondary"> 3 </output>
        <input type="range" class="form-range" min="1" value="3" max="5" id="ratingSlider" name="ratingSlider" oninput="this.previousElementSibling.value = this.value">
      </div>

      <div class="mt-4">
        <h5 class="card-title fs-6 fw-bold" style="color:#444444;">Available Courses</h5>
        <select class="form-select" aria-label="Default select example" id="courseSelect">
          <option selected value="0">All</option>
          @foreach (App\Models\Course::all() as $course)
            <option value="{{$course->id}}">{{$course->name}}</option>
          @endforeach
        </select>
      </div>

      <div class="mt-4 range-wrap">
        <h5 class="card-title fs-6 fw-bold" style="color:#444444;">Price</h5>
        <label for="priceSlider" id="priceSliderlabel" class="form-label">Rs. </label>
        <output class="badge bg-secondary"> 10000 </output>
        <input type="range" disabled class="form-range" min="2000" value="10000" max="20000" step="2000" id="priceSlider" oninput="this.previousElementSibling.value = this.value">
      </div>

      <div class="mt-4">
        <h5 class="card-title fs-6 fw-bold" style="color:#444444;">Country</h5>
        <select class="form-select" aria-label="Default select example" id="countrySelect">
          <option selected value="0">All</option>
          @foreach (App\Models\Country::all() as $country)
            <option value="{{$country->id}}">{{$country->name}}</option>
          @endforeach
        </select>
      </div>

      <div class="mt-4">
        <h5 class="card-title fs-6 fw-bold" style="color:#444444;">Class Size</h5>
        <div class="btn-group" role="group" aria-label="Basic example" style="width:100%;">
          <button id="#classSizeButtonSML" disabled type="button" value="50" class="btn btn-theme" onclick="this.parentElement.lastElementChild.value = this.value; getValues();">
            Small
            <output class="badge bg-secondary" style="font-size:10px;"> 50 </output>
          </button>
          <button id="#classSizeButtonMID" disabled type="button" value="100" class="btn btn-theme" onclick="this.parentElement.lastElementChild.value = this.value; getValues();">
            Medium
            <output class="badge bg-secondary" style="font-size:10px;"> 100 </output>
          </button>
          <button id="#classSizeButtonLRG" disabled type="button" value="150" class="btn btn-theme" onclick="this.parentElement.lastElementChild.value = this.value; getValues();">
            Large
            <output class="badge bg-secondary" style="font-size:10px;"> 150 </output>
          </button>
          <input type="number" name="class_size" value="150" hidden>
        </div>
      </div>

    </div>
  </div>
</div>

<style media="screen">
  #resetFilters:hover{
    cursor: pointer;
    text-decoration: underline;
    color: #0d6efd !important;
  }
</style>

<script type="text/javascript">

$('#ratingSlider, #priceSlider, #zero, #fifty, #hundred, #fivehundred, #thousand, #courseSelect, #countrySelect')
  .on('change', function(event) {
      // var rating_val = document.getElementById('ratingSlider').value;
      // document.getElementById('ratingSliderlabel').innerHTML = rating_val;
      getValues();

});



$('#courseSelect')
  .on('change', function(event) {


    var course = document.getElementById('courseSelect').selectedOptions[0].value;
    if (course != 0) {
      $("#priceSlider").prop('disabled', false);
      document.getElementById('#classSizeButtonSML').disabled = false;
      document.getElementById('#classSizeButtonMID').disabled = false;
      document.getElementById('#classSizeButtonLRG').disabled = false;
    }
    else{
      $("#priceSlider").prop('disabled', true);
      document.getElementById('#classSizeButtonSML').disabled = true;
      document.getElementById('#classSizeButtonMID').disabled = true;
      document.getElementById('#classSizeButtonLRG').disabled = true;
    }

});

function getValues() {

  var rating = document.getElementById('ratingSlider').value;
  var price = document.getElementById('priceSlider').value;
  var no_reviews = document.getElementsByName('review_count');
  var class_size = document.getElementsByName('class_size')[0].value;
  no_reviews.forEach((item, i) => {
    if (item.checked) {
      no_reviews = item.value;
      return false;
    };
  });

  var course = document.getElementById('courseSelect').selectedOptions[0].value;
  var country = document.getElementById('countrySelect').selectedOptions[0].value;

  course = course < 1 ? null : course;
  country = country < 1 ? null : country;

   var _token = $('input[name="_token"]').val();
   $.ajax({
    url:"/search/filter",
    method:"GET",
    data:{
      reviews : no_reviews,
      rating_range : rating,
      course : course,
      price_range : price,
      country : country,
      class_size : class_size,
       _token:_token},
    success:function(data){
     // console.log(data);
     document.getElementById('searchResult').innerHTML = data;

    }
   })

}

$('#priceSlider').slider().on('change', function(event) {
      var price_val = document.getElementById('priceSlider').value;
      // document.getElementById('priceSliderlabel').innerHTML = price_val;
});

$('#resetFilters').on('click', function(event) {
      console.log("naicee");
      document.getElementById('ratingSlider').value = 3;
      document.getElementById('priceSlider').value = 10000;
      var no_reviews = document.getElementsByName('review_count');
      no_reviews[0].checked = true;

      document.getElementById('courseSelect').getElementsByTagName('option')[0].selected = 'selected';
      document.getElementById('countrySelect').getElementsByTagName('option')[0].selected = 'selected';
      getValues()
});

</script>

<div class="col-md-3 ps-3 mb-3 me-4 filter-col">
  <div id="filterCard" class="card px-3 overflow-hidden bg-white position-relative py-4 filter-card slider closed no-padding" style="height:auto;">
    <div class="card-body">
      <button type="button" class="btn-close btn-filter-close" style="margin-left:95%;" onclick="slideFilterCard()" data-bs-dismiss="toast" aria-label="Close"></button>
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
        <output class="badge bg-secondary"> 1 </output>
        <input type="range" class="form-range" min="1" value="1" max="5" id="ratingSlider" name="ratingSlider" oninput="this.previousElementSibling.value = this.value">
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
        <output class="badge bg-secondary"> 20000 </output>
        <input type="range" disabled class="form-range" min="2000" value="20000" max="20000" step="2000" id="priceSlider" oninput="this.previousElementSibling.value = this.value">
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

$(document).ready(function() {

  var url = new URL(window.location.href);
  var search_params = url.searchParams;

  if (search_params.get('search_type') != "filter") {
    return;
  }

  if (search_params.get('reviews') != null && search_params.get('reviews') != 'null') {
    var no_reviews = document.getElementsByName('review_count');
    no_reviews.forEach((item, i) => {
      if (item.value == search_params.get('reviews')) {
        item.click();
      };
    });
  }
  if (search_params.get('rating_range') != null && search_params.get('rating_range') != 'null') {
    var rating = !isNaN(parseInt(search_params.get('rating_range'))) ? parseInt(search_params.get('rating_range')) : 1;
    document.getElementById('ratingSlider').value = rating;
    document.getElementById('ratingSlider').previousElementSibling.value = rating;
  }
  if (search_params.get('course') != null && search_params.get('course') != 'null') {
    var courses = document.getElementById('courseSelect').getElementsByTagName('option');
    for (let item of courses) {
      if (item.value == search_params.get('course')) {
        item.selected = 'selected';
      };
    }
  }
  if (search_params.get('price_range') != null && search_params.get('price_range') != 'null') {
    var price_range = !isNaN(parseInt(search_params.get('price_range'))) ? parseInt(search_params.get('price_range')) : 20000;
    document.getElementById('priceSlider').value = price_range;
    document.getElementById('priceSlider').previousElementSibling.value = price_range;
  }
  if (search_params.get('country') != null && search_params.get('country') != 'null') {
    var countries = document.getElementById('countrySelect').getElementsByTagName('option')
    for (let item of countries) {
      if (item.value == search_params.get('country')) {
        item.selected = 'selected';
      };
    }
  }
  if (search_params.get('class_size') != null && search_params.get('class_size') != 'null') {
    var class_size = !isNaN(parseInt(search_params.get('class_size'))) ? parseInt(search_params.get('class_size')) : 150;
    document.getElementsByName('class_size')[0].value = class_size;
  }
  checkIfcourseSelected();
  if (search_params.get('page')) {
    var query = "?page="+search_params.get('page');
    getValues(query);
    addtoURLFiterParams("page", search_params.get('page'));
  }
  else{
    getValues();
  }

});


$('#ratingSlider, #priceSlider, #zero, #fifty, #hundred, #fivehundred, #thousand, #courseSelect, #countrySelect')
  .on('change', function(event) {
      // var rating_val = document.getElementById('ratingSlider').value;
      // document.getElementById('ratingSliderlabel').innerHTML = rating_val;
      getValues();

});



$('#courseSelect')
  .on('change', function(event) {
    checkIfcourseSelected();
});

$('#courseSelect, #countrySelect, #ratingSlider, #priceSlider').on('keydown', function(event) {
    event.preventDefault();
});

function checkIfcourseSelected() {
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
}

function getValues(url = "") {

  var no_reviews = document.getElementsByName('review_count');
  var rating = document.getElementById('ratingSlider').value;
  var course = document.getElementById('courseSelect').selectedOptions[0].value;
  var price = document.getElementById('priceSlider').value;
  var country = document.getElementById('countrySelect').selectedOptions[0].value;
  var class_size = document.getElementsByName('class_size')[0].value;


  no_reviews.forEach((item, i) => {
    if (item.checked) {
      no_reviews = item.value;
      return false;
    };
  });
  course = course < 1 ? null : course;
  country = country < 1 ? null : country;

  addtoURLFiterParams('reviews',no_reviews);
  addtoURLFiterParams('rating_range',rating);
  addtoURLFiterParams('course',course);
  addtoURLFiterParams('price_range',price);
  addtoURLFiterParams('country',country);
  addtoURLFiterParams('class_size',class_size);

  console.log("called");
   var _token = $('input[name="_token"]').val();
   $.ajax({
    url:"/search/filter" + url,
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
     document.getElementById('searchResult').innerHTML = data;
   }
   })
}

$('#priceSlider').slider().on('change', function(event) {
      var price_val = document.getElementById('priceSlider').value;
      // document.getElementById('priceSliderlabel').innerHTML = price_val;
});

$('#resetFilters').on('click', function(event) {
      // console.log("naicee");
      document.getElementById('ratingSlider').value = 1;
      document.getElementById('priceSlider').value = 20000;
      var no_reviews = document.getElementsByName('review_count');
      no_reviews[0].checked = true;

      document.getElementById('courseSelect').getElementsByTagName('option')[0].selected = 'selected';
      document.getElementById('countrySelect').getElementsByTagName('option')[0].selected = 'selected';
      document.getElementsByName('class_size')[0].value = 150;
      document.getElementById('ratingSlider').previousElementSibling.value = 1;
      document.getElementById('priceSlider').previousElementSibling.value = 20000;
      getValues()
});

function paginationHandle(e) {
  if (getParams(e.explicitOriginalTarget.value)['page']) {
    var query = "?page="+getParams(e.explicitOriginalTarget.value)['page'];
    getValues(query);
    addtoURLFiterParams("page", getParams(e.explicitOriginalTarget.value)['page'])
  }
}

function addtoURLFiterParams(name, param) {
  var url = new URL(window.location.href);
  var search_params = url.searchParams;

  if (search_params.get('search_type') == null) {
    search_params.append('search_type', 'filter');
  }
  else {
    search_params.set('search_type', 'filter');
  }

  if (search_params.get(name) == null) {
    search_params.append(name, param);
  }
  else {
    search_params.set(name, param);
  }

  url.search = search_params.toString();
  var new_url = url.toString();
  window.history.pushState('page1', 'Title', new_url);
}

</script>



function make_ajax_call() {
  classSize = [];
  const numberReviews = Array.from(document.forms.reviews_number.elements.reviews).find(radio => radio.checked).value;
  var rating = $('#slider-range-rating').slider('values');
  var price = $('#slider-range-price').slider('values');
  classSize[0] = 0;
  classSize[1] = 60;
  var course = $('#filter_course').val();
  var country = $('#filter_country').val();
  var _token = $('input[name="_token"]').val();
  console.log(price);
  $.ajax({
   url:"/search/filter",
   method:"GET",
   data:{reviews_count:numberReviews,rating_range:rating, price_range:price,class_size:classSize,course_id:course,country:country, _token:_token},
   beforeSend: function (){
     // show loading-screen
       $("#wait").css("display", "block");
   },
   completeSend: function () {
     // stop loading-screen
       $("#wait").css("display", "none");
   },
   success:function(data){
     $('#search-index-section').empty();
     $('#search-index-section').html(data);

   }
  })


}

$(document).off().on('click', '#reviews-radio', function(e){
  make_ajax_call();
});

$( function() {
$( "#slider-range-rating" ).slider({
range: true,
min: 1,
max: 5,
step: 1,
values: [ 1,5 ],
slide: function( event, ui ) {
  $( "#rating-range" ).val(ui.values[ 0 ] + " - " + ui.values[ 1 ] );
},
stop: function( event, ui) {
make_ajax_call();
}
});

} );

$( function() {
$( "#slider-range-price" ).slider({
range: true,
min: 2000,
max: 30000,
step: 2000,
values: [ 2000, 30000 ],
slide: function( event, ui ) {
  $( "#price-range" ).val( ui.values[ 0 ] + " - " + ui.values[ 1 ] );
},
stop: function( event, ui) {
make_ajax_call();
}
});

} );

$(document).on('click', '#class_size_filter', function(e){
make_ajax_call();
});

$(document).on('change', '#filter_course', function(e){
make_ajax_call();
});

$(document).on('change', '#filter_country', function(e){
make_ajax_call();
});

$(document).on('click', '#filter-close', function(){
  $('#filter-box').css('display','none');
});

$(document).on('click', '#filter-open', function(){
  $(document).scrollTop(0);

  var fixed = document.getElementById('filter-box');
  fixed.addEventListener('touchmove', function(e){
    e.preventDefault();
  },false);
  $('#filter-box').css('display','block');
});

$(document).ready(function(){
// if (window.location.pathname.includes('/filter')) {
//   var search_details = new URLSearchParams(window.location.search)
//
//   var  radios = Array.prototype.slice.call(Array(document.getElementsByClassName('filter-radio'))[0])
//   radios.forEach(function(item){
//     if(item.value == search_details.get('numberReviews')){
//       item.checked = true;
//     }
//   });
//
//   $('#slider-range-rating').slider('values',0,search_details.get('rating_min'));
//   $('#slider-range-rating').slider('values',1,search_details.get('rating_max'));
//   $('#slider-range-price').slider('values',0,search_details.get('min_price'));
//   $('#slider-range-price').slider('values',1,search_details.get('max_price'));
//   $('#filter_course').val(search_details.get('course'));
//   $('#filter_country').val(search_details.get('country'));
// }


$( "#price-range" ).val( $( "#slider-range-price" ).slider( "values", 0 ) +
" - " + $( "#slider-range-price" ).slider( "values", 1 ) );


$( "#rating-range" ).val($( "#slider-range-rating" ).slider( "values", 0 ) +
" - " + $( "#slider-range-rating" ).slider( "values", 1 ) );
});

$(document).on('click','.pagination a', function(e){
  e.preventDefault();
  var url = $(this).attr('href');
  if (url.includes('/search/filter?')) {
    $('#search-index-section').append('<img style="position: absolute; left: 0; top: 0; z-index: 100000;" src="/images/loading.gif" />');
    $.ajax({
        url : url
    }).done(function (data) {
      $('#search-index-section').empty();
      $('#search-index-section').html(data);
    });
  }
  else {
    window.location.href= url
  }
});

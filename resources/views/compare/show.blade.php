<x-app-layout>

  <x-slot name="pagetitle">
    Compare Consultancies - Breeze
  </x-slot>

<div class="container mt-5 py-5">

  <div class="text-center mb-5">
    <h5 class="card-title fw-bold mb-0" style="color: #444444;">Compare With Breeze</h5>
    {{-- <p class="my-3">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p> --}}
    <p class="my-3">
      Compare consultancies side by side to choose the right one for you! Add up to your three favourites and compare them on the basis of ratings, courses, countries, price and class size.
    </p>
  </div>

  <div class="input-group flex-nowrap mx-auto input-container">
    @csrf
    <input onkeyup="showSuggestions()" id="compare_name" type="text" class="form-control" style="padding:15px;" placeholder="Type the name of a consultancy..." aria-label="Username" aria-describedby="addon-wrapping">
  </div>
  <ul id="suggestionList" class="list-group position-absolute d-none text-start">
    {{-- <li class="list-group-item">Cras justo odio</li> --}}
  </ul>

  <div class="row mt-5">
    <center class="d-flex compare-card-container text-start">
    <div class="col-md-3 me-1 empty compare-card-holder" style="width: 31%;">
      <x-compare-empty />
    </div>

    <div class="col-md-3 me-1 empty compare-card-holder" style="width: 31%;">
      <x-compare-empty />
    </div>

    <div class="col-md-3 me-1 empty compare-card-holder" style="width: 31%;">
      <x-compare-empty />
    </div>
  </center>


  </div>
</div>

<style media="screen">
  #compare_suggestion:hover{
      background-color: #F8F9FA;
  }
  #suggestionList{
    left: 0;
    right: 0;
    margin: auto;
    width:50vw;
    max-height: 40vh;
    overflow-y: auto;
    z-index:10;
  }
  .compare-card-container{
    justify-content: space-between;
    overflow-x: auto;
  }

  lterToggleButton{
    display: none;
  }

  .btn-filter-close{
    display: none;
  }

  .compare-card-holder{
    min-width: 330px;
    margin-right: 1rem !important;
  }
  .input-container{
    width:50vw;
  }
  @media screen and (max-width: 1200px) {
    .container{
      /* margin: auto 0px; */
      max-width:96vw;
      border-radius: 8px;
    }
    .input-container{
      width:70vw;
    }
    #suggestionList{
      width:70vw;
    }
  }
  @media screen and (max-width: 1024px) {
    .input-container{
      width:80vw;
    }
    #suggestionList{
      width:80vw;
    }
  }
  @media screen and (max-width: 755px) {
    .input-container{
      width:90vw;
    }
    #suggestionList{
      width:90vw;
    }

  }

</style>

<script type="text/javascript">
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})

function showSuggestions(e) {

        var query = document.getElementById('compare_name').value;
        if(query.length >= 2)
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"/compare/suggest",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
           // $('#suggestionList').fadeIn();
           document.getElementById('suggestionList').classList.remove("d-none")
           $('#suggestionList').html(data);
           // console.log(data);
          }
         })
        }
    }

    document.addEventListener("click", function (e) {
      var elem = document.getElementById('suggestionList');
      setTimeout(function() {
       elem.classList.add("d-none");
     }, 200);

    });

    // Your code
    $(document).on('click', '#compare_suggestion', function(){

        var consultancy = $(this).val();

        if (document.getElementById(consultancy+"card") != null) {
          return false;
        }
        if (document.getElementsByClassName('empty').length < 1) {
          return false;
        }

        var _token = $('input[name="_token"]').val();
        $.ajax({
         url:"/compare/add",
         method:"GET",
         data:{query:consultancy, _token:_token},
         success:function(data){
          document.getElementsByClassName('empty')[0].innerHTML=data;
          document.getElementsByClassName('empty')[0].classList.add('filled');
          document.getElementsByClassName('empty')[0].classList.remove('empty');

          addtoURL(consultancy)

         }
       });
    });

    $(document).on('click', '#add_button', function(){

      document.getElementById('compare_name').focus();

    });

    function addtoURL(consultancy) {
      var url = new URL(window.location.href);
      var search_params = url.searchParams;

      if (search_params.get('cons1') == null) {
        search_params.append('cons1', consultancy);
      }
      else if (search_params.get('cons2') == null) {
        search_params.append('cons2', consultancy);
      }
      else if (search_params.get('cons3') == null) {
        search_params.append('cons3', consultancy);
      }

      url.search = search_params.toString();
      var new_url = url.toString();
      window.history.pushState('page1', 'Title', new_url);
    }

    function removefromUrl(consultancy) {
      var url = new URL(window.location.href);
      var search_params = url.searchParams;

      if (search_params.get('cons1') == consultancy) {
        search_params.delete('cons1');
      }
      else if (search_params.get('cons2') == consultancy) {
        search_params.delete('cons2');
      }
      else if (search_params.get('cons3') == consultancy) {
        search_params.delete('cons3');
      }
      url.search = search_params.toString();
      var new_url = url.toString();
      window.history.pushState('page1', 'Title', new_url);
    }

    $( document ).ready(function() {

      var url = new URL(window.location.href);
      var search_params = url.searchParams;

      if (search_params.get('cons1') != null) {
        getFilled(search_params.get('cons1'))
      }
      if (search_params.get('cons2') != null) {
        getFilled(search_params.get('cons2'))
      }
      if (search_params.get('cons3') != null) {
        getFilled(search_params.get('cons3'))
      }

    });

    function getFilled(consultancy) {

      var _token = $('input[name="_token"]').val();
      $.ajax({
       url:"/compare/add",
       method:"GET",
       data:{query:consultancy, _token:_token},
       success:function(data){
        document.getElementsByClassName('empty')[0].innerHTML=data;
        document.getElementsByClassName('empty')[0].classList.add('filled');
        document.getElementsByClassName('empty')[0].classList.remove('empty');
        // console.log(data);
      },
       error:function(data){
        removefromUrl(consultancy);
       }
     });

    }

    $(document).on('click', '#coursesSection', function(){

      var elem = $(this)
      var classList = $(this).attr('class').split(/\s+/);
      var itemCollapsed = false
      $.each(classList, function(index, item) {
          if (item === 'collapsed') {
              //do something
              itemCollapsed = true
          }
      });

      if (itemCollapsed) {
        elem.parent().height(200)
      }
      else{
        elem.parent().height(250)
      }
    });

    $(document).on('click', '#comparecard', function(){

      // var _token = $('input[name="_token"]').val();
      var currElem = $(this).parent().parent().parent()[0]
      var slug = $(this).parent().parent().parent()[0].id.slice(0,-4)
      $(this).parent().parent().parent().attr('id',"")
      $.ajax({
       url:"/compare/clear",
       method:"GET",
       success:function(data){
        currElem.innerHTML = data;
        currElem.parentElement.classList.add('empty');
        currElem.parentElement.classList.remove('filled');

        removefromUrl(slug);
       }
     });
    });


</script>

</x-app-layout>

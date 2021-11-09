<x-app-layout>

<div class="container mt-5 py-5">

  <div class="text-center mb-5">
    <h5 class="card-title fw-bold mb-0" style="color: #444444;">Compare With Breeze</h5>
    <p class="my-3">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
  </div>

  <div class="input-group flex-nowrap mx-auto" style="width:50vw;">
    @csrf
    <input onkeyup="showSuggestions()" id="compare_name" type="text" class="form-control" style="padding:15px;" placeholder="Name of consultancy" aria-label="Username" aria-describedby="addon-wrapping">
  </div>
  <ul id="suggestionList" class="list-group position-absolute d-none text-start" style=" left: 0; right: 0; margin: auto; width:50vw; z-index:1000;">
    {{-- <li class="list-group-item">Cras justo odio</li> --}}
  </ul>

  <div class="row mt-5">
    <div class="col-md-3 me-1 empty" style="width: 31%;">
      <x-compare-empty />
    </div>

    <div class="col-md-3 me-1 empty" style="width: 31%;">
      <x-compare-empty />
    </div>

    <div class="col-md-3 me-1 empty" style="width: 31%;">
      <x-compare-empty />
    </div>


  </div>
</div>

<style media="screen">
  #compare_suggestion:hover{
      background-color: #F8F9FA;
  }
</style>

<script type="text/javascript">
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})

function showSuggestions(e) {

        var query = document.getElementById('compare_name').value;
        if(query != '')
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

        var _token = $('input[name="_token"]').val();
        $.ajax({
         url:"/compare/add",
         method:"GET",
         data:{query:consultancy, _token:_token},
         success:function(data){
          document.getElementsByClassName('empty')[0].innerHTML=data;
          document.getElementsByClassName('empty')[0].classList.add('filled');
          document.getElementsByClassName('empty')[0].classList.remove('empty');

         }
       });
    });
    
    $(document).on('click', '#add_button', function(){

      document.getElementById('compare_name').focus();

    });

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
        elem.parent().height(173)
      }
      else{
        elem.parent().height(250)
      }
      // console.log(classList);

    });

    $(document).on('click', '#comparecard', function(){

      // var _token = $('input[name="_token"]').val();
      $(this).parent().parent().parent().attr('id',"")
      $.ajax({
       url:"/compare/clear",
       method:"GET",
       success:function(data){
        document.getElementById("comparecard").parentElement.parentElement.parentElement.innerHTML = data;
        document.getElementsByClassName('filled')[0].classList.add('empty');
        document.getElementsByClassName('filled')[0].classList.remove('filled');

       }
     });
    });


</script>

</x-app-layout>

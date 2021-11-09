<div class="position-relative nav-search-container" style="overflow:visible;">

  @csrf

  <div class="input-group flex-nowrap" style="width:30vw;">
  <input id="navSearchInput" type="text" class="form-control nav-search" placeholder="Search..." onkeyup="showSuggestionsNav()">
  <span class="input-group-text bg-transparent" id="addon-wrapping">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
      <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
    </svg>
  </span>
  {{-- <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping"> --}}
  </div>

  <ul id="navSearchSuggestion" class="list-group position-absolute d-none text-start">
    {{-- <li class="list-group-item">Cras justo odio</li> --}}
  </ul>
</div>
<style media="screen">
  .nav-search{
    width: 30vw;
    padding: 10px 10px 10px 10px;
    /* margin-left: 29%; */
  }
  .nav-search-container{
    margin-left: -17%;

  }

  #navSearchSuggestion{
    left: 0;
    right: 0;
    /* margin: auto; */
    width: 30vw;
    z-index:1000;
  }
  #navSearchInput,#addon-wrapping{
    border-width: medium;
  }
</style>

<script type="text/javascript">

  function showSuggestionsNav(e) {

          var query = document.getElementById('navSearchInput').value;
          if(query != '')
          {
           var _token = $('input[name="_token"]').val();
           $.ajax({
            url:"/compare/suggest",
            method:"POST",
            data:{query:query, _token:_token},
            success:function(data){
             // $('#suggestionList').fadeIn();
             document.getElementById('navSearchSuggestion').classList.remove("d-none")
             $('#navSearchSuggestion').html(data);
             console.log(data);
            }
           })
          }
  }

  document.addEventListener("click", function (e) {
    var elem = document.getElementById('navSearchSuggestion');
    setTimeout(function() {
     elem.classList.add("d-none");
   }, 200);

  });

</script>

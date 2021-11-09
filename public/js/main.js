$(document).ready(function(){
 $('#consultancy_name').keyup(function(){
        var query = $(this).val();
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"/fetch",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
           $('#consultancyList').fadeIn();
                    $('#consultancyList').html(data);
          }
         })
        }
    });

    $(document).click(function(){
  $("#consultancyList").hide();
  });

  $("#consultancy_name").click(function(e){
    e.stopPropagation();
  });


    $(document).on('change', '#search_by', function(){
        var id = $(this).val();
        var url = '/search/course'+'?'+ $.param({course:id});
        window.location.href= url ;
    });
      // $(document).on('click', '#search_bar', function(){
      //   if(window.matchMedia("(max-width: 1000px)").matches){
      //     var element = document.getElementById('search_bar');
      //     element.parentElement.classList.add('invisible');
      //     element.parentElement.parentElement.classList.add('hidden');
      //     element.classList.add('relative');
      //     element.classList.remove('absolute', 'top-0', 'left-0', 'index-50', 'h-screen' , 'w-full', 'bg-opacity-50' , 'bg-black' , 'text-3xl');
      //     element = document.getElementById('consultancy_name');
      //     element.classList.remove('h-28', 'py-6');
      //   }
      // });

      //
      $(document).on('click',function (){
        $("#consultancyList").hide();
        // alert('naicee');
      });

    });
    function close_search_nav(){
      var element = document.getElementById('slider-nav-bar');
      element.classList.add('hidden');
    }

    function display_search_nav (){
      var element = document.getElementById('search_bar');
      element.parentElement.classList.remove('invisible');
      element.parentElement.parentElement.classList.remove('hidden');
      if(window.matchMedia("(max-width: 1000px)").matches){
        element.classList.remove('relative');
        element.classList.add('absolute', 'top-0', 'left-0', 'index-50', 'h-screen' , 'w-full', 'bg-opacity-50' , 'bg-black' , 'text-3xl');
        element = document.getElementById('consultancy_name');
        element.classList.remove('h-full');
        element.classList.add('h-28' , 'py-6');
        element.focus();
      }
      var element = document.getElementById('consultancy_name');
      element.focus();
    }

    function hide_search_nav() {
      if(window.matchMedia("(max-width: 1000px)").matches){
        var element = document.getElementById('search_bar');
        element.parentElement.classList.add('invisible');
        element.parentElement.parentElement.classList.add('hidden');
        element.classList.add('relative');
        element.classList.remove('absolute', 'top-0', 'left-0', 'index-50', 'h-screen' , 'w-full', 'bg-opacity-50' , 'bg-black' , 'text-3xl');
        element = document.getElementById('consultancy_name');
        element.classList.remove('h-28', 'py-6');
      }
    }

// For moving cursor to input whrn clicked on add button
$(document).on('click', '#add_button', function(){
  document.getElementById('consultancy-compare-search').focus();
});

// For search for comparing
$(document).ready(function(){
 $('#consultancy-compare-search').keyup(function(){

        var query = $(this).val();
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"/compare/suggest",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
           $('#dropdown_counsultancy').fadeIn();
           $('#dropdown_counsultancy').html(data);
          }
         })
        }
    });
  });

    $(document).on('click', '#clear_btn', function(){
        var btn_parent =$(this).parent().parent();
        btn_parent.load('/compare/clear');
        btn_parent.removeClass('filled');
        btn_parent.addClass('empty');
    });

    $(document).on('click', '#compare_suggestion', function(){
        var elements = document.getElementsByClassName('empty');
        var id_Element = elements[0].id;
        var slug = $(this).children('#result_slug').val();
        $('#'+id_Element).load('/compare/add'+'?'+ $.param({query:slug}));
        elements[0].classList.add('filled');
        elements[0].classList.remove('empty');
        $('#consultancy-compare-search').val('');
    });

  $(document).click(function(){
  $("#dropdown_counsultancy").hide();
  });

  $("#consultancy-compare-search").click(function(e){
    e.stopPropagation();
  });

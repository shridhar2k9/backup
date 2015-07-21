$(document).ready(function(){
    $('#button').click(function(){
        var toAdd=$('input[name=checkListItem]').val();
        if(toAdd=='')
        {
          $('.list').append();
        }
        else
        {
        $('.list').append('<div class="item">'+'<input type="checkbox" name="check" checked="true">' + toAdd + '<div class="img">'+'<img src="image/button-close.png"  width="30px" height="50px">'+'</div>'+'</div>');        
        }
       $( ".item" ).mouseover(function() {
         $(this).css("text-decoration", "line-through");
         
});
       $( ".item" ).mouseleave(function() {
         $(this).css("text-decoration", "");
});

        });
     $(document).on('click', '.item', function(){
     $(this).remove();
    });

});

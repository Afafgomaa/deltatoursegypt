
 $(document).ready(function() {

    $('#divContainer img').on({
        mouseover: function() {
            $(this).css({ 'cursor':'pointer', 'border-color':'#F7B505' })
        },
        mouseleave :function(){
            $(this).css({ 'cursor':'default', 'border-color':'#c3ceed'})
        },
        click : function(){
            var imageUrl = $(this).attr('src');
            $('#mainImage').fadeOut(500,function(){
                $(this).attr('src',imageUrl);
            }).fadeIn(300);
        }

    });


    $('.datepicker').datepicker({
        duration: "slow",
        showAnim: "slideDown", 
        showOptions: {direction: "down"} 
    });
    $('.ui-datepicker-trigger').click(function(){
            $(this).siblings().focus();

    });


});


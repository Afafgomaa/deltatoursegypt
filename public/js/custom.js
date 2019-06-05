
 $(document).ready(function() {

    $('#divContainer img').on({
        mouseover: function() {
            $(this).css({ 'cursor':'pointer'}).addClass('img-thumbnail')
        },
        mouseleave :function(){
            $(this).css({ 'cursor':'default'}).removeClass('img-thumbnail')
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


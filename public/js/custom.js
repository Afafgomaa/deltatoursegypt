
 $(document).ready(function() {
    $('.datepicker').datepicker({
        duration: "slow",
        showAnim: "slideDown", 
        showOptions: {direction: "down"} 
    });
    $('.ui-datepicker-trigger').click(function(){
            $(this).siblings().focus();

    });

});




    
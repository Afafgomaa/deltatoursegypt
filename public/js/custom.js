$(document).ready(function() {

    $('#label_1').css('display','none');

    $(".full_itinerary_box").each(function(){		
        $(this).find(".itinerary_desc").hide();
        //$(this).find("#itinerary_desc_1").show();
        $(this).find("#itinerary_title_1").addClass("toggled");
    });
        
    $(".full_itinerary_box").each(function(){			
         $(this).find(".itinerary_title").click(function() {
            $(this).toggleClass("toggled").next().stop(true, true).slideToggle(100);
            return false;
         });		
    });
    
    var expanded = false;
    $(".expand").click(function() {
        if(!expanded){
            $(".full_itinerary_box").show();		
            $(".expand").addClass("toggled");
            $(".itinerary_title").addClass("toggled");
            $(".expandtext").text("Close All");
            expanded = true;
        }else{
            $(".full_itinerary_box").hide();		
            $(".expand").removeClass("toggled");
            $(".itinerary_title").removeClass("toggled");
            $(".expandtext").text("Expand All");
            expanded = false;
        }
        
        return false;
    });

      $('.expand_1').click(function(){
          $('#dd').toggle();
          
      });
      $(".expand_2").click(function(){
        $( '.expand_2 > div').toggle();
    });
      $(".expand_3").click(function(){
          $( '.expand_3 > div').toggle();
      });
      $(".expand_4").click(function(){
        $( '.expand_4 > div').toggle();
    });
    $(".expand_5").click(function(){
        $( '.expand_5 > div').toggle();
    });


    
	var progWidth = $(".program_box").width();
	
	$("#myNavbar").css({"max-width":progWidth});
	
	// Add scrollspy to <body>
	$('body').scrollspy({target: ".navbar", offset: 650});   

	// Add smooth scrolling on all links inside the navbar
	$("#myNavbar a:first").on('click', function(event) {

    // Prevent default anchor click behavior
    event.preventDefault();

   	// Store hash
    var hash = this.hash;
	
	var body = $('html, body');
    // Using $'s animate() method to add smooth page scroll
    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
    body.animate({
      scrollTop: $(hash).offset().top - 160
    }, 800, function(){
      // Add hash (#) to URL when done scrolling (default click behavior)
		
		 body.animate({
			  scrollTop: $(hash).offset().top - 170
		});
	});

    });

	// Add smooth scrolling on all links inside the navbar
	$("#myNavbar a").not(':first').on('click', function(event) {

    // Prevent default anchor click behavior
    event.preventDefault();

   	// Store hash
    var hash = this.hash;
	
	var body = $('html, body');
    // Using $'s animate() method to add smooth page scroll
    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
    body.animate({
      scrollTop: $(hash).offset().top - 150
    }, 800, function(){
      // Add hash (#) to URL when done scrolling (default click behavior)
     // window.location.hash = hash;
		
	 body.animate({
		  scrollTop: $(hash).offset().top - 150
	});

    });
  });
  
  


      /* scroll fixed */
	$(window).scroll(function(){
		var fromTop = $(window).scrollTop();
		var progHeight = $(".program_content").height() + 680;

		if (fromTop <= 680 ){
			$(".program_box .navbar").css({"position":'relative', "top":'0px'});
		}else{
			$(".program_box .navbar").css({"position":'fixed', "top":'91px'});
		}
		if (fromTop >= progHeight){
            $(".program_box .navbar").css({"position":'relative', "top":'0px'});
            

		}
	});	

     /* scroll fixed */



    /* datepiker options open and close */
    $('.datepicker').datepicker({
        duration: "slow",
        showAnim: "slideDown", 
        dateFormat:'dd-mm-yy',
        showOptions: {direction: "down"} 
    });
    
    $('.ui-datepicker-trigger').click(function(e){
            $(this).siblings().focus();
          $('#ui-datepicker-div').toggle('display');
            

    });
    /* datepiker options open and close */
  


                       


             
  



});


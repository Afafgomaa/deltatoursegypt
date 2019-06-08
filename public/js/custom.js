
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
    $(".full_itinerary_box").each(function(){		
        $(this).find(".itinerary_desc").hide();
        $(this).find("#itinerary_desc_1").show();
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
            $(".itinerary_desc").show();		
            $(".expand").addClass("toggled");
            $(".itinerary_title").addClass("toggled");
            $(".expandtext").text("Close All");
            expanded = true;
        }else{
            $(".itinerary_desc").hide();		
            $(".expand").removeClass("toggled");
            $(".itinerary_title").removeClass("toggled");
            $(".expandtext").text("Expand All");
            expanded = false;
        }
        
        return false;
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
  
  
	$(".price_info a").on('click', function(event) {

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
		
	 body.animate({
		  scrollTop: $(hash).offset().top - 150
	});
	      // Add hash (#) to URL when done scrolling (default click behavior)
      //window.location.hash = hash;
    });
  });

	$(window).scroll(function(){
		var fromTop = $(window).scrollTop();
		var progHeight = $(".program_content").height() + 460;

		if (fromTop <= 460 ){
			$(".program_box .navbar").css({"position":'relative', "top":'0px'});
		}else{
			$(".program_box .navbar").css({"position":'fixed', "top":'45px'});
		}
		if (fromTop >= progHeight){
			$(".program_box .navbar").css({"position":'relative', "top":'0px'});

		}
	});	


    $(".trans").find("a").click(function(e) {
        e.preventDefault();
        var section = $(this).attr("href");
        $("html, body").animate({
            scrollTop: $(section).offset().top
        },500);
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


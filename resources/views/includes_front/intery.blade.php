<!-- itinerary  -->
<div id="itinerary" class="scroll_pane_new">
    <div class="program_box_title text-blue" id="itinerary">Itinerary:</div>
        <div class="program_box_data">
           
            <div class="full_itinerary">
           
              @foreach(array_combine(unserialize($program->itinerary), unserialize($program->itinerary_heading))  as $b => $h  ) 
              
                    <div class="full_itinerary_box">
                            <div class="itinerary_title" id="itinerary_title_1">
                                <h2 style="float:left;"><i class="fa fa-arrow-right"></i>{!!$h!!} </h2> 
                            </div>
                            <div class="itinerary_desc" id="itinerary_desc_1" style="display: none;">
                            {!!$b!!} 
                            </div>
                    </div>
                    
                    @endforeach
           


                </div>  <!-- full_itinerary-->
        </div>
    </div>

<!-- itinerary  -->
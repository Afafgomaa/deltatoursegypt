
<div class="special-offer">
    <div class="container">
    <div class="row">
        <div class="col-md-12">
               <h4 class="top-destination"> You Might Also Like </h4>
       </div>

    @foreach($related_programs_collection as  $program_from_releated)
    @foreach($programs->where('id' , $program_from_releated->related_id) as $program_from_related_programs )
    <div class="col-md-4 col-xs-12" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: zoomIn;">
        <a href="{{url($mainpage->slug . '/' . $page->slug . '/' . $program_from_related_programs->slug)}}">
          <div class="new_related_tours" style="background-image: url({{asset($program_from_related_programs->main_image)}})">
                                                                   
            <div class="new_related_tours_title">
                <h4 class="mb-0">{{$program_from_related_programs->name}}</h4>
            </div> 
            <div class="new_related_tours_price">
                <span class="price">
                <span class="from">from</span>
                    <span class="currencySign">$</span><span id="min_price515" class="convertable" itemprop="lowPrice">{{$program_from_related_programs->price}}</span>
                
                </span>
           </div>                                        
         </div>
        </a>
     </div>
     @endforeach
 @endforeach

    
        
        </div>
    </div>
</div>
         
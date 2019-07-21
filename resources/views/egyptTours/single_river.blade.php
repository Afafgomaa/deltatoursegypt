@extends('layouts.front')

@section('content')
<div class="pt-5 pb-5">
    <div class="container">
      <div class="row">
              <!-- img section -->

        <div class="col-lg-6 col-xs-12">
            <div class="owl-carousel owl-theme" id="mainImage" data-plugin-options="{'items': 1, 'autoplay': true, 'autoplayTimeout': 3000}">

            @foreach(unserialize($program->image_gallery) as $img)
                <div>
                    <div class="img-thumbnail border-0 p-0 d-block">
                        <img class="img-fluid border-radius-0 img-rounded" src="{{$img}}" alt="">
                    </div>
                </div>

            @endforeach
            
            </div>
 
        </div>

     <!-- description section -->
        <div class="col-md-6 col-xs-12">
            <div class="summary entry-summary">
                    <h1 class="short big">{{$program->name}}   </h1>
                    <div class=" col-md-6 review_num">
                           <span style="color:black">{{$program->samll_breif}}</span>
                    </div>
                    
                   
                    <div class="col-md-6">
                        <h4 class="shorter text-blue"> from :  {{$program->price}} USD</h4>
                    </div>
                    <div class="col-md-12 ">
                        <p class="pdetails"> start day <strong style="color: #ffa500">{{$program->start_day}} </strong>
                        </p> 
                    </div>
                    <div class="col-md-12 ">
                        <p class="pdetails"> {!!$program->brief!!} 
                        </p> 
                    </div>
                    <div class="col-md-12 ">
                        <p class="pdetails"> <h4 class="text-blue2">{{$program->days_1}} - <span style="color:#ffa500">{{$program->place_1}} </span></h4>
                        </p> 
                    </div>
                    <hr>
                    <div class="col-md-12 ">
                        <p class="pdetails"> <h4 class="text-blue2">{{$program->days_2}} - <span style="color:#ffa500">{{$program->place_2}} </span></h4>  
                        </p> 
                    </div>
                    
                   
                  


                    <div class="col-md-12">
                      
                        <button class="btn btn-primary btn-lg push-top push-bottom" data-toggle="modal" data-target="#formModal">
                                                        Send inquiry 
                        </button>
                       
					
                                <!-- BEGIN ProvideSupport.com Graphics Chat Button Code -->
                        <div id="ciFERd" style="z-index:100;position:absolute">
                            </div><div id="scFERd" style="display:inline">
                            <table style="display:inline;border:0px;border-collapse:collapse;border-spacing:0;">
                            <tbody><tr><td style="padding:0px;text-align:center;border:0px;vertical-align:middle">
                            <a href="#" onclick="psFERdow(); return false;"><img name="psFERdimage" 
                            src="http://image.providesupport.com/image/121dmhmtycqh01bsukfkahibz6/offline-1179962734.gif"
                            border="0;display:block;margin:auto"></a></td></tr><tr><td 
                            style="padding:0px;text-align:center;border:0px;vertical-align:middle">
                            <a href="https://admin.providesupport.com/pb/121dmhmtycqh01bsukfkahibz6" 
                            target="_blank"><img src="http://image.providesupport.com/lcbpsh.gif" 
                            style="border:0;display:block;margin:auto;width:140px;height:17px">
                            </a></td></tr></tbody></table></div><div id="sdFERd" style="display:none">
                            <script type="text/javascript" src="http://image.providesupport.com/js/121dmhmtycqh01bsukfkahibz6/safe-standard.js?ps_h=FERd&amp;ps_t=1559686879034"></script></div><script type="text/javascript">var seFERd=document.createElement("script");seFERd.type="text/javascript";var seFERds=(location.protocol.indexOf("https")==0?"https":"http")+"://image.providesupport.com/js/121dmhmtycqh01bsukfkahibz6/safe-standard.js?ps_h=FERd&ps_t="+new Date().getTime();setTimeout("seFERd.src=seFERds;document.getElementById('sdFERd').appendChild(seFERd)",1)</script><noscript><div style="display:inline"><a href="http://www.providesupport.com?messenger=121dmhmtycqh01bsukfkahibz6">Live Chat</a>
                        </div></noscript>
                        <!-- END ProvideSupport.com Graphics Chat Button Code -->
                    
            </div><!-- summery section-->
       </div>
      </div>
    </div><!-- row-->
</div><!-- container -->

<div class="container ">
<div class="row">

<div id="itinerary" class="scroll_pane_new m-3">
<h1 class="short"> Itineraries </h1>
        <div class="program_box_data">
           
        
            <div class="full_itinerary m-0">
            <div class="expand_3 iten"><h4 class="text-blue2">{{$program->days_1}} - <span style="color:#ffa500">{{$program->place_1}} </span></h4>
 
            @if(!empty($program->itinerary_heading_1 && $program->itinerary_body_1) )
           
           @foreach(array_combine(unserialize($program->itinerary_heading_1), unserialize($program->itinerary_body_1))  as $h => $b  ) 
           
                 <div class="full_itinerary_box" style="display: none; border:none;background:none">
                         <div class="itinerary_title col-md-12  iten1" id="itinerary_title_1">
                             <h2 style="float:left;">&nbsp;&nbsp;&nbsp; {{$h}} </h2> 
                         </div>
                         <div class="itinerary_desc" id="itinerary_desc_1" style="display: none;">
                         {!!$b!!} 
                         </div>
                 </div>
                 
                 @endforeach
        
            @endif
         </div>
        </div>  <!-- full_itinerary-->

        
          
            <div class="full_itinerary m-0">
            <div class="expand_2 iten"><h4 class="text-blue2">{{$program->days_2}} - <span style="color:#ffa500">{{$program->place_2}} </span></h4>
            @if(!empty($program->itinerary_heading_2  && $program->itinerary_body_2) )
           @foreach(array_combine(unserialize($program->itinerary_heading_2), unserialize($program->itinerary_body_2))  as $h => $b  ) 
           
                 <div class="full_itinerary_box" style="display: none; border:none;background:none">
                         <div class="itinerary_title col-md-12  iten1" id="itinerary_title_1">
                             <h2 style="float:left;">&nbsp;&nbsp;&nbsp; {{$h}} </h2> 
                         </div>
                         <div class="itinerary_desc" id="itinerary_desc_1" style="display: none;">
                         {!!$b!!} 
                         </div>
                 </div>
                 
                
                 @endforeach
                 @endif
         </div>
        </div>  <!-- full_itinerary-->

       
        </div>
    </div>


  </div>

  <div class="row">
    <h1 class="short ml-3"> Cruise </h1>
    <div class="col-md-12">
      <div class="all_itinerary m-3">
      <div class="col-md-12 expand_4 iten">
           <h4 class="text-blue2">Cruise Facilitis </h4>
            <div align="left" class="iten_desc full_itinerary_box" style="border:none;background:none ;margin-top: 10px; margin-bottom: 20px; clear: both; overflow: hidden; display: none;">
                    <div class="col-md-12 full_itinerary" style="display:flex">
                       @if(!empty($allFacilitis_vidided[0]) > 0)
                            <div class="col-md-4">
                                <ul class="list icons list-unstyled">
                                    @foreach($allFacilitis_vidided[0]  as $facility)
                                       <li><i class="fa fa-circle-notch" style="color:#0088cc"></i> {{$facility}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if(!empty($allFacilitis_vidided[1]) > 0)
                            <div class="col-md-4">
                                <ul class="list icons list-unstyled">
                                @foreach($allFacilitis_vidided[1] as $facility)
                                       <li><i class="fa fa-circle-notch" style="color:#0088cc"></i> {{$facility}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if(!empty($allFacilitis_vidided[2]))
                            <div class="col-md-4">
                                <ul class="list icons list-unstyled">
                                @foreach($allFacilitis_vidided[2] as $facility)
                                       <li><i class="fa fa-circle-notch" style="color:#0088cc"></i> {{$facility}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        </div>
                    </div>
                </div>

      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="all_itinerary m-3">
      <div class="col-md-12 expand_3 iten">
           <h4 class="text-blue2">Cruise Program include</h4>
            <div align="left" class="iten_desc full_itinerary_box" style="border:none;background:none ;margin-top: 10px; margin-bottom: 20px; clear: both; overflow: hidden; display: none;">
                     <div class="col-md-12 full_itinerary " style="display:flex">
                          <div class="col-md-6">
                                <ul class="list icons list-unstyled">
                                    @foreach($allIncludesDvided[0]  as $include)
                                       <li><i class="fa fa-circle-notch" style="color:#0088cc"></i> {{$include}}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="list icons list-unstyled">
                                @foreach($allIncludesDvided[1] as $include)
                                       <li><i class="fa fa-circle-notch" style="color:#0088cc"></i> {{$include}}</li>
                                    @endforeach
                                </ul>
                            </div>
                     </div>
            </div>
      </div>

      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="all_itinerary m-3">

      <div class="col-md-12 expand_5 iten">
           <h4 class="text-blue2">Cruise Program Exclude   </h4>
            <div align="left" class="iten_desc full_itinerary_box" style="border:none;background:none ;margin-top: 10px; margin-bottom: 20px; clear: both; overflow: hidden; display: none;">
                         <div class="col-md-12 full_itinerary " style="display:flex">
                                <div class="col-md-6">
                                        <ul class="list icons list-unstyled">
                                            @foreach($allExcludesDvided[0]  as $exclude)
                                            <li><i class="fa fa-circle-notch" style="color:#0088cc"></i> {{$exclude}}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="list icons list-unstyled">
                                        @foreach($allExcludesDvided[1] as $exclude)
                                            <li><i class="fa fa-circle-notch" style="color:#0088cc"></i> {{$exclude}}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                            </div>   
            </div>
      </div>

      </div>
    </div>
  </div>

  <div class="row">
      <div class="col-md-12">
      <h1 class="short m-3"> Prices </h1>
      <p class="m-3" style="color:#ffa500 !important">Prices are quoted in US Dollars per person  per trip </p>
      <table class="table table-striped push-top">
        <tbody>
            <tr>
               <td>Program </td>
               <td> <strong>{{$program->days_1}} Program</strong></td>
              <td><strong>{{$program->days_2}} Program</strong></td>
            </tr>
            <tr>
         @if(!empty($allPricingsDvided[0]))
            @foreach($allPricingsDvided[0] as $p)
                 <td> {{$p}} </td>
            @endforeach
        @endif
            </tr>
            <tr>
          @if(!empty($allPricingsDvided[1]))
            @foreach($allPricingsDvided[1] as $p)
                 <td> {{$p}} </td>
            @endforeach
          @endif
            </tr>
            
            <tr>
         @if(!empty($allPricingsDvided[2]))
            @foreach($allPricingsDvided[2] as $p)
                 <td> {{$p}} </td>
            @endforeach
        @endif
            </tr>
            
            
           
           
            
            
            
            
        </tbody>
    </table>
      </div>
  </div>

</div>  <!--  container -->

</div><!-- padding-->
<div class="special-offer">
    <div class="container">
    <div class="row">
        <div class="col-md-12">
               <h4 class="top-destination"> You Might Also Like </h4>
       </div>

    @foreach($related_programs_collection as  $program_from_releated)
    @foreach($river_excursions->where('id' , $program_from_releated->related_id) as $program_from_related_programs )
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
@include('includes_front.send_enquery')

@endsection
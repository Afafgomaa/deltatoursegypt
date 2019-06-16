@extends('layouts.front')

@section('content')
<div class="pt-5 pb-5">
    <div class="container">
      <div class="row">
              <!-- img section -->

        <div class="col-lg-6 col-xs-12">
            <div class="owl-carousel owl-theme" id="mainImage" data-plugin-options="{'items': 1, 'autoplay': true, 'autoplayTimeout': 3000}">
                <div>
                    <div class="img-thumbnail border-0 p-0 d-block">
                        <img class="img-fluid border-radius-0 img-rounded" src="{{asset('images/egyptbduget/cairo-day-tour.jpg')}}" alt="">
                    </div>
                </div>
                <div>
                    <div class="img-thumbnail border-0 p-0 d-block">
                        <img class="img-fluid border-radius-0 " src="{{asset('images/egyptbduget/karnak-temple.jpg')}}" alt="">
                    </div>
                </div>
                <div>
                    <div class="img-thumbnail border-0 p-0 d-block">
                        <img class="img-fluid border-radius-0" src="{{asset('images/egyptbduget/Aswan-Day-tour.jpg')}}" alt="">
                    </div>
                </div>
                <div>
                    <div class="img-thumbnail border-0 p-0 d-block">
                        <img class="img-fluid border-radius-0" src="{{asset('images/egyptbduget/Karnak-Temple-Egypt.jpg')}}" alt="">
                    </div>
                </div>
                <div>
                    <div class="img-thumbnail border-0 p-0 d-block">
                        <img class="img-fluid border-radius-0" src="{{asset('images/egyptbduget/abu-simbel.jpg')}}" alt="">
                    </div>
                </div>
            </div>
            <!--
            <div id="divContainer" class="text-center">
                    <img src="{{asset('images/egyptbduget/cairo-day-tour.jpg')}}" class="slider-image img-responsive">
                    <img src="{{asset('images/egyptbduget/karnak-temple.jpg')}}" class="slider-image img-responsive">
                    <img src="{{asset('images/egyptbduget/Aswan-Day-tour.jpg')}}" class="slider-image img-responsive">
                    <img src="{{asset('images/egyptbduget/Karnak-Temple-Egypt.jpg')}}" class="slider-image img-responsive">
                    <img src="{{asset('images/egyptbduget/abu-simbel.jpg')}}" class="slider-image img-responsive">
            </div>
-->
        </div>

     <!-- description section -->
        <div class="col-md-6 col-xs-12">
            <div class="summary entry-summary">
                    <h1 class="short big">Test of Egypt    </h1>
                    <div class=" col-md-6 review_num">
                            Package Type : <span style="color:black">Private</span>
                    </div>
                    <div class=" col-md-8 review_num">
                        <h6 class="shorter f-2" style="color:#0088cc">4 Days - 3 Nights </h6>
                    </div>
                    <div class=" col-md-8 review_num">
                        <h6 class="shorter" style="color:orange">Cairo </h6>
                    </div>
                    <div class="col-md-6">
                        <h4 class="shorter text-blue"> from :  250 USD</h4>
                    </div>
                    <div class="col-md-12 ">
                        <p class="pdetails"> 4 Days Holiday tour package  in Cairo staying in a 4 stars superior hotel and visiting the great pyramids of giza ,
                                Egyptian museum, Old Cairo , Coptic museum as well  felucca ride on the Nile 
                        </p> 
                    </div>
                    
                    <div class="col-xs-12 heighlieth review_num">
                        <h4 class="shorter text-blue">package Highlights</h4>
                        <div class="col-xs-12 review_num">
                            <ul>
                                <li><i class="fa fa-dot-circle text-blue"></i> 3 Nights Cairo  .</li>
                                <li><i class="fa fa-dot-circle text-blue"></i> 4 Breakfasts and 2 Lunches   .</li>
                                <li><i class="fa fa-dot-circle text-blue"></i> Meet at airport Upon arrival   .</li>
                            </ul>
                        </div>
                        <div class="col-xs-12 review_num">	   
                            <ul>
                                <li><i class="fa fa-dot-circle text-blue"></i> Multi Lingua tour leader guide</li>	
                                <li><i class="fa fa-dot-circle text-blue"></i> all Transfers by AC Minibus  .</li>
                            </ul>
                        </div>                            
                    </div>
                   <div style="clear:both"></div>
                    <div class="col-md-12 tag">
                        <h5 class="shorter text-blue"> Holiday included sights</h5>
                            <span class="label label-primary">Egyptian museum</span>
                            <span class="label label-primary">Mohamed ali mosque</span>
                            <span class="label label-primary">Giza Pyramids</span>
                            <span class="label label-primary">Sakkara</span>
                            <span class="label label-primary">Hanging Church</span>
                            <span class="label label-primary">Coptic Museum</span>
                            <span class="label label-primary">Nile Felucca</span>
                            <span class="label label-primary">Khan el Khalili </span>				
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
</div><!-- padding-->
@include('includes_front.send_enquery')
@include('includes_front.block_of_conten')
@include('includes_front.simler_posts')

@endsection
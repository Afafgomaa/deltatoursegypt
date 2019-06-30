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
                            Package Type : <span style="color:black">{{$program->kind}}</span>
                    </div>
                    <div class=" col-md-8 review_num">
                        <h6 class="shorter f-2" style="color:#0088cc">{{$program->days}} Days - {{$program->nights}} Nights </h6>
                    </div>
                    <div class=" col-md-8 review_num">
                        <h6 class="shorter" style="color:orange">{{$program->place}} </h6>
                    </div>
                    <div class="col-md-6">
                        <h4 class="shorter text-blue"> from :  {{$program->price}} USD</h4>
                    </div>
                    <div class="col-md-12 ">
                        <p class="pdetails"> {!!$program->brief!!} 
                        </p> 
                    </div>
                    
                    <div class="col-xs-12 heighlieth review_num">
                        <h4 class="shorter text-blue">package Highlights</h4>
                        <div class="col-xs-12 review_num">
                                <ul>
                                @foreach($program->Highlights->take(4) as $h)                           
                                        <li><i class="fa fa-dot-circle text-blue"></i> {{$h->name}}</li>

                                @endforeach  
                              </ul>
                              
                         </div>           
                    </div>
                   <div style="clear:both"></div>
                    <div class="col-md-12 tag">
                        <h5 class="shorter text-blue"> Holiday included sights</h5>
                        @foreach($program->Sights as $sight) 
                            <span class="label label-primary">{{$sight->name}}</span>
                            
                        @endforeach 				
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
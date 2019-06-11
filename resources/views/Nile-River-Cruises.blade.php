@extends('layouts.front')

@section('content')
<section class="page-header page-header-modern page-header-background page-header-background-md py-0 overlay overlay-color-primary overlay-show overlay-op-8" style="background-image: url('images/budget_egypt.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-sm-5 order-2 order-sm-1 align-self-center p-static">
                <div class="overflow-hidden pb-2">
                    <h1 class="text-10 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Egypt Nile Cruise Holidays  </h1>
                </div>
                <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                    <span class="sub-title text-4 mt-4">Egypt is known from a long of years ago with its magnificent Nile and its fertile banks. we organize for Egypt lovers a trip on the wonderful Nile helping them to relieve all their sadness, 
                    feeling the spirit of pharaohs & the mystery of the Nile.</span>
                </div>
                <div class="appear-animation d-inline-block" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                    <a href="{{route('Tailor_Made')}}" class="btn btn-modern mt-4">Talior Made <i class="fas fa-arrow-right ml-1"></i></a>
                </div>
                <div class="appear-animation d-inline-block" data-appear-animation="rotateInUpRight" data-appear-animation-delay="500">
                    <span class="arrow hlt" style="top: 40px;"></span>
                </div>
            </div>
            <div class="col-sm-7 order-1 order-sm-2 align-items-end justify-content-end d-flex pt-5">
                <div style="min-height: 350px;" class="overflow-hidden">
                    
                </div>
            </div>
        </div>
    </div>
</section>

<div class="p-5">
<div class="container">
  <div class="row">

    <div class="col-md-4 col-xs-12">
        <div class="home_special_offer" id="programs">
            <a href="#">
                <div class="img_container" style="background-image: url('images/cairo-day-tour.jpg')">
                    <div class="short_info" id="home_short_info">
                        <span class="price">
                        <span class="from">from</span>
                            <span class="currencySign">$</span><span id="min_price1175" class="convertable" itemprop="lowPrice">250 USD</span>
                            
                    </div>
                </div>
            </a>
        <div class="home_special_offer_content">
                    <div class="home_special_offer_title">
                        <h2>
                        <a href="{{route('single_river')}}"><strong>Test Of Egypt</strong></a>
                        </h2>
                    </div>
                   <div class="home_special_offer_types">
                        <div class="home_special_offer_types_box">
                            Private Tour  | Childern | payment policy| Tipping
                        </div>
                        <div class="home_special_offer_types_box">
                                4 days - 3 nights  
                        </div>
                   </div>
                   <div class="home_special_offer_description">
                    <p>CAIRO ONLY 4 days cairo holiday package,staying 3 nights in Cairo Hotel, visiting all cairo higlights 
                        Giza Pyramids , egyptian museum and more </p>
                    </div>
                    <div class="read_more">
                        <a href="{{route('single_river')}}">read more</a>
                    </div>
        </div>
       </div>
      </div>




    <div class="col-md-4 col-xs-12">
        <div class="home_special_offer" id="programs">
            <a href="#">
                <div class="img_container" style="background-image: url('images/cairo-day-tour.jpg')">
                    <div class="short_info" id="home_short_info">
                        <span class="price">
                        <span class="from">from</span>
                            <span class="currencySign">$</span><span id="min_price1175" class="convertable" itemprop="lowPrice">250 USD</span>
                            
                    </div>
                </div>
            </a>
        <div class="home_special_offer_content">
                    <div class="home_special_offer_title">
                        <h2>
                        <a href="/"><strong>Test Of Egypt</strong></a>
                        </h2>
                    </div>
                   <div class="home_special_offer_types">
                        <div class="home_special_offer_types_box">
                            Private Tour  | Childern | payment policy| Tipping
                        </div>
                        <div class="home_special_offer_types_box">
                                4 days - 3 nights  
                        </div>
                   </div>
                   <div class="home_special_offer_description">
                    <p>CAIRO ONLY 4 days cairo holiday package,staying 3 nights in Cairo Hotel, visiting all cairo higlights 
                        Giza Pyramids , egyptian museum and more </p>
                    </div>
                    <div class="read_more">
                        <a href="#">read more</a>
                    </div>
        </div>
       </div>
      </div>



      
    <div class="col-md-4 col-xs-12">
        <div class="home_special_offer" id="programs">
            <a href="#">
                <div class="img_container" style="background-image: url('images/cairo-day-tour.jpg')">
                    <div class="short_info" id="home_short_info">
                        <span class="price">
                        <span class="from">from</span>
                            <span class="currencySign">$</span><span id="min_price1175" class="convertable" itemprop="lowPrice">250 USD</span>
                            
                    </div>
                </div>
            </a>
        <div class="home_special_offer_content">
                    <div class="home_special_offer_title">
                        <h2>
                        <a href="/"><strong>Test Of Egypt</strong></a>
                        </h2>
                    </div>
                   <div class="home_special_offer_types">
                        <div class="home_special_offer_types_box">
                            Private Tour  | Childern | payment policy| Tipping
                        </div>
                        <div class="home_special_offer_types_box">
                                4 days - 3 nights  
                        </div>
                   </div>
                   <div class="home_special_offer_description">
                    <p>CAIRO ONLY 4 days cairo holiday package,staying 3 nights in Cairo Hotel, visiting all cairo higlights 
                        Giza Pyramids , egyptian museum and more </p>
                    </div>
                    <div class="read_more">
                        <a href="#">read more</a>
                    </div>
        </div>
       </div>
      </div>


    </div>
</div>
</div>                      

@endsection
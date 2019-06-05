@extends('layouts.front')

@section('content')

<section class="page-header page-header-modern page-header-background page-header-background-md py-0 overlay overlay-color-primary overlay-show overlay-op-8" style="background-image: url('images/budget_egypt.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-sm-5 order-2 order-sm-1 align-self-center p-static">
                <div class="overflow-hidden pb-2">
                    <h1 class="text-10 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Egypt Tour Packages  </h1>
                </div>
                <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                    <span class="sub-title text-4 mt-4">Experience all that Egypt has to offer with an exclusive private group holiday. We offer tour packages to suit any taste, mixing classic tours of Ancient Egypt with city tours, 
                        diving holidays, and adventures in the desert..</span>
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
                <div class="col-md-6">
                    <a href="{{route('Budget_Tours')}}">
                      <img class="box-shadow-gray" src="{{asset('images/egypt-classical-tours.jpg')}}" style="width:100%">
                      <div class="row">
                        <h3 class="pl-3 pt-3 text-orange1">Classic Tours</h3>
                            <p class="pl-3 pb-0 pb-2 lead center-f">
                            Experience all that Egypt has to offer with an exclusive private group holiday
                            </p>
                      </div>
                    </a>

                </div>

                <div class="col-md-6">
                  <a href="{{route('Budget_Tours')}}">  
                     <img class="box-shadow-gray" src="{{asset('images/travel_egypt_safari.jpg')}}" style="width:100%">
                     <div class="row">
                        <h3 class="pl-3 pt-3 text-orange1">ADVENTURE TOURS</h3>
                            <p class="pl-3 pb-0 pb-2 lead center-f">
                               experience what egypt has to offer in an adnenture style mixed with normal touristic sights
                            </p>
                     </div>
                    </a>
                </div>
                <div class="col-md-6">
                  <a href="{{route('Budget_Tours')}}">  
                     <img class="box-shadow-gray" src="{{asset('images/luxor.jpg')}}" style="width:100%">
                    <div class="row">
                        <h3 class="pl-3 pt-3 text-orange1"> EGYPT LUXURY TOURS</h3>
                            <p class="pl-3 pb-0 pb-2 lead center-f">
                                Plan a luxury tour that will take you back to a bygone era of more comfortable travel.
                            </p>
                    </div>
                  </a>
                </div>

                <div class="col-md-6">
                  <a href="{{route('Budget_Tours')}}"> 
                     <img class="box-shadow-gray" src="{{asset('images/budget_project.jpg')}}" style="width:100%">
                    <div class="row">
                        <h3 class="pl-3 pt-3 text-orange1">BUDGET TOURS</h3>
                            <p class="pl-3 pb-0 pb-2 lead center-f">
                               great journey on a reasonable budget, and make your discovery of Egypt completely worry-free
                            </p>
                    </div>
                   </a>
                </div>
               
        </div>
    </div>
</div>

@include('includes_front.why_us')  
@endsection
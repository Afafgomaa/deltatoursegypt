@extends('layouts.front')
@section('content')
<section class="page-header page-header-modern page-header-background page-header-background-md py-0 overlay overlay-color-primary overlay-show overlay-op-8" style="background-image: url('images/budget_egypt.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-sm-5 order-2 order-sm-1 align-self-center p-static">
                <div class="overflow-hidden pb-2">
                    <h1 class="text-10 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">{{$page->title}}  </h1>
                </div>
                <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                    <span class="sub-title text-4 mt-4">{{$page->desc}}</span>
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
<div class="p-5 bg-white mt-0">
    <div class="container">
        <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
        <div id="sub_category" class="home_special_offer">
			<div class="img_container">
			<a href="route">
				<img src="{{asset('images/egypt-classical-tours.jpg')}}" alt="classic tour" title="classic tour">
					</a>
				</div>
				<div class="home_special_offer_content">
					<a href="route">
						<div class="home_special_offer_title">
							<h2 class="mb-0 text-blue font-weight-bold">Classic Tours</h2>
						</div>
					</a>
						<div class="home_special_offer_description">
							<p>Experience all that Egypt has to offer with an exclusive private group holiday.</p>
						</div>
					<a href="/Egypt/Packages/Honeymoon-Tours-Egypt">
						</a><div class="read_more"><a href="route"></a><a href="route">read more</a></div>
					
				</div>
			</div>
		 
		</div>
        <div class="col-md-4 col-sm-6 col-xs-12">
        <div id="sub_category" class="home_special_offer">
			<div class="img_container">
			<a href="route">
				<img src="{{asset('images/travel_egypt_safari.jpg')}}" alt="safari tour" title="safari tour">
					</a>
				</div>
				<div class="home_special_offer_content">
					<a href="route">
						<div class="home_special_offer_title">
							<h2 class="mb-0 text-blue font-weight-bold">ADVENTURE TOURS</h2>
						</div>
					</a>
						<div class="home_special_offer_description">
							<p>Plan a luxury tour that will take you back to a bygone era of more comfortable travel.</p>
						</div>
					<a href="/Egypt/Packages/Honeymoon-Tours-Egypt">
						</a><div class="read_more"><a href="route"></a><a href="route">read more</a></div>
					
				</div>
			</div>
		 
		</div>

        <div class="col-md-4 col-sm-6 col-xs-12">
        <div id="sub_category" class="home_special_offer">
			<div class="img_container">
			<a href="route">
				<img src="{{asset('images/luxor.jpg')}}" alt="luxor tour" title="luxor tour">
					</a>
				</div>
				<div class="home_special_offer_content">
					<a href="route">
						<div class="home_special_offer_title">
							<h2 class="mb-0 text-blue font-weight-bold">EGYPT LUXURY TOURS</h2>
						</div>
					</a>
						<div class="home_special_offer_description">
							<p> Plan a luxury tour that will take you back to a bygone era of more comfortable travel.</p>
						</div>
					<a href="route">
						</a><div class="read_more"><a href="route"></a><a href="route">read more</a></div>
					
				</div>
			</div>
		 
		</div>

        <div class="col-md-4 col-sm-6 col-xs-12">
        <div id="sub_category" class="home_special_offer">
			<div class="img_container">
			<a href="route">
				<img src="{{asset('images/budget_project.jpg')}}" alt="classic tour" title="classic tour">
					</a>
				</div>
				<div class="home_special_offer_content">
					<a href="route">
						<div class="home_special_offer_title">
							<h2 class="mb-0 text-blue font-weight-bold">BUDGET TOURS</h2>
						</div>
					</a>
						<div class="home_special_offer_description">
							<p>great journey on a reasonable budget, and make your discovery of Egypt completely worry-free</p>
						</div>
					<a href="route">
						</a><div class="read_more"><a href="route"></a><a href="route">read more</a></div>
					
				</div>
			</div>
		 
		</div>


       
       

    
        </div>
    </div>
</div>
@include('includes_front.faq')
@endsection
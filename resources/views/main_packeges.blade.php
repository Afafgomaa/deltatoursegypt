@extends('layouts.front')
@section('content')
<section class="page-header page-header-modern page-header-background page-header-background-md py-0   overlay-op-8" style="background-image: url('{{url('/')}}/public/images/budget_egypt.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-sm-5 order-2 order-sm-1 align-self-center p-static p-5">
                <div class="overflow-hidden pb-2">
                    <h1 class="text-10 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">{{$page->title}}</h1>
                </div>
                <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                    <span class="sub-title text-4 mt-4">{!!$page->breif!!}</span>
                </div>

                <div class="appear-animation d-inline-block" data-appear-animation="rotateInUpRight" data-appear-animation-delay="500">
                    <span class="arrow hlt" style="top: 40px;"></span>
                </div>
            </div>
           
        </div>
    </div>
</section>
<div class="p-5 bg-white mt-0">
    <div class="container">
        <div class="row">
            @foreach($page->subPages as $sub)
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div id="sub_category" class="home_special_offer">
                        <div class="img_container">
                            <a href="{{url($page->slug . '/' .$sub->slug)}}">
                                <img src="{{asset($sub->image)}}" alt="classic tour" title="classic tour">
                            </a>
                        </div>
                        <div class="home_special_offer_content">
                                <a href="{{url($page->slug . '/' .$sub->slug)}}">
                                    <div class="home_special_offer_title">
                                        <h2 class="mb-0 text-blue font-weight-bold">{{$sub->name}}</h2>
                                    </div>
                                </a>
                                <div class="home_special_offer_description">
                                                {!!substr($sub->breif,0,200)!!}...
                                </div>
                                
                                <div class="read_more">
                                    <a href="{{url($page->slug . '/' .$sub->slug)}}">read more</a>    
                                </div>
                                
                        </div>
                    </div>  
                </div>
            
            @endforeach

        </div>
    </div>
</div>

@include('includes_front.faq')
@endsection
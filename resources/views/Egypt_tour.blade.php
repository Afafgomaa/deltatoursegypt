@extends('layouts.front')

@section('content')

    <section class="page-header page-header-modern page-header-background page-header-background-md py-0
     @if ($page->overlay === 0 ) {{'overlay overlay-color-primary overlay-show overlay-op-8' }}
      @elseif ( $page->overlay === 1 )
      {{'overlay overlay-color-dark overlay-show overlay-op-8'}}
      @endif
       " style="background-image: url({{$page->bg_image}})">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 order-2 order-sm-1 align-self-center p-static">
                    <div class="overflow-hidden pb-2">
                        <h1 class="text-10 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300"> {{$page->title}}</h1>
                    </div>
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                        <span class="sub-title text-4 mt-4">{!!$page->breif!!}</span>
                    </div>
                    <div class="appear-animation d-inline-block" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                        <a href="{{route('Tailor_Made')}}" class="btn btn-modern btn-dark mt-4">Talior Made <i class="fas fa-arrow-right ml-1"></i></a>
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

@foreach($programs_in as $program)

    <div class="col-md-4 col-xs-12">
        <div class="home_special_offer" id="programs">
            <a href="{{url($mainpage->slug . '/'.$program->page->slug . '/' . $program->slug )}}">
                <div class="img_container" style="background-image: url({{$program->main_image}})">
                    <div class="short_info" id="home_short_info">
                        <span class="price">
                        <span class="from">from</span>
                            <span class="currencySign">$</span><span id="min_price1175" class="convertable" itemprop="lowPrice"> {{$program->price}} USD</span>
                            
                    </div>
                </div>
            </a>
        <div class="home_special_offer_content">
                    <div class="home_special_offer_title">
                        <h2 class="mb-0">
                        <a href="{{url($mainpage->slug . '/'.$program->page->slug . '/' . $program->slug )}}"><strong> {{$program->name}}</strong></a>
                        </h2>
                    </div>
                   <div class="home_special_offer_types">
                        <div class="home_special_offer_types_box">{{($program->kind) ? 'public' : 'Private'}} Tour  
                        </div>
                        <div class="home_special_offer_types_box">
                        {{$program->days}} days -  {{$program->nights}} nights  
                        </div>
                   </div>
                   <div class="home_special_offer_description">
                  {!!substr($program->brief,0,250)!!}...
                    </div>
                    <div class="read_more">
                        <a href="{{url($mainpage->slug . '/'.$program->page->slug . '/' . $program->slug )}}">read more</a>
                        
                    </div>
        </div>
       </div>
      </div>


      @endforeach

    
      
    












    </div>
</div>
</div>
@endsection

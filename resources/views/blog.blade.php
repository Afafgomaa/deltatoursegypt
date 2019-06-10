@extends('layouts.front')

@section('content')
<section class="page-header page-header-modern page-header-background page-header-background-md py-0 overlay overlay-color-primary overlay-show overlay-op-8" style="background-image: url('images/budget_egypt.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 order-2 order-sm-1 align-self-center p-static">
                    <div class="overflow-hidden pb-2">
                        <h1 class="text-10 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Blog </h1>
                    </div>
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                        <span class="sub-title text-4 mt-4">description</span>
                    </div>
                    <div class="appear-animation d-inline-block" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                        <a href="#" class="btn btn-modern btn-dark mt-4">Talior Made <i class="fas fa-arrow-right ml-1"></i></a>
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
@include('includes_front.blog')
@endsection
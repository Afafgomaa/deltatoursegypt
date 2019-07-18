@extends('layouts.front')

@section('content')
<div class="container">
        <h1 class=" pt-5">Egypt Travel Guide</h1>
    <div class="post-image">
         <div class="post-image single">
            <img class="img-responsive" src="{{url('/')}}/public/images/EgyptFlag.jpg" style="display: block;
    max-width: 100%;
    height: auto;">
        </div>
    </div>
    <div class="row center">  
            <div class="col-md-12">
                <p class="featured lead">
                    Egypt travel information and sightseeing guide. general information about most of the sightseeing
                    attractions all over Egypt. Delta Egypt provide you with General travel info. which will help you 
                    planning your trip through the whole country of Egypt and guide you in dealing with Daily activities  .
                </p>
            </div>
        </div>			
</div>
                <?php $faqs = App\faqs::all()?>
@include('includes_front.faq')
@endsection
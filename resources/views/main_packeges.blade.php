@extends('layouts.front')

@section('content')
<div class="p-5">
    <div class="container">
      <div class="row">
       <div class="col-md-6">
        
           <img class="box-shadow-gray" src="{{asset('images/luxor.jpg')}}" style="width:100%">
           <div class="row">
               <h3 class="pl-3 pt-3 text-orange1">A TASTE OF THE MALDIVES</h3>
                    <p class="pl-3 pb-0 lead text-justify">
                        The sun dipped down below the horizon and the beautiful white sand turned a
                        golden yellow. This was the picture postcard start to my trip to the Ma...
                    </p>
                    <small class="pl-3 pt-0 text-gray">Author: Martin Hosie, May 6, 2014</small>
           </div>
       </div>
       <div class="col-md-6">
           <img class="box-shadow-gray" src="{{asset('images/luxor.jpg')}}" style="width:100%">
            <div class="row">
               <h3 class="pl-3 pt-3 text-orange1">A TASTE OF THE MALDIVES</h3>
                    <p class="pl-3 pb-0 lead text-justify">
                        The sun dipped down below the horizon and the beautiful white sand turned a
                        golden yellow. This was the picture postcard start to my trip to the Ma...
                    </p>
                    <small class="pl-3 pt-0 text-gray">Author: Martin Hosie, May 6, 2014</small>
           </div>
       </div>
      </div>
    </div>
</div>

@endsection
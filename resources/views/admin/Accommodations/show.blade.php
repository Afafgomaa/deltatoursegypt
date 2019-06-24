@extends('layouts.back')
@section('content')

@include('includes_back.sidebar')
<div class="right_col" role="main" style="min-height: 3787px;">
  <div class="row">
   <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Hotels</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
                <div class="x_content">
                
                        <h3>{{$accommodation->name}}</h3>
                <img src="{{$accommodation->small_iamge}}" alt="..." class="img-thumbnail" width="300">
                <p>{!!$accommodation->brief!!}</p>
               @foreach(unserialize($accommodation->gallery_image) as $img)
               <img src="{{$img}}" alt="..." class="img-thumbnail" width="150" height="100">
               @endforeach
              


                </div>

              
          </div>
      </div>
  </div>
</div>


@endsection
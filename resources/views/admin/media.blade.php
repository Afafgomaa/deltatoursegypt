@extends('layouts.back')

@section('content')
@include('includes_back.sidebar')
<div class="right_col" role="main" style="min-height: 1054px;">
<div class="">
<div class="title_left">
     <h3> Media Gallery <small> gallery design</small> </h3>
 </div>
 <div class="title_right">
    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
    <form method="post" action="{{route('avatar.store')}}" enctype="multipart/form-data">
      @csrf
      <div class="input-group">
       <div class="input-group-prepend"> 
         <div class="custom-file">
          <input type="file" name="avatar" class="custom-file-input" id="customFile" aria-describedby="inputGroupFileAddon01">
         </div>
         <button class="btn btn-success" type="submit">Go</button>
       </div>
      </div>
      
    </form>
    </div>
  </div>
<div class="row">
  <div class="col-md-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Media Gallery <small> gallery design </small></h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">

        <div class="row">

          <p>Media gallery</p>
      
        @foreach($avatars as $avatar)
          <div class="col-md-55">
            <div class="thumbnail">
              <div class="image view view-first">
                <img style="width: 100%; display: block;" src="{{$avatar->getUrl() ?? ''}}">
                <div class="mask">
                  <p>Image</p>
                  <div class="tools tools-bottom">
                   
                    <button class="copy" data-clipboard-target="#copy-me"><i class="fa fa-link"></i></button>
                    <a href="{{route('media.delete',['id' =>  $avatar->id] ) }}"><i class="fa fa-times"></i></a>
                  </div>
                  <input  value="{{$avatar->getFullUrl()}}" id="copy-me">
                </div>
              </div>
            </div>
          </div>
        @endforeach

      
        </div>
      </div>
    </div>
  </div>
 </div>
</div>
</div>

@endsection
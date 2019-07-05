@extends('layouts.back')
@section('content')

@include('includes_back.sidebar')
<div class="right_col" role="main" style="min-height: 3787px;">
 <div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
          <h2>Programs</h2>
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
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>{{$program->name}}</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('Program.index') }}"> Back</a>
                    </div>
                </div>
            </div>
            @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<br><br>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Program Name:</strong>
                {{ $program->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Program Price:</strong>
                {{ $program->price }} USD
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>place:</strong>
                {{ $program->place }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                {!! $program->brief !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong> Main Image:</strong>
                <img id="blah" src="{{$program->main_image}}" alt="your image" width="150"/>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kind:</strong>
                {{$program->kind  > 0 ? 'Public' : 'Private'}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Dyas:</strong>
                {{$program->days}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nights:</strong>
                {{$program->nights}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
                <strong>Image Gellery:</strong>
        @foreach(unserialize($program->image_gallery) as $img)
                
                    <div class="img-thumbnail border-0 p-0 d-block">
                        <img class="img-fluid border-radius-0 img-rounded" src="{{$img}}" width="50" height="50" alt="">
                    </div>
            @endforeach
 
        </div>
        </div>


 <hr>



    </div>



         </div>
       </div>
    </div>
  </div>
</div>
@endsection
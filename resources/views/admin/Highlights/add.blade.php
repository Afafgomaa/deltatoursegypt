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
                        <h2>Add New pogram</h2>
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
    {!! Form::open(array('route' => 'Program.store','files'=>true,'method'=>'POST')) !!}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Program Name:</strong>
                {!! Form::text('name', null, array('placeholder' => 'Program Name','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Program Price From:</strong>
                {!! Form::number('price', null, array('placeholder' => 'Price','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Program Days:</strong>
                {!! Form::number('days', null, array('placeholder' => 'Days','class' => 'form-control')) !!}
            </div>
        </div>
 
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Program Nights:</strong>
                {!! Form::number('nights', null, array('placeholder' => 'Nights','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Program Main Image:</strong>
                {!! Form::text('main_image', null, array('placeholder' => 'Main Image Url','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Program Type:</strong>
                {!! Form::select('kind', ['0' => 'Private', '1' => 'Public'],null,['class' => 'form-control' ]) !!}
            </div>
        </div>
 
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Place:</strong>
                {!! Form::text('place', null, array('placeholder' => 'Place','class' => 'form-control')) !!}
            </div>
        </div>
 
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                 {!! Form::textarea('brief', null, array('placeholder' => 'Description','class' => 'form-control summernote','style'=>'height:100px')) !!}                
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Package Highlights:</strong>
                {!! Form::select('package_highlights_id', ['0' => 'Private', '1' => 'Public'] , null, ['class' => 'form-control' ]) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>holiday_sights_id:</strong>
               {!! Form::text('holiday_sights_id' , null, array('placeholder' => 'holiday_sights_id','class' => 'form-control')) !!}
            </div>
            <img id="blah" src="#" alt="your image" width="150"/>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group image_gallery">
                <strong>Program Image Gallery:</strong>
                {!! Form::text('image_gallery[]', null , array('placeholder' => 'image gallery','class' => 'form-control' )) !!}
            </div> 
            <div class="pull-right">
                    <a id="gallery_iamge_add" class="btn btn-success">+</a>
            </div>               
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Overview:</strong>
                 {!! Form::textarea('overview', null, array('placeholder' => 'overview','class' => 'summernote form-control', 'style'=>'height:100px')) !!}                
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Accommodations:</strong>
                {!! Form::select('accom_id', ['0' => 'Private', '1' => 'Public'] , null , ['class' => 'form-control' ]) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>itinerary:</strong>
                 {!! Form::textarea('itinerary', null, array('placeholder' => 'overview','class' => 'form-control summernote','style'=>'height:100px')) !!}                
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Add On:</strong>
                {!! Form::select('add_on_id', ['0' => 'Private', '1' => 'Public'] , null , ['class' => 'form-control' ]) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price&Children:</strong>
                 {!! Form::textarea('price_children', null, array('placeholder' => 'Price&Children','class' => 'form-control summernote', 'id' => 'summernote','style'=>'height:100px')) !!}                
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pricing:</strong>
                 {!! Form::textarea('pricing', null, array('placeholder' => 'Pricing', 'id' => 'summernote','class' => 'form-control summernote','style'=>'height:100px')) !!}                
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Related Programs:</strong>
                {!! Form::select('related_programs_id[]', ['0' => 'Private', '1' => 'Public'] , null , ['class' => 'form-control','multiple' => 'multiple'])  !!}
            </div>
        </div>
      
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    {!! Form::close() !!}



        </div>
       </div>
    </div>
  </div>
</div>

@endsection
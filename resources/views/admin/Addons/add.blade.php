@extends('layouts.back')
@section('content')

@include('includes_back.sidebar')
<div class="right_col" role="main" style="min-height: 3787px;">
 <div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
          <h2>Addons</h2>
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
                        <h2>Add New Addon</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('Addon.index') }}"> Back</a>
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
    {!! Form::open(array('route' => 'Addon.store','files'=>true,'method'=>'POST')) !!}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Addon Title:</strong>
                {!! Form::text('title', null, array('placeholder' => 'Title','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Addon Price From:</strong>
                {!! Form::number('price', null, array('placeholder' => 'Price','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Addon Image Url:</strong>
                {!! Form::text('image', null, array('placeholder' => 'url','class' => 'form-control')) !!}
            </div>
        </div> 
 
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                 {!! Form::textarea('desc', null, array('placeholder' => 'Description','class' => 'form-control summernote','style'=>'height:100px')) !!}                
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
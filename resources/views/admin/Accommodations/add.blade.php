@extends('layouts.back')
@section('content')

@include('includes_back.sidebar')
<div class="right_col" role="main" style="min-height: 3787px;">
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
            <h2>Posts </h2>
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
                    <h3 style="color:#26B99A;font-weight:bold">Add New Hotel Or Cruises</h3>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('Accommodation.index') }}"> Back</a>
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
            <form id="demo-form2" method="post" action="{{route('Accommodation.store')}}" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
                @csrf
                
                 
                <div class="form-group">
                <strong>Name</strong>
                
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <input type="text" id="name" required="required" name="name" class="form-control col-md-7 col-xs-12">
                </div>
                </div>
                <div class="form-group">
                <strong>location</strong>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <input type="text" id="location" name="location" required="required" class="form-control col-md-7 col-xs-12">
                </div>
                </div>

                <div class="form-group">
                <strong>Tripadvisor link</strong>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <input type="url" id="tripadvisor_link" name="tripadvisor_link"  class="form-control col-md-12 col-xs-12">
                </div>
                </div>

                <div class="form-group">
                    
                    <strong>Small Image Url </strong>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <input type="url" id="small_iamge" name="small_iamge" required="required" class="form-control col-md-12 col-xs-12">
                    </div>
                </div>

                <div class="form-group">
                    <strong>thumbnail Image Url</strong>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <input type="url" id="image_thumbnail" name="image_thumbnail" required="required" class="form-control col-md-12 col-xs-12">
                    </div>
                </div>

                <div class="form-group">
                    <div id="accommodation">
                   <strong> Add Gallery Images</strong>
                    <div class="col-md-12 col-sm-12 col-xs-12" id="image_gallery_add">
                      <input type="url" name="iamge_gallery[]" class="form-control col-md-12 col-xs-12 ">
                    </div>
                    </div>
                    <button type="button" class="add_accommodation">Add another Image</button>  
              </div>
                <div class="form-group">
                <strong>Brief</strong>
                <div class="col-md-12 col-sm-12 col-xs-12">
                <textarea class="form-control col-md-12 col-xs-12" type="text" name="brief" col="5" rows="5"></textarea>
                </div>
                </div>
                

                <br><br>
                <div class="ln_solid"></div>
                <div class="form-group">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
                </div>

            </form>
            </div>
        </div>
        </div>
</div>
</div>

@endsection
@extends('layouts.back')
@section('content')

@include('includes_back.sidebar')
<div class="right_col" role="main" style="min-height: 37127px;">
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
            <h2>Accommodations </h2>
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
                    <h3 style="color:#26B99A;font-weight:bold">Edit Hotel Or Cruises</h3>
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
            <br>
            <form id="demo-form2" method="post" action="{{route('Accommodation.update', ['id' => $accommodation->id])}}"  class="form-horizontal form-label-left">
                @csrf
                @method('PUT')
                 
                
                 
                <div class="form-group">
               <strong> Name</strong>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <input type="text" id="name" required  name="name" value="{{$accommodation->name}}" class="form-control col-md-7 col-xs-12">
                </div>
                </div>
                <div class="form-group">
                
                        <strong>location</strong>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <input type="text" id="location" name="location" required="required" value="{{$accommodation->location}}" class="form-control col-md-7 col-xs-12">
                </div>
                </div>

                <div class="form-group">
                <strong>Tripadvisor link</strong>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <input type="url" id="tripadvisor_link" name="tripadvisor_link" value="{{$accommodation->tripadvisor_link}}"  class="form-control col-md-7 col-xs-12">
                </div>
                </div>

                <div class="form-group">
                    <strong>Small Image Url</strong>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <input type="url" id="small_iamge" name="small_iamge" value="{{$accommodation->small_iamge}}" required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                </div>

                <div class="form-group">
                    <strong>thumbnail Image Url</strong>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <input type="url" id="image_thumbnail" name="image_thumbnail" value="{{$accommodation->thumbnail_iamge}}" required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                </div>

                <div class="form-group">
                    <div id="edit_accom">
                       <strong>Add Gallery Images</strong>
                        <div class="col-md-12 col-sm-12 col-xs-12 image_gallery">
                            @foreach(unserialize($accommodation->gallery_image) as $img)
                                <div class="form-group">
                                <input type="url" name="iamge_gallery[]"  value="{{$img}}" class="form-control col-md-12 col-xs-12">
                                <button class="remove_this_filed" type="button">remove</button>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <button type="button" class="gallery_iamge_add">Add New Image</button>
                </div>
                <div class="form-group">
                <strong>Brief<strong>
                <div class="col-md-12 col-sm-12 col-xs-12">
                <textarea class="form-control col-md-12 col-xs-12" type="text" name="brief" col="5" rows="5">{{$accommodation->brief}}</textarea>
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
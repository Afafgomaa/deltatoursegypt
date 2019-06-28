@extends('layouts.back')
@section('content')

@include('includes_back.sidebar')
<div class="right_col" role="main" style="min-height: 3787px;">
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
            <h2>Slider Design </h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
            </div>
            <div class="x_content">
            <br>
            <form id="demo-form2" method="post" action="{{route('slider.store')}}" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
                @csrf
                 <h3 style="color:#26B99A;font-weight:bold">Slider One</h3>
                 <hr>
                 <br><br>
                <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="url">Silder Image Url <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="url" id="url" required="required" value="{{$slider_1}}" name="slider_1_url" class="form-control col-md-7 col-xs-12">
                </div>
                </div>
                <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Title <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="url" id="title" name="slider_1_title" value="{{$title_1}}" required="required" class="form-control col-md-7 col-xs-12">
                </div>
                </div>
                <div class="form-group">
                <label for="description" class="control-label col-md-3 col-sm-3 col-xs-12">description</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="description" class="form-control col-md-7 col-xs-12" value="{{$desc_1}}" type="text" name="slider_1_description">
                </div>
                </div>
                <br><br>

                <h3 style="color:#26B99A;font-weight:bold">Slider Two</h3>
                <hr>
                <br><br>
                <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="url"> Silder Image Url<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="url" id="url"  name="slider_2_url" value="{{$slider_2}}" required="required" class="form-control col-md-7 col-xs-12">
                </div>
                </div>
                <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Title <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="url" id="title" name="slider_2_title" value="{{$title_2}}" required="required" class="form-control col-md-7 col-xs-12">
                </div>
                </div>
                <div class="form-group">
                <label for="description" class="control-label col-md-3 col-sm-3 col-xs-12">description</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="description" class="form-control col-md-7 col-xs-12" value="{{$desc_2}}" type="text" name="slider_2_description">
                </div>
                </div>
                <br><br>

                <h3 style="color:#26B99A;font-weight:bold">Slider Three</h3>
                <hr>
                <br><br>
                <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="url">Silder Image Url <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="url"  id="url" name="slider_3_url" value="{{$slider_3}}" required="required" class="form-control col-md-7 col-xs-12">
                </div>
                </div>
                <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Title <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="url" id="title" name="slider_3_title" value="{{$title_3}}" required="required" class="form-control col-md-7 col-xs-12">
                </div>
                </div>
                <div class="form-group">
                <label for="description" class="control-label col-md-3 col-sm-3 col-xs-12">description</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="description" class="form-control col-md-7 col-xs-12" value="{{$desc_3}}" type="text" name="slider_3_description">
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
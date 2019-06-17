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
            <form id="demo-form2" method="post" action="{{route('post.store')}}" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
                @csrf
                 <h3 style="color:#26B99A;font-weight:bold">Add New Post</h3>
                 <hr>
                 <br><br>
                <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="url">Image Url <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="url" id="url" required="required" name="image" class="form-control col-md-7 col-xs-12">
                </div>
                </div>
                <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Title <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="url" id="title" name="title" required="required" class="form-control col-md-7 col-xs-12">
                </div>
                </div>
                <div class="form-group">
                <label for="description" class="control-label col-md-3 col-sm-3 col-xs-12">Description</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <textarea class="form-control col-md-7 col-xs-12" type="text" name="desc" col="5" rows="5"></textarea>
                </div>
                </div>
                
               <div class="form-group">
               <div class="radio">
            <label class="hover">
                <div class="iradio_flat-green hover" style="position: relative;">
                <input type="checkbox" class="flat" value="1"  name="home" style="position: absolute; opacity: 0;">
                <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                </div> Add To Home Page
                </label>
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
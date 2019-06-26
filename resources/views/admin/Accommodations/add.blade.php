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
            <br>
            <form id="demo-form2" method="post" action="{{route('Accommodation.store')}}" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
                @csrf
                 <h3 style="color:#26B99A;font-weight:bold">Add New Hotel Or Cruises</h3>
                 <hr>
                 <br><br>
                <div class="form-group">
                <label class="control-label col-md-2 col-sm-2 col-xs-12" for="name">Name <span class="required">*</span>
                </label>
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <input type="text" id="name" required="required" name="name" class="form-control col-md-7 col-xs-12">
                </div>
                </div>
                <div class="form-group">
                <label class="control-label col-md-2 col-sm-2 col-xs-12" for="location">location <span class="required">*</span>
                </label>
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <input type="text" id="location" name="location" required="required" class="form-control col-md-7 col-xs-12">
                </div>
                </div>

                <div class="form-group">
                <label class="control-label col-md-2 col-sm-2 col-xs-12" for="tripadvisor_link">Tripadvisor link
                </label>
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <input type="url" id="tripadvisor_link" name="tripadvisor_link"  class="form-control col-md-7 col-xs-12">
                </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="small_iamge">Small Image Url <span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                      <input type="url" id="small_iamge" name="small_iamge" required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="image_thumbnail">thumbnail Image Url<span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                      <input type="url" id="image_thumbnail" name="image_thumbnail" required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="image">Add Gallery Images <span class="required">*</span>
                    </label>
                    <div class="col-md-7 col-sm-7 col-xs-12" id="image_gallery_add">
                      <input type="url" name="iamge_gallery[]" class="form-control col-md-12 col-xs-12 ">
                      
                    </div>
                    <div class="col-md-1 col-sm-1 col-xs-12">
                    <a id="add" class="btn btn-success">+</a>
                    </div>

                </div>
                <div class="form-group">
                <label for="description" class="control-label col-md-2 col-sm-2 col-xs-12">Brief</label>
                <div class="col-md-8 col-sm-8 col-xs-12">
                <textarea id="summernote" class="form-control col-md-10 col-xs-12" type="text" name="brief" col="5" rows="5"></textarea>
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
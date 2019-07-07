@extends('layouts.back')
@section('content')

@include('includes_back.sidebar')
<div class="right_col" role="main" style="min-height: 3787px;">
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
            <h2>{{$spage->name}} </h2>
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
@if($errors->any())
    @foreach($errors->all() as $error)
            <div class="alert alert-danger">
                <p>{{$error}}</p>
            </div>
    @endforeach
@endif
</div>
            <br>
            <form id="demo-form2" method="post" action="{{route('subPage.update', ['id'=> $spage->id])}}"  class="form-horizontal form-label-left" >
                @csrf
                
                <h3 style="color:#26B99A;font-weight:bold">Edit SubPage</h3>
                 <hr>
                 <br><br>
                <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="url">name <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="name" required="required" name="name" value="{{$spage->name}}" class="form-control col-md-7 col-xs-12">
                    <small>Name shows in home page manu </small>
                </div>
                </div>
                <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Title <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="title" name="title" required="required" value="{{$spage->title}}" class="form-control col-md-7 col-xs-12">
                    <small>Title shows as Heading in home page and url </small>
                </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Image <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="image" name="image" required="required" value="{{$spage->image}}" class="form-control col-md-7 col-xs-12">
                        <small>image shows as main page as sections </small>
                    </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Select main Page <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <select class="form-control col-md-7 col-xs-12" required name="parent_id">
                            <option value="" disabled>Select Main Page</option>
                            @foreach($navbar_links as $page)  
                                    <option value="{{$page->id}}" {{$page->id === $spage->parent_id ? 'Selected': ''}}>{{$page->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Back Ground Image <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="url" name="bg_image" required value="{{$spage->bg_image}}"  class="form-control col-md-7 col-xs-12">
                    </div>
                </div>
                <div class="form-group">
                <label for="description" class="control-label col-md-3 col-sm-3 col-xs-12">Description</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <textarea class="form-control col-md-7 col-xs-12 summernote" type="text" name="breif" col="5" rows="5">
                {!!$spage->breif!!}
                </textarea>
                </div>
                </div>

                <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Overlay <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <strong class="text-primary">Blue</strong> &nbsp;
                            <input type="checkbox" name="overlay"  {{$spage->overlay === 0 ?  "checked" : '' }} value="0"> &nbsp; &nbsp; &nbsp;
                        <strong style="color:black">Black</strong> &nbsp;
                            <input type="checkbox" name="overlay" {{$spage->overlay === 1 ? 'checked' : ''}} value="1">
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
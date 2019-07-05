@extends('layouts.back')
@section('content')

@include('includes_back.sidebar')
<div class="right_col" role="main" style="min-height: 3787px;">
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
            <h2>{{$post->title}} </h2>
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
                    <h3 style="color:#26B99A;font-weight:bold">Edit Post </h3>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('post.index') }}"> Back</a>
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
            <form id="demo-form2" method="post" action="{{route('post.update', ['post' => $post])}}" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
                @csrf
                @method('PUT')
                 
                 
                <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="url">Image Url <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="url" id="url" value="{{$post->image}}" required="required" name="image" class="form-control col-md-7 col-xs-12">
                </div>
                </div>
                <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Title <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="title" value="{{$post->title}}" name="title" required="required" class="form-control col-md-7 col-xs-12">
                </div>
                </div>
                <div class="form-group">
                <label for="description" class="control-label col-md-3 col-sm-3 col-xs-12">Description</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <textarea class="form-control col-md-7 col-xs-12" type="text"  name="desc" col="5" rows="5">
                {!!$post->desc!!}
                </textarea>
                </div>
                </div>
                
               <div class="form-group">
               
                <input type="checkbox" value ="1" name="home" @if($post->add_to_home_page == 1) checked @endif> Add To Home Page
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
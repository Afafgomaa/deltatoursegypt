@extends('layouts.back')
@section('content')

@include('includes_back.sidebar')
<div class="right_col" role="main" style="min-height: 3787px;">
 <div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
          <h2>Edit Section {{$section->name}}</h2>
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
                      
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('sight.index') }}"> Back</a>
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
    {!! Form::model($section, ['method' => 'PATCH','route' => ['section.update', $section->id],'files'=>true]) !!}
    <div class="row">
                       <div class="form-group">
                            <strong>Section Name:</strong>
                             {!! Form::text('name', null, array('placeholder' => ' name','class' => 'form-control')) !!}
                        </div>
                       <div class="form-group">
                            <strong>Section Image:</strong>
                             {!! Form::url('image', null, array('placeholder' => ' image','class' => 'form-control')) !!}
                        </div>
                        
                        <div class="form-group">
                            <strong>Section page:</strong>
                             <select name="page_id" class="form-control">
                             @foreach($pages as $page)
                              <option value="{{$page->id}}">{{$page->name}}</option>
                             @endforeach
                             </select>
                        </div>
                        <div class="form-group">
                            <strong>Section Breif:</strong>
                             {!! Form::textarea('breif', null, array('placeholder' => ' Breif','class' => 'summernote form-control ')) !!}
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
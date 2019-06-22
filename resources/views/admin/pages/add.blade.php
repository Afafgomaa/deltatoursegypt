@extends('layouts.back')
@section('content')

@include('includes_back.sidebar')
<div class="right_col" role="main" style="min-height: 3787px;">
<div class="row">

<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>All Pages </h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>

        <div class="x_content"> 
          @foreach($pages as $page)
             <ul>{{$page->name}}</ul>
          @endforeach
        
         </div>
    </div>
</div>

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
            <h2>Pages </h2>
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
            <form id="demo-form2" method="post" action="{{route('page.store')}}" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
                @csrf
                 <h3 style="color:#26B99A;font-weight:bold">Add New Main Page</h3>
                 <hr>
                 <br><br>
                <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="url">name <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="name" required="required" name="name" class="form-control col-md-7 col-xs-12">
                    <small>Name shows in home page manu </small>
                </div>
                </div>
                <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Title <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="title" name="title" required="required" class="form-control col-md-7 col-xs-12">
                    <small>Title shows in home page and url </small>
                </div>
                </div>
                <div class="form-group">
                <label for="description" class="control-label col-md-3 col-sm-3 col-xs-12">Description</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <textarea class="form-control col-md-7 col-xs-12" type="text" name="desc" col="5" rows="5"></textarea>
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

<!--  end  main page -->



<div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
            <h2>Pages </h2>
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
            <form id="demo-form2" method="post" action="{{route('page.store')}}" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
                @csrf
                 <h3 style="color:#26B99A;font-weight:bold">Add New Subpage</h3>
                 <hr>
                 <br><br>
                <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="url">name <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="name" required="required" name="name" class="form-control col-md-7 col-xs-12">
                    <small>Name shows in home page manu </small>
                </div>
                </div>
                <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Title <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="title" name="title" required="required" class="form-control col-md-7 col-xs-12">
                    <small>Title shows in home page and url </small>
                </div>
                </div>
                <div class="form-group">
                <label for="description" class="control-label col-md-3 col-sm-3 col-xs-12">Description</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <textarea class="form-control col-md-7 col-xs-12" type="text" name="desc" col="5" rows="5"></textarea>
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

        <!-- end sub page -->








</div>
</div>

@endsection
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
<div class="x_content" style="display: block;">
<div class="row">
@if($errors->any())
    @foreach($errors->all() as $error)
            <div class="alert alert-danger">
                <p>{{$error}}</p>
            </div>
    @endforeach
@endif
</div>
<table class="table">
<thead>
<tr>
<th>Page Name</th>
<th>Edit</th>
<th>delete</th>

</tr>
</thead>
<tbody>
@foreach($pages as $page)
<tr class="bg-success">
<td>{{$page->name}}</td>
<td><a class="text-primary" href="{{route('page.edit', ['id' => $page->id])}}">Edit</a></td>
<td><a class="text-danger" href="{{route('page.delete', ['id' => $page->id])}}">Remove</a> </td>
</tr>
    @foreach($page->subPages as $subpage)
    <tr>
       <td><i class="fa fa-arrow-right"></i> {{$subpage->name}}</td>
       <td><a class="text-primary" href="{{route('subPage.edit', ['id' => $subpage->id])}}">Edit</a></td>
       <td><a class="text-danger" href="{{route('subPage.delete', ['id' => $subpage->id])}}">Remove</a> </td>
    </tr>
    @endforeach

@endforeach

</tbody>
</table>
</div>
</div>
</div>











    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
            <h2>Main Pages </h2>
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
            <form id="demo-form2" method="post" action="{{route('page.store')}}" class="form-horizontal form-label-left" >
                @csrf
                 <h3 style="color:#26B99A;font-weight:bold">Add New Main Page</h3>
                 <hr>
                 <br><br>
                <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">name <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="name" required name="name" class="form-control col-md-7 col-xs-12">
                    <small>Name shows in home page manu </small>
                </div>
                </div>
                <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Title <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="title" name="title" required class="form-control col-md-7 col-xs-12">
                    <small>Title shows as Heading in home page and url </small>
                </div>
                </div>
                <div class="form-group">
                <label for="description" required  class="control-label col-md-3 col-sm-3 col-xs-12">Description</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <textarea class="form-control col-md-7 col-xs-12" type="text" name="breif" col="5" rows="5"></textarea>
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
            <h2>Sub Pages </h2>
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
            <form id="demo-form2" method="post" action="{{route('subpage.store')}}"  class="form-horizontal form-label-left">
                @csrf
                 <h3 style="color:#26B99A;font-weight:bold">Add New Subpage</h3>
                 <hr>
                 <br><br>
                <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="url">name <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="name" required name="name" class="form-control col-md-7 col-xs-12">
                    <small>Name shows in home page manu </small>
                </div>
                </div>
                <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Title <span class="required">*</span>
                </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="title" name="title" required  class="form-control col-md-7 col-xs-12">
                        <small>Title shows as Heading in home page and url </small>
                    </div>
                </div>
                <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Image <span class="required">*</span>
                </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="url" id="image" name="image" required  class="form-control col-md-7 col-xs-12">
                        <small>image shows as main page as sections </small>
                    </div>
                </div>
                <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Back Ground Image <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="url" name="bg_image" required  class="form-control col-md-7 col-xs-12">
                    </div>
                </div>
                <div class="form-group">
                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Select main Page <span class="required">*</span>
                 </label>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                    <select class="form-control col-md-7 col-xs-12" required name="mainPage">
                        <option value="" Selected disabled>Select Main Page</option>
                        @foreach($pages as $page)  
                                <option value="{{$page->id}}">{{$page->name}}</option>
                        @endforeach
                    </select>
                 </div>
                </div>
                <div class="form-group">
                <label for="description" class="control-label col-md-3 col-sm-3 col-xs-12">Description</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <textarea class="form-control col-md-7 col-xs-12" required  type="text" name="breif" col="5" rows="5"></textarea>
                </div>
                </div>
                <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Overlay <span class="required">*</span>
                </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <strong class="text-primary">Blue</strong> &nbsp;
                            <input type="checkbox" name="overlay" value="0"> &nbsp; &nbsp; &nbsp;
                        <strong style="color:black">Black</strong> &nbsp;
                            <input type="checkbox" name="overlay" value="1">
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
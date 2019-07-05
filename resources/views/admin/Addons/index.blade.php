@extends('layouts.back')
@section('content')

@include('includes_back.sidebar')
<div class="right_col" role="main" style="min-height: 3787px;">
 <div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
          <h2>Manage Your Addons</h2>
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
                        <h4>Addons List</h4>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-success" href="{{ route('Addon.create') }}">Add</a>
                    </div>
                </div>
            </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif


    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Addon title</th>
            <th>Addon price</th>
            <th>Addon Image</th>
            <th>Addon Description</th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($addons as  $addon)
    <tr>
        <td>0</td>
        <td>{{ $addon->title }}</td>
        <td>{{ $addon->price }}</td>
        <td><img id="blah" src="{{$addon->image}}" width="50"/></td>
        <td>{!! $addon->desc !!}</td>
        
        <td>
            <a class="btn btn-info" href="{{ route('Addon.show',$addon->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('Addon.edit',$addon->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['Addon.destroy', $addon->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table> 
    {!! $addons->render() !!}


        </div>
       </div>
    </div>
  </div>
</div>


@endsection
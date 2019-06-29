@extends('layouts.back')
@section('content')

@include('includes_back.sidebar')
<div class="right_col" role="main" style="min-height: 3787px;">
 <div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
          <h2>Manage Your Sections</h2>
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
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
            
                <div class="col-lg-12 margin-tb">
                    {!! Form::open(array('route' => 'section.store','files'=>true,'method'=>'POST')) !!}
                        <div class="form-group">
                            <strong>Section Name:</strong>
                             {!! Form::text('name', null, array('placeholder' => ' name','class' => 'form-control')) !!}
                        </div>
                        <div class="form-group">
                            <strong>Section Image:</strong>
                             {!! Form::text('image', null, array('placeholder' => ' image','class' => 'form-control')) !!}
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
                        
                  <button type="submit" class="btn btn-primary">Submit</button>
                  {!! Form::close() !!}

                   
                </div>
            </div>


        <br><br><br><hr>

                <table class="table table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Image</th>
                        <th>Breif</th>
                        <th>page Name</th>
                        <th width="280px">Action</th>
                    </tr>
                @foreach ($sections as $key => $section)
                <tr>
                    <td>0</td>
                    <td><img src="{{ $section->image }}" width="150px" height="75px"></td>
                    <td>{!!$section->breif!!}</td>
                    <td>{{$section->page->name}}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('section.edit',$section->id) }}">Edit</a>
                        {!! Form::open(['method' => 'DELETE','route' => ['section.destroy', $section->id],'style'=>'display:inline']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
                </table> 
                {!! $sections->render() !!}




   


        
                </div>
       </div>
    </div>
  </div>
</div>


@endsection
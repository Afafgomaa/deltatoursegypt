@extends('layouts.back')
@section('content')

@include('includes_back.sidebar')
<div class="right_col" role="main" style="min-height: 3787px;">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
        <h2>Trashed Sights</h2>
        <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
        </ul>
        <div class="clearfix"></div>
        </div>

        <div class="x_content">
        <div class="table-responsive">
            <table class="table table-striped jambo_table bulk_action">
            <thead>
                <tr class="headings">
                    <th class="column-title"> Name</th>
                    <th class="column-title"> restore</th>
                    <th class="column-title"> destroy</th>

                </th>
                </tr>
            </thead>

            <tbody>
           
            @foreach($sights as $sight)
                <tr class="even pointer">
                    
                    <td class=" ">{{$sight->name}} </td>
                    <td class=" "><a href="{{route('sight.restore',['id' => $sight->id ])}}" class="btn btn-success btn-xs" type="submit">Restore</button></td>
                    <td class=" "><a href="{{route('sight.kill', ['id' => $sight->id])}}" class="btn btn-danger btn-xs">Destory</a></td>
                </tr>
            @endforeach
            
            </tbody>
            </table>
        </div>
                
            
        </div>
    </div>
    </div>
    </div>
    </div>
@endsection
@extends('layouts.back')
@section('content')

@include('includes_back.sidebar')
<div class="right_col" role="main" style="min-height: 3787px;">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
        <h2>Hotels/Curusr</h2>
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
                    <th class="column-title">Image</th>
                    <th class="column-title">Name</th>
                    <th class="column-title">Show </th>
                    <th class="column-title"> Edit</th>
                    <th class="column-title"> Delete</th>

                </th>
                </tr>
            </thead>

            <tbody>
            
            @foreach($accom as $c)
                <tr class="even pointer">
                    <td class=" "><img src="{{$c->small_iamge}}" width="150" height="75"></td>
                    <td class=" ">{{$c->name}} </td>
                    <td class=" "><a href="{{route('Accommodation.show', ['id' => $c->id])}}"><i class="fa fa-eye fa-lg"></i></a></td>
                    <td class=" "><a href="{{route('Accommodation.edit', ['id' => $c->id])}}"><i class="fa fa-edit fa-lg"></i></a></td>
                    <td class=" "><form method="post" action="{{route('Accommodation.destroy',['id' => $c->id ] )}}">
                      @csrf
                      @method('DELETE')
                    <button type="submit">Delete</button></td>
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
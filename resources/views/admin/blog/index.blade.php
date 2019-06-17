@extends('layouts.back')
@section('content')

@include('includes_back.sidebar')
<div class="right_col" role="main" style="min-height: 3787px;">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
        <h2>Table design <small>Custom design</small></h2>
        <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="#">Settings 1</a>
                </li>
                <li><a href="#">Settings 2</a>
                </li>
            </ul>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
        </ul>
        <div class="clearfix"></div>
        </div>

        <div class="x_content">

        <p>Add class <code>bulk_action</code> to table for bulk actions options on row select</p>

        <div class="table-responsive">
            <table class="table table-striped jambo_table bulk_action">
            <thead>
                <tr class="headings">
                    <th class="column-title">Post Image</th>
                    <th class="column-title">Post Title </th>
                    <th class="column-title">Post Description </th>
                    <th class="column-title"> Edit</th>
                    <th class="column-title"> Delete</th>

                </th>
                </tr>
            </thead>

            <tbody>
            @foreach($posts as $post)
                <tr class="even pointer">
                    <td class=" "><img src="{{$post->image}}" width="100%"></td>
                    <td class=" ">{{$post->title}} </td>
                    <td class=" ">{{$post->desc}}<i class="success fa fa-long-arrow-up"></i></td>
                    <td class=" ">John Blank L</td>
                    <td class=" ">Paid</td>
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
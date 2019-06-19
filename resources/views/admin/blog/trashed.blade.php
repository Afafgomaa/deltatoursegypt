@extends('layouts.back')
@section('content')

@include('includes_back.sidebar')
<div class="right_col" role="main" style="min-height: 3787px;">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
        <h2>Blog Posts</h2>
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
                    <th class="column-title">Post Image</th>
                    <th class="column-title">Post Title </th>
                    <th class="column-title">Post Description </th>
                    <th class="column-title"> Edit</th>
                    <th class="column-title"> restore</th>
                    <th class="column-title"> destroy</th>

                </th>
                </tr>
            </thead>

            <tbody>
            @foreach($posts as $post)
                <tr class="even pointer">
                    <td class=" "><img src="{{$post->image}}" width="100%"></td>
                    <td class=" ">{{$post->title}} </td>
                    <td class=" ">{{$post->desc}}<i class="success fa fa-long-arrow-up"></i></td>
                    <td class=" "><a href="{{route('post.edit', ['id' => $post->id])}}"><i class="fa fa-edit fa-lg"></i></a></td>
                    <td class=" "><button class="btn btn-success btn-xs" type="submit">Restore</button></td>
                    <td class=" "><a href="{{route('post.kill', ['id' => $post->id])}}" class="btn btn-danger btn-xs">Destory</a></td>
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
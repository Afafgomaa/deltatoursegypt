@extends('layouts.back')
@section('content')

@include('includes_back.sidebar')
<div class="right_col" role="main" style="min-height: 3787px;">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
        <h2>pages trashed</h2>
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
                    <th class="column-title">Page name</th>
                    <th class="column-title">PageTitle </th>
                    <th class="column-title">Page Description </th>
                    <th class="column-title"> restore</th>
                    <th class="column-title"> destroy</th>

                </th>
                </tr>
            </thead>

            <tbody>
            @foreach($pages as $page)
                <tr class="even pointer">
                    <td class="{{$page->parent_id === 0 ? 'text-success' : ''}}">{{$page->name}}</td>
                    <td class=" ">{{$page->title}} </td>
                    <td class=" ">{{$page->desc}}<i class="success fa fa-long-arrow-up"></i></td>
                    <td class=" "><a href="{{route('page.restore',['id' => $page->id])}}" class="btn btn-success btn-xs" type="submit">Restore</button></td>
                    <td class=" "><a href="{{route('page.kill',['id' => $page->id])}}" class="btn btn-danger btn-xs">Destory</a></td>
                </tr>
                @foreach($page->subPages as $subpage)
                <tr class="">
                    <td class="">{{$subpage->name}}</td>
                    <td class=" ">{{$subpage->title}} </td>
                    <td class=" ">{{$subpage->desc}}<i class="success fa fa-long-arrow-up"></i></td>
                    <td class=" "><a href="{{route('subPage.restore',['id' => $subpage->id])}}" class="btn btn-success btn-xs" type="submit">Restore</button></td>
                    <td class=" "><a href="{{route('subPage.kill',['id' => $subpage->id])}}" class="btn btn-danger btn-xs">Destory</a></td>
                </tr>
                @endforeach
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
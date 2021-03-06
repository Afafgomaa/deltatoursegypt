@extends('layouts.back')
@section('content')

@include('includes_back.sidebar')
<div class="right_col" role="main" style="min-height: 3787px;">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
        <h2>FAQS</h2>
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
                    
                    <th class="column-title">Title</th>
                    
                    <th class="column-title"> Edit</th>
                    <th class="column-title"> Delete</th>

                
                </tr>
            </thead>

            <tbody>
            @foreach($faqs as $faq)
                <tr class="even pointer">
                    <td>{{$faq->question}} </td>
                    
                    <td><a href="{{route('faqs.edit', ['id' => $faq->id])}}"><i class="fa fa-edit fa-lg"></i></a>
                     </td>
                    <td><form method="post" action="{{route('faqs.destroy',['id' => $faq->id ] )}}">
                      @csrf
                      @method('DELETE')
                    <button type="submit">Delete</button>
                   </td>
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
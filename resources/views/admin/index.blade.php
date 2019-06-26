@extends('layouts.back')
@section('content')

@include('includes_back.sidebar')

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Progams</span>
              <div class="count green">{{count($programs)}}</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i> </i><a href="{{route('Program.index')}}"> Show All Programs</a></span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> Total Posts</span>
              <div class="count green">{{count($posts)}}</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i> </i><a href="{{route('post.index')}}"> Show All Posts</a></span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Accommodations</span>
              <div class="count green">{{count($accommodations)}}</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i></i> <a href="{{route('Accommodation.index')}}"> Show All Accommodations</a></span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Addons</span>
              <div class="count green">{{count($addons)}}</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-desc"></i> </i> <a href="{{route('Addon.index')}}"> Show All Addons</a></span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Pages</span>
              <div class="count green">{{count($allPages)}}</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i> </i><a href="{{route('page.add')}}"> Show All Pages</a></span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Sights</span>
              <div class="count green">{{count($sights)}}</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i></i> <a href="{{route('sight.index')}}"> Show All Sights</a></span>
            </div>
          </div>
          <!-- /top tiles -->

          
       

       
        </div>


        <!-- /page content -->




    @endsection
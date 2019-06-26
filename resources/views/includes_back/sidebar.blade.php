<div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="clearfix"></div>
            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{asset('images/output-onlinepngtools.png')}}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Delta Tours Egypt</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home Page <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('page.add')}}">pages</a></li>
                      <li><a href="{{route('slider')}}">Slider</a></li>
                      <li><a href="">porgram</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Media <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('media') }}">Media Gallery</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Accommodations <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('Accommodation.create') }}">Add New Hotel/Cruises</a></li>
                      <li><a href="{{ route('Accommodation.index') }}">Show All Hotel/Cruises</a></li>
                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Blog <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('post.create') }}">Add Post</a></li>
                      <li><a href="{{ route('post.index') }}">Show All Post</a></li>
                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Programs <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('Program.create') }}">Add Program</a></li>
                      <li><a href="{{ route('Program.index') }}">Show All Programs</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Addons <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('Addon.create') }}">Add addon</a></li>
                      <li><a href="{{ route('Addon.index') }}">Show All Addons</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Trashed <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('post.trashed') }}"> Posts</a></li>
                      <li><a href="{{ route('page.trashed') }}">Pages</a></li>
                      <li><a href="{{ route('Program.trashed') }}">Programs</a></li>
                      <li><a href="{{ route('Accommodation.trashed') }}">Accommodations</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              

            </div>
            <!-- /sidebar menu -->

           
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">{{Auth()->user()->name}}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="{{ route('logout') }}" 
                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                    <i class="fa fa-sign-out pull-right"></i>
                    
                     </a></li>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                      </form>
                  </ul>
                </li>

               
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
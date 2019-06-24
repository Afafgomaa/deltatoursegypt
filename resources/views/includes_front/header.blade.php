
<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 45, 'stickySetTop': '-45px', 'stickyChangeLogo': true}">
	<div class="header-body">
		<div class="header-container container">
			<div class="header-row">
				<div class="header-column">
					<div class="header-row">
						<div class="header-logo">
							<a href="{{route('home')}}">
								<img alt="deltatoursegypt"  width="200" height="100" data-sticky-width="100" data-sticky-height="50" data-sticky-top="50" src="{{asset('images/output-onlinepngtools.png')}}"></a>
						</div>
					</div>
				</div>
				<div class="header-column justify-content-end">
					<div class="header-row pt-3">
						<nav class="header-nav-top">
							<ul class="nav nav-pills">
								<li class="nav-item nav-item-anim-icon d-none d-md-block">
									<a class="nav-link" href="{{route('Egypt_tour')}}"><i class="fas fa-angle-right"></i> Egypt Holidays</a>
								</li>
                                <li class="nav-item nav-item-anim-icon d-none d-md-block">
									<a class="nav-link pl-0" href="{{route('Nile-River-Cruises')}}"><i class="fas fa-angle-right"></i> Nile River Cruises</a>
								</li>
								<li class="nav-item nav-item-anim-icon d-none d-md-block">
									<a class="nav-link pl-0" href="{{route('Egypt_Excursion')}}"><i class="fas fa-angle-right"></i> Egypt Excursion</a>
								</li>
								<li class="nav-item nav-item-left-border nav-item-left-border-remove nav-item-left-border-md-show">
										<span class="ws-nowrap"><i class="fas fa-phone"></i> (002) 0100 178 4742</span>
								</li>
							</ul>
						</nav>
				</div>
				<div class="header-row">
					<div class="header-nav pt-1">
						<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
					        <nav class="collapse">
						       <ul class="nav nav-pills" id="mainNav">
									<li>
										<a  href="{{route('home')}}">Home</a>	
									</li>
                                    
									@foreach($pages as $page)
									<li class="{{count($page->subPages) > 0  ? 'dropdown' : ' ' }}">
									<a class="dropdown-item dropdown-toggle" href="{{str_slug($page->title)}}">{{$page->name}}</a> 
										@if(count($page->subPages) > 0)
										<ul class="dropdown-menu">
											@foreach($page->subPages as $subpage)
											<li class="dropdown-submenu">
												<a class="dropdown-item" href="{{str_slug($subpage->title)}}"> {{$subpage->name}}</a>
											</li>
											@endforeach
										</ul>
										@endif
										</li>
									@endforeach
					
									<li>
										<a  href="{{route('Tailor_Made')}}">Tailor Made</a>	

                                    <li>
										<a  href="{{route('blog')}}">blog</a>	
									</li>
									<li>
										<a  style="color:#F44336" target="_blank" href="{{route('Admin')}}">Admin Panel</a>
									</li>
									
                                    		
								</ul>
							</nav>
						</div>
						<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
											<i class="fas fa-bars"></i>
						</button>
                                     
						</div>
						  
					</div>
				</div>
				
			</div>
		</div>
	</div>

</header>
	
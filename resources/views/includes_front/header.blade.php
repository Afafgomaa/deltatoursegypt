
<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 45, 'stickySetTop': '-45px', 'stickyChangeLogo': true}">
	<div class="header-body">
		<div class="header-container container">
			<div class="header-row">
				<div class="header-column">
					<div class="header-row">
						<div class="header-logo">
							<a href="{{route('home')}}">
								<img alt="deltatoursegypt"  width="200" height="100" data-sticky-width="100" data-sticky-height="50" data-sticky-top="50" src="{{url('/')}}/public/images/output-onlinepngtools3.png"></a>
						</div>
					</div>
				</div>
				<div class="header-column justify-content-end">
					<div class="header-row pt-3">
						<nav class="header-nav-top">
							<ul class="nav nav-pills">
							@foreach($navbar_links->take(3) as $page)
								<li class="nav-item nav-item-anim-icon d-none d-md-block">
									<a class="nav-link" href="{{url($page->slug)}}"><i class="fas fa-angle-right"></i> {{$page->name}}</a>
								</li>
                            @endforeach
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
                                    
									@foreach($navbar_links as $page)
									<li class="{{count($page->subPages) > 0  ? 'dropdown' : ' ' }}">
									<a class="dropdown-item dropdown-toggle" href="{{url($page->slug)}}">{{$page->name}}</a> 
										@if(count($page->subPages) > 0)
										<ul class="dropdown-menu">
											@foreach($page->subPages as $subpage)
											<li class="dropdown-submenu">
												<a class="dropdown-item" href="{{url($page->slug . '/' . $subpage->slug)}}"> {{$subpage->name}}</a>
											</li>
											@endforeach
										</ul>
										@endif
										</li>
									@endforeach
					
									<li>
										<a  href="{{route('Tailor_Made')}}">Tailor Made</a>	
									</li>
									

									<li class="dropdown">
									<a class="dropdown-item dropdown-toggle" href="{{route('contact_us')}}">More<i class="fas fa-chevron-down"></i></a> 
										<ul class="dropdown-menu">
											<li class="dropdown-submenu dropdown-reverse">
									         <a class="dropdown-item" href="{{route('blog')}}"> Blog<i class="fas fa-chevron-down"></i></a>
								             </li>
											<li class="dropdown-submenu dropdown-reverse">
									       <a class="dropdown-item" href="{{route('contact_us')}}"> Contact Us<i class="fas fa-chevron-down"></i></a>
								           </li>
											<li class="dropdown-submenu dropdown-reverse">
									       <a class="dropdown-item" href="{{route('about_us')}}"> About Us<i class="fas fa-chevron-down"></i></a>
								             </li>
											 <li class="dropdown-submenu dropdown-reverse">
									       <a class="dropdown-item" href="{{route('faq')}}"> FAQ<i class="fas fa-chevron-down"></i></a>
								             </li>
										</ul>
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
	
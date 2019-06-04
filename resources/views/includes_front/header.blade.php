
<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 45, 'stickySetTop': '-45px', 'stickyChangeLogo': true}">
	<div class="header-body">
		<div class="header-container container">
			<div class="header-row">
				<div class="header-column">
					<div class="header-row">
						<div class="header-logo">
							<a href="{{route('home')}}">
								<img alt="deltatoursegypt"  width="200" height="100" data-sticky-width="100" data-sticky-height="50" data-sticky-top="50" src="{{asset('images/logodelta.fw.png')}}"></a>
						</div>
					</div>
				</div>
				<div class="header-column justify-content-end">
					<div class="header-row pt-3">
						<nav class="header-nav-top">
							<ul class="nav nav-pills">
								<li class="nav-item nav-item-anim-icon d-none d-md-block">
									<a class="nav-link" href="{{route('Budget_Tours')}}"><i class="fas fa-angle-right"></i> Egypt Budget Tours</a>
								</li>
                                <li class="nav-item nav-item-anim-icon d-none d-md-block">
									<a class="nav-link pl-0" href="{{route('Nile-River-Cruises')}}"><i class="fas fa-angle-right"></i> Nile River Cruises</a>
								</li>
								<li class="nav-item nav-item-anim-icon d-none d-md-block">
									<a class="nav-link pl-0" href="#"><i class="fas fa-angle-right"></i> Egypt Excursion</a>
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
                                    <li class="dropdown">
										<a class="dropdown-item dropdown-toggle" href="{{route('all_packeges')}}">Egypt tours Packages</a>        
											<ul class="dropdown-menu">
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="{{route('Packages')}}"> Egypt Holldays</a>
                                                </li>
												 <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="{{route('Packages')}}"> Luxury Holldays</a>
                                                </li>
												 <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="{{route('Packages')}}"> Cruise Holidays</a>
                                                </li>
												 <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="{{route('Packages')}}"> Dahabya Holiday</a>
                                                </li>
												 <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="{{route('Packages')}}"> Desert Safari</a>
                                                </li>
											</ul>
									</li>
                                    <li>
										<a  href="{{route('Tailor_Made')}}">Tailor Made</a>	
									</li>
									 <li class="dropdown">
										<a class="dropdown-item dropdown-toggle" href="elements.html">Nile River Cruises</a>        
											<ul class="dropdown-menu">
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Nile River Cruise</a>
                                                </li>
												 <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#"> Lake Nasser Cruise</a>
                                                </li>
												<li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#"> Dahabya Cruise</a>
                                                </li>
											</ul>
									</li>
                                    <li>
										<a  href="#">Egypt programs</a>	
									</li>
                                    <li>
										<a  href="#">tripe(group)</a>	
									</li>
                                    <li>
										<a  href="{{route('blog')}}">blog</a>	
									</li>
									
                                    <li>
										<a  href="#">about us</a>	
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
	
@extends('layouts.front')

@section('content')

<div role="main" class="main">
	<div class="slider-container rev_slider_wrapper" style="height: 670px;">
		<div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 670, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500], 'parallax': { 'type': 'scroll', 'origo': 'enterpoint', 'speed': 1000, 'levels': [2,3,4,5,6,7,8,9,12,50], 'disable_onmobile': 'on' }, 'navigation' : {'arrows': { 'enable': true }, 'bullets': {'enable': true, 'style': 'bullets-style-1', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 70, 'h_offset': 0}}}">
			<ul>
				<li data-transition="fade">
					<img src="{{$slider_1}}"  
					alt=""
					data-bgposition="center center" 
					data-bgfit="cover" 
					data-bgrepeat="no-repeat" 
					class="rev-slidebg">
					<div class="tp-caption font-weight-extra-bold text-color-light negative-ls-2"
						data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
						data-x="center"
						data-y="center"
						data-fontsize="['50','50','50','90']"
						data-lineheight="['55','55','55','95']">{{strtoupper($title_1)}}
					</div>
					<div class="tp-caption text-color-light"
						data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
						data-x="center"
						data-y="center" data-voffset="['40','40','40','80']"
						data-fontsize="['18','18','18','50']"
						data-lineheight="['20','20','20','55']"
						style="color: #b5b5b5;">{{$desc_1}}
					</div>			
			    </li>
				<li class="slide-overlay" data-transition="fade">
					<img src="{{$slider_2}}"  
						alt=""
						data-bgposition="center center" 
						data-bgfit="cover" 
						data-bgrepeat="no-repeat" 
						class="rev-slidebg">
					<div class="tp-caption text-color-light font-weight-normal"
						data-x="center"
						data-y="center" data-voffset="['-50','-50','-50','-75']"
						data-start="700"
						data-fontsize="['16','16','16','40']"
						data-lineheight="['25','25','25','45']"
						data-transform_in="y:[-50%];opacity:0;s:500;">  Discover the Mystery of
					</div>
					<div class="tp-caption font-weight-extra-bold text-color-light negative-ls-1"
						data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
						data-x="center"
						data-y="center"
						data-fontsize="['50','50','50','90']"
						data-lineheight="['55','55','55','95']">{{strtoupper($title_2)}}
					</div>
					<div class="tp-caption font-weight-light ws-normal text-center"
						data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
						data-x="center"
						data-y="center" data-voffset="['60','60','60','105']"
						data-width="['530','530','530','1100']"
						data-fontsize="['18','18','18','40']"
						data-lineheight="['26','26','26','45']"
						style="color: #b5b5b5;">{{substr($desc_2 , 0, 13)}}<strong class="text-color-light">{{substr($desc_3 , 12, 21)}}</strong> {{substr($desc_3 ,21)}}
					</div>
								
				</li>
				<li class="slide-overlay slide-overlay-dark" data-transition="fade">
					<img src="{{$slider_3}}"  
						alt=""
						data-bgposition="center center" 
						data-bgfit="cover" 
						data-bgrepeat="no-repeat" 
						class="rev-slidebg">
					<div class="tp-caption font-weight-extra-bold text-color-light negative-ls-2"
						data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
						data-x="center"
						data-y="center"
						data-fontsize="['50','50','50','90']"
						data-lineheight="['55','55','55','95']">{{strtoupper($title_3)}}
						
					</div>
					<div class="tp-caption text-color-light"
						data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
						data-x="center"
						data-y="center" data-voffset="['40','40','40','80']"
						data-fontsize="['18','18','18','50']"
						data-lineheight="['20','20','20','55']"
						style="color: #b5b5b5;">@if(strlen($desc_3) > 50)
																			{{substr($desc_3 , 0, 50)}}
																		   	<br>
																			{{substr($desc_3 , 50 )}}
					                        	@endif
					</div>
				</li>
			</ul>
		</div>
	</div>
	<ul class="header-social-icons social-icons d-none d-sm-block">
		<li class="facebook"><a href="https://www.facebook.com/DeltaToursEgypt" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
		<li class="twitter"><a href="https://twitter.com/deltatoursegypt" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
		<li class="instagram"><a href="https://www.instagram.com/explore/locations/405718209501462/delta-tours-egypt/" target="_blank" title="instagarm"><i class="fab fa-instagram"></i></a></li>
		<li class="tripadvisor"><a href="https://www.tripadvisor.com" target="_blank" title="tripadvisor"><i class="fab fa-tripadvisor"></i></a></li>
		<li class="messenger"><a href="https://www.messenger.com/login.php?next=https%3A%2F%2Fwww.messenger.com%2Ft%2F405718209501462" target="_blank" title="messenger"><i class="fab fa-facebook-messenger"></i></a></li>
		<li class="youtuob"><a href="https://www.youtube.com/channel/UCd2xNH3yvFs609eucWNYJTg" target="_blank" title="youtuob"><i class="fab fa-youtube"></i></a></li>
	</ul>
<div class="home-intro" id="home-intro">
	<div class="container">
		<div class="row">
			<div class="col-md-8 m-s">
				<p><em>Over 40 years in Travel Buisness</em></p>
			</div>
		</div>		
	</div>
</div>

<div class="container">
 <div class="row center">
	<div class="col-md-12">

		<h1 class="text-center short word-rotator-title">STYLES OF EGYPT HOLIDAYS AND PACKAGES </h1>
				<h1 class="word-rotator text-center slide font-weight-bold text-8 mb-3 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" style="animation-delay: 100ms;">

								<span class="word-rotator-words blue-custom" style="width: 168.563px;">
									<b class="is-hidden">Egypt Packages</b>
									<b class="is-hidden">Luxury  Holidays</b>
									<b class="is-visible">Cruise Holidays</b>
									<b class="is-visible">Dahabya Cruise Holidays</b>
									<b class="is-visible">Desert Safari</b>
									
								</span>
							</h1>
		<p class="featured lead text-center">From guided Egypt tours or family adventures to tailor-made holiday and special Egypt tours over Christmas and the New Year, we're bound to have a travel style to Egypt that's 
		perfect for you and suits All Budgets and travellers of all ages .</p>
	</div>
 </div>
</div>


@include('includes_front.programs')
@include('includes_front.blog')
@include('includes_front.table_latest_tour')
@include('includes_front.why_us')
@include('includes_front.about_us')






</div><!--main-->



@endsection
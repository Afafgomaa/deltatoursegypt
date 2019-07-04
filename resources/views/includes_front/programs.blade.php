<div class="p-5">


<div class="container">
<div class="row">


@foreach($sections as $section)
<div class="col-md-4 col-sm-6 col-xs-12">
	<div id="sub_category" class="home_special_offer">
		<div class="img_container" style="background-image:url({{$section->image}})">

		</div>
		<div class="home_special_offer_content">
			<a href="{{$section->page->slug}}">
				<div class="home_special_offer_title">
					<h4 class="light-rose">{{$section->name}} </h4>
				</div>
			</a>
			<div class="home_special_offer_description">
				<p>{!!$section->breif!!}</p>
			</div>
			<div class="read_more"><a class="light-rose" href="{{$section->page->slug}}">read more</a></div>
			
		</div>
	</div>
</div>

@endforeach

</div>
</div>

</div>














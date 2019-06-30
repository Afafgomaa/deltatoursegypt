<div class="pt-5  pb-5 bg-white">
   <div class="program_content">
        <div class="container">
		  <div class="row">
            <div class="col-md-10">
            <div class="program_content_summary">
				<div class="col-xs-12">
					<div class="program_box">
						<div id="myNavbar" class="navbar" style="width:100%;max-width:700px;background-color:white">
							<ul class="nav nav-tabs" role="tablist">
							@if (strlen($program->overview) > 0 )
							<li role="presentation" class="active"><a href="#overview" role="tab" data-toggle="tab" aria-expanded="false">Overview</a></li>
                            @endif
							
							
							@if (unserialize($program->itinerary) > 0 && unserialize($program->itinerary_heading) > 0 )
								<li role="presentation"><a href="#itinerary" role="tab" data-toggle="tab" aria-expanded="false">Itinerary</a></li>
							@endif	
							@if(count($program->Accommodations) > 0)
								<li role="presentation"><a href="#accommodation" role="tab" data-toggle="tab" aria-expanded="false">Accommodation</a></li>
							@endif
							@if(strlen($program->pricing)  > 0)
								<li role="presentation"><a href="#Pricing" role="tab" data-toggle="tab" aria-expanded="false">Pricing</a></li>
							@endif
							@if(strlen($program->price_children)  > 0)
								<li role="presentation"><a href="#PriceAndChildrenPolicy" role="tab" data-toggle="tab" aria-expanded="false">Price & Children</a></li>
							@endif
							@if(count($program->Addons)  > 0)
								<li role="presentation"><a href="#addon" role="tab" data-toggle="tab" aria-expanded="true">Add On</a></li>
							@endif
							</ul>
						</div><!--mynavbar-->
					</div><!--program_box-->
			</div><!--col-xs-12-->
			</div><!--program_content_summary-->


<div class="scroll_tab_new" data-spy="scroll" data-target="#myNavbar" data-offset="120">
@if (strlen($program->overview) > 0 )
	<div id="overview" class="scroll_pane_new">
		{!!$program->overview!!}
		
    </div><!-- croll_pane_new-->
@endif
			


      			
				  @if (unserialize($program->itinerary) > 0 && unserialize($program->itinerary_heading) > 0 )
				    @include('includes_front.intery')
				  @endif


				  @if(count($program->Accommodations) > 0)
				  @include('includes_front.accomdation')
				@endif

				@if(strlen($program->pricing)  > 0)
				
				  @include('includes_front.pricing')

				  @endif


				  @if(strlen($program->price_children)  > 0)
								<!-- PriceAndChildrenPolicy -->
					<div class="scroll_pane_new hidden-xs active">
						<div class="program_box">
							<div class="program_box_title text-blue" id="PriceAndChildrenPolicy">
								Price&Children
							</div>
								<div class="tab-pane active">
									<div class="row">
									{!!$program->price_children!!}
									</div><!-- row -->
								</div>	<!-- tab-pane -->						
							</div>  <!-- program_box -->	
						</div>  <!-- scroll_pane_new-->

								<!-- PriceAndChildrenPolicy -->
				  @endif

				  @if(count($program->Addons)  > 0)
					@include('includes_front.addon')
				  @endif
									
    </div> <!-- scroll-->



  </div> <!-- col-md-10-->

		

	
	

   </div><!-- row -->
  </div> <!-- container-->
 </div><!-- program_content-->
</div><!-- bg white -->






  

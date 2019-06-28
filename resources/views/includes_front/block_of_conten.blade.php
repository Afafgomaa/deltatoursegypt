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
											
												<li role="presentation" class="active"><a href="#overview" role="tab" data-toggle="tab" aria-expanded="false">Overview</a></li>
												<li role="presentation"><a href="#itinerary" role="tab" data-toggle="tab" aria-expanded="false">Itinerary</a></li>
												<li role="presentation"><a href="#accommodation" role="tab" data-toggle="tab" aria-expanded="false">Accommodation</a></li>
												<li role="presentation"><a href="#Pricing" role="tab" data-toggle="tab" aria-expanded="false">Pricing</a></li>
												<li role="presentation"><a href="#PriceAndChildrenPolicy" role="tab" data-toggle="tab" aria-expanded="false">Price & Children</a></li>
												<li role="presentation"><a href="#addon" role="tab" data-toggle="tab" aria-expanded="true">Add On</a>	</li>
											</ul>
									</div><!--mynavbar-->
                         </div><!--program_box-->
                    </div><!--col-xs-12-->
			</div><!--program_content_summary-->


<div class="scroll_tab_new" data-spy="scroll" data-target="#myNavbar" data-offset="120">

	<div id="overview" class="scroll_pane_new">
		{!!$program->overview!!}
		
  </div><!-- croll_pane_new-->

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


      			
                  @include('includes_front.accomdation')
				  @include('includes_front.intery')
				  @include('includes_front.pricing')
				  @include('includes_front.addon')
									
    </div> <!-- scroll-->



  </div> <!-- col-md-10-->

		

	
	

   </div><!-- row -->
  </div> <!-- container-->
 </div><!-- program_content-->
</div><!-- bg white -->






  

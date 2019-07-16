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
								<div class="tab-pane">
									<div class="row">
									<div class="home_special_offer_content ">
                       <p>{!!$program->price_children!!}</p>
                                                </div>
									
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

		

	
  <div class="col-sm-12">
		<button class="new_btn_inquire" data-toggle="modal" data-target="#formModal2">
						Send Inquery
			</button>
</div>
<div class="modal fade" id="formModal2" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true" style="display: none;">
	<div class="modal-dialog">
	  <div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="formModalLabel">Send Inquery</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			</div>
				<div class="modal-body">
				<div class="program_box_data_book_form"> 
                 <form id="bookform" method="post" action="{{route('mail')}}">
				 @csrf
				 <div class="container">
                    <div class="row">
                       <div class="col-md-12 ">
                         <div class="form-group label-floating is-empty">
                           <label>Name *</label>
                           <input name="name" type="text" id="name" value="" class="form-control" required="">
									<span class="material-input"></span>
							</div>
                        </div>
                       <div class="col-md-12">
                         <div class="form-group label-floating is-empty">
                           <label>E-mail *</label>
                                       <input name="UserEmail" value="" type="email" required="" class="form-control" id="UserEmail">
											 <span class="material-input"></span>
							</div>
						</div>
						<div class="col-md-6">
                          <label>Mobile *</label>
								<div class="form-group label-floating">
										<div id="Arrival2">
												<input name="Mobile" value="" type="number" class="form-control datepicker"
													placeholder="" required="">
										</div>
								</div>
								</div>
												 
						<div class="col-md-6">
                              <label>	Nationality *</label>
							<div class="form-group label-floating">
									<div id="Arrival2">
											<input name="Nationality" value="" type="text" class="form-control"
												 required="">
									</div>
							</div>
						</div>

												<div class="col-md-6">
                          <label>From *</label>
													<div class="form-group label-floating">
															<div id="Arrival2">
																	<input name="departure" value="" type="data" class="form-control datepicker"
																		placeholder=" dd/mm/yyy " required="">
																
															</div>
													</div>
												 </div>
												 
												 <div class="col-md-6">
                              <label>To *</label>
													<div class="form-group label-floating">
															<div id="Arrival2">
																	<input name="departure" value="" type="data" class="form-control datepicker"
																		placeholder=" dd/mm/yyy " required="">
																	
															</div>
													</div>
											 </div>
											 
											 <div class="col-md-6">
													<label> Number Of Adults </label>
													<br>
													<div class="form-group label-floating is-empty">
															<input name="" value="" type="number" class="form-control">
													</div>
											</div>
											<div class="col-md-6">
													<label> Number Of child </label>
													<br>
													<div class="form-group label-floating is-empty">
															<input name="" value="" type="number" class="form-control">
													</div>
											</div>
											<div class="col-md-6">
													<label> Number Of infants</label>
													<br>
													<div class="form-group label-floating is-empty">
															<input name="" value="" type="number" class="form-control">
													</div>
											</div>

											<div class="col-md-6">
												<label> Promo/Referral Code </label>
												<br>
												<div class="form-group label-floating is-empty">
														<input name="" value="" type="text" class="form-control">
												</div>
										</div>

										<div class="col-md-12">
												<label>  Special comments</label>
												<br>
												<div class="form-group label-floating is-empty">
													<textarea class="form-control" cols="4" rows="5"></textarea>
												</div>
										</div>
										<div class="col-md-12">
												<label>  Add on</label>
												<br>
												<div class="form-group label-floating is-empty">
													<select class="form-control">
														<option>add on 1</option>
													</select>
												</div>
										</div>
												
										</div>
                  </div>
								</form>
								</div>
							</div>
							<div class="modal-footer">
								<button type="submit" class="new_btn_inquire">Save Changes</button>
							</div>
							
						</div>
					</div>
				</div>

   </div><!-- row -->
  </div> <!-- container-->
 </div><!-- program_content-->
</div><!-- bg white -->






  

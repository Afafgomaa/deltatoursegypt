<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true" style="display: none;">
	<div class="modal-dialog">
	  <div class="modal-content">
			<div class="modal-header">
									<h4 class="modal-title" id="formModalLabel">Send Inquery</h4>
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			</div>
								<div class="modal-body">
								<div class="program_box_data_book_form"> 
                 <form id="bookform" method="post" action="">
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
                          <label>Arrival Date *</label>
													<div class="form-group label-floating">
															<div id="Arrival2">
																	<input name="departure" value="" type="text" class="form-control datepicker"
																		placeholder=" dd/mm/yyy " required="">
																	<button type="button" class="ui-datepicker-trigger">
																	<i class="fa fa-calendar-alt"></i></button>
															</div>
													</div>
												 </div>
												 
												 <div class="col-md-6">
                              <label>	Departure Date *</label>
													<div class="form-group label-floating">
															<div id="Arrival2">
																	<input name="departure" value="" type="text" class="form-control datepicker"
																		placeholder=" dd/mm/yyy " required="">
																	<button type="button" class="ui-datepicker-trigger">
																	<i class="fa fa-calendar-alt"></i></button>
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
												<label> Promo/Referral Code </label>
												<br>
												<div class="form-group label-floating is-empty">
														<input name="" value="" type="text" class="form-control">
												</div>
										</div>

										<div class="col-md-12">
												<label> Comments (Special)</label>
												<br>
												<div class="form-group label-floating is-empty">
													<textarea class="form-control" cols="4" rows="5"></textarea>
												</div>
										</div>
												
										</div>
                  </div>
								</form>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="new_btn_inquire">Save Changes</button>
							</div>
							
						</div>
					</div>
				</div>
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
							<li role="presentation" class="active"><a href="#overview" role="tab" data-toggle="tab" aria-expanded="false">includes&excludes(Overview)</a></li>
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
              @if(strlen($program->general)  > 0)
								<li role="presentation"><a href="#general" role="tab" data-toggle="tab" aria-expanded="true">General</a></li>
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
								<div class="tab-pane prices_box active p-4">
									<div class="row">
								<div>	{!!$program->price_children!!}</div>
									</div><!-- row -->
								</div>	<!-- tab-pane -->						
							</div>  <!-- program_box -->	
						</div>  <!-- scroll_pane_new-->

								<!-- PriceAndChildrenPolicy -->
				  @endif
          @if(strlen($program->general)  > 0)
								<!-- PriceAndChildrenPolicy -->
					<div class="scroll_pane_new hidden-xs active">
						<div class="program_box">
							<div class="program_box_title text-blue" id="general">
               General
							</div>
								<div class="tab-pane prices_box active p-4">
									<div class="row">
									{!!$program->general!!}
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
									<input type="hidden" name="page_name" value="{{$page}}">
									<input type="hidden" name="program_name" value="{{$program->name}}">
							</div>
                        </div>
                       <div class="col-md-12">
                         <div class="form-group label-floating is-empty">
                           <label>E-mail *</label>
                           <input name="UserEmail" value="" type="email" required="" class="form-control" id="UserEmail">
													 <span class="material-input"></span>
												 </div>
												</div>
												<div class="col-md-6 col-xs-12">
                        <label>Mobile *</label>
                        <div class="form-group label-floating">
                            <div id="Arrival2">
                                    <input name="Mobile" value="" type="number" class="form-control"
                                        placeholder="" required="">
                            </div>
                        </div>
                    </div>
                                                        
                <div class="col-md-6 col-xs-12">
                        <label>	Nationality *</label>
                    <div class="form-group label-floating">
                            <div id="Arrival2">
                            <select name="Country" class="form-control"> 
                            <option value="" disabled selected="selected">Select Country</option> 
                            <option value="United States">United States</option> 
                            <option value="United Kingdom">United Kingdom</option> 
                            <option value="Afghanistan">Afghanistan</option> 
                            <option value="Albania">Albania</option> 
                            <option value="Algeria">Algeria</option> 
                            <option value="American Samoa">American Samoa</option> 
                            <option value="Andorra">Andorra</option> 
                            <option value="Angola">Angola</option> 
                            <option value="Anguilla">Anguilla</option> 
                            <option value="Antarctica">Antarctica</option> 
                            <option value="Antigua and Barbuda">Antigua and Barbuda</option> 
                            <option value="Argentina">Argentina</option> 
                            <option value="Armenia">Armenia</option> 
                            <option value="Aruba">Aruba</option> 
                            <option value="Australia">Australia</option> 
                            <option value="Austria">Austria</option> 
                            <option value="Azerbaijan">Azerbaijan</option> 
                            <option value="Bahamas">Bahamas</option> 
                            <option value="Bahrain">Bahrain</option> 
                            <option value="Bangladesh">Bangladesh</option> 
                            <option value="Barbados">Barbados</option> 
                            <option value="Belarus">Belarus</option> 
                            <option value="Belgium">Belgium</option> 
                            <option value="Belize">Belize</option> 
                            <option value="Benin">Benin</option> 
                            <option value="Bermuda">Bermuda</option> 
                            <option value="Bhutan">Bhutan</option> 
                            <option value="Bolivia">Bolivia</option> 
                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option> 
                            <option value="Botswana">Botswana</option> 
                            <option value="Bouvet Island">Bouvet Island</option> 
                            <option value="Brazil">Brazil</option> 
                            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option> 
                            <option value="Brunei Darussalam">Brunei Darussalam</option> 
                            <option value="Bulgaria">Bulgaria</option> 
                            <option value="Burkina Faso">Burkina Faso</option> 
                            <option value="Burundi">Burundi</option> 
                            <option value="Cambodia">Cambodia</option> 
                            <option value="Cameroon">Cameroon</option> 
                            <option value="Canada">Canada</option> 
                            <option value="Cape Verde">Cape Verde</option> 
                            <option value="Cayman Islands">Cayman Islands</option> 
                            <option value="Central African Republic">Central African Republic</option> 
                            <option value="Chad">Chad</option> 
                            <option value="Chile">Chile</option> 
                            <option value="China">China</option> 
                            <option value="Christmas Island">Christmas Island</option> 
                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option> 
                            <option value="Colombia">Colombia</option> 
                            <option value="Comoros">Comoros</option> 
                            <option value="Congo">Congo</option> 
                            <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option> 
                            <option value="Cook Islands">Cook Islands</option> 
                            <option value="Costa Rica">Costa Rica</option> 
                            <option value="Cote D'ivoire">Cote D'ivoire</option> 
                            <option value="Croatia">Croatia</option> 
                            <option value="Cuba">Cuba</option> 
                            <option value="Cyprus">Cyprus</option> 
                            <option value="Czech Republic">Czech Republic</option> 
                            <option value="Denmark">Denmark</option> 
                            <option value="Djibouti">Djibouti</option> 
                            <option value="Dominica">Dominica</option> 
                            <option value="Dominican Republic">Dominican Republic</option> 
                            <option value="Ecuador">Ecuador</option> 
                            <option value="Egypt">Egypt</option> 
                            <option value="El Salvador">El Salvador</option> 
                            <option value="Equatorial Guinea">Equatorial Guinea</option> 
                            <option value="Eritrea">Eritrea</option> 
                            <option value="Estonia">Estonia</option> 
                            <option value="Ethiopia">Ethiopia</option> 
                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option> 
                            <option value="Faroe Islands">Faroe Islands</option> 
                            <option value="Fiji">Fiji</option> 
                            <option value="Finland">Finland</option> 
                            <option value="France">France</option> 
                            <option value="French Guiana">French Guiana</option> 
                            <option value="French Polynesia">French Polynesia</option> 
                            <option value="French Southern Territories">French Southern Territories</option> 
                            <option value="Gabon">Gabon</option> 
                            <option value="Gambia">Gambia</option> 
                            <option value="Georgia">Georgia</option> 
                            <option value="Germany">Germany</option> 
                            <option value="Ghana">Ghana</option> 
                            <option value="Gibraltar">Gibraltar</option> 
                            <option value="Greece">Greece</option> 
                            <option value="Greenland">Greenland</option> 
                            <option value="Grenada">Grenada</option> 
                            <option value="Guadeloupe">Guadeloupe</option> 
                            <option value="Guam">Guam</option> 
                            <option value="Guatemala">Guatemala</option> 
                            <option value="Guinea">Guinea</option> 
                            <option value="Guinea-bissau">Guinea-bissau</option> 
                            <option value="Guyana">Guyana</option> 
                            <option value="Haiti">Haiti</option> 
                            <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option> 
                            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option> 
                            <option value="Honduras">Honduras</option> 
                            <option value="Hong Kong">Hong Kong</option> 
                            <option value="Hungary">Hungary</option> 
                            <option value="Iceland">Iceland</option> 
                            <option value="India">India</option> 
                            <option value="Indonesia">Indonesia</option> 
                            <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option> 
                            <option value="Iraq">Iraq</option> 
                            <option value="Ireland">Ireland</option> 
                            <option value="Israel">Israel</option> 
                            <option value="Italy">Italy</option> 
                            <option value="Jamaica">Jamaica</option> 
                            <option value="Japan">Japan</option> 
                            <option value="Jordan">Jordan</option> 
                            <option value="Kazakhstan">Kazakhstan</option> 
                            <option value="Kenya">Kenya</option> 
                            <option value="Kiribati">Kiribati</option> 
                            <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option> 
                            <option value="Korea, Republic of">Korea, Republic of</option> 
                            <option value="Kuwait">Kuwait</option> 
                            <option value="Kyrgyzstan">Kyrgyzstan</option> 
                            <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option> 
                            <option value="Latvia">Latvia</option> 
                            <option value="Lebanon">Lebanon</option> 
                            <option value="Lesotho">Lesotho</option> 
                            <option value="Liberia">Liberia</option> 
                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option> 
                            <option value="Liechtenstein">Liechtenstein</option> 
                            <option value="Lithuania">Lithuania</option> 
                            <option value="Luxembourg">Luxembourg</option> 
                            <option value="Macao">Macao</option> 
                            <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option> 
                            <option value="Madagascar">Madagascar</option> 
                            <option value="Malawi">Malawi</option> 
                            <option value="Malaysia">Malaysia</option> 
                            <option value="Maldives">Maldives</option> 
                            <option value="Mali">Mali</option> 
                            <option value="Malta">Malta</option> 
                            <option value="Marshall Islands">Marshall Islands</option> 
                            <option value="Martinique">Martinique</option> 
                            <option value="Mauritania">Mauritania</option> 
                            <option value="Mauritius">Mauritius</option> 
                            <option value="Mayotte">Mayotte</option> 
                            <option value="Mexico">Mexico</option> 
                            <option value="Micronesia, Federated States of">Micronesia, Federated States of</option> 
                            <option value="Moldova, Republic of">Moldova, Republic of</option> 
                            <option value="Monaco">Monaco</option> 
                            <option value="Mongolia">Mongolia</option> 
                            <option value="Montserrat">Montserrat</option> 
                            <option value="Morocco">Morocco</option> 
                            <option value="Mozambique">Mozambique</option> 
                            <option value="Myanmar">Myanmar</option> 
                            <option value="Namibia">Namibia</option> 
                            <option value="Nauru">Nauru</option> 
                            <option value="Nepal">Nepal</option> 
                            <option value="Netherlands">Netherlands</option> 
                            <option value="Netherlands Antilles">Netherlands Antilles</option> 
                            <option value="New Caledonia">New Caledonia</option> 
                            <option value="New Zealand">New Zealand</option> 
                            <option value="Nicaragua">Nicaragua</option> 
                            <option value="Niger">Niger</option> 
                            <option value="Nigeria">Nigeria</option> 
                            <option value="Niue">Niue</option> 
                            <option value="Norfolk Island">Norfolk Island</option> 
                            <option value="Northern Mariana Islands">Northern Mariana Islands</option> 
                            <option value="Norway">Norway</option> 
                            <option value="Oman">Oman</option> 
                            <option value="Pakistan">Pakistan</option> 
                            <option value="Palau">Palau</option> 
                            <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option> 
                            <option value="Panama">Panama</option> 
                            <option value="Papua New Guinea">Papua New Guinea</option> 
                            <option value="Paraguay">Paraguay</option> 
                            <option value="Peru">Peru</option> 
                            <option value="Philippines">Philippines</option> 
                            <option value="Pitcairn">Pitcairn</option> 
                            <option value="Poland">Poland</option> 
                            <option value="Portugal">Portugal</option> 
                            <option value="Puerto Rico">Puerto Rico</option> 
                            <option value="Qatar">Qatar</option> 
                            <option value="Reunion">Reunion</option> 
                            <option value="Romania">Romania</option> 
                            <option value="Russian Federation">Russian Federation</option> 
                            <option value="Rwanda">Rwanda</option> 
                            <option value="Saint Helena">Saint Helena</option> 
                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
                            <option value="Saint Lucia">Saint Lucia</option> 
                            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option> 
                            <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option> 
                            <option value="Samoa">Samoa</option> 
                            <option value="San Marino">San Marino</option> 
                            <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
                            <option value="Saudi Arabia">Saudi Arabia</option> 
                            <option value="Senegal">Senegal</option> 
                            <option value="Serbia and Montenegro">Serbia and Montenegro</option> 
                            <option value="Seychelles">Seychelles</option> 
                            <option value="Sierra Leone">Sierra Leone</option> 
                            <option value="Singapore">Singapore</option> 
                            <option value="Slovakia">Slovakia</option> 
                            <option value="Slovenia">Slovenia</option> 
                            <option value="Solomon Islands">Solomon Islands</option> 
                            <option value="Somalia">Somalia</option> 
                            <option value="South Africa">South Africa</option> 
                            <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option> 
                            <option value="Spain">Spain</option> 
                            <option value="Sri Lanka">Sri Lanka</option> 
                            <option value="Sudan">Sudan</option> 
                            <option value="Suriname">Suriname</option> 
                            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option> 
                            <option value="Swaziland">Swaziland</option> 
                            <option value="Sweden">Sweden</option> 
                            <option value="Switzerland">Switzerland</option> 
                            <option value="Syrian Arab Republic">Syrian Arab Republic</option> 
                            <option value="Taiwan, Province of China">Taiwan, Province of China</option> 
                            <option value="Tajikistan">Tajikistan</option> 
                            <option value="Tanzania, United Republic of">Tanzania, United Republic of</option> 
                            <option value="Thailand">Thailand</option> 
                            <option value="Timor-leste">Timor-leste</option> 
                            <option value="Togo">Togo</option> 
                            <option value="Tokelau">Tokelau</option> 
                            <option value="Tonga">Tonga</option> 
                            <option value="Trinidad and Tobago">Trinidad and Tobago</option> 
                            <option value="Tunisia">Tunisia</option> 
                            <option value="Turkey">Turkey</option> 
                            <option value="Turkmenistan">Turkmenistan</option> 
                            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option> 
                            <option value="Tuvalu">Tuvalu</option> 
                            <option value="Uganda">Uganda</option> 
                            <option value="Ukraine">Ukraine</option> 
                            <option value="United Arab Emirates">United Arab Emirates</option> 
                            <option value="United Kingdom">United Kingdom</option> 
                            <option value="United States">United States</option> 
                            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option> 
                            <option value="Uruguay">Uruguay</option> 
                            <option value="Uzbekistan">Uzbekistan</option> 
                            <option value="Vanuatu">Vanuatu</option> 
                            <option value="Venezuela">Venezuela</option> 
                            <option value="Viet Nam">Viet Nam</option> 
                            <option value="Virgin Islands, British">Virgin Islands, British</option> 
                            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option> 
                            <option value="Wallis and Futuna">Wallis and Futuna</option> 
                            <option value="Western Sahara">Western Sahara</option> 
                            <option value="Yemen">Yemen</option> 
                            <option value="Zambia">Zambia</option> 
                            <option value="Zimbabwe">Zimbabwe</option>
                            </select>
                            </div>
                    </div>
                </div>
				<div class="col-md-6 col-xs-12">
                <label> Number Of child’s </label>
                <br>
                <div class="form-group label-floating is-empty">
                    <input name="child"  type="number" class="form-control">
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <label> Number Of infants </label>
                <br>
                <div class="form-group label-floating is-empty">
                    <input name="infants"  type="number" class="form-control">
                </div>
            </div>

												<div class="col-md-6">
                          <label>Arrival Date *</label>
													<div class="form-group label-floating">
															<div id="Arrival2">
																	<input name="departure" value="" type="date" class="form-control datepicker"
																		placeholder=" dd/mm/yyy " required="">
																	
															</div>
													</div>
												 </div>
												 
												 <div class="col-md-6">
                              <label>	Departure Date *</label>
													<div class="form-group label-floating">
															<div id="Arrival2">
																	<input name="departure" value="" type="date" class="form-control datepicker"
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
				          <div class="modal-footer">
								<button type="submit" class="new_btn_inquire">Save Changes</button>
							</div>
								</form>
								</div>
							</div>
						
							
						</div>
					</div>
				</div>

   </div><!-- row -->
  </div> <!-- container-->
 </div><!-- program_content-->
</div><!-- bg white -->






  

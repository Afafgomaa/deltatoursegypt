<div class="program_box_title text-blue" id="addon">Add On:</div>
<div class="bg-light-1">

<div  class="scroll_pane_new hidden-xs active ">
    <div class="program_box"> 
            <div class="tab-pane active">
                <div class="row">
                    <h3 class="program_box_title"> Enhance your trip with these amazing added extras and bolt-ons</h3>
                   @foreach($program->Addons as $addon)
                    <div class="col-md-12">
                        <img class="appear-animation pull-left fadeIn appear-animation-visible" src="{{$addon->image}}" width="200" height="140" data-appear-animation="fadeIn" alt="{{$addon->title}}">
                        <h4>{{$addon->title}}</h4>
                        <span class="amount text-blue">From {{$addon->price}} USD </span>
                        <p>{!!$addon->desc!!}</p>
                        <hr>
                    </div>
                    @endforeach
										<div class="col-md-12">
										<select class="form-control">
                    @foreach($program->addons as $addon)
											<option value="{{$addon->id}}">{{$addon->title}}</option>
                    @endforeach
										</select>
										
                    </div>
                 </div>
            </div>
						<div class="col-sm-12">
						<button class="new_btn_inquire" data-toggle="modal" data-target="#formModal">
								Send Inquery
						</button>
						</div>
		</div>
  </div> 
</div>

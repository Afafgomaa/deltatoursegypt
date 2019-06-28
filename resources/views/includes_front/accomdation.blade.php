<!-- accommodation -->
<div id="accommodation" class="scroll_pane_new">
    <div class="program_box">
        <div class="program_box_title text-blue" id="accommodation">Accommodation :</div>
        <div class="program_box_data">
                <div class="prices">
                <div class="prices_box">
@foreach($program->Accommodations as $accom)
																						
                        <div class="row">
                           <div class="col-md-4">
                                 <div class="new-hotel-boxes text-center">
                                    <ul class="thumbnail-gallery" data-plugin-lightbox="" data-plugin-options="{&quot;delegate&quot;: &quot;a&quot;, &quot;type&quot;: &quot;image&quot;, &quot;gallery&quot;: {&quot;enabled&quot;: true}}">
                                                <li style="margin:40px">
                                                <!--Change Url for image -->
                                                    <a title=" " href="{{$accom->thumbnail_iamge}}"><br>
                                                        <span class="thumbnail">
                                                        <!-- image size 300*200--><!--Change Url for image -->
                                                        <img style="border-radius:4px;max-width: 100%;height: auto;"src="{{$accom->small_iamge}}" width="300" height="200" alt="Barcelo hotel cairo">
                                                        </span><p class="label label-primary">click to see gallery </p>	
                                                    </a>
                                                </li>
                                                @foreach(unserialize($accom->gallery_image) as $img)
                                                <li><a title=" " href="{{$img}} "></a></li>
                                                
                                               @endforeach
                                        </ul>
                                  </div>
                            </div>
                            <div class="col-md-6 col-md-offset-2">
                                    <h4 class="mb-0">{{$accom->name}} </h4>
                                    <p class="mb-1 mt-1  text-blue font-weight-bold"> <i class="fas fa-info-circle"></i>  Our Location :{{$accom->location}} </p>
                                    <p class="text-justify"> 
                                   {!!$accom->brief!!}
                                    </p>
                                    <a href="{{$accom->tripadvisor_link}}" target="_blank">
                                            <i class="fab fa-tripadvisor"></i> tripadvisor</a>
                                            
                            </div>
                        
                       
                            <hr>
                            </div>  
                           
                          


@endforeach
</div> 
</div> 
                        </div>                
                                        
                               
                    </div>
                </div>
            </div><!-- accommodation -->
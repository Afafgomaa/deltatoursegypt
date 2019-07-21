<section class="section section-height-3  m-0 border-0">
	<div class="container">
		<div class="row align-items-center justify-content-center">
           <h2 class="m-auto p-4 text-center">SMALL GROUP TOURS</h2>
        </div>
        <div class="row">
            <table class="table table-hover table-striped table-responsive-sm bg-white">
                <thead>
                    <tr>
                        <th valign="middle">
                            <span class="lead">
                                <strong>Tour name</strong>
                            </span>
                        </th>
                        <th valign="middle">
                            <span class="lead">
                                <strong>Country</strong>
                            </span>
                        </th>
                        <th valign="middle">
                            <span class="lead">
                                <strong>Days</strong>
                            </span>
                        </th>
                        <th valign="middle">
                            <span class="lead">
                                <strong>Start Date</strong>
                            </span>
                        </th>
                        <th valign="middle">
                        <span class="lead">
                                <strong>
                                    Image
                                </strong>
                            </span>
                        </th>
                        <th valign="middle">
                            <span class="lead">
                                <strong>Offer Price</strong>
                            </span>
                        </th>
                        <th valign="middle">
                            <span class="lead">
                                <strong>
                                    
                                </strong>
                            </span>
                        </th>
                    </tr>
                </thead>
                <tbody class="repeatregion" data-numberofrecords="10">
                @foreach(App\Programs::where('small_group', 1)->get() as $smallGroup)
                    <tr data-sdate="2019-06-15" class="tourdepartures showmore-data animated fadeIn">
                        <!-- tour Name -->
                       
                        <td valign="middle" data-label="Tour name">
                            <a href="" title="Morocco on a Shoestring" class="red-lnk">{{$smallGroup->name}}</a>
                        </td>
                        <!-- Country -->
                        <td valign="middle" data-label="Tour type">
                            <a href="" title="Shoestring Tour Type" class="red-lnk">{{$smallGroup->place}}</a>
                        </td>
                        <td valign="middle" data-label="Days">{{$smallGroup->days}}</td>
                        <td valign="middle" data-label="Start Date">
                        
                        {{date('d-M-Y', strtotime($smallGroup->start_day)) }}
                        </td>
                        <td>

                            <a href="" data-fancybox="tourgallery 48474367" data-caption="Morocco on a Shoestring Map" class="tour-table-image">
                                <img alt="Morocco on a Shoestring" class="map-rounded lazy" src="{{$smallGroup->main_image}}" style="">
                            </a>
                        </td>
                        <td valign="middle" data-label="Offer Price">
                        
                        <strong style="color: #ff0000">USD${{$smallGroup->price}}</strong>
                          
                        </td>
                        <td valign="middle" data-label="Book">
                        
                       
                            <a href="{{ App\Pages::where('id', $smallGroup->page->parent_id)->first()->slug }}/{{$smallGroup->page->slug}}/{{$smallGroup->slug}} " class="btn btn-orange booknow-btn" title="View Tour">View Tour</a>
                        </td>
                    </tr>
                    @endforeach
                    @foreach(App\river_excursion::where('small_group', 1)->get() as $smallGroup)
                    <tr data-sdate="2019-06-15" class="tourdepartures showmore-data animated fadeIn">
                        <!-- tour Name -->
                       
                        <td valign="middle" data-label="Tour name">
                            <a href="" title="Morocco on a Shoestring" class="red-lnk">{{$smallGroup->name}}</a>
                        </td>
                        <!-- Country -->
                        <td valign="middle" data-label="Tour type">
                            <a href="" title="Shoestring Tour Type" class="red-lnk">{{$smallGroup->place_1}} / {{$smallGroup->place_2}}</a>
                        </td>
                        <td valign="middle" data-label="Days">{{$smallGroup->days}}</td>
                        <td valign="middle" data-label="Start Date">
                        {{date('d-M-Y', strtotime($smallGroup->start_day)) }}
                        </td>
                        <td>

                            <a href="" data-fancybox="tourgallery 48474367" data-caption="Morocco on a Shoestring Map" class="tour-table-image">
                                <img alt="Morocco on a Shoestring" class="map-rounded lazy" src="{{$smallGroup->main_image}}" style="">
                            </a>
                        </td>
                        <td valign="middle" data-label="Offer Price">
                        <strong style="color: #ff0000">USD${{$smallGroup->price}}</strong>
                            
                          
                        </td>
                        <td valign="middle" data-label="Book">
                        
                       
                            <a href="{{ App\Pages::where('id', $smallGroup->page->parent_id)->first()->slug }}/{{$smallGroup->page->slug}}/{{$smallGroup->slug}} " class="btn btn-orange booknow-btn" title="View Tour">View Tour</a>
                        </td>
                    </tr>
                    @endforeach
           </tbody>
           
    </table>
    

     </div>
	</div>
</section>
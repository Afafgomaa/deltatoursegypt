@extends('layouts.back')
@section('content')

@include('includes_back.sidebar')
<div class="right_col" role="main" style="min-height: 3787px;">
 <div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
          <h2>Programs</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
           <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Add New pogram</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('river_excursion.index') }}"> Back</a>
                    </div>
                </div>
            </div>
            @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::open(array('route' => 'river_excursion.store','files'=>true,'method'=>'POST')) !!}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Program Name:</strong>
                {!! Form::text('name', null, array('placeholder' => 'Program Name','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Program Main Image:</strong>
                {!! Form::text('main_image', null, array('placeholder' => 'Main Image Url','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3">
            <div class="form-group">
                <strong>Program Price From:</strong>
                {!! Form::number('price', null, array('placeholder' => 'Price','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3">
            <div class="form-group">
                <strong>Program Start Day:</strong>
                {!! Form::date('start_day', null, array('placeholder' => 'Start Day','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Program Small Brief:</strong>
                {!! Form::text('small_brief', null, array('placeholder' => 'Small Brief','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Program duration 1:</strong>
                {!! Form::text('day_1', null, array('placeholder' => ' duration 1','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Program duration 2:</strong>
                {!! Form::text('day_2', null, array('placeholder' => ' duration 2','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>include:</strong>
                {!! Form::textarea('include', null, array('placeholder' => 'sperate your include by comma ','class' => 'noSummernote form-control ','style'=>'height:100px')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>exclude:</strong>
                {!! Form::textarea('exclude', null, array('placeholder' => 'sperate your exclude by comma ','class' => 'noSummernote form-control ','style'=>'height:100px')) !!}
            </div>
        </div>
 
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                 {!! Form::textarea('brief', null, array('placeholder' => 'Description','class' => 'summernote form-control ','style'=>'height:100px')) !!}                
            </div>
        </div>
        

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div id="items">
                <div class="form-group"><label>Program Image Gallery:</label>
                   <input class="form-control" name="image_gallery[]" required="required" type="text" />
                </div>
            </div>
            <button type="button" class="add_field_button">Add Field</button>
         </div>
         

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>facilitis:</strong>
                 {!! Form::textarea('facilitis', null, array('placeholder' => 'sperate your faciliti by comma ','class' => ' form-control noSummernote', 'style'=>'height:100px')) !!}                
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>General:</strong>
                 {!! Form::textarea('general', null, array('placeholder' => 'general','class' => ' form-control', 'style'=>'height:100px')) !!}                
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Place 1 :</strong>
                {!! Form::text('place_1', null, array('placeholder' => ' place 1 ','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Place 2 :</strong>
                {!! Form::text('place_2', null, array('placeholder' => 'place 2 ','class' => 'form-control')) !!}
            </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12" > 
              <div id="itinerary">
                   <div class="form-group">
                        <strong>Itinerary Heading:</strong> 
                        <input type="text" class="form-control itinerary_h" name="itinerary_heading_1[]">               
                    </div>
                    <div class="form-group">
                        <strong>itinerary Body:</strong>
                        <textarea  name="itinerary_body_1[]" class="form-control" style="height:100px"></textarea>             
                    </div> 
            </div>
            <button type="button" class="add_itinerary_button">Add Itinerary duration 1</button>  
          </div>

          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong><hr style="border:1px solid #000"> </strong>
            </div>
        </div>
          

         

            <div class="col-xs-12 col-sm-12 col-md-12" > 
              <div id="itinerary_2">
                   <div class="form-group">
                        <strong>Itinerary Heading :</strong> 
                        <input type="text" class="form-control itinerary_h" name="itinerary_heading_2[]">               
                    </div>
                    <div class="form-group">
                        <strong>itinerary Body:</strong>
                        <textarea name="itinerary_body_2[]" class="form-control " style="height:100px"></textarea>             
                    </div> 
            </div>
            <button type="button" class="add_itinerary_button_2">Add Itinerary duration 2</button>  
          </div>
           
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pricing:</strong>
                 {!! Form::textarea('pricing', null, array('placeholder' => 'Pricing','class' => 'form-control noSummernote','style'=>'height:100px')) !!}                
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Related Programs:</strong>
                <select class="form-control" name="related_programs_id[]" multiple='multiple'>
                      @foreach($river_excursions as $program)
                             <option value="{{ $program->id}}">{{$program->name}}</option>
                      @endforeach 
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Page:</strong>
                <select class="form-control" name="pages_id">
                      @foreach($pages_programs as $pages_program)
                             <option value="{{ $pages_program->id}}" {{$pages_program->parent_id === 0  ? 'disabled' : ' ' }}>{{$pages_program->name}} </option>
                      @endforeach 
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Small Group:</strong>
                     <input type="checkbox" name="small_group" value="1">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    {!! Form::close() !!}



        </div>
       </div>
    </div>
  </div>
</div>

@endsection